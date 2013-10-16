
<?php
$edittable = true;
$droppable =true;
$disableResizing =false;
$disableDragging = false;
if($plan->status!=0){
    $edittable = false;
    $droppable =false;
    $disableResizing =true;
    $disableDragging = true;
}
//var_dump($listEventShift);
$this->widget('application.extensions.fullcalendar.FullcalendarGraphWidget', 
    array(
        'id'=>'calendar',
        'data'=> $listEventShift,
        'options'=>array(
            'theme'=> false,
            'header' => array(
                'left' => 'month,agendaWeek',
                'center' => 'title',
                'right' => 'today ,prev,next',
            ),
            //'isRTL' => true, //Displays the calendar right-to-left(true) or left-to-right(default:false)
            //'weekends' => false, //Displays the satuday and sunday in calendar (true: display or false: hidden)
            //'height' => '600', //Will make the entire calendar (including header) a pixel height.
            //'contentHeight' => '400', //Will make the calendar's content area a pixel height.
            //'viewDisplay'=>'js:function(view){attachBehaviorsViewDisplayCal(view)}',
            'timeFormat'=> '',
            'minTime'=>'6:00',
            'maxTime'=>'23:00',
            
            'aspectRatio' => '1.8', //Determines the width-to-height aspect ratio of the calendar.
            //'firstDay' => '1', //The day that each week begins -> Sunday=0, Monday=1, Tuesday=2, etc.
            'editable'=>$edittable,
            'droppable'=>$droppable,
            'disableResizing'=>$disableResizing,
            'disableDragging'=>$disableDragging,
           /* 'view'=>array(
                'visStart' =>yii::app()->dateFormatter->format('y-MM-dd',$plan->startdate),
                'visEnd' => yii::app()->dateFormatter->format('y-MM-dd',$plan->enddate),
                'start' => yii::app()->dateFormatter->format('y-MM-dd',$plan->startdate),
                'end' => yii::app()->dateFormatter->format('y-MM-dd',$plan->enddate),
            ),*/
            'month'=>((int)yii::app()->dateFormatter->format('MM',$plan->startdate)-1),
            'day'=>(int)yii::app()->dateFormatter->format('dd',$plan->startdate),
            'year'=>(int)yii::app()->dateFormatter->format('y',$plan->startdate),
            /*
            'start'=> date('Y-m-d',strtotime($plan->startdate)),
            'end'=> date('Y-m-d',strtotime($plan->enddate)),
            'visStart'=>date('Y-m-d',strtotime($plan->startdate)),
            'visEnd'=>date('Y-m-d',strtotime($plan->enddate)),*/
            'defaultView'=>'month', //month ,basicWeek, basicDay, agendaWeek, agendaDay
            //'allDaySlot' => false, //When hidden with false, all-day events will not be displayed in agenda views.
            
            'allDayText' => 'Cả ngày', //The text titling the "all-day" slot at the top of the calendar. -> default:'all day'
        //Text/Time Customization -> http://arshaw.com/fullcalendar/docs/text/timeFormat/
            'columnFormat' => array( //Determines the text that will be displayed on the calendar's column headings.
                'month' => 'ddd',
                'customer'=>'ddd',    // Mon ->sortDay
                'week' => 'ddd, d/M', // Mon 31/10
                'day' => 'dddd, d/M',
 // Monday 31/10 ->fullDay
            ),
            'titleFormat' => array( //Determines the text that will be displayed in the header's title.
                'month' => 'MMMM/yyyy',                             // September2009
                'week' => 'd[ yyyy]/MMM { &#8212; d/MMM yyyy}', // 7 - 13 Sep 2009
                'day' => 'dddd, d/MMM/yyyy',                  // Tuesday, 8 Sep, 2009
            ),
            'buttonText' => array( //Text that will be displayed on buttons of the header.
                'prev' => '&nbsp;&#9668;&nbsp;',  // left triangle
                'next' => '&nbsp;&#9658;&nbsp;',  // right triangle
                'prevYear' => '&nbsp;&lt;&lt;&nbsp;', // <<
                'nextYear' => '&nbsp;&gt;&gt;&nbsp;',
                'customer'=>'Tuy chon', 
                'today' => 'Hôm nay', //default: today
                'month' => 'Tháng', //default: month
                'week' =>  'Tuần', //default: week
                'day' =>   'Ngày' //default: day
            ),
            'monthNames' => array(  //Full names of months.
                'Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'
            ),
            'monthNamesShort' => array(  //Abbreviated names of months.
                '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'
            ),
            'dayNames' => array(  //Full names of days-of-week.
                'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật'
            ),
            'dayNamesShort' => array(  //Abbreviated names of days-of-week.
                'Chủ nhật', 'Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7'
            ),
            
            'drop'=>"js:function(date, allDay) {Prolab.attachBehaviorsDropCal(this,date, allDay)}"
            ,
            'eventRender'=>'js:function(event, element){Prolab.attachBehaviorsEventRenderCal(event, element)}',
            'eventDrop'=>"js:function(calEvent, dayDelta, minuteDelta, allDay, revertFunc, jsEvent, ui, view){Prolab.attachBehaviorsEventDropCal(calEvent, dayDelta, minuteDelta, allDay, revertFunc, jsEvent, ui, view)}",
        //Text/Time Customization -> http://arshaw.com/fullcalendar/docs/text/timeFormat/
            'selectable' => false,
            'selectHelper' => true,
            'select' => "js:function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent',{title: title, start: start, end: end, allDay: allDay}, true ); 
                }
                    calendar.fullCalendar('unselect');
            }",
        //Clicking & Hovering -> http://arshaw.com/fullcalendar/docs/mouse/eventClick/
            'eventClick'=>'js:function(event, eventElement){attachBehaviorsEventClick(event, eventElement)}',  
        ),
        //Clicking & Hovering -> http://arshaw.com/fullcalendar/docs/mouse/eventClick/
        'htmlOptions'=>array(
                'style'=>'margin: 0 auto;'
               //'style'=>'width:800px;margin: 0 auto;'
        ),
    )
);
?>

<script>
  



var Prolab = Prolab || {};
Prolab.behaviorsCalDrop={};
Prolab.attachBehaviorsDropCal = function(self,date,allDay) {
    jQuery.each(Prolab.behaviorsCalDrop, function() {
      this(self,date,allDay);
    });
  }
Prolab.attachBehaviorsEventRenderCal =function(event, element){
    element.find('.fc-event-title').append("<br/>" + event.description);
    element.find('.fc-event-title').append("<br/>" + event.corect);
}
  
Prolab.attachBehaviorsEventDropCal = function(calEvent, dayDelta, minuteDelta, allDay, revertFunc, jsEvent, ui, view){
    calEvent.allDay = false;
    var shiftStart =new Date(<?php echo (int)yii::app()->dateFormatter->format('y',$plan->startdate);?>,<?php echo ((int)yii::app()->dateFormatter->format('MM',$plan->startdate)-1);?>,<?php echo (int)yii::app()->dateFormatter->format('d',$plan->startdate);?>);
    var shiftEnd = new Date(<?php echo (int)yii::app()->dateFormatter->format('y',$plan->enddate);?>,<?php echo ((int)yii::app()->dateFormatter->format('MM',$plan->enddate)-1);?>,<?php echo (int)yii::app()->dateFormatter->format('d',$plan->enddate);?>);
    if(calEvent.start<shiftStart||calEvent.start>shiftEnd){
        alert("Ngày chọn không nằm trong chu kỳ <?php echo $plan->name;?>");
        revertFunc();    
    }
    var url="<?php echo Yii::app()->controller->createUrl('UpdateShiftDetail') ;?>";
    var pData={ids:calEvent.className,date:$.datepicker.formatDate('dd-mm-yy',calEvent.start)};
    $.post(url,pData,function(data){
        var rel = eval("("+data+")");
        if(rel.error==1){
            alert('Nhân viên đã có ca làm việc!');
            revertFunc();          
        }
    })
}
var getEmpIds=function(){
    var re=[];
   $('#list_emp input:checked ').each( function(){
       re.push($(this).val()); 
   });
  return  re; 
}
var getAction =function(){
    var re;
   $('#list_action input:checked ').each( function(){
       re=$(this).val(); 
   });
   return re;
}

 Prolab.behaviorsCalDrop.shift=function(self,day,allDay){
    if(!$(self).hasClass('shift-event')) return;
    if(getEmpIds()==""){
       alert('Chưa chọn nhân viên!');
       return;  
    }
    var shiftday =$.datepicker.formatDate('dd-mm-yy',day);
    var s=eval("("+$(self).attr('data')+")");
    var shiftStart =new Date(<?php echo (int)yii::app()->dateFormatter->format('y',$plan->startdate);?>,<?php echo ((int)yii::app()->dateFormatter->format('MM',$plan->startdate)-1);?>,<?php echo (int)yii::app()->dateFormatter->format('d',$plan->startdate);?>);
    var shiftEnd = new Date(<?php echo (int)yii::app()->dateFormatter->format('y',$plan->enddate);?>,<?php echo ((int)yii::app()->dateFormatter->format('MM',$plan->enddate)-1);?>,<?php echo (int)yii::app()->dateFormatter->format('d',$plan->enddate);?>);
    if(day<shiftStart||day>shiftEnd){
        alert("Ngày chọn không nằm trong chu kỳ <?php echo $plan->name;?>");
        return;    
    }
    var dstart = s.starttime.split(':');
    var dend = s.endtime.split(':');
    var sdate = new Date(day.setHours(dstart[0],dstart[1]));
    var edate = new Date(day.setHours(dend[0],dend[1]));
    var originalEventObject = $(self).data('eventObject');
    var copiedEventObject = $.extend({}, originalEventObject);
    var url="<?php echo Yii::app()->controller->createUrl('SaveShiftDetail') ;?>";
    var pData={ids:getEmpIds(),shiftdate:shiftday,shiftid:s.id};
    $.post(url,pData,function(data){
        var rel = eval("("+data+")");
        if(rel.error!=0){
            alert('có '+rel.error+' nhân viên đã có ca làm việc');
        }
        loadEvent();
    })
 };
 function loadEvent(){
    var url="<?php echo Yii::app()->controller->createUrl('LoadShiftDetail') ;?>";
    var pData={ids:getEmpIds(),plan_id:"<?php echo $plan->id ;?>",status:0};
    $.post(url,pData,function(data){
        var rel = eval("("+data+")");
        $('#calendar').fullCalendar('removeEvents').fullCalendar( 'addEventSource',rel.listEventShift);
    });
 }
 function attachBehaviorsEventClick(event, eventElement){
       var url = '<?php echo Yii::app()->controller->createUrl('Update'); ?>'+'&id='+event.id;
       var d ={};
       $.ajax(url,d).done(function (data) {
           var b = $(data);
           if (!b.hasClass('form')) b = b.find('.form');
               var m = 'modal_edit_event_' + event.id;
               Prolab.showModal(this, m, {title:"Thông tin lịch trực", body:b, submited:function (result) {
               loadEvent(); 
              // $('#eventCalendar').fullCalendar('refetchEvents');
               $("#" + m).find("a.close").trigger('click');
           }});
       });   
 }
</script>

