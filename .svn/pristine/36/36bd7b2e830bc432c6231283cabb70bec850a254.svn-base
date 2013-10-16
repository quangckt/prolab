<table width="100%" class="items tabularInput">
<thead>
<tr><th >
</th><th>
Chuyển từ
</th><th>
</th><th width="100px">
Quy đổi
</th><th>
Chuyển đến
</th><th>
</th></tr>
</thead>
<tbody>
<?php foreach($UomConverts->items as $id=>$uc): ?>
<?php  $this->renderPartial('_uomConvertTr',array('form'=>$form,'model'=>$uc,'id'=>$id));   ?>    
<?php endforeach;?>
<tfoot>
<tr>
<td colspan="7">
<a href="#" onclick="tabularInput.addRow(this);" rel="tooltip" title="Thêm dòng" ><span class=" ">Thêm dòng</span></a> 
</td>
</tr>  
</tfoot>
</tbody>
</table>
<script>
// initializiation of counters for new elements
    var lastDetail=<?php echo $UomConverts->lastNew ?>;
 
    // the subviews rendered with placeholders
    var trUC=new String(<?php echo CJSON::encode($this->renderPartial('_uomConvertTr', array('id' => 'idRep', 'model' => new UomConvert, 'form' => $form), true)); ?>);
       
    var tabularInput=[];
    tabularInput.deleteRow=function(e){
      if( confirm('Bạn có muốn xóa dòng này không?'))  
      //$(e).parent().parent().detach();
      $(e).parents('tr').detach();  
      return false;  
    };
    
    tabularInput.addRow=function(e){
     lastDetail++;
     //$r=$('table.tabularInput tbody tr:first');
      //$('table.tabularInput tbody').append("<tr>" + $r.html()+"</tr>"); 
        $(e).parents('table').children('tbody').append(trUC.replace(/idRep/g,'n'+lastDetail));      
    };

</script>