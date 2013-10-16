<?php 

 $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
     'id'=>'search-form',
	'action'=>Yii::app()->createUrl("/reporting/report",array(
        'stimulsoft_client_key'=>$_GET['stimulsoft_client_key'],
        'stimulsoft_report_key'=>$_GET['stimulsoft_report_key'],
        'filter'=>$_GET['filter'],
    )),
	'method'=>'get',
   // 'htmlOptions'=>array('class'=>'well'),
    'type'=>'vertical',
    
));  ?>
<h3 class="title">Điều kiện</h3>
   	<?php echo $form->dropDownListRow($model,'month',array('0'=>'Ngày','1'=>'Tuần','2'=>'Tháng','3'=>'Năm'), array('class'=>'span','prompt'=>'Chọn ...')); ?>
    <?php echo $form->labelEx($model,'fdate',array('class'=>' ')); ?>
<?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>$model->fdate,
    'attribute'=>'fdate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span','z-index'=>100),
));
?>
	<?php //echo $form->dropDownListRow($model,'year',$model->listYear(),array('class'=>'span')); ?>
     <?php echo $form->labelEx($model,'tdate',array('class'=>' ')); ?>
    <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>$model->tdate,
    'attribute'=>'tdate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span','z-index'=>101 ),
));
?>
    <?php echo $form->dropDownListRow($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','name'),array('prompt'=>'Tất cả','class'=>'span')); ?>   
    <?php echo $form->dropDownListRow($model,'type_id',CHtml::listData(ProductType::model()->findAll(),'id','name'),array('prompt'=>'Tất cả','class'=>'span')); ?>   
    <?php echo $form->dropDownListRow($model,'whid',CHtml::listData(Warehouse::model()->findAll(),'id','name'),array('prompt'=>'Tất cả','class'=>'span')); ?>
    <?php echo $form->dropDownListRow($model,'pid',CHtml::listData(Product::model()->findAll(),'id','name'),array('class'=>'span','prompt'=>'Tất cả')); ?>   
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Xem')); ?>
    
 
 <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'botton', 'icon'=>'folder-close white', 'label'=>'Đóng','htmlOptions'=>array('onClick'=>'window.close()'))); ?>
   
<?php $this->endWidget(); ?>
<script>
        $('#Search_month').change(function(){
            var startdate;
            var enddate;
            var now = new Date();
            if($(this).val()==0){
                startdate = now.getDate()+'-'+(now.getMonth()+1)+'-'+now.getFullYear();
                $('#Search_fdate').val(startdate);
                $('#Search_tdate').val(startdate); 
            }else if($(this).val()==1){
                var startDay = 0; //0=sunday, 1=monday etc.
                var d = now.getDay(); //get the current day
                var weekStart = new Date(now.valueOf() - (d-startDay)*86400000); //rewind to start day
                var weekEnd = new Date(weekStart.valueOf() + 6*86400000); //add 6 days to get last day
                startdate = weekStart.getDate()+'-'+(weekStart.getMonth()+1)+'-'+weekStart.getFullYear();
                enddate = weekEnd.getDate()+'-'+(weekEnd.getMonth()+1)+'-'+weekEnd.getFullYear();
                $('#Search_fdate').val(startdate);
                $('#Search_tdate').val(enddate);
            }else if($(this).val()==2){
                monthEnd = new Date();
                monthEnd.setDate(1);
                monthEnd.setMonth(monthEnd.getMonth()+1);
                monthEnd.setDate(monthEnd.getDate()-1);
                startdate = '01-'+(now.getMonth()+1)+'-'+now.getFullYear();
                enddate = monthEnd.getDate()+'-'+(monthEnd.getMonth()+1)+'-'+monthEnd.getFullYear();
                $('#Search_fdate').val(startdate);
                $('#Search_tdate').val(enddate);
            }else if($(this).val()==3){
                startdate = '01-01-'+now.getFullYear();
                enddate = '31-12-'+now.getFullYear();
                $('#Search_fdate').val(startdate);
                $('#Search_tdate').val(enddate);
            }
        });
</script>