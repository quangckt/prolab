<?php
class PayPeriodLineManager extends TabularInputManager
{
    const DEFAULT_ROW_NUM = 4;
    protected $class = 'Payperioddetail';

    public function getItems()
    {
        if (is_array($this->_items)) {
            for ($j = count($this->_items) + 1; $j <= self::DEFAULT_ROW_NUM; $j++) {
                $this->_items["n$j"] = new Payperioddetail;
            }
            return ($this->_items);
        }
        else {
            $ls = array();
            for ($i = 1; $i <= self::DEFAULT_ROW_NUM; $i++) {
                $ls["n$i"] = new Payperioddetail;
            }
            return $ls;
        }
    }

    public function deleteDataEmpty(&$item, $i)
    {
        $count = 0;
        foreach ($item as $k => $v) {
            if ($v->type_relation == null) $count++;
        }
        if ($count == self::DEFAULT_ROW_NUM)
            return true;
        if ($item[$i]->type_relation == null) {
            unset($item[$i]);
            return false;
        }
        return true;
    }

    public function deleteOldItems($model, $itemsPk)
    {
        $criteria = new CDbCriteria;
        $criteria->addNotInCondition('id', $itemsPk);
        $criteria->addCondition("emp_id={$model->primaryKey}");
        Payperioddetail::model()->deleteAll($criteria);
    }

    public static function load($model)
    {
        $return = new PayPeriodLineManager;
        foreach ($model->empRelations as $item)
            $return->_items[$item->primaryKey] = $item;
        return $return;
    }


    public function setUnsafeAttribute($item, $model)
    {
        $item->emp_id = $model->primaryKey;
    }
}

?>