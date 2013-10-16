<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='../fullcalendar/fullcalendar.print.css' media='print' />
<script type='text/javascript' src='../jquery/jquery-1.5.min.js'></script>
<script type='text/javascript' src='../jquery/jquery-ui-1.8.11.custom.min.js'></script>
<script type='text/javascript' src='../fullcalendar/fullcalendar.js'></script>
<script type='text/javascript'>

        $(document).ready(function() {
       
       
                /* initialize the external events
                -----------------------------------------------------------------*/
       
                var gid = 1; // event.id == 0 considered to be undefined (boo)
                var dragged = null;
                $('#external-events div.external-event').each(function() {
                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                                title: $.trim($(this).text()), // use the element's text as the event title
                                id: gid ++
                        };
                       
                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);
                       
                        // make the event draggable using jQuery UI
                        $(this).draggable({
                                zIndex: 999,
                                revert: true,      // will cause the event to go back to its
                                revertDuration: 0  //  original position after the drag
                        });
                });
               
                $('#external-events').droppable({
                        drop: function( event, ui ) {
                                if ( dragged && ui.helper && ui.helper[0] === dragged[0] ) {
                                        var event = dragged[1];
                                //$('#calendar').fullCalendar('removeEvent',id );
                                calendar.fullCalendar('removeEvents',event.id);
                                var el = $( "<div class='external-event'>" ).appendTo( this ).text( event.title );
                                el.draggable({
                                                zIndex: 999,
                                                revert: true,      // will cause the event to go back to its
                                                revertDuration: 0  //  original position after the drag
                                        });
                                el.data('eventObject', { title: event.title, id :event.id });
                                }
                        }
                });
       
       
                /* initialize the calendar
                -----------------------------------------------------------------*/
               
                var calendar = $('#calendar').fullCalendar({
                        header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,agendaWeek,agendaDay'
                        },
                        editable: true,
                        droppable: true, // this allows things to be dropped onto the calendar !!!
                        drop: function(date, allDay) { // this function is called when something is dropped
                       
                                // retrieve the dropped element's stored Event Object
                                var originalEventObject = $(this).data('eventObject');
                               
                                // we need to copy it, so that multiple events don't have a reference to the same object
                                var copiedEventObject = $.extend({}, originalEventObject);
                               
                                // assign it the date that was reported
                                copiedEventObject.start = date;
                                copiedEventObject.allDay = allDay;
                               
                                // render the event on the calendar
                                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
                               
                                // is the "remove after drop" checkbox checked?
                                if ($('#drop-remove').is(':checked')) {
                                        // if so, remove the element from the "Draggable Events" list
                                        $(this).remove();
                                }
                        },
                        eventDragStart: function( event, jsEvent, ui, view ) {
                                dragged = [ ui.helper[0], event ];
                        }
                });
        });

</script>
<style type='text/css'>

        body {
                margin-top: 40px;
                text-align: center;
                font-size: 14px;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                }
               
        #wrap {
                width: 1100px;
                margin: 0 auto;
                }
               
        #external-box {
                float: left;
                width: 150px;
                padding: 0 10px;
                border: 1px solid #ccc;
                background: #eee;
                text-align: left;
                }
               
        #external-events h4 {
                font-size: 16px;
                margin-top: 0;
                padding-top: 1em;
                }
               
        .external-event { /* try to mimick the look of a real event */
                margin: 10px 0;
                padding: 2px 4px;
                background: #3366CC;
                color: #fff;
                font-size: .85em;
                cursor: pointer;
                }
               
        #external-events p {
                margin: 1.5em 0;
                font-size: 11px;
                color: #666;
                }
               
        #external-box p input {
                margin: 0;
                vertical-align: middle;
                }

        #calendar {
                float: right;
                width: 900px;
                }
               
        .fc-view { /* prevents dragging outside of widget */
                overflow: visible;
        }

</style>
</head>
<body>
<div id='wrap'>
<div id="external-box">
<div id='external-events'>
<h4>Draggable Events</h4>
<div class='external-event'>My Event 1</div>
<div class='external-event'>My Event 2</div>
<div class='external-event'>My Event 3</div>
<div class='external-event'>My Event 4</div>
<div class='external-event'>My Event 5</div>
</div>
<p>
<input type='checkbox' id='drop-remove' checked="checked"/> <label for='drop-remove'>remove after drop</label>
</p>
</div>
<div id='calendar'></div>

<div style='clear:both'></div>
</div>
</body>
</html>
