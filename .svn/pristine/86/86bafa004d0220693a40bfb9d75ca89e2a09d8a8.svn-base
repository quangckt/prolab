<?php
Yii::setPathOfAlias('HrAssets' , dirname(__FILE__) . '/assets/');   

class HrModule extends BaseModule
{
  	public $modulename = "Quản lý nhân sự";
    public $curr_controller = "";
	public $baseUrl = '/hr';
    
    public $defaultUrl = '/hr/default/index';
    
	/**
	* @property string the path to the layout file to use for displaying Rights.
	*/
    
	public $layout = 'hr.views.layouts.main';
	/**
	* @property string the path to the application layout file.
	*/
   
    
    public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
		// import the module-level models and components
		$this->setImport(array(
			'hr.models.*',
			'hr.components.*',
		));
        
        
   
	}
    
           

	public function beforeControllerAction($controller, $action)
	{
	   /*$this->menuFunc[0]['label']=$controller->cName;*/
		if(parent::beforeControllerAction($controller, $action))
		{
		   
             //var_dump($this->menuFunc);
            // var_dump("beforeControllerAction");
            // this method is called before any module controller action is performed
			// you may place customized code here
            
			return true;
		}
		else
            throw new CHttpException(403,'Bạn không đủ quyền truy cập khu vực này !');
			return false;
	}
    
 
  
}
