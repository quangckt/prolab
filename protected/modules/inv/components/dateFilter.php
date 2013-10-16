<?
class dateFilter extends CWidget
{
	public function init()
	{
		parent::init();
	}
    
    public function run(){

    $search = new Search();
    $search->pid=-1;
    $search->fdate = date('d-m-Y',strtotime(date("Y-m", time())));  
    $search->tdate= date('d-m-Y',time());
    if(isset($_GET['Search'])) 
    $search->setAttributes($_GET['Search'],false);
    $this->render('dateFilter',array('model'=>$search));      

    }
} 
?>
