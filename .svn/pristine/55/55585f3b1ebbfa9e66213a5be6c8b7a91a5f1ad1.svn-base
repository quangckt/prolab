<div class="well">
<table  class="tabularInput" id="emp_education" width="100%" >
    <thead>
        <tr>
            <th style="width: 0px;display: none; ">
            </th>
            <th>
                <label>Hình thức đào tạo</label>
            </th>
            <th>
                <label>Tên trường</label>
            </th>
            <th>
                <label>Thời gian học</label>
            </th>
            <th>
                <label>Lĩnh vực</label>
            </th>
            <th>
                <label>Năm kết thúc</label>
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbody class="lines">
        <?php  foreach($lines_education->items as $id=>$line): ?>
        <?php  $this->renderPartial('_emp_education_tr',array('form'=>$form,'model'=>$line,'id'=>$id));   ?>
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