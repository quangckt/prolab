<?php

class SequenceController extends BaseController
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
		$sql = 'SELECT id, name as value FROM sys_sequence WHERE name LIKE :qterm ORDER BY name ASC';
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
		$model=new Sequence;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Sequence']))
		{
			$model->attributes=$_POST['Sequence'];
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

		if(isset($_POST['Sequence']))
		{
			$model->attributes=$_POST['Sequence'];
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

                $model=new Sequence('search');
                $model->unsetAttributes();  // clear any default values

                if(isset($_GET['Sequence']))
		{
                        $model->attributes=$_GET['Sequence'];
			
			
                   	
                       if (!empty($model->id)) $criteria->addCondition('id = "'.$model->id.'"');
                     
                    	
                       if (!empty($model->code)) $criteria->addCondition('code = "'.$model->code.'"');
                     
                    	
                       if (!empty($model->name)) $criteria->addCondition('name = "'.$model->name.'"');
                     
                    	
                       if (!empty($model->number_next)) $criteria->addCondition('number_next = "'.$model->number_next.'"');
                     
                    	
                       if (!empty($model->prefix)) $criteria->addCondition('prefix = "'.$model->prefix.'"');
                     
                    	
                       if (!empty($model->suffix)) $criteria->addCondition('suffix = "'.$model->suffix.'"');
                     
                    	
                       if (!empty($model->active)) $criteria->addCondition('active = "'.$model->active.'"');
                     
                    	
                       if (!empty($model->branch_id)) $criteria->addCondition('branch_id = "'.$model->branch_id.'"');
                     
                    	
                       if (!empty($model->date_from)) $criteria->addCondition('date_from = "'.$model->date_from.'"');
                     
                    	
                       if (!empty($model->date_to)) $criteria->addCondition('date_to = "'.$model->date_to.'"');
                     
                    			
		}
                 //$session['Sequence_records']=Test::model()->findAll($criteria); 
                 $session['Sequence_dataProvider']=$model->search();

                $this->render('index',array(
			'model'=>$model,
		));

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Sequence('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Sequence']))
			$model->attributes=$_GET['Sequence'];

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
		$model=Sequence::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='sequence-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        public function actionGenerateExcel()
	{
            $session=new CHttpSession;
            $session->open();		
            
             if(isset($session['Sequence_records']))
               {
                $model=$session['Sequence_records'];
               }
               else
                 $model = Sequence::model()->findAll();

		
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


                if(isset($session['Sequence_dataProvider']))
                 {
                  $dataProvider=$session['Sequence_dataProvider'];
                 }
                else
 		 $dataProvider = new CActiveDataProvider('Sequence');


		$html = $this->renderPartial('expenseGridtoReport', array(
			'dataProvider'=>$dataProvider
		), true);
		
		//die($html);
		
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Sequence Report');
		$pdf->SetSubject('Sequence Report');
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
		$pdf->Output("Sequence_002.pdf", "I");
	}
    public function actionAutoSetId(){
        $error =0;
        $date =strtotime($_POST['date']);
        $model = Sequence::model()->find('code =:code and date_from <=:date_from and date_to > :date_to',array(':code'=>$_POST['code'],':date_from'=>$date,':date_to'=>$date));
        if($model!=null){
            $model ->number_next = sprintf('%1$03d',$model->number_next);
            echo CJSON::encode(array('error'=>$error,'model'=>$model));
            exit;
        }else{
            $date_from = strtotime(date('Y-m',strtotime($_POST['date'])));
            $date_to = strtotime(date('Y-m-d',$date_from).'+1 month');
            $new_model = new Sequence();
            $new_model->code =$_POST['code'];
            $new_model->date_from =$date_from;
            $new_model->date_to =$date_to;
            $new_model->number_next =1;
            if($_POST['code']=='Warehousein'){
                $new_model->prefix = 'NVT';
            }
            if($_POST['code']=='Warehouseout'){
                $new_model->prefix = 'XVT';
            }
            if($_POST['code']=='Transfer'){
                $new_model->prefix = 'CVT';
            }
            $new_model->branch_id =1;
            $new_model->save(false);
            $new_model ->number_next = sprintf('%1$03d',$new_model->number_next);
            echo CJSON::encode(array('error'=>$error,'model'=>$new_model));
            exit;
        }
    }
}
