<?php
class UomConvertManager extends TabularInputManager
{
 
    protected $class='UomConvert';
 
    public function getItems()
    {
        if (is_array($this->_items))
            return ($this->_items);
        else{ 
            $uc=new UomConvert;
            $uc->product_id=1;
            return array(
                'n0'=>$uc,
            );
          }  
    }
 
 
    public function deleteOldItems($model, $itemsPk)
    {
        $criteria=new CDbCriteria;
        $criteria->addNotInCondition('id', $itemsPk);
        $criteria->addCondition("product_id= {$model->primaryKey}");
        UomConvert::model()->deleteAll($criteria); 
    }
 
 
    public static function load($model)
    {
        $return= new UomConvertManager;
        foreach ($model->UomConverts as $item)
            $return->_items[$item->primaryKey]=$item;
        return $return;
    }
 
 
    public function setUnsafeAttribute($item, $model)
    {
        $item->product_id=$model->primaryKey;
        $item->uom_id=$model->uom_id;
    }
 
}