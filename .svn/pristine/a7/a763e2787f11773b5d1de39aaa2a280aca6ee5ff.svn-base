<table  class="tabularInput" id="stipulate_inout" style="width: 100%;">
    <thead>
        <tr>
            <th style="display: none;width: 0px;">
            </th>
            <th>
                <label>Kiểu quy định</label>
            </th>
            <th>
                <label>Tới sớm,tới muộn</label>
            </th>
            <th >
                <label>Phút</label>
            </th>
            <th >
                <label>Thưởng phạt</label>
            </th>
            <th >
                <label>Ghi chú</label>
            </th>
        </tr>
    </thead>
    <tbody class="lines">
        <?php foreach($lines->items as $id=>$line): ?>
        <?php  $this->renderPartial('_stipulateTimeInout_tr',array('form'=>$form,'model'=>$line,'id'=>$id));   ?>
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