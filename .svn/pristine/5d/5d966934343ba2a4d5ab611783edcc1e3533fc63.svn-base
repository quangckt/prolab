	
<?php

class Search extends CModel
{
    
    protected $month;
    protected $year;
    protected $fdate;
    protected $tdate;
    protected $whid;
    protected $pid;
    protected $type_id;
    protected $category_id;
/**
 *   private $_month;
 *   public function getMonth(){
 *       return $this->_month;
 *   }
 *   public function setMonth($month){
 *      $this->_month = $month;
 *   }

 *   private $_year;
 *   public function getYear(){
 *       return $this->_year;
 *   }
 *   public function setYear($year){
 *      $this->_year = $year;
 *   }
 *   
 *   private $_whid;
 *   
 *   public function getWhid(){
 *       return $this->_whid;
 *   }
 *   public function setWhid($whid){
 *      $this->_whid = $whid;
 *   }
 *  
 */
 
 public function listMonth(){
    return array('01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>10,'11'=>11,'12'=>12);
 } 

 public function listYear(){
    return yiiparam('listyear',array('2011'=>'2011','2012'=>'2012','2013'=>2013,'2014'=>2014,'2015'=>2015,'2016'=>2016,'2017'=>2017));
 }

    public function attributeNames()
            {
                    return array( 'month', 'year','whid','fdate','tdate','pid','type_id','category_id');
            }
        
    public function attributeLabels()
    {
            return array(
                            'month' => 'Tìm kiếm theo', 
                            'year' => 'Năm',
                            'whid'=>'Kho hàng',
                            'fdate'=>'Từ ngày',
                            'tdate'=>'Đến ngày',
                            'pid'=>'chọn mã hàng',
                            'type_id'=>'Loại',
                            'category_id'=>'Nhóm',
                            );
    }
    
    public function __get( $name )
    {
            if( property_exists( $this, $name ) )
            {
                    return $this->$name;
            }
            else
            {
                    return parent::__get( $name );
            }
    }
    
    public function __set( $name, $value )
    {
            if( property_exists( $this, $name ) )
            {
                    $this->$name = $value;
            }
            else
            {
                    parent::__set( $name, $value );
            }
    } 
  
}