<div class="well">
<table  class="tabularInput" id="emp_Experience" style="width: 100%;">
    <thead>
        <tr>
            <th style="display: none;width: 0px;">
            </th>
            <th >
                <label>Tên công ty</label>
            </th>
            <th >
                <label>Chức vụ</label>
            </th>
            <th >
                <label>Ngày bắt đầu</label>
            </th>
            <th >
                <label>Ngày kết thúc</label>
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbody class="lines">
        <?php foreach($lines_experience->items as $id=>$line): ?>
        <?php  $this->renderPartial('_emp_Experience_tr',array('form'=>$form,'model'=>$line,'id'=>$id));   ?>
        <?php endforeach;?>       
    </tbody>
    <tfoot>
    <tr>
    <td colspan="6">
        <a href="#" class="add-line"><i  class="icon-plus"></i>Thêm dòng</a>
    </td>
    </tr>
    </tfoot>
</table>
</div>