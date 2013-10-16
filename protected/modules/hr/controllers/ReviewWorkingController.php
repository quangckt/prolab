<?php

class ReviewWorkingController extends BaseController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
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
		$sql = 'SELECT id, name as value FROM hr_review_working WHERE name LIKE :qterm ORDER BY name ASC';
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
		$model=new ReviewWorking;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReviewWorking']))
		{
			$model->attributes=$_POST['ReviewWorking'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReviewWorking']))
		{
			$model->attributes=$_POST['ReviewWorking'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
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

                $model=new ReviewWorking('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['ReviewWorking']))
		{
                        $model->attributes=$_GET['ReviewWorking'];
			
			
                   	
                       if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');
                     
                    	
                       if (!empty($model->emp_id)) $criteria->addCondition('emp_id = "'.$model->emp_id.'"');
                     
                    	
                       if (!empty($model->date)) $criteria->addCondition('date = "'.$model->date.'"');
                     
                    	
                       if (!empty($model->shift_details_id)) $criteria->addCondition('shift_details_id = "'.$model->shift_details_id.'"');
                     
                    	
                       if (!empty($model->status_working_id)) $criteria->addCondition('status_working_id = "'.$model->status_working_id.'"');
                     
                    	
                       if (!empty($model->note)) $criteria->addCondition('note = "'.$model->note.'"');
                     
                    	
                       if (!empty($model->create_uid)) $criteria->addCondition('create_uid = "'.$model->create_uid.'"');
                     
                    	
                       if (!empty($model->update_uid)) $criteria->addCondition('update_uid = "'.$model->update_uid.'"');
                     
                    			
		}
                 //$session['ReviewWorking_records']=Test::model()->findAll($criteria); 
                 $session['ReviewWorking_dataProvider']=$model->search();

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReviewWorking('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReviewWorking']))
			$model->attributes=$_GET['ReviewWorking'];

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
		$model=ReviewWorking::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='review-working-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['ReviewWorking_records']))
               {
                $model=$session['ReviewWorking_records'];
               }
               else
                 $model = ReviewWorking::model()->findAll();

		
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


                if(isset($session['ReviewWorking_dataProvider']))
                 {
                  $dataProvider=$session['ReviewWorking_dataProvider'];
                 }
                else
 		 $dataProvider = new CActiveDataProvider('ReviewWorking');


		$html = $this->renderPartial('expenseGridtoReport', array(
			'dataProvider'=>$dataProvider
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('ReviewWorking Report');
		$pdf->SetSubject('ReviewWorking Report');
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
		$pdf->Output("ReviewWorking_002.pdf", "I");
	}
    public function actionGetShiftDetails(){
        $sql ="SELECT d.id,
            CONCAT(s.`code`,':',IFNULL(d.from_correct,s.starttime),'=>',IFNULL(d.to_correct,s.endtime)) shift
            FROM hr_shift_detail d
            INNER JOIN hr_shift s ON s.id = d.shift_id
            WHERE d.emp_id = :emp_id AND d.date = STR_TO_DATE(:date,'%d-%m-%Y')
            AND d.ischanged =0";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":emp_id",$_POST['empid'], PDO::PARAM_STR);
        $command->bindParam(":date", $_POST['datecheck'], PDO::PARAM_STR);
		$result = $command->queryRow();
		echo CJSON::encode($result); exit;
    }
}
