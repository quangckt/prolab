<div id='wrap'>
    <div id='shift-box'>
        <div id='shift-events'>
            <h6 class='title'>Ca làm việc theo bộ phận</h6>
            <?php   foreach($shiftOfDep as $k=>$item){ ?>
	               <div id="<?php echo $item->id ?>" class='shift-event' data='<?php echo CJSON::encode($item);?>'>
                      <?php echo "$item->name: $item->starttime => $item->endtime"; ?>
                   </div>
	         <?php  } ?>
        </div>
    </div>
</div>  