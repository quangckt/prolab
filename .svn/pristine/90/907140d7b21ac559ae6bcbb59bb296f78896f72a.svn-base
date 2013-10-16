<div class="well">
<table  class="tabularInput" id="emp_relation" width="100%" >
    <thead>
        <tr>
            <th style="width: 0px;display: none; ">
            </th>
            <th>
                <label>Quan hệ</label>
            </th>
            <th>
                <label>Họ và tên</label>
            </th>
            <th>
                <label>Sinh nhật</label>
            </th>
            <th>
                <label>Ngày cưới</label>
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbody class="lines">
        <?php  foreach($lines_relation->items as $id=>$line): ?>
        <?php  $this->renderPartial('_emp_relation_tr',array('form'=>$form,'model'=>$line,'id'=>$id));   ?>
        <?php  endforeach;?>       
    </tbody>
    <tfoot>
    <tr>
    <td colspan="7">
        <a href="#" class="add-line"><i  class="icon-plus"></i>Thêm dòng</a>
    </td>
    </tr>
    </tfoot>
</table>
</div>