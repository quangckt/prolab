<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Create :type', array(':type' => Rights::getAuthItemTypeName($_GET['type']))),
);
?>

<div class="createAuthItem">

    <h1 class="title"><?php
echo Rights::t('core', 'Tạo mới :type', array(
    ':type' => Rights::getAuthItemTypeName($_GET['type']),
));
?></h1>
    <hr/>
<?php $this->renderPartial('_form', array('model' => $formModel)); ?>

</div>