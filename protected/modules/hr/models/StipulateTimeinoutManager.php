<?php 
    class StipulateTimeinoutManager extends TabularInputManager{
        const DEFAULT_ROW_NUM=5;
        protected $class ='StipulateTimeinout';
        public function getItems(){
            if(is_array($this->_items)){
                for($j=count($this->_items)+1;$j<=self::DEFAULT_ROW_NUM;$j++){
                $this->_items["n$j"]=new StipulateTimeinout;
              }
                    return ($this-> _items);
                }
            else{
                $sql ='SELECT id FROM hr_general_timeinout ORDER BY id DESC';
                $command = Yii::app()->db->createCommand($sql);
                $result = $command->queryAll();
                if($result==null){
                    $ls=array();  
                    for($i=1;$i<=self::DEFAULT_ROW_NUM;$i++){
                     $ls["n$i"]= new StipulateTimeinout;  
                    }
                    return $ls;    
                }else{
                    $timeinout = StipulateTimeinout::model()->findAll('general_timeinout_id =:general_timeinout_id',array(':general_timeinout_id'=>$result[0]['id']));
                    $ls=array();  
                    for($i=1;$i<=count($timeinout);$i++){
                     $inout= new StipulateTimeinout;
                     $inout->type =$timeinout[$i-1]->type;
                     $inout->time =$timeinout[$i-1]->time;
                     $inout->typeSoonLate =$timeinout[$i-1]->typeSoonLate;
                     $inout->rate =$timeinout[$i-1]->rate;
                     $inout->note =$timeinout[$i-1]->note;
                     $ls["n$i"]=$inout;  
                    }
                    return $ls;
                }
             }       
        }
        public function deleteDataEmpty(&$item,$i)
        {
            
            $count=0;
            foreach($item as $k => $v){
                $kt = (isset($v->type))?$v->type:-1;
               if($kt==-1) $count++; 
            }
            if($count==self::DEFAULT_ROW_NUM)
            return true;
            
            if(!isset($item[$i])){    
            unset($item[$i]);
            return false;
            }
            return true;
        }
        public function deleteOldItems($model, $itemsPk){
            $criteria=new CDbCriteria;
            $criteria->addNotInCondition('id', $itemsPk);
            $criteria->addCondition("general_timeinout_id={$model->primaryKey}");
            StipulateTimeinout::model()->deleteAll($criteria); 
        }
        public static function load($model)
        {
            $return= new StipulateTimeinoutManager;
            foreach ($model->stipulateTimeinouts as $item)
                $return->_items[$item->primaryKey]=$item;
            return $return;
        }
 
 
    public function setUnsafeAttribute($item, $model)
    {
        $item-> general_timeinout_id=$model->primaryKey;
    }
   }     
?>