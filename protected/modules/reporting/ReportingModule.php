<?php
//Yii::setPathOfAlias('ReportingAssets' , dirname(__FILE__) . '/assets/');  
class ReportingModule extends CWebModule
{
    public $baseUrl = '/reporting';
  	private $_assetsUrl;
    private $debug=false;
    public $cssFile;
        
	public $layout = 'application.modules.reporting.views.layouts.main';
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
			'reporting.models.*',
			'reporting.components.*',
            'product.models.*',
            'inv.models.*',
            'hr.models.*',
            'inv.components.*',
            'hr.components.*',
		));
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
    
/**
	* Registers the necessary scripts.
	*/
	public function registerScripts()
	{
		// Get the url to the module assets
		$assetsUrl = $this->getAssetsUrl();

		// Register the necessary scripts
		$cs = Yii::app()->getClientScript();
		//$cs->registerCoreScript('jquery');
		//$cs->registerCoreScript('jquery.ui');
		//$cs->registerScriptFile($assetsUrl.'/js/swfobject.js');
		//$cs->registerCssFile($assetsUrl.'/css/core.css');

		// Make sure we want to register a style sheet.
		if( $this->cssFile!==false )
		{
			// Default style sheet is used unless one is provided.
			if( $this->cssFile===null )
				$this->cssFile = $assetsUrl.'/css/default.css';
			else
				$this->cssFile = Yii::app()->request->baseUrl.$this->cssFile;

			// Register the style sheet
			//$cs->registerCssFile($this->cssFile);
		}
	}

	/**
	* Publishes the module assets path.
	* @return string the base URL that contains all published asset files of Rights.
	*/
	public function getAssetsUrl()
	{
		if( $this->_assetsUrl===null )
		{
			$assetsPath = Yii::getPathOfAlias('reporting.assets');

			// We need to republish the assets if debug mode is enabled.
			if( $this->debug===true )
				$this->_assetsUrl = Yii::app()->getAssetManager()->publish($assetsPath, false, -1, true);
			else
				$this->_assetsUrl = Yii::app()->getAssetManager()->publish($assetsPath);
		}

		return $this->_assetsUrl;
	}
 
 	public function getReportUrl($module,$report,$params=array(),$filterWidgetWidget='',$mode='ViewerFx')
	{
	 $p='';
     $filter='';
     
     if(is_array($params))
     foreach($params as $k=>$v){
       if($p==='') 
       $p ="&$k=$v";
       else  $p .="&$k=$v";
     }
	if($filterWidgetWidget!=='')
    $filter="&filter=$filterWidgetWidget";
	 return  array("/reporting/report&stimulsoft_client_key=$mode&stimulsoft_report_key=$report$filter$p");
	}
        
}
