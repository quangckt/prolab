<?php

class DefaultController extends BaseController {

    public $layout = '//layouts/column2';

    public function actionIndex() {
        Yii::app()->session['activeModule']='rec';
        $this->render('index');
    }

}