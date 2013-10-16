<?php
class CheckInventoryLineManager extends TabularInputManager
{
    const DEFAULT_ROW_NUM=5;
    protected $class='CheckInventorydetails';
    public function getItems()
    {
        if (is_array($this->_items))
            return ($this->_items);
        else{
            $ls=array();  
            for($i=1;$i<=self::DEFAULT_ROW_NUM;$i++){
             $ls["n$i"]= new CheckInventorydetails;  
            }
            return $ls;
         }   
    }
 
     
    public function deleteDataEmpty(&$item,$i)
    {
        $count=0;
        foreach($item as $k => $v){
           if($v->product_id==null){
            $count++;
           }  
        }
        if($count==self::DEFAULT_ROW_NUM)
        return true;
        if($item[$i]->product_id==null){
        unset($item[$i]);
        return false;
        }
        return true;
    }
    
 
 
    public function deleteOldItems($model, $itemsPk)
    {
        $criteria=new CDbCriteria;
        $criteria->addNotInCondition('id', $itemsPk);
        $criteria->addCondition("check_inventory_id = {$model->primaryKey}");
        CheckInventorydetails::model()->deleteAll($criteria); 
    }
 
 
    public static function load($model)
    {
        $return= new CheckInventoryLineManager();
        foreach ($model->checkInventorydetails as $item)
            $return->_items[$item->primaryKey]=$item;
        return $return;
    }
 
 
    public function setUnsafeAttribute($item, $model)
    {
        $item->check_inventory_id=$model->primaryKey;
    }
}