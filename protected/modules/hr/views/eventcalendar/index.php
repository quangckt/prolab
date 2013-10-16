<!--<h1 class="title">Sự kiện trong tháng</h1>
<hr />-->
<!--------------------------------------------------------------------------EVENT CALENDAR--------------------------->
<?php
$rights = Rights::getAssignedRoles();
$checkRole = isset($rights['nhanvien']) ? true : false;
if (!$checkRole) {
    ?>
<div class="row-fluid">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Thêm ngày nghỉ',
                'icon' => 'icon-plus',
                'url' => Yii::app()->createUrl('hr/eventcalendar/createHoliday'),
                'linkOptions' => array(
                    'class' => 'ajaxFormModal',
                    'title' => 'Thêm ngày nghỉ lễ',
                    'ajaxModalSubmited' => "function(){newEvent();}",
                )
            ),
            array(
                'label' => 'Thêm sự kiện',
                'icon' => 'icon-plus',
                'url' => Yii::app()->createUrl('hr/eventcalendar/create'),
                'linkOptions' => array(
                    'class' => 'ajaxFormModal',
                    'title' => 'Thêm sự kiện',
                    'ajaxModalSubmited' => "function(){newEvent();}",
                )
            ),
        ),
    ));
    ?>
</div><?php } ?>
<div class="row-fluid">
    <div class="span12">
        <?php
        $this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget',
            array(
                'data' => $listEvent,
                'id' => 'eventCalendar',
                'options' => array(
                    'theme' => false,
                    'header' => array(
                        'left' => 'month,agendaWeek,basicWeek,agendaDay,basicDay',
                        'center' => 'title',
                        'right' => 'today prevYear,prev,next,nextYear',
                    ),
                    //'isRTL' => true, //Displays the calendar right-to-left(true) or left-to-right(default:false)
                    //'weekends' => false, //Displays the satuday and sunday in calendar (true: display or false: hidden)
                    //'height' => '600', //Will make the entire calendar (including header) a pixel height.
                    //'contentHeight' => '400', //Will make the calendar's content area a pixel height.
                    'aspectRatio' => '1.8', //Determines the width-to-height aspect ratio of the calendar.
                    'firstDay' => '1', //The day that each week begins -> Sunday=0, Monday=1, Tuesday=2, etc.
                    //'disableResizing' => true,
                    'editable' => true,
                    //'defaultView'=>'month, agendaWeek, agendaDay', //month ,basicWeek, basicDay, agendaWeek, agendaDay
                    //'allDaySlot' => false, //When hidden with false, all-day events will not be displayed in agenda views.
                    'allDayText' => 'Cả ngày', //The text titling the "all-day" slot at the top of the calendar. -> default:'all day'
                    //Text/Time Customization -> http://arshaw.com/fullcalendar/docs/text/timeFormat/
                    'columnFormat' => array( //Determines the text that will be displayed on the calendar's column headings.
                        'month' => 'ddd', // Mon ->sortDay
                        'week' => 'ddd, d/M', // Mon 31/10
                        'day' => 'dddd, d/M' // Monday 31/10 ->fullDay
                    ),
                    'titleFormat' => array( //Determines the text that will be displayed in the header's title.
                        'month' => 'MMMM/yyyy', // September2009
                        'week' => 'd[ yyyy]/MMM { &#8212; d/MMM yyyy}', // 7 - 13 Sep 2009
                        'day' => 'dddd, d/MMM/yyyy', // Tuesday, 8 Sep, 2009
                    ),
                    'buttonText' => array( //Text that will be displayed on buttons of the header.
                        'prev' => '&nbsp;&#9668;&nbsp;', // left triangle
                        'next' => '&nbsp;&#9658;&nbsp;', // right triangle
                        'prevYear' => '&nbsp;&lt;&lt;&nbsp;', // <<
                        'nextYear' => '&nbsp;&gt;&gt;&nbsp;', // >>
                        'today' => 'Hôm nay', //default: today
                        'month' => 'Tháng', //default: month
                        'week' => 'Tuần', //default: week
                        'day' => 'Ngày' //default: day
                    ),
                    'monthNames' => array( //Full names of months.
                        'Tháng 1',
                        'Tháng 2',
                        'Tháng 3',
                        'Tháng 4',
                        'Tháng 5',
                        'Tháng 6',
                        'Tháng 7',
                        'Tháng 8',
                        'Tháng 9',
                        'Tháng 10',
                        'Tháng 11',
                        'Tháng 12'),
                    'monthNamesShort' => array( //Abbreviated names of months.
                        '1',
                        '2',
                        '3',
                        '4',
                        '5',
                        '6',
                        '7',
                        '8',
                        '9',
                        '10',
                        '11',
                        '12'),
                    'dayNames' => array( //Full names of days-of-week.
                        'Thứ 2',
                        'Thứ 3',
                        'Thứ 4',
                        'Thứ 5',
                        'Thứ 6',
                        'Thứ 7',
                        'Chủ nhật'),
                    'dayNamesShort' => array( //Abbreviated names of days-of-week.
                        'Chủ nhật',
                        'Thứ 2',
                        'Thứ 3',
                        'Thứ 4',
                        'Thứ 5',
                        'Thứ 6',
                        'Thứ 7'),
                    //Text/Time Customization -> http://arshaw.com/fullcalendar/docs/text/timeFormat/

                    'selectable' => false,
                    'selectHelper' => false,
                    'select' => "js:function(start, end, allDay) {
                                newEvent(start, end, allDay);
                        }",

                    //Clicking & Hovering -> http://arshaw.com/fullcalendar/docs/mouse/eventClick/

                    'eventClick' => 'js:function(event, eventElement){
                                editEvent(event, eventElement);
                        }',
                    'eventResize' => 'js:function(event, dayDelta, minuteDelta, revertFunc, jsEvent, ui, view){
                                eventResize(event, dayDelta, minuteDelta, revertFunc, jsEvent, ui, view);
                        }',
                    'eventDrop' => 'js:function(event, dayDelta, minuteDelta, allDay, revertFunc){
                                eventDrop(event, dayDelta, minuteDelta, allDay, revertFunc);
                        }',
                ),
                //Clicking & Hovering -> http://arshaw.com/fullcalendar/docs/mouse/eventClick/
                'htmlOptions' => array('style' => 'margin: 0 auto;'
                    //'style'=>'width:800px;margin: 0 auto;'
                ),
            ));

        ?>
    </div>
</div>
<!--------------------------------------------------------------------------EVENT CALENDAR--------------------------->
<script type="text/javascript">
    var editEvent = function (event, eventElement) {
        if (event.groupID == null || event.groupID == 1) {
            alert("Bạn không được sửa ngày sinh nhật/ngày cưới hoặc ngày nghỉ lễ.");
        } else {
            var url = '<?php echo Yii::app()->controller->createUrl('update'); ?>';
            url = url + "&id=" + event.id;
            var opt = {};
            $.ajax(url, opt).done(function (data) {
                var b = $(data);
                if (!b.hasClass('form')) b = b.find('.form');
                var m = 'modal_edit_event_' + event.id;
                Prolab.showModal(this, m, {title:"Sửa sự kiện", body:b, submited:function () {
                    /*if ($('#eventCalendar').fullCalendar('updateEvent', event)) {
                        console.log([event.id, event.title, event.start, event.end, event.color, event.allDay]);
                        //return;
                    }*/
                    $('#eventCalendar').fullCalendar('refetchEvents');
                    $("#" + m).find("a.close").trigger('click');
                }});
            });
        }
    };
    var newEvent = function () {
        /*if (($(".modal-body").find('.error')).length > 0) {
            console.log("ok");
            return;
        }*/
        $("#modal0").find("a.close").trigger('click');
    };
    var eventDrop = function (event, dayDelta, minuteDelta, allDay, revertFunc) {
        if (event.groupID == null || event.groupID == 1) {
            revertFunc();
            alert("Bạn không được sửa ngày sinh nhật/ngày cưới hoặc ngày nghỉ lễ.");
        } else {
            //Call controler to process
            var url = "<?php echo Yii::app()->controller->createUrl('updateDropEvent');?>";
            //Post data to controler to process
            var endHours, endMinutes;
            if (event.end == null) {
                endHours = null;
                endMinutes = null;
            } else {
                endHours = event.end.getHours();
                endMinutes = event.end.getMinutes();
            }
            var pData = {id:event.id, startDate:$.datepicker.formatDate('dd-mm-yy', event.start), endDate:$.datepicker.formatDate('dd-mm-yy', event.end), startHours:event.start.getHours(), startMinutes:event.start.getMinutes(), endHours:endHours, endMinutes:endMinutes, allDay:event.allDay};
            //call this funtion post to response all url,pdata to contronler and request data to view to process
            $.post(url, pData, function (data) {
                //response from controler
            });
        }
    };
    var eventResize = function (event, dayDelta, minuteDelta, revertFunc, jsEvent, ui, view) {
        if (event.groupID == null || event.groupID == 1) {
            revertFunc();
            alert("Bạn không được sửa ngày sinh nhật/ngày cưới hoặc ngày nghỉ lễ.");
        } else {
            //Call controler to process
            var url = "<?php echo Yii::app()->controller->createUrl('updatEventResize');?>";
            //Post data to controler to process
            var endHours, endMinutes;
            if (event.end == null) {
                endHours = null;
                endMinutes = null;
            } else {
                endHours = event.end.getHours();
                endMinutes = event.end.getMinutes();
            }
            var pData = {id:event.id, startDate:$.datepicker.formatDate('dd-mm-yy', event.start), endDate:$.datepicker.formatDate('dd-mm-yy', event.end), startHours:event.start.getHours(), startMinutes:event.start.getMinutes(), endHours:endHours, endMinutes:endMinutes, allDay:event.allDay};
            //call this funtion post to response all url,pdata to contronler and request data to view to process
            $.post(url, pData, function (data) {
                //response from controler
            });
        }
    };
</script>