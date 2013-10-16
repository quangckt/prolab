<?php

class AdminController extends Controller {

    public $layout = '/layouts/main';
    public $defaultAction = 'admin';

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    private $_model;

    /**
     * @return array action filters
     */
    public function filters1() {
        return CMap::mergeArray(parent::filters(), array(
                    'accessControl', // perform access control for CRUD operations
        ));
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'create', 'update', 'view'),
                'users' => UserModule::getAdmins(),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $dataProvider = new CActiveDataProvider('User', array(
            'pagination' => array(
                'pageSize' => Yii::app()->controller->module->user_page_size,
            ),
        ));

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Displays a particular model.
     */
    public function actionView() {
        $model = $this->loadModel();
        $this->render('view', array(
            'model' => $model,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new User();
        $passSave = new PassSave();
        //$profile=new Profile;
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->activkey = Yii::app()->controller->module->encrypting(microtime() . $model->password);
            $model->createtime = time();
            $model->lastvisit = time();
            //$profile->attributes=$_POST['Profile'];
            //$profile->user_id=0;
            if ($model->validate()) {
                //if($model->validate()&&$profile->validate()) {
                $passwordSave = $model->password;
                $model->password = Yii::app()->controller->module->encrypting($model->password);
                if ($model->save()) {
                    $arrayPassSave = array(
                        'password' => $passwordSave,
                        'user_id' => $model->id,
                        'emp_id' => $model->emp_id
                    );
                    $passSave->attributes = $arrayPassSave;
                    $passSave->save(FALSE);
                    //	$profile->user_id=$model->id;
                    //	$profile->save();
                }
                //$this->redirect(array('view', 'id' => $model->id));
            } //else $profile->validate();
        }

        $this->render('create', array(
            'model' => $model,
                //'profile'=>$profile,
        ));
    }

    public function actionShowPass($id) {
        $model = new User();
        $userNeedFind = User::model()->find('id=:id', array(':id' => $id));

        if (isset($_POST['User'])) {
            $currentPass = trim($_POST['User']['password']);
            $passEncrypt = Yii::app()->controller->module->encrypting($currentPass);
            if ($currentPass == '')
                $model->addError('password', 'Mật khẩu không được bỏ trống!!!');
            else {
                $userAdmin = User::model()->find('password=:password and id=:id', array(':password' => $passEncrypt, 'id' => Yii::app()->user->id));
                if (empty($userAdmin))
                    $model->addError('password', 'Mật khẩu không chính xác!!!');
                else {
                    $passSave = PassSave::model()->find('user_id=:user_id', array(':user_id' => $id));
                    if (!empty($passSave))
                        $model->addError('success', 'Mật khẩu của ' . $userNeedFind->username . ' là: <span style="font-weight:bold;"> ' . $passSave->password . '</span>');
                }
            }
        }

        $this->render('showPass', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate() {
        $model = $this->loadModel();
        //$profile=$model->profile;
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            //	$profile->attributes=$_POST['Profile'];
            //if($model->validate()&&$profile->validate()) {
            if ($model->validate()) {
                $old_password = User::model()->notsafe()->findByPk($model->id);
                $passSaveModel = PassSave::model()->find('user_id=:id', array(':id' => $model->id));
                $passSave = $passSaveModel->password;
                if ($old_password->password != $model->password) {
                    $passSave = $model->password;
                    $model->password = Yii::app()->controller->module->encrypting($model->password);
                    $model->activkey = Yii::app()->controller->module->encrypting(microtime() . $model->password);
                }
                $model->save();
                PassSave::model()->updateAll(array('password' => $passSave, 'emp_id' => $model->emp_id), 'user_id=:id', array(':id' => $model->id));
                //	$profile->save();
                //$this->redirect(array('view', 'id' => $model->id));
            } //else $profile->validate();
        }

        $this->render('update', array(
            'model' => $model,
                //'profile'=>$profile,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     */
    public function actionDelete() {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $model = $this->loadModel();
            $pasSave = PassSave::model()->find('user_id=:id', array(':id' => $model->id));
            //	$profile = Profile::model()->findByPk($model->id);
            //$profile->delete();
            $pasSave->delete();
            $model->delete();
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_POST['ajax']))
                $this->redirect(array('/user/admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     */
    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = User::model()->notsafe()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

}