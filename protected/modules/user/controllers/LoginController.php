<?php

class LoginController extends Controller
{
    public $defaultAction = 'login';

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        if (Yii::app()->user->isGuest) {
            $model = new UserLogin;
            // collect user input data
            if (isset($_POST['UserLogin'])) {
                $model->attributes = $_POST['UserLogin'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {
                    $this->lastViset();
                    $rights = Rights::getAssignedRoles();
                    $checkRole = isset($rights['nhanvien']) ? true : false;
                    if (strpos(Yii::app()->user->returnUrl, '/index.php') !== false) {
                        if ($checkRole)
                            $this->redirect(Yii::app()->controller->module->returnUrlForEmployee);
                        else
                            $this->redirect(Yii::app()->controller->module->returnUrl);
                    }
                    else {
                        $this->redirect(Yii::app()->user->returnUrl);
                    }
                }
            }
            // display the login form
            $this->render('/user/login', array('model' => $model));
        } else
            $this->redirect(Yii::app()->controller->module->returnUrl);
    }

    private function lastViset()
    {
        $lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
        $lastVisit->lastvisit = time();
        $lastVisit->save();
    }

}