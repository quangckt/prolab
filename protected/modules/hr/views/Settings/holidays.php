<h1 class="title">Các ngày nghỉ lễ trong năm</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Tạo mới',
                'icon' => 'icon-plus',
                'url' => array("/hr/eventCalendar/createHoliday"),
                'linkOptions' => array(
                    'class' => 'ajaxFormModal',
                    'title' => 'Thêm ngày nghỉ lễ',
                )
            ),
        ),
    ));
    ?>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'holidays-grid',
    'type'=>'bordered striped',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    //'selectableRows' => 2,
    'columns' => array(
                //array('id' => 'selectedItems', 'class' => 'CCheckBoxColumn'),
                'description',
                array(
                    'name' => 'startDate',
                    'type' => 'raw',
                    'value' => array($this, 'startDateOfHoliday'),
                ),
                //'dueDate',
                array(
                    'name' => 'dueDate',
                    'type' => 'raw',
                    'value' => array($this, 'dueDateOfHoliday'),
                ),
                array(
                    'header' => 'Màu sự kiện',
                    'type' => 'raw',
                    'value' => array($this, 'descriptionHaveColor'),
                ),
                
                array(
                    'class' => 'bootstrap.widgets.TbButtonColumn',
                    'template' => '{update} {delete}',
                    'buttons' => array(
                        'update' => array(
                            'label' => 'Sửa',
                            'url' => 'array("/hr/eventCalendar/updateHoliday&id=$data->id")',
                            'options' => array(
                                'class' => ' update ajaxFormModal',
                                'title' => 'Sửa ngày nghỉ lễ',
                            )
                        ),
                        'delete' => array(
                            'label' => 'Xóa',
                            'url' => 'array("/hr/eventCalendar/delete&id=$data->id")',
                            'options' => array(
                                'class' => ' delete'
                            )
                        )
                    ),

                )
            ),
)); ?>
