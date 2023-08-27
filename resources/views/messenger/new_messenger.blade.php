<style>
    * {
	 margin: 0;
	 padding: 0;
	 border: 0;
	 box-sizing: border-box;
	 font: 16px sans-serif;
}
 :focus {
	 outline: 0;
}
 a {
	 text-decoration: none;
}
 body {
	 background: #f4f7f9;
}
 html, body {
	 height: 100% !important;
}
 .container {
	 display: flex;
	 height: 100% !important;
}
 sidebar {
	 width: 300px;
	 min-width: 300px;
	 display: flex;
	 background: #fff;
	 flex-direction: column;
	 border-right: 1px solid #ccc;
	 transition: 500ms all;
}
 sidebar .logo {
	 display: flex;
	 margin: 10px 0 0 0;
	 padding-bottom: 10px;
	 align-items: center;
	 justify-content: center;
	 color: #000;
	 font-size: 3em;
	 letter-spacing: 7px;
	 border-bottom: 1px solid #ccc;
}
 sidebar .list-wrap {
	 width: 100%;
	 overflow: auto;
}
 sidebar .list-wrap .list {
	 border-bottom: 1px solid #ccc;
	 background: #fff;
	 display: flex;
	 align-items: center;
	 padding: 5px;
	 height: 70px;
	 cursor: pointer;
}
 sidebar .list-wrap .list:hover, sidebar .list-wrap .list.active {
	 background: #f4f7f9;
}
 sidebar .list-wrap .list img {
	 border-radius: 50%;
	 width: 50px;
	 height: 50px;
	 object-fit: cover;
	 margin-right: 10px;
	 box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.5);
}
 sidebar .list-wrap .list .info {
	 flex: 1;
}
 sidebar .list-wrap .list .info .user {
	 font-weight: 700;
}
 sidebar .list-wrap .list .info .text {
	 display: flex;
	 margin-top: 3px;
	 font-size: 0.85em;
}
 sidebar .list-wrap .list .time {
	 margin-right: 5px;
	 margin-left: 5px;
	 font-size: 0.75em;
	 color: #a9a9a9;
}
 sidebar .list-wrap .list .count {
	 font-size: 0.75em;
	 background: #bde2f7;
	 box-shadow: 0 5px 15px -5px rgba(0, 0, 0, .7);
	 padding: 3px;
	 width: 20px;
	 height: 20px;
	 border-radius: 50%;
	 text-align: center;
	 color: #000;
}
 .content {
	 flex: 1;
	 display: flex;
	 flex-direction: column;
}
 .content header {
	 height: 76px;
	 background: #fff;
	 border-bottom: 1px solid #ccc;
	 display: flex;
	 padding: 10px;
	 align-items: center;
}
 .content header img {
	 border-radius: 50%;
	 width: 50px;
	 height: 50px;
	 object-fit: cover;
	 margin-right: 10px;
	 box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.5);
}
 .content header .info {
	 flex: 1;
}
 .content header .info .user {
	 font-weight: 700;
}
 .content header .info .time {
	 display: flex;
	 margin-top: 3px;
	 font-size: 0.85em;
}
 .content header .open {
	 display: none;
}
 .content header .open a {
	 color: #000;
	 letter-spacing: 3px;
}
 .message-wrap {
	 flex: 1;
	 display: flex;
	 flex-direction: column;
	 padding: 15px;
	 overflow: auto;
}
 .message-wrap::before {
	 content: '';
	 margin-bottom: auto;
}
 .message-wrap .message-list {
	 align-self: flex-start;
	 max-width: 70%;
}
 .message-wrap .message-list.me {
	 align-self: flex-end;
}
 .message-wrap .message-list.me .msg {
	 background: #bde2f7;
	 color: #111;
}
 .message-wrap .message-list .msg {
	 background: #fff;
	 box-shadow: 0 5px 15px -5px rgba(0, 0, 0, .1);
	 padding: 10px 5px;
	 margin-bottom: 10px;
	 border-radius: 5px;
}
 .message-wrap .message-list .time {
	 text-align: right;
	 color: #999;
	 font-size: 0.75em;
}
 .message-footer {
	 border-top: 1px solid #ddd;
	 background: #eee;
	 padding: 10px;
	 display: flex;
	 height: 60px;
}
 .message-footer input {
	 flex: 1;
	 padding: 0 20px;
	 border-radius: 5px;
}
 @media only screen and (max-width: 480px), only screen and (max-width: 767px) {
	 sidebar {
		 position: absolute;
		 width: 100%;
		 min-width: 100%;
		 height: 0vh;
		 bottom: 0;
		 box-shadow: 0 5px 25px -5px rgba(0, 0, 0, 1);
	}
	 sidebar.opened {
		 height: 70vh !important;
	}
	 sidebar .logo {
		 display: none;
	}
	 sidebar .list-wrap .list .count {
		 font-size: 0.75em;
	}
	 header .open {
		 display: block !important;
	}
}
 
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
 <input type="hidden" id="toUserIdVal">
<div class="container">
  <sidebar>
   <span class="logo">CHAT</span>
    <div class="list-wrap">
@foreach($all_user as $row)
    <div class="list">    
      <img src="{{url('').'/public/user_images/'.$row->image}}">
      <div class="info">
        <span class="user">{{$row->name}}</span>
        <span class="text">Latest message</span>
      </div>
      <span class="time" style="display:none">1 hour ago</span>
      <span style="display:none" class="userId">{{$row->id}}</span>
    </div>
@endforeach
    </div>
  </sidebar>
  <div class="content">
    <header>
      <img src="" alt="">
      <div class="info">
        <span class="user"></span>
        <span class="time"></span>
      </div>
      <div class="open">
        <a href="javascript:;">UP</a>
      </div>
     
    </header>
      <div class="message-wrap" id="myList">
<!--      <div class="message-list">
          
        <div class="msg">
          <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit minus minima quo corporis.
        </p>
        </div>
        <div class="time">now</div>
      </div>
      <div class="message-list me">
        <div class="msg">
            <p>
              Lorem ipsum dolor sit amet.
            </p>
        </div>
        <div class="time">now</div>
      </div>-->
     
    </div>
       <form class="chat-window">
    <div class="message-footer">       
      <input class="chat-window-message" type="text" data-placeholder="Send a message to {0}" />       
    </div>
            </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    
        let date = new Date();  
let options = {  
    weekday: "long", year: "numeric", month: "short",  
    day: "numeric", hour: "2-digit", minute: "2-digit"  
};  

    
const ls = localStorage.getItem("selected");
let selected = false;
var list = document.querySelectorAll(".list"),
    content = document.querySelector(".content"),
    input = document.querySelector(".message-footer input"),
    open = document.querySelector(".open a");

//init
function init() {
  //input.focus();
  let now = 2;
  const texts = ["new message", "new message",
                "new message! :)", "new message", "new message",
                "Hahaha", "new message .", "new message"];
  for(var i = 4; i < list.length; i++) {
    list[i].querySelector(".time").innerText = `${now} day ago`;
    list[i].querySelector(".text").innerText = texts[(i-4) < texts.length ? (i-4) : Math.floor(Math.random() * texts.length)];
    now++;
  }
}
init();

//process
function process() {
  if(ls != null) {
    selected = true;
    click(list[ls], ls);
  }
  if(!selected) {
    click(list[0], 0);
  }

  list.forEach((l,i) => {
    l.addEventListener("click", function() {
      click(l, i);
    });
  });
  
  try {
    document.querySelector(".list.active").scrollIntoView(true);
  }
  catch {}
  
}
process();

//list click
function click(l, index) {
//    alert($(this).data("id"));
  list.forEach(x => { x.classList.remove("active"); });
  if(l) {
    l.classList.add("active");
    document.querySelector("sidebar").classList.remove("opened");
    open.innerText="UP";
    const img = l.querySelector("img").src,
          user = l.querySelector(".user").innerText,
          time = l.querySelector(".time").innerText;
          userId = l.querySelector(".userId").innerText;
          $('#toUserIdVal').val(userId);
    content.querySelector("img").src = img;
    content.querySelector(".info .user").innerHTML = user;
    content.querySelector(".info .time").innerHTML = time;

    const inputPH = input.getAttribute("data-placeholder");
    input.placeholder = inputPH.replace("{0}", user.split(' ')[0]);

    document.querySelector(".message-wrap").scrollTop = document.querySelector(".message-wrap").scrollHeight;
    
    localStorage.setItem("selected", index);
      var toUserId = document.getElementById("toUserIdVal").value;
    let currentId = '<?php echo Illuminate\Support\Facades\Auth::user()->id?>';
         $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "POST",
            url: "{{url("messenger/get-messages")}}",
            data: {'to_user_id':toUserId},
            success: function (data, textStatus, jqXHR) {
            console.log(data);
            $('#myList').html(data);
            }
    }).done(function (data) {

    }).fail(function (data, textStatus, jqXHR) {
   
    });
  }
}

open.addEventListener("click", (e) => {
  const sidebar = document.querySelector("sidebar");
  sidebar.classList.toggle("opened");
  if(sidebar.classList.value == 'opened')
    e.target.innerText = "DOWN";
  else
    e.target.innerText = "UP";
});
</script>
<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script>
  
    var toUserId = document.getElementById("toUserIdVal").value;
//    let toUserId = $("#toUserId").val();
//    alert(toUserId);
    let currentId = '<?php echo Illuminate\Support\Facades\Auth::user()->id?>';
        
       $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "POST",
           url: "{{url("messenger/get-messages")}}",
            data: {'to_user_id':toUserId},
            success: function (data, textStatus, jqXHR) {
            console.log(data);
            $('#myList').html(data);
            }
    }).done(function (data) {

    }).fail(function (data, textStatus, jqXHR) {
   
    });
    
            
        let chatWindow = document.querySelector('.chat-window'),
                chatWindowMessage = document.querySelector('.chat-window-message');
        
        chatWindow.onsubmit = function (e) {
	e.preventDefault();
        
                 var newNotificationHtml = `
               <div class="message-list me">
        <div class="msg">
          <p>
          `+chatWindowMessage.value+`
        </p>
        </div>
        <div class="time">`+date.toLocaleTimeString("en-us", options)+`</div>
      </div> 
    `;  
          $("#myList").append(newNotificationHtml);
        
         let toUserId = document.getElementById("toUserIdVal").value;
                     $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "POST",
              url: "{{url("messenger/send-message")}}",
            data: {'message':chatWindowMessage.value,'to_user_id':toUserId,'date':date.toLocaleTimeString("en-us", options)},
            success: function (data, textStatus, jqXHR) {
            console.log(data);
           chatWindowMessage.value = "";
            }
    }).done(function (data) {

    }).fail(function (data, textStatus, jqXHR) {
   
    });

	return false;
};  
        
      var notificationsWrapper   = $('.chat-thread');
      
       var notifications     = notificationsWrapper.find('li');   

      var pusher = new Pusher('{{env("PUSHER_APP_KEY")}}', {
        cluster: '{{env("PUSHER_APP_CLUSTER")}}',
        encrypted: true
      });

     
      var channel = pusher.subscribe('messenger-channel');

           // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\Messenger', function(data) {
//           console.log(data);            
//           console.log(document.getElementById("toUserIdVal").value);  
//           console.log('current='+currentId);  
//           if(data.to_user_id == document.getElementById("toUserIdVal").value){
           if(data.to_user_id == currentId && data.user_id == document.getElementById("toUserIdVal").value){
               var newNotificationHtml = `
               <div class="message-list ">
        <div class="msg">
          <p>
          `+data.message+`
        </p>
        </div>
        <div class="time">`+data.show_date+`</div>
      </div> 
    `;  
              var myList = document.getElementById("myList");
        myList.scrollTop = myList.scrollHeight;
        $("#myList").append(newNotificationHtml);
        return false;
           }
           if(data.user_id == currentId){
//               alert('Hi');
//               var newNotificationHtml = `
//                      <div class="message-list me">
//        <div class="msg">
//          <p>
//          `+data.message+`
//        </p>
//        </div>
//        <div class="time">`+data.show_date+`</div>
//      </div>
//    `;  
//              var myList = document.getElementById("myList");
//        myList.scrollTop = myList.scrollHeight;
//        $("#myList").append(newNotificationHtml);
//        return false;
           }
      
      
//        notifications.html(newNotificationHtml + existingNotifications);

//        notificationsCount += 1;
     
//        notificationsCountElem.attr('data-count', notificationsCount);
//        notificationsWrapper.find('.notif-count').text(notificationsCount);
//        notificationsWrapper.show();       
      });
</script>
