<?php
$plan = ShiftPlan::model()->findByPk($plan_id);
?>
<div class="row-fluid">
    <h1 class="title"><?php if (isset($plan)) { ?><!--Bố trí-->Lịch trực của bạn<?php //echo $plan->department->name; ?> từ
        ngày <?php echo $plan->startdate; ?>
        đến
        ngày <?php echo $plan->enddate; ?><?php } else { ?>Bạn chưa có lịch trực cho tháng này!!!<?php }?></h1>
</div>
<!--------------------------------------------------------------------------EVENT CALENDAR--------------------------->
<div class="row-fluid">
    <?php
    $this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget',
        array(
            'data' => $listEventShift,
            'id' => 'eventCalendar',
            'options' => array(
                'theme' => false,
                'header' => array(
                    'left' => '', //month,agendaWeek,basicWeek,agendaDay,basicDay
                    'center' => 'title',
                    'right' => '',
                ),
                //'isRTL' => true, //Displays the calendar right-to-left(true) or left-to-right(default:false)
                //'weekends' => false, //Displays the satuday and sunday in calendar (true: display or false: hidden)
                //'height' => '600', //Will make the entire calendar (including header) a pixel height.
                //'contentHeight' => '400', //Will make the calendar's content area a pixel height.
                'aspectRatio' => '1.8', //Determines the width-to-height aspect ratio of the calendar.
                'firstDay' => '1', //The day that each week begins -> Sunday=0, Monday=1, Tuesday=2, etc.
                //'disableResizing' => true,
                'editable' => false,
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
            ),
            'htmlOptions' => array('style' => 'margin: 0 auto;'
                //'style'=>'width:800px;margin: 0 auto;'
            ),
        ));

    ?>
</div>