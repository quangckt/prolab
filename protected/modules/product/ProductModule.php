<?php

class ProductModule extends BaseModule
{
   
    public $layout = 'product.views.layouts.main';
    
	/**
	* @property string the path to the application layout file.
	*/
    
	public $appLayout = 'application.views.layouts.main';
       
   
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
            'sys.components.*',
            'sys.models.*',
			'product.models.*',
            'inv.models.*',
			'product.components.*',
		));
        
        $mRef=Yii::app()->session['activeModule'];
        if(isset($mRef)){
           $this->menuFunc= Yii::app()->getModule($mRef)->menuFunc;
        }
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
