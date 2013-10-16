<?php

class DefaultController extends Controller
{
   public $layout='//layouts/column2';
       
	public function actionIndex()
	{
	    Yii::app()->session['activeModule']='sys';
		$this->render('index');
	}
}