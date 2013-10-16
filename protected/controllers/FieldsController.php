<?php

class FieldsController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';


    public function actionGetItems()
    {
        $sql = 'SELECT id, name as value FROM sys_fields WHERE name LIKE :qterm ORDER BY name ASC';
        $command = Yii::app()->db->createCommand($sql);
        $qterm = $_GET['term'] . '%';
        $command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
        $result = $command->queryAll();
        echo CJSON::encode($result);
        exit;
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array('model' => $this->loadModel($id), ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Fields;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Fields']))
        {
            $model->attributes = $_POST['Fields'];
            if ($model->save())
                $this->redirect(array('create'));
        }

        $this->render('create', array('model' => $model, ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Fields']))
        {
            $model->attributes = $_POST['Fields'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array('model' => $model, ));
    }


    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionELF()
    {
        if(!Yii::app()->getModule('user')->isAdmin()) Yii::app()->end();
        
        if (isset($_POST['fieldName']))
        {
           $_POST['label']=strip_tags($_POST['label']); 
            $sql = "SELECT id FROM sys_fields where LOWER(CONCAT(modelName,'_',fieldName))=:qterm";
            $command = Yii::app()->db->createCommand($sql);
            $qterm = $_POST['fieldName'];
            $command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
            $result = $command->queryAll();
            if ($result)
            {
                $id = $result[0]['id'];
                $model = $this->loadModel($id);
                if ($model)
                {
                    $model->attributeLabel=$_POST['label'];
                    $model->save();
                }
            } else
            {
                $model = new Fields;
                 $model->attributeLabel=$_POST['label'];
                 $f= explode('_', $_POST['fieldName'], 2);
                 $model->fieldName=$f[1];
                 $model->modelName=ucfirst($f[0]);
                 //echo $model->fieldName."=".$model->modelName;
                 $model->save();
            }
        } else
        {
            echo $this->renderPartial('_editLabelField');
        }
        Yii::app()->end();
    }


    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest)
        {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400,
                'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model = new Fields('search');
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['Fields']))
        {
            $model->attributes = $_GET['Fields'];


            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->modelName))
                $criteria->addCondition('modelName = "' . $model->modelName . '"');


            if (!empty($model->fieldName))
                $criteria->addCondition('fieldName = "' . $model->fieldName . '"');


            if (!empty($model->attributeLabel))
                $criteria->addCondition('attributeLabel = "' . $model->attributeLabel . '"');


            if (!empty($model->modified))
                $criteria->addCondition('modified = "' . $model->modified . '"');


            if (!empty($model->custom))
                $criteria->addCondition('custom = "' . $model->custom . '"');


            if (!empty($model->type))
                $criteria->addCondition('type = "' . $model->type . '"');


            if (!empty($model->required))
                $criteria->addCondition('required = "' . $model->required . '"');


            if (!empty($model->readOnly))
                $criteria->addCondition('readOnly = "' . $model->readOnly . '"');


            if (!empty($model->linkType))
                $criteria->addCondition('linkType = "' . $model->linkType . '"');


        }
        //$session['Fields_records']=Test::model()->findAll($criteria);
        $session['Fields_dataProvider'] = $model->search();

        $this->render('index', array('model' => $model, ));

    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Fields('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Fields']))
            $model->attributes = $_GET['Fields'];

        $this->render('admin', array('model' => $model, ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Fields::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'fields-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Fields_records']))
        {
            $model = $session['Fields_records'];
        } else
            $model = Fields::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport',
            array('model' => $model), true));
    }
    public function actionGeneratePdf()
    {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once ('tcpdf/tcpdf.php');
        require_once ('tcpdf/config/lang/eng.php');


        if (isset($session['Fields_dataProvider']))
        {
            $dataProvider = $session['Fields_dataProvider'];
        } else
            $dataProvider = new CActiveDataProvider('Fields');


        $html = $this->renderPartial('expenseGridtoReport', array('dataProvider' => $dataProvider), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Fields Report');
        $pdf->SetSubject('Fields Report');
        //$pdf->SetKeywords('example, text, report');
        $pdf->SetHeaderData('', 0, "Report", '');
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by " .
            Yii::app()->name, "");
        $pdf->setHeaderFont(array('helvetica', '', 8));
        $pdf->setFooterFont(array('helvetica', '', 6));
        $pdf->SetMargins(15, 18, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        $pdf->SetAutoPageBreak(true, 0);
        $pdf->SetFont('dejavusans', '', 7);
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->LastPage();
        $pdf->Output("Fields_002.pdf", "I");
    }
}
