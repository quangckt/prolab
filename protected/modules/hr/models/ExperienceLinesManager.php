<?php 
    class ExperienceLinesManager extends TabularInputManager{
        protected $class ='Experience';
        public function getItems(){
            if(is_array($this->_items))
                return ($this-> _items);
            else{}
                return array('no'=>new Experience,);            
        }
        public function deleteOldItems($model, $itemsPk)
        {
            $criteria=new CDbCriteria;
            $criteria->addNotInCondition('id', $itemsPk);
            $criteria->addCondition("emp_id={$model->primaryKey}");
            Experience::model()->deleteAll($criteria); 
        }
        public static function load($model)
        {
            $return= new ExperienceLinesManager;
            foreach ($model->experiences as $item)
                $return->_items[$item->primaryKey]=$item;
            return $return;
        }
 
 
    public function setUnsafeAttribute($item, $model)
    {
        $item->emp_id =$model->primaryKey;
    }
   }     
?>