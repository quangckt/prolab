<?php

class EmployeeController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters1()
    {
        return array('accessControl', // perform access control for CRUD operations
        );
    }


    public function actionGetItems()
    {
        $sql = 'SELECT id, name as value FROM hr_employee WHERE name LIKE :qterm ORDER BY name ASC';
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
        $this->render('view', array('model' => $this->loadModel($id),));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Employee;
        $lines_relation = new RelationLinesManager;
        $lines_history = new HistoryLinesManager;
        $lines_education = new EducationLinesManager;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Employee'])) {
            try {
                $uploadedFile = CUploadedFile::getInstance($model, 'image');
                $model->attributes = $_POST['Employee'];
                $model->description_layoff = $_POST['Employee']['description_layoff'];
                $model->description = $_POST['Employee']['description'];
                $model->date_layoff = $_POST['Employee']['date_layoff'];
                $lines_relation->manage($_POST['EmpRelation']);
                $lines_history->manage($_POST['History']);
                $lines_education->manage($_POST['Education']);
                $validate = $model->validate();
                $validate = $lines_relation->validate() && $validate;
                $validate = $lines_history->validate() && $validate;
                $validate = $lines_education->validate() && $validate;
                if ($validate) {
                    if ($model->save(false)) {
                        if (!empty($uploadedFile)) {
                            $fileName = "{$model->id}.jpg";
                            $model->image = $fileName;
                            $model->save(false);
                            $uploadedFile->saveAs(Yii::app()->basePath . '/../images/' . $fileName);
                            $image = Yii::app()->image->load(Yii::app()->basePath . '/../images/' . $fileName);
                            $image->resize(57, 85, Image::HEIGHT)->rotate(0)->quality(75)->sharpen(20);
                            $image->save(Yii::app()->basePath . '/../images/' . $fileName);
                        }
                        Yii::app()->user->setFlash('success', '<strong>' . $model->code . '</strong> Ðã luu thành công.');
                    } else {
                        Yii::app()->user->setFlash('error', '<strong>' . $model->code .
                            '</strong> Lưu thất bại.');
                    }
                    $lines_relation->save($model);
                    $lines_history->save($model);
                    $lines_education->save($model);
                    $this->redirect(array('index'));
                }
            }
            catch (CException $e) {
                throw $e;

            }
        }

        $this->render('create', array(
            'model' => $model,
            'lines_relation' => $lines_relation,
            'lines_history' => $lines_history,
            'lines_education' => $lines_education,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $rights = Rights::getAssignedRoles();
        $checkRole = isset($rights['nhanvien']) ? true : false;
        $model = $this->loadModel($id);
        $lines_relation = RelationLinesManager::load($model);
        $lines_history = HistoryLinesManager::load($model);
        $lines_education = EducationLinesManager::load($model);
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Employee'])) {
            try {
                $_POST['Employee']['image'] = $model->image;
                $model->attributes = $_POST['Employee'];
                $model->description = $_POST['Employee']['description'];
                if ($checkRole == false) {
                    $model->description_layoff = $_POST['Employee']['description_layoff'];
                    $model->date_layoff = $_POST['Employee']['date_layoff'];
                }
                $lines_relation->manage($_POST['EmpRelation']);
                $lines_history->manage($_POST['History']);
                $lines_education->manage($_POST['Education']);
                $uploadedFile = CUploadedFile::getInstance($model, 'image');
                $validate = $model->validate();
                $validate = $lines_relation->validate() && $validate;
                $validate = $lines_history->validate() && $validate;
                $validate = $lines_education->validate() && $validate;
                $fileName = "{$model->id}.jpg";
                $model->image = $fileName;
                if ($validate) {
                    if ($model->save(false)) {
                        if (!empty($uploadedFile)) // check if uploaded file is set or not
                        {
                            $uploadedFile->saveAs(Yii::app()->basePath . '/../images/' . $model->image);
                            $image = Yii::app()->image->load(Yii::app()->basePath . '/../images/' . $model->
                                image);
                            $image->resize(57, 85, Image::HEIGHT)->rotate(0)->quality(75)->sharpen(20);
                            $image->save(Yii::app()->basePath . '/../images/' . $model->image);
                        }
                        Yii::app()->user->setFlash('success', '<strong>' . $model->code .
                            '</strong> Ðã luu thàng công.');
                    } else {
                        Yii::app()->user->setFlash('error', '<strong>' . $model->code .
                            '</strong> Lưu thất bại.');
                    }
                    $lines_relation->save($model);
                    $lines_history->save($model);
                    $lines_education->save($model);
                    if ($checkRole == true)
                        $this->redirect(array('update', 'id' => $id));
                    else
                        $this->redirect(array('index'));
                }
            }
            catch (CException $e) {
                throw $e;
            }
        }
        $this->render('update', array(
            'model' => $model,
            'lines_relation' => $lines_relation,
            'lines_history' => $lines_history,
            'lines_education' => $lines_education,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
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

        $model = new Employee('search');
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['Employee'])) {
            $model->attributes = $_GET['Employee'];


            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->code))
                $criteria->addCondition('code = "' . $model->code . '"');


            if (!empty($model->number))
                $criteria->addCondition('number = "' . $model->number . '"');


            if (!empty($model->firstname))
                $criteria->addCondition('firstname = "' . $model->firstname . '"');


            if (!empty($model->middlename))
                $criteria->addCondition('middlename = "' . $model->middlename . '"');


            if (!empty($model->lastname))
                $criteria->addCondition('lastname = "' . $model->lastname . '"');


            if (!empty($model->birthday))
                $criteria->addCondition('birthday = "' . $model->birthday . '"');


            if (!empty($model->plate_of_birth))
                $criteria->addCondition('plate_of_birth = "' . $model->plate_of_birth . '"');


            if (!empty($model->home_phone))
                $criteria->addCondition('home_phone = "' . $model->home_phone . '"');


            if (!empty($model->mobile_phone))
                $criteria->addCondition('mobile_phone = "' . $model->mobile_phone . '"');


            if (!empty($model->sex))
                $criteria->addCondition('sex = "' . $model->sex . '"');


            if (!empty($model->email))
                $criteria->addCondition('email = "' . $model->email . '"');


            if (!empty($model->identification))
                $criteria->addCondition('identification = "' . $model->identification . '"');


            if (!empty($model->identification_plate))
                $criteria->addCondition('identification_plate = "' . $model->
                    identification_plate . '"');


            if (!empty($model->identification_date))
                $criteria->addCondition('identification_date = "' . $model->identification_date .
                    '"');


            if (!empty($model->image))
                $criteria->addCondition('image = "' . $model->image . '"');


            if (!empty($model->probationary_date))
                $criteria->addCondition('probationary_date = "' . $model->probationary_date .
                    '"');


            if (!empty($model->official_register_date))
                $criteria->addCondition('official_register_date = "' . $model->
                    official_register_date . '"');


            if (!empty($model->address))
                $criteria->addCondition('address = "' . $model->address . '"');


            if (!empty($model->address_tmp))
                $criteria->addCondition('address_tmp = "' . $model->address_tmp . '"');


            if (!empty($model->district))
                $criteria->addCondition('district = "' . $model->district . '"');


            if (!empty($model->district_tmp))
                $criteria->addCondition('district_tmp = "' . $model->district_tmp . '"');


            if (!empty($model->city))
                $criteria->addCondition('city = "' . $model->city . '"');


            if (!empty($model->city_tmp))
                $criteria->addCondition('city_tmp = "' . $model->city_tmp . '"');


            if (!empty($model->type))
                $criteria->addCondition('type = "' . $model->type . '"');


        }
        //$session['Employee_records']=Test::model()->findAll($criteria);
        $session['Employee_dataProvider'] = $model->search();

        $this->render('index', array('model' => $model,));

    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Employee('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Employee']))
            $model->attributes = $_GET['Employee'];

        $this->render('admin', array('model' => $model,));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Employee::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'employee-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Employee_records'])) {
            $model = $session['Employee_records'];
        } else
            $model = Employee::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport',
            array('model' => $model), true));
    }

    public function actionGeneratePdf()
    {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once ('tcpdf/tcpdf.php');
        require_once ('tcpdf/config/lang/eng.php');


        if (isset($session['Employee_dataProvider'])) {
            $dataProvider = $session['Employee_dataProvider'];
        } else
            $dataProvider = new CActiveDataProvider('Employee');


        $html = $this->renderPartial('expenseGridtoReport', array('dataProvider' => $dataProvider), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Employee Report');
        $pdf->SetSubject('Employee Report');
        //$pdf->SetKeywords('example, text, report');
        $pdf->SetHeaderData('', 0, "Report", '');
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by " .
            Yii::app()->name, "");
        $pdf->setHeaderFont(array(
            'helvetica',
            '',
            8));
        $pdf->setFooterFont(array(
            'helvetica',
            '',
            6));
        $pdf->SetMargins(15, 18, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        $pdf->SetAutoPageBreak(true, 0);
        $pdf->SetFont('dejavusans', '', 7);
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->LastPage();
        $pdf->Output("Employee_002.pdf", "I");
    }

    protected function gridImageColumn($data, $row)
    {
        $imageName = ($data->image != null) ? $data->image : 'User.png';
        $img = CHtml::image(Yii::app()->baseUrl . "/images/$imageName", 'image', array('style' =>
        'width:50px;'));
        return CHtml::link($img, array('update', 'id' => $data->id));
    }

    protected function viewSexColum($data, $row)
    {
        if ($data->sex == 0) {
            return 'Nam';
        } else {
            return 'Nữ';
        }
    }

    public function actionUpdateLayOff($id)
    {
        $model = $this->loadModel($id);
        if ($model->status == 1) {
            $this->render('errorByLayOff', array());
        } else {
            if (isset($_POST['Employee'])) {
                $model->description_layoff = $_POST['Employee']['description_layoff'];
                $model->date_layoff = $_POST['Employee']['date_layoff'];
                $model->status = true;
                $model->save(false);
                exit(0);
            }
            $this->render('setLayOff', array(
                'model' => $model,
            ));
        }

    }

    public function actionUpdateHistory($id)
    {
        $h = new History();
        $model = $this->loadModel($id);
        if ($model->status != 1) {
            if (isset($_POST['Employee'])) {
                $e = $this->loadModel($id);
                $e->shop_id = $_POST['Employee']['shop_id'];
                $e->job_id = $_POST['Employee']['job_id'];
                $e->department_id = $_POST['Employee']['department_id'];
                $h->attributes = $_POST['History'];
                $h->emp_id = $id;
                $h->company = 'Minh Tâm';
                $h->description = $_POST['History']['description'];
                $h->job_id = $_POST['Employee']['job_id'];
                if ($e->shop_id == null || $e->job_id == null || $e->department_id == null || $h->
                    fromdate == null
                ) {
                    Yii::app()->user->setFlash('warning',
                        '<strong>Cửa hàng, chức vụ, phòng ban mới và ngày chuyển không được bỏ trống ');
                } else {
                    if ($e->save(false) && $h->save(false)) {
                        Yii::app()->user->setFlash('success', '<strong>' . $e->code .
                            '</strong> Ðã luu thàng công.');
                    } else {
                        Yii::app()->user->setFlash('error', '<strong>' . $e->code .
                            '</strong> Lưu thất bại.');
                    }
                }
            }
            $this->render('setHistoryJob', array(
                'model' => $model,
                'h' => $h,
            ));
        } else {
            $this->render('errorByLayOff', array());
        }
    }

    public function actionProfile()
    {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $this->render('profile', array(
            'model' => $model,
        ));
    }

    public function actionChangePass($id)
    {
        if (isset($_POST['User'])) {
            $userIdLogEdIn = Yii::app()->user->id;
            if ($userIdLogEdIn == $id) {
                $currentPass = md5($_POST['User']['currentPassword']);
                $password = $_POST['User']['password'];
                $retypePassword = $_POST['User']['retypePassword'];
                $user = User::model()->find('id=:id', array(':id' => $id));
                $comPairSeCP = $user->password;
                if (empty($currentPass) || empty($password) || empty($retypePassword)) {
                    echo CJSON::encode(array('empty' => '1'));
                    exit;
                } else {
                    if ($currentPass != $comPairSeCP) {
                        echo CJSON::encode(array('empty' => '2'));
                        exit;
                    } else if ($password != $retypePassword) {
                        echo CJSON::encode(array('empty' => '3'));
                        exit;
                    } else {
                        $user->password = md5($password);
                        if ($user->update()) {
                            echo CJSON::encode(array('empty' => '0'));
                            exit;
                        }
                    }
                }
            } else {
                echo CJSON::encode(array('empty' => '4'));
                exit;
            }
        }
        $this->render('changePass', array(

        ));
    }
}
