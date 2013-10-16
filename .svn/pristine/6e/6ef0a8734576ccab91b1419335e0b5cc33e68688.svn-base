<?php
	class tempModel extends CFormModel{
    public $fromdate;
    	public function attributeLabels()
    	{
    		return array(
    			'fromdate' => 'Từ ngày',
    		);
    	}
	public function rules()
	{
		return array(
			array('fromdate', 'required'),
            array('fromdate', 'length', 'max'=>20),
		);
	}
            
    }
    

    
class ToolsController extends BaseController
{
	public $layout='//layouts/column2';
  function ActionRepairdata(){

    $model= new tempModel();
    
    if(isset($_POST['tempModel'])){
         $model->attributes = $_POST['tempModel'];
         if($model->validate()){
        $date= date('Y-m-d',CDateTimeParser::parse($_POST['tempModel']['fromdate'],"d-M-yyyy"));
        $ok= tools::repairInventoryLog($date);
         if($ok)
        Yii::app()->user->setFlash('success', '<strong>Ðã xử lý xong</strong>');
       else Yii::app()->user->setFlash('error', '<strong>Xử lý không thành công</strong>');
       }
      }
    $this->render('repairdata',array('model'=>$model));
    }

}

