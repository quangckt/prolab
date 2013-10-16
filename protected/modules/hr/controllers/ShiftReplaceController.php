<?php

class ShiftReplaceController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';


    public function init()
    {
        parent::init();

        if (isset($_GET['plan_id'])) {
            $url = Yii::app()->controller->createUrl('GetShiftDetail');
            $planid = $_GET['plan_id'];
            Yii::app()->clientScript->registerScript('GetShiftDetail', "
        Prolab.urlGetShiftDetail='$url';
        Prolab.planid=$planid;
        ");
        }

    }


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
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'GeneratePdf', 'GenerateExcel'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }


    public function actionGetItems()
    {
        $sql = 'SELECT id, name as value FROM hr_shift_replace WHERE name LIKE :qterm ORDER BY name ASC';
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
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {

        if (!isset($_GET['plan_id'])) {
            exit;
        }
        $plan = ShiftPlan::model()->findByPk($_GET['plan_id']);


        $model = new ShiftReplace;
        if (isset($_GET['plan_id'])) {
            $model->plan_id = $_GET['plan_id'];
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ShiftReplace'])) {
            $model->attributes = $_POST['ShiftReplace'];
            if ($model->save()) {
                $s = ShiftDetail::model()->findByPk($model->detail_id);
                $s->emp_id = $model->new_emp_id;
                $s->save(false);
                Yii::app()->user->setFlash('success', '<strong></strong> Ðã lưu thành công.');
                $this->redirect(array('create', 'plan_id' => $_GET['plan_id']));
            }

        }
        $this->render('create', array(
            'model' => $model,
            'plan' => $plan
        ));
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

        if (isset($_POST['ShiftReplace'])) {
            $model->attributes = $_POST['ShiftReplace'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
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
            $model = $this->loadModel($id);
            $s = ShiftDetail::model()->findByPk($model->detail_id);
            $s->emp_id = $model->old_emp_id;
            $s->save(false);
            $model->delete();
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();
        $model = new ShiftReplace('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['splan_id'])) {
            $model->plan_id = $_GET['splan_id'];
            $criteria->addCondition('plan_id = "' . $model->plan_id . '"');
        }
        if (isset($_GET['ShiftReplace'])) {
            $model->attributes = $_GET['ShiftReplace'];
            if (isset($_GET['ShiftReplace']['old_emp_id'])) {
                $model->old_emp_id = $_GET['ShiftReplace']['old_emp_id'];
                $criteria->addCondition('old_emp_id = "' . $model->old_emp_id . '"');
            }
            if (isset($_GET['ShiftReplace']['new_emp_id'])) {
                $model->new_emp_id = $_GET['ShiftReplace']['new_emp_id'];
                $criteria->addCondition('new_emp_id = "' . $model->new_emp_id . '"');
            }
            if ($_GET['ShiftReplace']['date'] != null) {
                $date = date('Y-m-d', strtotime($_GET['ShiftReplace']['date']));
                $model->date = $date;
                $criteria->addCondition('date = "' . $date . '"');
            }
        }
        $session['ShiftReplace_dataProvider'] = $model->search();
        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new ShiftReplace('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['ShiftReplace']))
            $model->attributes = $_GET['ShiftReplace'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = ShiftReplace::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'shift-replace-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }


    public function actionGetShiftDetail()
    {
        $empid = $_POST['emp_id'];
        $planid = $_POST['plan_id'];
        $error = 0;
        $sql = " select d.* From hr_shift s inner join hr_shift_detail d on s.id=d.shift_id where s.shift_plan_id=:planid and d.emp_id=:empid order by d.date";
        $detail = ShiftDetail::model()->findAllBySql($sql, array(':planid' => $planid, ':empid' => $empid));
        if (!isset($detail)) {
            $error = 1;
            echo CJSON::encode(array('error' => $error));
        } else {
            $re = array();
            foreach ($detail as $item) {
                $re[] = array('id' => $item->id, 'name' => $item->nameTime);
            }
            echo CJSON::encode($re);
        }
        exit;
    }

    public function actionMyShiftRePlace()
    {
        $user = User::model()->find('id=:id', array(':id' => Yii::app()->user->id));
        $emp_id = $user->emp_id;
        $emp = Employee::model()->find('id=:emp_id', array(':emp_id' => $emp_id));
        $department_id = $emp->department_id;
        $month = date('m', strtotime('2012-09-01'));
        $shiftPlan = ShiftPlan::model()->find('status = 0 and department_id=:dep_id and MONTH(startdate) = :month', array(':dep_id' => $department_id, ':month' => $month));
        $model = new ShiftReplace();
        $plan = null;
        if (isset($shiftPlan)) {
            $plan_id = $shiftPlan->id;
            $plan = ShiftPlan::model()->findByPk($plan_id);
            if (isset($_POST['ShiftChange'])) {
                $model->attributes = $_POST['ShiftChange'];
                if (isset($model->from_id))
                    $model->date_from = ShiftDetail::model()->findByPk($model->from_id)->date;
                if (isset($model->to_id))
                    $model->date_to = ShiftDetail::model()->findByPk($model->to_id)->date;
                $model->plan_id = $plan_id;
                if ($model->save()) {
                    $f = ShiftDetail::model()->findByPk($model->from_id);
                    $t = ShiftDetail::model()->findByPk($model->to_id);
                    $f->emp_id = $model->emp_to;
                    $f->save(false);
                    $t->emp_id = $model->emp_from;
                    $t->save(false);
                    Yii::app()->user->setFlash('success', '<strong></strong> Ðã lưu thành công.');
                    $this->redirect(array('create', 'plan_id' => $plan_id));
                }
            }
        }

        $this->render('myShiftRePlace', array(
            'model' => $model,
            'plan' => $plan,
        ));
    }
}
