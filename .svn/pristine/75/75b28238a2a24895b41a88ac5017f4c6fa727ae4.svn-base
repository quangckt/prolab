<?php

class InventorylogManager
{
    const COST_METHOD_AGV = 1;
  
     
  
    public static function deleteInventorylog($model)
    {
        
        $m=Inventorylog::model()->find('refnum=:refnum',array(':refnum'=>$model->num));
        if(isset($m)){
        $m->delete();
            
         }
          return true;
    }
    
  
    
   public static function saveWarehouseinToInventorylog($model, $refType,$op = 1)
    {
        $InvLogid = self::saveInvLog($model->id, $refType, $model->num, $model->
            date, $model->branch_id);
        $validate = false;
        if ($InvLogid > 0)
        {
            $validate = true;
            foreach ($model->warehouseinlines as $item)
            {
                $re = self::saveInvLogDetails($InvLogid, $item->product_id, $item->
                    description, $item->qtystd, $item->price / $item->radio, $item->product->uom_id,
                    $model->wh_id, $model->date, $refType, $op);
                $validate &= ($re > 0);
            }
            if (!$validate)
                Inventorylog::model()->findByPk($InvLogid)->delete();
        }
        return $validate;
    }

 public static function saveTransferToInventorylog($model,$refType, $op = 1)
    {
            $InvLogid = self::saveInvLog($model->id,$refType,$model->num,$model->date,$model->branch_id,$model);
               $validate = false;
               if($InvLogid>0){
                 $validate=true;  
                 foreach($model->transferlines as $item){
                    //$item->clearFormatNumber();
                    $getAvgcost=$item->product->avgcost;
                    $reFrom = self::saveInvLogDetails(
                            $InvLogid,
                            $item->product_id,
                            $item->description,
                            $item->qtystd,
                            $getAvgcost,
                            $item->product->uom_id,
                            $model->from_wh_id,
                            $model->date,
                            $refType,
                            -1);
                                                
                    $reTo = self::saveInvLogDetails(
                            $InvLogid,
                            $item->product_id,
                            $item->description,
                            $item->qtystd,
                            $getAvgcost,
                            $item->product->uom_id,
                            $model->to_wh_id,
                            $model->date,
                            $refType,
                            1);
                  
                   $validate &= ($reFrom>0)&($reTo>0);
            }}                  
        return $validate;                       
    }   
                             
     public static function  saveWarehouseoutToInventorylog($model,$refType,$op=1){
        $InvLogid = self::saveInvLog($model->id,$refType,$model->num,$model->date,$model->branch_id);
               $validate = false;
               if($InvLogid>0){
                 $validate=true;  
                 foreach($model->warehouseoutlines as $item){
                    $re = self::saveInvLogDetails(
                            $InvLogid,
                            $item->product_id,
                            $item->description,
                            $item->qtystd,
                            $item->product->avgcost,
                            $item->product->uom_id,
                            $model->wh_id,
                            $model->date,
                            $refType,
                            $op);
                   $validate &= ($re>0);    
                  }
                 if(!$validate)  Inventorylog::model()->findByPk($InvLogid)->delete();
                }
             return $validate;                      
    }    


    public static function saveInvLog($refid, $reftype, $refnum, $Refdate, $branch_id,$model=null)
    {
        try
        {
            $invLog = new Inventorylog();
            if($reftype==Inventorylog::REFTYPE_TRANS){
             if($model!=null)
             $from=$model->fromWh->name;   
             $to=$model->toWh->name;
             $invLog->remarks = Inventorylog::$getReftype[Inventorylog::REFTYPE_TRANS]. " Từ: $from đến $to";
            }
            $invLog->ref_id = $refid;
            $invLog->reftype = $reftype;
            $invLog->refnum = $refnum;
            $invLog->refdate = date('d-m-Y',strtotime($Refdate));
            $invLog->branch_id = $branch_id;
            $invLog->save(false);

            if($invLog->id>0 && $reftype<0 )
            {
              $inv=Inventorylog::model()->find("refnum=:refnum and reftype>0",array(':refnum'=>$refnum));
              $inv->reftype=$reftype;
              $inv->save(false);
            }
            
            return $invLog->id;
        }
        catch (CException $e)
        {
            throw new CException(Yii::t('saveInvLog: {error}', array('{error}' => $e->
                errorInfo)));
            return - 1;
        }
    }

    public static function saveInvLogDetails($invlogID, $pid, $des, $qtystd, $coststd,
        $uomid, $whid, $lastpodate=null, $reftype, $isIN = 1)
    {
        $invd = new Inventorylogdetail();
        try
        {
            $invd->inventorylog_id = $invlogID;
            $invd->product_id = $pid;
            $invd->description = $des;
            $invd->uom_id = $uomid;
            $invd->qty = $isIN * $qtystd;
            $invd->subtotal = $invd->qty * $invd->cost;
            $p = Product::model()->findByPk($invd->product_id);
            $invd->costmethod = $p->costmethod;

            // before/after Cost for AVG COST
            if ($invd->costmethod == self::COST_METHOD_AGV)
            {
                if ($isIN > 0) 
                {
                    //in
                    $invd->cost = $coststd;
                    $invd->before_cost = $p->avgcost;
                    if(($p->qtyinstock + $invd->qty)>0)
                    $invd->after_cost = ($p->avgcost * $p->qtyinstock + $invd->qty * $invd->cost) / ($p->qtyinstock + $invd->qty);
                } else { 
                    //out
                    $invd->cost = $p->avgcost;
                    $invd->before_cost = $p->avgcost;
                    $invd->after_cost = $p->avgcost;
                }

            }
            //=============================================
            $invd->wh_id = $whid;

            // before/after qty
            $inv = Inventory::model()->find('product_id=:pid AND wh_id=:whid', array(':pid' =>
                $pid, ':whid' => $whid));
            $beforeqty = 0;
            if (isset($inv))
                $beforeqty = $inv->qty;
            $invd->before_qty = $beforeqty;
            $invd->after_qty = $beforeqty + $isIN * $qtystd;
            //==============================================

            if ($invd->save(false))
            {
                if (self::updateInventory($invd->product_id, $invd->wh_id, $invd->qty))
                {
                    if ($reftype != Inventorylog::REFTYPE_TRANS)
                        $p->qtyinstock = $p->sumQtyInStock;
                    //Only when inventory IN
                    //current the system only support avgcost
                    if ($isIN>0)
                    {   if($lastpodate!=null)
                        $p->lastpodate = $lastpodate;
                        $p->lastcost = $invd->cost;
                        $p->avgcost = $invd->after_cost;//$p->getAvgCost;
                    }
                    $p->save(false);
                }
                return $invd->id;
            }
            return - 1;

        }
        catch (CException $e)
        {
            throw new CException(Yii::t('yii', 'saveInvLogDetails: {error} ', array('{error}' =>
                $e->getMessage())));
            return - 1;
        }
    }

    public static function updateInventory($pid, $whid, $qty)
    {

        $inv = Inventory::model()->find('wh_id=:whid AND product_id=:pid', array(':whid' =>
            $whid, ':pid' => $pid));
        if (isset($inv))
            if ($inv->qty > 0)
            {
                $inv->qty = $inv->qty + $qty;
                return $inv->save(false);
            }
        //create new a record
        if (!isset($inv))
        {
            $inv = new Inventory();
            $inv->product_id = $pid;
            $inv->wh_id = $whid;
            $inv->qty = 0;
        }
        try
        {

            $sum = Yii::app()->db->createCommand()->select("SUM(qty) as sum")->from('inv_inventorylogdetail')->
                where('product_id=:pid AND wh_id=:whid', array(':pid' => $pid, ':whid' => $whid))->
                queryScalar();
            if (!isset($sum))
                $sum = 0;
            $inv->qty = $sum;
            return $inv->save(false);
        }
        catch (CException $e)
        {
            throw new CException(Yii::t('yii', 'updateInventory: {error} ', array('{error}' =>
                $e->getMessage())));
        }
        return false;
    }
}
