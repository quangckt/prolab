<?php

class SysModule extends BaseModule {

    //  public $menuFunc=array();
    public $defaultUrl = '/sys/company/view&&id=1';
    public $layout = 'sys.views.layouts.main';

    public function init() {
        // this method is called when the module is being created
        // you may place code here to customize the module or the application
        // import the module-level models and components
        $this->setImport(array(
            'sys.models.*',
            'product.models.*',
            'sys.components.*',
            'hr.models.*',
        ));
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        }
        else
            throw new CHttpException(403, 'Bạn không đủ quyền truy cập khu vực này !');
        return false;
    }

}
