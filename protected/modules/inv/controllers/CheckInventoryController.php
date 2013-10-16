<?php

class CheckInventoryController extends BaseController
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
	public function accessRules1(){
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
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
		$sql = 'SELECT id, name as value FROM inv_check_inventory WHERE name LIKE :qterm ORDER BY name ASC';
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
	    $lines = new CheckInventoryLineManager();
		$model=new CheckInventory;

		if(isset($_POST['CheckInventory'])){
		  $model->attributes=$_POST['CheckInventory'];   
            $lines->manage($_POST['CheckInventorydetails']);
            $validate= $model->validate();
            $validate= $lines->validate()&& $validate;
            $kt = isset($_POST['saveAndSetStatus']);
            if($kt){
                $model->status = CheckInventory::STATUS_APPROVED;
            }
            if($validate){
                    $model->save(false);
                    $lines->save($model);
                    //if($kt) InventorylogManager::saveCheckToInventorylog($model,Inventorylog::REFTYPE_CHECK);

                    Yii::app()->user->setFlash('success', '<strong>'.$model->num.'</strong> Ðã lưu thành công.');
                    $this->redirect(array('index'));  
		      }else{
		          Yii::app()->user->setFlash('error', "Bị lỗi ...");
		      }
        }     
        $this->render('create',array(
		   	 'model'=>$model,
             'lines'=>$lines,
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
        $lines= CheckInventoryLineManager::load($model);
		if(isset($_POST['CheckInventory']))
		{
			$model->attributes=$_POST['CheckInventory'];
            $lines->manage($_POST['CheckInventorydetails']);
            $validate= $model->validate();
            $validate= $lines->validate()&& $validate;
            if($validate){
                $transaction = Yii::app()->db->beginTransaction();
                try{
                    $model->save(false);
                    $lines->save($model);
                    $transaction->commit();
                    $this->redirect(array('index'));
                }catch (Exception $e){
                    $transaction->rollBack();
                    Yii::app()->user->setFlash('error', "luu du lieu sai");
                    $this->refresh();
                }     
            }
        }
		$this->render('update',array(
			'model'=>$model,
            'lines'=>$lines,
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
          $m=$this->loadModel($id);
          
          if(isset($m) && ($m->status==$m::STATUS_NEW || $m->status==$m::STATUS_CANCEL)){
            InventorylogManager::deleteInventorylog($m);
            $m->delete();
          }
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

                $model=new CheckInventory('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['CheckInventory']))
		{
                        $model->attributes=$_GET['CheckInventory'];
			
			
                   	
                       if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');
                     
                    	
                       if (!empty($model->num)) $criteria->addCondition('num = "'.$model->num.'"');
                     
                    	
                       if (!empty($model->date)) $criteria->addCondition('date = "'.$model->date.'"');
                     
                    	
                       if (!empty($model->wh_id)) $criteria->addCondition('wh_id = "'.$model->wh_id.'"');
                     
                    	
                       if (!empty($model->user_create)) $criteria->addCondition('user_create = "'.$model->user_create.'"');
                     
                    	
                       if (!empty($model->note)) $criteria->addCondition('note = "'.$model->note.'"');
                     
                    			
		}
                 //$session['CheckInventory_records']=Test::model()->findAll($criteria); 
                 $session['CheckInventory_dataProvider']=$model->search();

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new CheckInventory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['CheckInventory']))
			$model->attributes=$_GET['CheckInventory'];

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
		$model=CheckInventory::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='check-inventory-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
 
 public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
             if(isset($session['CheckInventory_records']))
               {
                $model=$session['CheckInventory_records'];
               }
               else
                 $model = CheckInventory::model()->findAll();
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


                if(isset($session['CheckInventory_dataProvider']))
                 {
                  $dataProvider=$session['CheckInventory_dataProvider'];
                 }
                else
 		 $dataProvider = new CActiveDataProvider('CheckInventory');


		$html = $this->renderPartial('expenseGridtoReport', array(
			'dataProvider'=>$dataProvider
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('CheckInventory Report');
		$pdf->SetSubject('CheckInventory Report');
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
		$pdf->Output("CheckInventory_002.pdf", "I");
	}
    public function actionGetCountOfMonth(){
        
        $date = date('Y-m',strtotime($_POST['date']));
        $sql ="select num from inv_check_inventory WHERE id =(SELECT MAX(id) from inv_check_inventory WHERE DATE_FORMAT(date,'%Y-%m')= :date)";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":date", $date, PDO::PARAM_STR);
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
    public function actionUpdatestatus(){
        $this->checkParams();
        $validate =true;
        $status = $_POST['status'];
        $selectedItems= $_POST['selectedItems'];
        if(isset($selectedItems))
        sort($selectedItems);
         foreach( $selectedItems as $id){
            
            switch ($status){ 
            	case CheckInventory::STATUS_APPROVED :
                    $validate &= $this->check_approved($id);
            	break;
            
            	case CheckInventory::STATUS_CANCEL:
                 $validate &= $this->check_cancel($id);
            	break;
                   
            	case CheckInventory::STATUS_LOCKED :
                  $validate &= $this->check_lock($id);       
            	break;
            
            }
          }   
            
           
           if($validate)            
            echo 'ok';
          exit();
    }
    
 private function check_lock($id)
	{
        $model=CheckInventory::model()->findByPk($id);
        if($model->status==$model::STATUS_LOCKED) return false;
        if($model->status==$model::STATUS_NEW) 
        {
            echo $model->num." => Chưa duyệt";
            return false;    
        }
        $model->status=$model::STATUS_LOCKED;
        return $model->save(false);
     }
     
    private function check_cancel($id)
    {
        $model = CheckInventory::model()->findByPk($id);
        if ($model->status == CheckInventory::STATUS_LOCKED)
        {
            echo $model->num . " ==> Đã khóa";
            return false;
        }
        if ($model->status == CheckInventory::STATUS_NEW)
        {
            echo $model->num . " => Chưa duyệt \n";
            return false;
        }
        try
        {
            $model->status = CheckInventory::STATUS_CANCEL;
            $validate=InventorylogManager::deleteInventorylog($model);
          
            if ($validate){
                return $model->save(false);
                }
        }
        catch (CException $e)
        {
            echo print_r($e, true);
            return false;
        }
        return false;
    }

  
    
   private function  check_approved($id){
        try {
             $model=CheckInventory::model()->findByPk($id);
             /*
              if($model->status==CheckInventory::STATUS_CANCEL){
                echo $model->num . " => Đã bị hủy ";
                return false;
              }
              */
               if($model->status==CheckInventory::STATUS_APPROVED || $model->status==CheckInventory::STATUS_LOCKED) { 
                echo $model->num ." => Đã Duyệt ";
                return false; 
                }
               $model->status = $model::STATUS_APPROVED;
               return $model->save(false); 
                /*
               $validate = InventorylogManager::saveCheckToInventorylog($model,Inventorylog::REFTYPE_CHECK);
               if($validate){
                $model->status = $model::STATUS_APPROVED;
                $model->save(false);
               }  
               return  $validate;
               */
            } catch(CException $e){
               throw new CException(Yii::t('yii','transfer_approved: {error} ',array('{error}'=> $e->getMessage())));
                return false;       
           }
    }
    
 private function checkParams(){
        if(!isset($_POST['selectedItems']) && !isset($_POST['status'])) {
	       echo 'selectedItems and model are incorred! '; 
           exit();
       };
    }
}
