<?php
class HR
{
  private static $_m;
  private static $_a;


	/**
	* Returns the base url to Hr.
	* @return the url to Hr.
	*/
	public static function getBaseUrl()
	{
		$module = self::module();
		return Yii::app()->createUrl($module->baseUrl);
	}
	
    
        
  
    
	/**
	* @return HrModule the hr module.
	*/
	public static function module()
	{
		if( isset(self::$_m)===false )
			self::$_m = self::findModule();

		return self::$_m;
	}

	/**
	* Searches for the Rights module among all installed modules.
	* The module will be found even if it's nested within another module.
	* @param CModule $module the module to find the module in. Defaults to null,
	* meaning that the application will be used.
	* @return the Rights module.
	*/
	private static function findModule(CModule $module=null)
	{
		if( $module===null )
			$module = Yii::app();

		if( ($m = $module->getModule('hr'))!==null )
			return $m;

		foreach( $module->getModules() as $id=>$c )
			if( ($m = self::findModule( $module->getModule($id) ))!==null )
				return $m;

		return null;
	}    

}