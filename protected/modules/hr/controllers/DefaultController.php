<?php

class DefaultController extends BaseController
{
   public $layout='//layouts/column2';
        
	public function actionIndex()
	{
		$this->render('index');
	}
    
}