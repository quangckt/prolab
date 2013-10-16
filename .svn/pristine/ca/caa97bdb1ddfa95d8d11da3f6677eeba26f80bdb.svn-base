<?php
$this->breadcrumbs = array(
    'Companies' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Company', 'url' => array('index')),
    array('label' => 'Create Company', 'url' => array('create')),
    array('label' => 'Update Company', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Company', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Company', 'url' => array('admin')),
);
?>

<h1 class="title"><?php echo $model->name ?></h1>
<hr />
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    'items' => array(
        array('label' => 'Update', 'icon' => 'icon-edit', 'url' => Yii::app()->controller->createUrl('update', array('id' => $model->id)), 'linkOptions' => array()),
)));
?>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'logo',
        'header',
        'header1',
        'header2',
        'company_slogan',
        'address',
        'tel',
    ),
));
?>