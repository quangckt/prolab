
<?php

class TransferController extends BaseController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters1()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','GenerateExcel'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','GeneratePdf','GenerateExcel'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
    
      public function actionGetItems(){
		$sql = 'SELECT id, name as value FROM stock_transfer WHERE name LIKE :qterm ORDER BY name ASC';
		$command = Yii::app()->db->createCommand($sql);
		$qterm = $_GET['term'].'%';
		$command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
		$result = $command->queryAll();
		echo CJSON::encode($result); exit;
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Transfer;
        $lines= new TransferlineManager;
		// Uncomment the following line if AJAX validation is needed
		 //$this->performAjaxValidation($model);
		if(isset($_POST['Transfer']))
		{ 
			$model->attributes=$_POST['Transfer'];
            $lines->manage($_POST['Transferline']);
            $validate= $model->validate();
            $validate= $lines->validate()&& $validate;
            $kt = isset($_POST['saveAndSetStatus']);
            if($kt){
                $model->status =Transfer::STATUS_APPROVED;
            }
            if($validate){
			 $model->save(false);
             $lines->save($model);
             if($kt){
                InventorylogManager::saveTransferToInventorylog($model,Inventorylog::REFTYPE_TRANS);
             }
             $date =strtotime($model->date);
             Sequence::addNum('Transfer',$date);
             Yii::app()->user->setFlash('success', '<strong>'.$model->num.'</strong> Ðã lưu thành công.');
			 $this->redirect(array('create'));
            }   
		}
		$this->render('create',array(
			'model'=>$model,
            'lines'=>$lines
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{

		$model=$this->loadModel($id);
        $lines= TransferlineManager::load($model);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Transfer']))
		{
		   if($model->status==Transfer::STATUS_NEW){
            $model->attributes=$_POST['Transfer'];
            $lines->manage($_POST['Transferline']);
            $validate= $model->validate();
            $validate= $lines->validate()&& $validate ;
            if($validate){
			 $model->save(false);
             $lines->save($model);
             Yii::app()->user->setFlash('success', '<strong>'.$model->num.'</strong> Ðã luu thàng công.');
			 $this->redirect(array('index'));
            }  
          } else Yii::app()->user->setFlash('error', '<strong>'.$model->num.'</strong> [ '.$model->displayStatus.' ] nên không sửa được.');  
		}

		$this->render('update',array(
			'model'=>$model,
            'lines'=>$lines
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			// we only allow deletion via POST request
			$m=$this->loadModel($id);
            if($m->status==Transfer::STATUS_NEW || $m->status==Transfer::STATUS_CANCEL){
            $m->delete();
            $inv = Inventorylog::model()->find('ref_id=:refid And reftype=:reftype',array(':refid'=>$id,':reftype'=>Inventorylog::REFTYPE_TRANS));
            if($inv)$inv->delete();
            }
            else  throw new CHttpException(404,'Phiếu này [ '.$m->displayStatus.' ] nên không xóa được.');

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $session=new CHttpSession;
            $session->open();		
            $criteria = new CDbCriteria();            

                $model=new Transfer('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Transfer']))
		{
                        $model->attributes=$_GET['Transfer'];
                       if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');
                       if (!empty($model->num)) $criteria->addCondition('num = "'.$model->num.'"');
                       if (!empty($model->date)) $criteria->addCondition('date = "'.$model->date.'"');
                     
                    	
                       if (!empty($model->description)) $criteria->addCondition('description = "'.$model->description.'"');
                     
                    	
                       if (!empty($model->status)) $criteria->addCondition('status = "'.$model->status.'"');
                     
                    	
                       if (!empty($model->create_uid)) $criteria->addCondition('create_uid = "'.$model->create_uid.'"');
                     
                    	
                       if (!empty($model->create_date)) $criteria->addCondition('create_date = "'.$model->create_date.'"');
                     
                    	
                       if (!empty($model->update_uid)) $criteria->addCondition('update_uid = "'.$model->update_uid.'"');
                     
                    	
                       if (!empty($model->update_date)) $criteria->addCondition('update_date = "'.$model->update_date.'"');
                     
                    	
                       if (!empty($model->branch_id)) $criteria->addCondition('branch_id = "'.$model->branch_id.'"');
                     
                    			
		}
                 //$session['Transfer_records']=Test::model()->findAll($criteria); 
                 $session['Transfer_dataProvider']=$model->search();
                $this->render('index',array('model'=>$model,));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Transfer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Transfer']))
			$model->attributes=$_GET['Transfer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Transfer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

 
 private function checkParams(){
        if(!isset($_POST['selectedItems']) && !isset($_POST['status'])) {
	       echo 'selectedItems and model are incorred! '; 
           exit();
       };
    }


  public function actionUpdateStatus()
  {
    $this->checkParams();
    $validate=true;
    $status= $_POST['status'];
    $selectedItems= $_POST['selectedItems'];
    if(isset($selectedItems))
    sort($selectedItems);
     foreach( $selectedItems as $id){
        if($status==Transfer::STATUS_APPROVED)
             $validate &= $this->transfer_approved($id);
        if($status==Transfer::STATUS_NEW)
             $validate &= $this->transfer_new($id);
        if($status==Transfer::STATUS_LOCKED)
             $validate &= $this->transfer_lock($id);             
       }        
       if($validate)            
        echo 'ok';
      exit();
   }
   

 private function transfer_lock($id)
	{
        $model=Transfer::model()->findByPk($id);
        if($model->status==Transfer::STATUS_LOCKED) return false;
        if($model->status==Transfer::STATUS_NEW) 
        {
            echo $model->num." => Chưa chuyển kho";
            return false;    
        }
        $model->status=$model::STATUS_LOCKED;
        return $model->save(false);
     }
       
   private function transfer_new($id)
	{
        $model=Transfer::model()->findByPk($id);
        if($model->status==Transfer::STATUS_LOCKED){
            echo $model->num." ==> Đã khóa";
            return false;
          }
        $model->status=$model::STATUS_NEW;
        try {
            $inv = Inventorylog::model()->find('ref_id=:refid And reftype=:reftype',
                array(':refid'=>$model->id,':reftype'=>Inventorylog::REFTYPE_TRANS));
            if($inv)$inv->delete();
            return $model->save(false);
        } catch(CException $e){
            echo print_r($e,true);
            return false;         
        }
     }    
    	
	private function transfer_approved($id)
	{
    	   
           try {
               $model=Transfer::model()->findByPk($id);

              if($model->status==Transfer::STATUS_CANCEL){
                echo $model->num . " => Đã bị hủy ";
                return false;
              }
               
               if($model->status==Transfer::STATUS_APPROVED || $model->status==Transfer::STATUS_LOCKED) { 
                echo $model->num ." => Đã chuyển kho ";
                return false; 
                }
               $validate = InventorylogManager::saveTransferToInventorylog($model,Inventorylog::REFTYPE_TRANS);
               if($validate){
                $model->status = $model::STATUS_APPROVED;
                $model->save(false);
               }  
               return  $validate;
            } catch(CException $e){
               throw new CException(Yii::t('yii','transfer_approved: {error} ',array('{error}'=> $e->getMessage())));
                return false;       
           }
     } 
     


	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='transfer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Transfer_records']))
               {
                $model=$session['Transfer_records'];
               }
               else
                 $model = Transfer::model()->findAll();

		
		Yii::app()->request->sendFile(date('YmdHis').'.xls',
			$this->renderPartial('excelReport', array(
				'model'=>$model
			), true)
		);
	}
        public function actionGeneratePdf() 
	{
		Yii::import('application.extensions.giiplus.bootstrap.*');
		require_once('tcpdf/tcpdf.php');
		require_once('tcpdf/config/lang/eng.php');


                if(isset($session['Transfer_dataProvider']))
                 {
                  $dataProvider=$session['Transfer_dataProvider'];
                 }
                else
 		 $dataProvider = new CActiveDataProvider('Transfer');


		$html = $this->renderPartial('expenseGridtoReport', array(
			'dataProvider'=>$dataProvider
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Transfer Report');
		$pdf->SetSubject('Transfer Report');
		//$pdf->SetKeywords('example, text, report');
		$pdf->SetHeaderData('', 0, "Report", '');
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by ".Yii::app()->name, "");
		$pdf->setHeaderFont(Array('helvetica', '', 8));
		$pdf->setFooterFont(Array('helvetica', '', 6));
		$pdf->SetMargins(15, 18, 15);
		$pdf->SetHeaderMargin(5);
		$pdf->SetFooterMargin(10);
		$pdf->SetAutoPageBreak(TRUE, 0);
		$pdf->SetFont('dejavusans', '', 7);
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->LastPage();
		$pdf->Output("Transfer_002.pdf", "I");
	}
    public function actionGetCountOfMonth(){
        $date = date('Y-m',strtotime($_POST['date']));
        $sql ="select num from inv_transfer WHERE id =(SELECT MAX(id) from inv_transfer WHERE DATE_FORMAT(date,'%Y-%m')= :date)";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":date", date('Y-m',strtotime($date)), PDO::PARAM_STR);
        $result = $command->queryAll();
        if($result==null){
            $number = sprintf('%1$03d',1);
        }else{
            $n = explode('-',$result[0]['num']);
            $number = sprintf('%1$03d',$n[1]+1);    
        }
        echo CJSON::encode(array('count'=>$number));
        exit;
    }
}

