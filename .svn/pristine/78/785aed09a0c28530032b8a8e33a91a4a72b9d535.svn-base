<?php
	
class tools {

   
    private static function  update_total_product(){
    $sql=" UPDATE product_item p set p.qtyInstock= (SELECT sum(i.qty) FROM inv_inventory i "; 
    $sql .= " WHERE i.product_id=p.id) ";
    $command = Yii::app()->db->createCommand($sql);
     return ($command->execute()>=0);
   }
   
   private static function  update_total_inv(){
    $sql="UPDATE inv_inventory i set i.qty= (SELECT sum(d.qty) FROM inv_inventorylogdetail d "; 
    $sql .= " WHERE d.wh_id=i.wh_id and d.product_id=i.product_id) ";
    $command = Yii::app()->db->createCommand($sql);
     return ($command->execute()>=0);
   }
   
  private static function  deleteInventoryLog($fromdate){
        $sql = ' DELETE  FROM inv_inventorylog WHERE refDate >= :fdate';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":fdate", $fromdate, PDO::PARAM_STR);
       return ($command->execute()>=0);
   }

  private static function  InsertInventoryLog($fromdate){
      $sql= " select a.id,a.date,a.type,a.idx From (";  
      $sql.=" select id,date,'Warehousein' type , 0 idx from inv_warehousein where date>='$fromdate' and status > 0";  
      $sql.=" Union all select id,date,'Transfer' type , 1 idx from inv_transfer where date>='$fromdate' and status > 0";
      $sql.=" Union all select id,date,'Warehouseout' type , 2 idx from inv_warehouseout where date>='$fromdate' and status > 0";
     // $sql.=" Union all select id,date,'CheckInventory' type , 3 idx from inv_check_inventory where date>='$fromdate' and status > 0";
      $sql.=") a  ";
      $sql.=" Order by a.date,a.idx ";
      $command = Yii::app()->db->createCommand($sql);
      $result = $command->queryAll();
      $validate=true;
      foreach ($result as $item){
        $Class= $item['type'];
        $model=$Class::model()->findByPk($item['id']);
        if(isset($model)){
        if($item['type']==='Warehousein')
         $validate= InventorylogManager::saveWarehouseinToInventorylog($model,Inventorylog::REFTYPE_WH_IN , 1);
        if($item['type']==='Warehouseout')
        $validate=InventorylogManager::saveWarehouseoutToInventorylog($model,Inventorylog::REFTYPE_WH_OUT,-1);
        if($item['type']==='Transfer')
        $validate=InventorylogManager::saveTransferToInventorylog($model,Inventorylog::REFTYPE_TRANS);
       // if($item['type']==='CheckInventory')
       // $validate=InventorylogManager::saveCheckToInventorylog($model,Inventorylog::REFTYPE_CHECK);
        }  
        $validate &= $validate;
      }
      return $validate;
   }   

 public static function  repairInventoryLog($fromdate){
    $transaction = Yii::app()->db->beginTransaction();
    try {
    $validate  = self::deleteInventoryLog($fromdate);
    $validate &= self::update_total_inv();
    $validate &= self::update_total_product();
    $validate &= self::InsertInventoryLog($fromdate);
  
    if($validate){
        $transaction->commit();
        return true;
    } else {
        $transaction->rollBack();
               return false; 
    }
    
    } catch(Exception $e) {
    $transaction->rollBack();
    }
    return false;    
   }   
}