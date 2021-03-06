<?php

class InvModule extends BaseModule
{
   
   public $defaultUrl = '/inv/default/index';
  
   /**
	* @property string the path to the layout file to use for displaying Rights.
	*/
    
    public $layout = 'inv.views.layouts.main';
    
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
            'sys.models.*',
            'user.models.*',
            'product.models.*',
			'inv.models.*',
			'inv.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here\
            
			return true;
		}
		else
            throw new CHttpException(403,'B?n kh�ng d? quy?n truy c?p khu v?c n�y !');
			return false;
	}
}
