<?php

class ReportStockController extends BaseController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * Lists all models.
	 */
    private function getData($search){
           $session=new CHttpSession;
           $session->open();		
                  $criteria = new CDbCriteria();            
                  $model=new Inventorylogdetail('search');
                    $model->unsetAttributes();  // clear any default values
                    if(isset($_GET['Search']))
                		{
                         $search->setAttributes($_GET['Search'],false);
                	}
           $session['search_stock']=serialize($search);     
           $dataProvider= $model->searchAdv($search);
           return $dataProvider;
    }
 	public function actionIndex()
	{
	   
    
       
	   $session=new CHttpSession;
       $session->open();
       $search = new Search();
       $search->pid=-1;
       $search->fdate = date('d-m-Y',strtotime(date("Y-m-d", time()) . "-1 month"));  
       $search->tdate= date('d-m-Y',time());
       $dataProvider=null;

    if(isset($_GET['Search']))  {
    $search->setAttributes($_GET['Search'],false);
    $params=array(
                'stimulsoft_client_key'=>'ViewerFx',
                'stimulsoft_report_key'=>'stock.mrt',
                'pid'=>$search->pid,
                'fdate'=> $search->fdate,
                'tdate'=>$search->tdate,
                );
    $route='/reporting/report';
    $url=$this->createUrl($route,$params);
    $this->redirect($url);
    }
      if(isset($_GET['export']) ){
        
        if(isset($session['search_stock']))
         $search = unserialize($session['search_stock']);
          $dataProvider=$this->getData($search);
          $html = $this->renderPartial('_view', array('dataProvider'=>$dataProvider,'search'=>$search), true);
            if($_GET['export']==='excel'){
             Yii::app()->request->sendFile('nhap_xuat_ton_'.date('YmdHis').'.xls',$html);
            }
            if($_GET['export']==='pdf'){
        		Yii::import('application.extensions.giiplus.bootstrap.*');
        		require_once('tcpdf/tcpdf.php');
        		require_once('tcpdf/config/lang/eng.php');
                $PDF_HEADER_LOGO='';
                $PDF_HEADER_LOGO_WIDTH='';
        		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        		$pdf->SetCreator(PDF_CREATOR);
        		$pdf->SetAuthor(Yii::app()->name);
        		//$pdf->SetTitle('Chi ti?t nh?p hàng');
        		//$pdf->SetSubject('Chi ti?t nh?p hàng');
        		//$pdf->SetHeaderData('', 0, "Th? kho", '');
        		$pdf->SetHeaderData($PDF_HEADER_LOGO, $PDF_HEADER_LOGO_WIDTH,'Thẻ kho', "<h1>ssa asd sfsafsa</h1>");
        		$pdf->setHeaderFont(Array('dejavusans', '', 8));
        		$pdf->setFooterFont(Array('dejavusans', '', 6));
        		$pdf->SetMargins(15, 5, 15);
        		$pdf->SetHeaderMargin(5);
                $pdf->setPrintHeader(false);
        		$pdf->SetFooterMargin(10);
        		$pdf->SetAutoPageBreak(TRUE, 0);
                $pdf->SetFont('dejavusans', '', 7);
                //$pdf->SetFont('helvetica', '', 12);
                $pdf->setPageOrientation("p");//p,l
        		$pdf->AddPage();
        		$pdf->writeHTML($html, true, false, true, false, '');
        		$pdf->LastPage();
                ob_end_clean();
        		$pdf->Output('the_kho_'.date('YmdHis').'pdf', "I");
            }
        }
        else {
        if($dataProvider==null)  $dataProvider=$this->getData($search);
        $this->render('index',array('dataProvider'=>$dataProvider, 'search'=>$search));
        }               
     }
}