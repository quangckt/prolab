<?php
//$oneline = new Warehouseinline();
?>
<table width="100%" class="items tabularInput" id="payPeriodLine">
    <thead>
    <tr>
        <!--<th class="span2">
            <label>Mã</label>
        </th>-->
        <th>
            <label>Ngày *</label>
        </th>
        <th>
            <label>Tên cổ đông *</label>
        </th>
        <!--<th>
            <label>Giá trị vay</label>
        </th>-->
        <th>
            <label>Giá trị trả *</label>
        </th>
        <!--<th>
        </th>-->
    </tr>
    </thead>
    <tbody class="lines">
    <?php  foreach ($lines_relation->items as $id => $line): ?>
        <?php $this->renderPartial('payPeriodLine_tr', array('form' => $form, 'model' => $line, 'id' => $id, 'listEmp' => $listEmp)); ?>
        <?php endforeach;?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="4">
            <a href="#" class="add-line"><i class="icon-plus"></i>Thêm dòng</a>
        </td>
    </tr>
    </tfoot>
</table>
