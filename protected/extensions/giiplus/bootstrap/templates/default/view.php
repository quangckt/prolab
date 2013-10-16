<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>
?>

<h1>View <?php echo $this->modelClass." #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>
<hr />
<div class="tools-bar">
<?php echo "<?php"; ?> 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
        array('label'=>'Sửa', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)), 'linkOptions'=>array('accesskey'=>'e')),
		array('label'=>'In', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;'),'accesskey'=>'p'),

)));
?>
</div>
<div class='printableArea'>
<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)

if($column->name=='branch_id')
    echo "\t\t array('name'=>'branch_id','value'=>\$model->getBranchName()),\n";
    else  if($column->name=='create_uid')
    echo "\t\t array('name'=>'create_uid','value'=>\$model->getCreateName()),\n";
    else  if($column->name=='update_uid')
    echo "\t\t array('name'=>'update_uid','value'=>\$model->getCreateName()),\n";    
    else if($column->name=='name')
    echo "\t\t array('name'=>'name','type'=>'raw','value'=>\$model->createLink()),\n";
    else if($column->dbType=='active')
    echo "\t\t array('name'=>'".$column->name.":boolean'),\n";
    else
	echo "\t\t'".$column->name."',\n";
    
?>
	),
)); ?>
</div>
<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>