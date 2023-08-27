<h4 style="text-align: center;color: #8d9498;">{{__('Monthly Report')}}</h4>
<!--<div id="dncalendar-container">
</div>-->
<link href="{{asset('public/admin_asset')}}/css/full-calendar.css" rel="stylesheet" type="text/css"/>
<script src="{{asset('public/admin_asset')}}/js/full-calendar.js" type="text/javascript"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
        let leaves = <?php echo json_encode($dashboard->get_leaves_calender_data())?>;        
//        console.log(leaves);
        let setEvents = [];
    $.each(leaves, function (key, val) {
        let link = '';
        let title = '';
        let color = '';
        if(val.type === 'Casual'){
            link = 'leave-applications/'+val.id;   
            title = 'Casual leave';   
            color = '#007bff';   
        }else if(val.type === 'Emergency'){
             link = 'emergency-leave-applications/'+val.id; 
             title = 'Emergency leave'; 
             color = '#ffc107'; 
        }          
            let pushVal = {
                title: title,
                url: link,
                start: new Date(val.leave_starting_from),
                end: new Date(val.leave_ending_on),
                backgroundColor: color, //red
                borderColor: color, //red
                allDay: true
            };
            setEvents.push(pushVal);
        });
      
    var calendarEl = document.getElementById('calendar');
    var dt = new Date();
    let today = dt.getFullYear() + "-" + (dt.getMonth() + 1) + "-" + dt.getDate().toString().padStart(2, "0");
//    alert(today);
    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      initialDate: today,
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      events: setEvents,
//      events: [
//        {
//          title: 'Business Lunch',
//          start: '2020-09-03T13:00:00',
//          constraint: 'businessHours'
//        },
//        {
//          title: 'Meeting',
//          start: '2020-09-13T11:00:00',
//          constraint: 'availableForMeeting', // defined below
//          color: '#257e4a'
//        },
//        {
//          title: 'Conference',
//          start: '2020-09-18',
////          end: '2020-09-20'
//        },
//        {
//          title: 'Party',
//          start: '2020-09-29T20:00:00'
//        },
//
//        // areas where "Meeting" must be dropped
//        {
//          groupId: 'availableForMeeting',
//          start: '2020-09-11T10:00:00',
//          end: '2020-09-11T16:00:00',
//          display: 'background'
//        },
//        {
//          groupId: 'availableForMeeting',
//          start: '2020-09-13T10:00:00',
//          end: '2020-09-13T16:00:00',
//          display: 'background'
//        },
//
//        // red areas where no events can be dropped
//        {
//          start: '2020-09-24',
//          end: '2020-09-28',
//          overlap: false,
//          display: 'background',
//          color: '#ff9f89'
//        },
//        {
//          start: '2020-09-06',
//          end: '2020-09-08',
//          overlap: false,
//          display: 'background',
//          color: '#ff9f89'
//        }
//      ]
    });
    calendar.render();
  });

</script>
<style>

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>
<div style="height:350px" id='calendar'></div>
