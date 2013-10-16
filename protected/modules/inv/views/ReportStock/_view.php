<style>
    
</style>
<?php
    $name='';
    $uom='';
	$p =Product::model()->findByPk($search->pid);
    if(isset($p)){
     $name = $p->getCodeAndName;
     $uom= $p->uom->name;   
    }
    $list=$dataProvider->getData();
    
    $summary=array('qty_in'=>0,'qty_out'=>0,'after_qty'=>0);
    $even ='';
    $id=0;
    $dataProvider->setPagination(false);   
    
     function renderFirstRowStock($id,$list,&$summary ){
        if(count($list)==0) return;
        $row=$list[0];
        echo "<tr>";
        $cost=$row->cost;
        $before_qty=$row->before_qty;
        $row->clearFormatNumber();
        $summary['after_qty']=Utils::fixNumber($before_qty);
        echo '<td align="center" style="width: 30px;">'.$id.'</td>';
        echo '<td align="left" style="width: 70px;" ></td>';
        echo '<td align="left" >DDK</td>';
        echo '<td align="left" >Chuyển sang</td>';
        echo '<td align="right">'.$cost.'</td>';
        echo '<td align="right">0</td>';
        echo '<td align="right">0</td>';
        echo '<td align="right">'.$before_qty.'</td>';
        echo "</tr>";
    }  
    
 
    function renderRowStock($id,$row,&$summary ){
        $date=$row->inventorylog->date;
        $num=$row->inventorylog->refnum;
        $note=$row->inventorylog->remarks;
        $cost=$row->cost;
        $row->clearFormatNumber();
        $qty_in=0;
        if($row->qty>0)
        $qty_in=$row->qty;
        $qty_out=0;
        if($row->qty<0)
        $qty_out=$row->qty*-1;
        $after_qty=$row->after_qty;
        $qty_in=Utils::formatNumber($qty_in);
        $qty_out=Utils::formatNumber($qty_out);
        $after_qty=Utils::formatNumber($after_qty);
        $summary['qty_in']+=Utils::fixNumber($qty_in);
        $summary['qty_out']+=Utils::fixNumber($qty_out);
        $summary['after_qty']=Utils::fixNumber($after_qty);
        
        echo '<td align="center" style="width: 30px;"  >'.$id.'</td>';
        echo '<td align="left" style="width: 70px;" >'.$date.'</td>';
        echo '<td align="left" >'.$num.'</td>';
        echo '<td align="left" >'.$note.'</td>';
        echo '<td align="right">'.$cost.'</td>';
        echo '<td align="right">'.$qty_in.'</td>';
        echo '<td align="right">'.$qty_out.'</td>';
        echo '<td align="right">'.$after_qty.'</td>';
    }                
 
    
?>

<div align="center">
  <h1>Thẻ kho</h1>
  <strong>Từ ngày:</strong> <?php echo $search->fdate ?> <strong>Đền ngày:</strong> <?php echo $search->tdate ?> <br /> 
  <strong>Kho:</strong><?php echo $search->whid==null?'Tất cả kho': warehouse::model()->findByPk($search->whid)->name ?> --
  <strong> Mặt hàng:  </strong><?php echo $name ?> -- <strong>Đơn vị tính: </strong><?php echo $uom ?>
    <br />
</div>

<table border="1" cellpadding="4" cellspacing="0" width="100%">
<thead>
    <tr align="center">
    <th rowspan="2" style="width: 30px;"  >STT</th>
    <th rowspan="2" style="width: 70px;">Ngày</th>
    <th rowspan="2">Số phiếu</th>
    <th rowspan="2">Diễn giải</th>
    <th rowspan="2" >Đơn giá</th>
    <th colspan="3">Số lượng</th>
    </tr>
    <tr align="center">
     <th>Nhập</th>   
     <th>Xuất</th>
     <th>Tồn</th>   
    </tr>
</thead>
<tbody >
    <?php
        renderFirstRowStock(++$id,$list,$summary);
    	foreach($list as $data ){
    	$even =($even==='')?"even":'';   
         echo "<tr class='$even' >";
          renderRowStock(++$id,$data,$summary);
         echo "</tr>";
    	}
    ?>    
</tbody>
<tfoot style="font-weight: bold;" >
    <tr>
     <td colspan ="5">Tổng cộng</td>
     <td align="right"> <?php echo Utils::formatNumber($summary['qty_in']) ?> </td>
     <td align="right"> <?php echo Utils::formatNumber($summary['qty_out']) ?> </td>
     <td align="right"> <?php echo Utils::formatNumber($summary['after_qty']) ?> </td>
    </tr>
</tfoot>
</table>
