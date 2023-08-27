@inject('dashboard', 'App\Models\Dashboard')
<!--   Core JS Files   -->
<script src="{{asset('public/admin_asset')}}/select2/select2.js" type="text/javascript"></script>
<script src="{{asset('public/admin_asset')}}/js/core/popper.min.js"></script>
<script src="{{asset('public/admin_asset')}}/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="{{asset('public/admin_asset')}}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="{{asset('public/admin_asset')}}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('public/admin_asset')}}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="{{asset('public/admin_asset')}}/js/plugin/chart.js/chart.min.js"></script>

<script src="{{asset('public/admin_asset')}}/js/armaan.js"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('public/admin_asset')}}/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="{{asset('public/admin_asset')}}/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="{{asset('public/admin_asset')}}/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('public/admin_asset')}}/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="{{asset('public/admin_asset')}}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('public/admin_asset')}}/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="{{asset('public/admin_asset')}}/js/plugin/sweetalert/sweetalert.min.js"></script>
<script src="{{asset('public/admin_asset')}}/js/custom/custom.js"></script>


<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{asset('public/admin_asset')}}/js/setting-demo.js"></script>
<script src="{{asset('public/admin_asset')}}/js/demo.js"></script>
<script src="{{asset('public/admin_asset')}}/js/setting-demo2.js"></script>
<script type="text/javascript" src="{{asset('public/admin_asset/calender')}}/dncalendar.min.js"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>


@if(Session::has('message'))
<script>
    //Notify
$.notify({
	icon: 'flaticon-alarm-1',
	title: '<?php echo \Illuminate\Support\Facades\Session::get('title')?>',
	message: '<?php echo \Illuminate\Support\Facades\Session::get('message')?>',
},{
	type: 'secondary',
	placement: {
		from: "bottom",
		align: "right"
	},
	time: 1000,
});

</script>
<?php \Illuminate\Support\Facades\Session::forget(['title','message'])?>
@endif

@include('layouts.admin.include.dashboard_charts')

<script type="text/javascript">
    $('.select2').select2({
    selectOnClose: true,
   theme: "classic"
});

</script>
<script>
$('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: '#177dff',
    fillColor: 'rgba(23, 125, 255, 0.14)'
});

$('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: '#f3545d',
    fillColor: 'rgba(243, 84, 93, .14)'
});

$('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: '#ffa534',
    fillColor: 'rgba(255, 165, 52, .14)'
});
</script>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus');
});

function notifiAlert(title,message){
    $.notify({
	icon: 'flaticon-alarm-1',
	title: title,
	message: message
},{
	type: 'secondary',
	placement: {
		from: "bottom",
		align: "right"
	},
	time: 1000,
});
}

    function checkPass(pass){  
        let responseData = "";
         $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("check-user-password")}}",
            async: false,  
            data: {'pass':pass},
            success: function (data, textStatus, jqXHR) {
                responseData = data;
            },error:function(data, textStatus, jqXHR){
                responseData = data;
            }
        });
//        alert(responseData);
         return responseData;
    }
    $('#themeMode').on('click',function(){
        let themeMode = document.getElementById('themeMode').getAttribute('data-background-color');
    //   alert(themeMode);
        let sendMode = ''; 
        if(themeMode == 'white'){
             sendMode = 'dark';
             let themeMode = document.getElementById('themeMode').setAttribute('data-background-color',sendMode);
             document.getElementById('themeMode').innerHTML = '<i class="la flaticon-arrows-1"></i><span class="notif-img">Light Mode</span>';
         }else{
            sendMode = 'white'; 
            let themeMode = document.getElementById('themeMode').setAttribute('data-background-color',sendMode);
            document.getElementById('themeMode').innerHTML = '<i class="la flaticon-arrows-1"></i><span class="notif-img">Dark Mode</span>';
         }
        let sessMode = '';        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("set-theme-mode")}}",
            async: false,  
            data: {'theme_mode':sendMode},
            success: function (data, textStatus, jqXHR) {
                sessMode = data;
            },error:function(data, textStatus, jqXHR){
                
            }            
        });         

         if(sessMode === 'dark'){
             
         document.getElementById("main-body").setAttribute("data-background-color", sessMode);         
         document.getElementById("navbar").setAttribute("data-background-color", sessMode);         
         
         $("#sidebar").addClass('dark-mode-modal');
         $(".content").addClass("dark-mode");
         $(".card").addClass("dark-mode-modal");
         $(".navbar").addClass("dark-mode-modal");
         $(".footer").addClass("dark-mode-modal");
         $(".panel-header").addClass("dark-mode");
         $(".modal-content").addClass("dark-mode-modal");
         $(".panel-header").removeClass("bg-primary-gradient");  
         $(".row-card-no-pd").removeClass("row-card-no-pd");
        }else{            
         document.getElementById("main-body").setAttribute("data-background-color", sessMode);         
         document.getElementById("navbar").setAttribute("data-background-color", 'blue2');         
         
         $("#sidebar").removeClass('dark-mode-modal');
         $(".content").removeClass("dark-mode");
         $(".card").removeClass("dark-mode-modal");
         $(".navbar").removeClass("dark-mode-modal");
         $(".footer").removeClass("dark-mode-modal");
         $(".panel-header").removeClass("dark-mode");
         $(".panel-header").addClass("bg-primary-gradient");   
         $(".modal-content").removeClass("dark-mode-modal");
        }
     
    });

  let sessTheme = '<?php echo  CurrSessionMode();?>';
  if(sessTheme == 'dark'){
//     $(".card").addClass("dark-mode-modal");
     $(".content").addClass("dark-mode");
//     $(".row-card-no-pd").removeClass("row-card-no-pd");
     $(".modal-content").addClass("dark-mode-modal");
  }
</script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <script src="{{asset('public/admin_asset')}}/js/easyNotify.js" type="text/javascript"></script>
    <script>
              $userId = {{ Auth::id() }};
             $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "post",
            url: "{{url("get-user-notification")}}",
            data: {'id':$userId},
            async: false,  
            success: function (data, textStatus, jqXHR) {
                var notificationsWrapper   = $('.dropdown-notifications');
                var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
                var notificationsCountElem = notificationsToggle.find('i[data-count]');     
        
                var notificationsCount     = parseInt(notificationsCountElem.data('count'));
  
    
                var notifications          = notificationsWrapper.find('div.notif-center');
            notifications.html(data.response);
            $('.data-counter').data('count',data.total_seen_data); 
            notificationsCountElem.attr('data-count', data.total_seen_data);
            notificationsWrapper.find('.notif-count').text(data.total_seen_data);
    
    
    },error:function(data, textStatus, jqXHR){
                
            }            
        }); 
    </script>
    <script type="text/javascript">
      var notificationsWrapper   = $('.dropdown-notifications');
      var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
      var notificationsCountElem = notificationsToggle.find('i[data-count]');     
//      console.log(notificationsCountElem);
      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      
    //   var notifications          = notificationsWrapper.find('ul.dropdown-menu');      
      var notifications          = notificationsWrapper.find('div.notif-center');
    //   console.log(notifications);
    //   if (notificationsCount <= 0) {
    //     notificationsWrapper.hide();
    //   }

      // Enable pusher logging - don't include this in production
      // Pusher.logToConsole = true;

      var pusher = new Pusher('{{env("PUSHER_APP_KEY")}}', {
        cluster: '{{env("PUSHER_APP_CLUSTER")}}',
        encrypted: true
      });

      // Subscribe to the channel we specified in our Laravel Event
//      var channel = pusher.subscribe('status-liked');
      var channel = pusher.subscribe('notification-channel-report-management'+{{ Auth::id() }});

      // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\Notification', function(data) {
           console.log(data);
   
        var existingNotifications = notifications.html();       
        var newNotificationHtml = `
                                    <a href="`+data.link+`/`+data.notification_id+`">
                                        <div class="notif-icon notif-primary"> <i class="la flaticon-envelope-3"></i> </div>
                                        <div class="notif-content">
                                            <span class="block">
                                            `+data.message+`
                                            </span>        
                                            <span class="time">`+data.show_date+`</span> 
                                        </div>
                                    </a><hr>
        `;
        notifications.html(newNotificationHtml + existingNotifications);

        notificationsCount += 1;
     
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
        var myImg = "https://leave-management.m360ict.com/public/logo.png";
        var options = {
    title: 'Report Management',
    options: {
      body: data.message,
      icon: myImg,
      lang: 'en-US'
    }
  };
  
  $("#easyNotify").easyNotify(options);
      });
    </script>
     <script>
   var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
   $( function() {
    var projects = [
      {
        value: "users",
        label: "Employee Section",
        desc: "Search by employee information",
        icon: "jquery_32x32.png"
      },
      {
        value: "jquery-ui",
        label: "jQuery UI",
        desc: "the official user interface library for jQuery",
        icon: "jqueryui_32x32.png"
      },
      {
        value: "sizzlejs",
        label: "Sizzle JS",
        desc: "a pure-JavaScript CSS selector engine",
        icon: "sizzlejs_32x32.png"
      }
    ];
 
    $( "#searchHeader" ).autocomplete({
        position: {
        my: "left+0 top+10",
    },
      minLength: 0,
      source: projects,
      focus: function( event, ui ) {
        $( "#project" ).val( ui.item.label );
        return false;
      },
      select: function( event, ui ) { 
        $( "#searchHeader" ).val( ui.item.label );
        $( "#searchHeader-id" ).val( ui.item.value );
        $( "#searchHeader-description" ).html( ui.item.desc );
        $( "#searchHeader-icon" ).attr( "src", "images/" + ui.item.icon );
        let searchData = prompt("Enter search keywords:", "");
        window.location.href = "{{ url('search')}}?section="+ui.item.value+'&&keywords='+searchData;
        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "<br>" + item.desc + "</div>" )
        .appendTo(ul);
    };
  } );
  
  $('#switchLanguage').on('change',function(){
             $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("switchh-language")}}",
            data: {'language':$('#switchLanguage').val()},            
            success: function (data, textStatus, jqXHR) {
                location.reload();
    }          
        });
  })
  </script>
  
