<?
class timeWorksFilter extends CWidget
{
	public function init()
	{
		parent::init();
	}
    
    public function run(){

    $search = new SearchEmp();
    $search->fdate = date('d-m-Y',strtotime(date("Y-m", time())));  
    $search->tdate= date('d-m-Y',strtotime(date("Y-m-d", strtotime($search->fdate)) . "+1 month"));
    if(isset($_GET['Search'])) 
    $search->setAttributes($_GET['Search'],false);
    $this->render('timeWorksFilter',array('model'=>$search));      
    }
} 
?>