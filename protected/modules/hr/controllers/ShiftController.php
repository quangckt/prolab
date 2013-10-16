<?php

class ShiftController extends BaseController
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
	public function accessRules1()
	{
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
		$sql = 'SELECT id, name as value FROM hr_shift WHERE name LIKE :qterm ORDER BY name ASC';
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
		$model=new Shift;
        if(isset($_GET['plan_id'])){
            $plan = ShiftPlan::model()->findByPk($_GET['plan_id']);
            if($plan->status==0){
                $model->shift_plan_id=$_GET['plan_id'];
                if(isset($_POST['Shift']))
        		{
        		    if(isset($_POST['choose_color'])){
        		      $model->colorEvent=$_POST['choose_color'];
        		    }  
        			$model->attributes=$_POST['Shift'];
        			$model->save();
        		}
        
        		$this->render('create',array(
        			'model'=>$model,
        		));    
            }else{
                $this->render('error_statusPlan',array(
        			'model'=>$model,
        		));    
            }
                    
        }
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        if($model->shiftPlan->status==0){
            if(isset($_POST['Shift']))
    		{
    		    if(isset($_POST['choose_color'])){
        		      $model->colorEvent=$_POST['choose_color'];
    		    }    
    			$model->attributes=$_POST['Shift'];
    			$model->save();
    		}
    		$this->render('update',array(
    			'model'=>$model,
    		));
        }else{
            $this->render('error_statusPlan',array(
		       'model'=>$model,
  		    ));
        }
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
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
			$this->loadModel($id)->delete();

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

                $model=new Shift('search');
                $model->unsetAttributes();  // clear any default values
                if(isset($_GET['plan_id'])){
		                $model->shift_plan_id =$_GET['plan_id'];
                        if (!empty($model->shift_plan_id)) $criteria->addCondition('shift_plan_id = "'.$model->shift_plan_id.'"');  
                        if(isset($_GET['Shift']))
		                {
                            $model->attributes=$_GET['Shift'];
    			
                           if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');
                         
                        	
                           if (!empty($model->code)) $criteria->addCondition('code = "'.$model->code.'"');
                         
                        	
                           if (!empty($model->name)) $criteria->addCondition('name = "'.$model->name.'"');
                         
     	                   
                           if (!empty($model->isovernight)) $criteria->addCondition('isovernight = "'.$model->isovernight.'"');
                         
                        	
                           if (!empty($model->starttime)) $criteria->addCondition('starttime = "'.$model->starttime.'"');
                         
                        	
                           if (!empty($model->endtime)) $criteria->addCondition('endtime = "'.$model->endtime.'"');
                         
                        	
                           if (!empty($model->note)) $criteria->addCondition('note = "'.$model->note.'"');
                         
                        	
                           if (!empty($model->status)) $criteria->addCondition('status = "'.$model->status.'"');
                           			
    		          }
                 }else{
                    if(isset($_GET['Shift']))
		                {
                            $model->attributes=$_GET['Shift'];
    			
                           if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');
                         
                        	
                           if (!empty($model->code)) $criteria->addCondition('code = "'.$model->code.'"');
                         
                        	
                           if (!empty($model->name)) $criteria->addCondition('name = "'.$model->name.'"');
                         
                        	
                           if (!empty($model->isovernight)) $criteria->addCondition('isovernight = "'.$model->isovernight.'"');
                         
                        	
                           if (!empty($model->starttime)) $criteria->addCondition('starttime = "'.$model->starttime.'"');
                         
                        	
                           if (!empty($model->endtime)) $criteria->addCondition('endtime = "'.$model->endtime.'"');
                         
                        	
                           if (!empty($model->note)) $criteria->addCondition('note = "'.$model->note.'"');
                         
                        	
                           if (!empty($model->status)) $criteria->addCondition('status = "'.$model->status.'"');
                           			
    		          }
                 } 
                 //$session['Shift_records']=Test::model()->findAll($criteria); 
                 $session['Shift_dataProvider']=$model->search();

                $this->render('index',array(
			'model'=>$model,
            'plan_id'=>$_GET['splan_id'],
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Shift('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Shift']))
			$model->attributes=$_GET['Shift'];

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
		$model=Shift::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='shift-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Shift_records']))
               {
                $model=$session['Shift_records'];
               }
               else
                 $model = Shift::model()->findAll();

		
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


                if(isset($session['Shift_dataProvider']))
                 {
                  $dataProvider=$session['Shift_dataProvider'];
                 }
                else
 		 $dataProvider = new CActiveDataProvider('Shift');


		$html = $this->renderPartial('expenseGridtoReport', array(
			'dataProvider'=>$dataProvider
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Shift Report');
		$pdf->SetSubject('Shift Report');
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
		$pdf->Output("Shift_002.pdf", "I");
	}
    public function actionCopyShift($plan_id){
        $plan= ShiftPlan::model()->findByPk($plan_id);
        $planLast =ShiftPlan::model()->findBySql('select * from hr_shift_plan WHERE department_id =:department_id AND id !=:id ORDER BY startdate DESC LIMIT 1',
        array(
            ':department_id'=>$plan->department_id,
            'id'=>$plan->id,
        ));
        if($planLast==null){
            
        }
        //$model = Shift::model()->findAllBySql('',);
        $this->actionIndex($plan_id);
    }
}
