<style>
    @import 'https://fonts.googleapis.com/css?family=Noto+Sans';
 body {
	 padding: 0;
	 margin: 0;
	 background: -moz-linear-gradient(-45deg, #183850 0, #183850 25%, #192c46 50%, #22254c 75%, #22254c 100%);
	 background: -webkit-linear-gradient(-45deg, #183850 0, #183850 25%, #192c46 50%, #22254c 75%, #22254c 100%);
	 background-repeat: no-repeat;
	 background-attachment: fixed;
}
 ::-webkit-scrollbar {
	 width: 10px;
}
 ::-webkit-scrollbar-track {
	 border-radius: 10px;
	 background-color: rgba(25, 147, 147, 0.1);
}
 ::-webkit-scrollbar-thumb {
	 border-radius: 10px;
	 background-color: rgba(25, 147, 147, 0.2);
}
 .chat-thread {
	 margin: 24px auto 0 auto;
	 padding: 0 20px 0 0;
	 list-style: none;
	 overflow-y: scroll;
	 overflow-x: hidden;
}
/* .chat-thread li {
	 position: relative;
	 clear: both;
	 display: inline-block;
	 padding: 16px 40px 16px 20px;
	 margin: 0 0 20px 0;
	 font: 16px/20px 'Noto Sans', sans-serif;
	 border-radius: 10px;
	 background-color: rgba(25, 147, 147, 0.2);
}*/
/* Chat - Avatar */
/* .chat-thread li:before {
	 position: absolute;
	 top: 0;
	 width: 50px;
	 height: 50px;
	 border-radius: 50px;
	 content: '';
}
 Chat - Speech Bubble Arrow 
 .chat-thread li:after {
	 position: absolute;
	 top: 15px;
	 content: '';
	 width: 0;
	 height: 0;
	 border-top: 15px solid rgba(25, 147, 147, 0.2);
}
 .chat-thread li:nth-child(odd) {
	 animation: show-chat-odd 0.15s 1 ease-in;
	 -moz-animation: show-chat-odd 0.15s 1 ease-in;
	 -webkit-animation: show-chat-odd 0.15s 1 ease-in;
	 float: right;
	 margin-right: 80px;
	 color: #0ad5c1;
}
 .chat-thread li:nth-child(odd):before {
	 right: -80px;
	 background-image: url(data:image/jpeg;
	base64,/9j/4AAQSkZJRgABAQEAYABgAAD/4QBoRXhpZgAATU0AKgAAAAgABAEaAAUAAAABAAAAPgEbAAUAAAABAAAARgEoAAMAAAABAAIAAAExAAIAAAASAAAATgAAAAAAAABgAAAAAQAAAGAAAAABUGFpbnQuTkVUIHYzLjUuMTAA/9sAQwAHBQUGBQQHBgUGCAcHCAoRCwoJCQoVDxAMERgVGhkYFRgXGx4nIRsdJR0XGCIuIiUoKSssKxogLzMvKjInKisq/9sAQwEHCAgKCQoUCwsUKhwYHCoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioq/8AAEQgAMgAyAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A8wre0/w55qLLqM62ysMrEWAdh+PSl8M6fFLMbu5K7YziNT3b1/CqniRLq98UA2SlhHGobnA55FdbajHmZwxTnLlRtm78NabDGhs/tEwchmVfMGD0znvn0pqahoN3fCH+z0RcHcWiKY4745/KuUVtTtdSFtJCvmxHmN+317Gp5dTthGZXUSXPJJVsh1PUH1rP2rZt7GKOi1LwxHIv2jRg20jPks4b64b+h/OuZZWRyrqVZTggjBBrZ0PWftFwkA8xImTpu7gVJr1kpX7UhzJ0cZ5I9a0umtDJxcWYVFFFBJ1WlKkOmQASYyoYjZnk81aukuLHTP7YFtDeW6zJEFmyu4555H8PQemaz9NmR9PhO45C7T+HFa1rrk9iwSZ3vLJU+WyaVUCsDncMjJI64H41riYRVHmS7E4KbliOWT7nPePtPvbm8j1trWSyF3GpkgkYEbl4BBHTjHBrn49GkfRLnUpn2tBgtFj76k4GD/e749K63xb4gtdTtp4LeRismGVyOmDnpWBq2pXd74ZsdPjG2GCTdHDEnzSN/ebHLH+VeXBuyR7E4wu35EXhKKObVCRnMKMwY+hwAPz5rrJ7bzYXTfu3Ag5yKwfC+nNZvcPPJHvdQDGnJjOehPTPsOlb0zLFA8m/hVJ/SvXo0oundnhV6slU5UcjRRRXPY3Luk3giYwSHCscqfetfULXOlR3TXIhZ2ZYfLILHHDkjsO3PJPSuXqeC5aPzd5ZjIQdxOcEDFa+0fJyEKmvac5myyQWJlRZnkkTHytjoeuPepLaa9vi4ib7LbOMyFG5KjtnrVMabPd30gcrCjMSZGPQf1NbF0i29pHBAUlbABVT8pPqSOwrljDW53c+lrl/RWxvymyDAWPjsPSpdVnVF8iNsk8tz0HpVFLloowEYvJjBkIwB7AdhUGSxJJyT1JrpU2o8py1IwlJS6hRS0VAiKiiikUKKUUUUxC0ooooAKKKKQH/2Q==);
}
 .chat-thread li:nth-child(odd):after {
	 border-right: 15px solid transparent;
	 right: -15px;
}
 .chat-thread li:nth-child(even) {
	 animation: show-chat-even 0.15s 1 ease-in;
	 -moz-animation: show-chat-even 0.15s 1 ease-in;
	 -webkit-animation: show-chat-even 0.15s 1 ease-in;
	 float: left;
	 margin-left: 80px;
	 color: #0ec879;
}
 .chat-thread li:nth-child(even):before {
	 left: -80px;
	 background-image: url(data:image/jpeg;
	base64,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);
}
 .chat-thread li:nth-child(even):after {
	 border-left: 15px solid transparent;
	 left: -15px;
}*/
 .chat-window {
	 position: fixed;
	 bottom: 18px;
}
 .chat-window-message {
	 width: 100%;
	 height: 48px;
	 font: 32px/48px 'Noto Sans', sans-serif;
	 background: none;
	 color: #0ad5c1;
	 border: 0;
	 border-bottom: 1px solid rgba(25, 147, 147, 0.2);
	 outline: none;
}
/* Small screens */
 @media all and (max-width: 767px) {
	 .chat-thread {
		 width: 90%;
		 height: 260px;
	}
	 .chat-window {
		 left: 5%;
		 width: 90%;
	}
}
/* Medium and large screens */
 @media all and (min-width: 768px) {
	 .chat-thread {
		 width: 50%;
		 height: 320px;
	}
	 .chat-window {
		 left: 25%;
		 width: 50%;
	}
}
/* @keyframes show-chat-even {
	 0% {
		 margin-left: -480px;
	}
	 100% {
		 margin-left: 0;
	}
}
 @-moz-keyframes show-chat-even {
	 0% {
		 margin-left: -480px;
	}
	 100% {
		 margin-left: 0;
	}
}
 @-webkit-keyframes show-chat-even {
	 0% {
		 margin-left: -480px;
	}
	 100% {
		 margin-left: 0;
	}
}
 @keyframes show-chat-odd {
	 0% {
		 margin-right: -480px;
	}
	 100% {
		 margin-right: 0;
	}
}
 @-moz-keyframes show-chat-odd {
	 0% {
		 margin-right: -480px;
	}
	 100% {
		 margin-right: 0;
	}
}
 @-webkit-keyframes show-chat-odd {
	 0% {
		 margin-right: -480px;
	}
	 100% {
		 margin-right: 0;
	}
}*/

.evenClass{
  margin-right: 480px;  
   position: relative;
	 clear: both;
	 display: inline-block;
	 padding: 16px 40px 16px 20px;
         margin-top: 10px;
	 /*margin: 0 0 20px 0;*/
	 font: 16px/20px 'Noto Sans', sans-serif;
	 border-radius: 10px;
	 background-color: rgba(25, 147, 147, 0.2);
}
.oddClass{
  margin-left: 480px;
 position: relative;
	 clear: both;
	 display: inline-block;
	 padding: 16px 40px 16px 20px;
         margin-top: 10px;
	 /*margin: 0 0 20px 0;*/
	 font: 16px/20px 'Noto Sans', sans-serif;
	 border-radius: 10px;
	 background-color: rgba(25, 147, 147, 0.2);  
}
 
</style>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<input type="text" value="">
<ul class="chat-thread" id="myList">
    <li class="evenClass">Are we meeting today?</li>
    <li class="oddClass">yes, what time suits you?</li>
	<li class="evenClass">I was thinking after lunch, I have a meeting in the morning</li>
	<li class="evenClass">I was thinking after lunch, I have a meeting in the morning</li>
	<li class="oddClass">I was thinking after lunch, I have a meeting in the morning</li>
</ul>

<form class="chat-window">
	<input class="chat-window-message" name="chat-window-message" type="text" autocomplete="off" autofocus />
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script type="text/javascript">
        let toUserId = '<?php echo $to_user_id?>';
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
//        alert('Going');
                    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "POST",
            url: "{{url("messenger/send-message")}}",
            data: {'message':chatWindowMessage.value,'to_user_id':toUserId},
            success: function (data, textStatus, jqXHR) {
            console.log(data);
//            this.val('');
            }
    }).done(function (data) {

    }).fail(function (data, textStatus, jqXHR) {
   
    });

	return false;
};  
        
      var notificationsWrapper   = $('.chat-thread');
//      var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
//      var notificationsCountElem = notificationsToggle.find('i[data-count]');     
//      console.log(notificationsCountElem);
//      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      
       var notifications          = notificationsWrapper.find('li');      
//      var notifications          = notificationsWrapper.find('div.notif-center');
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
      var channel = pusher.subscribe('messenger-channel');

      // Bind a function to a Event (the full Laravel class)
      channel.bind('App\\Events\\Messenger', function(data) {
           console.log(data);            
//             alert(currentId);
           if(data.to_user_id == currentId){
               var newNotificationHtml = `
               <li class="oddClass"><img style="height:50px;width:50px;border-radius:50%;margin-right: 25px;" src="`+data.image+`">`+data.message+`</li>       
        `;  
              var myList = document.getElementById("myList");
        myList.scrollTop = myList.scrollHeight;
        $("#myList").append(newNotificationHtml);
           }
           if(data.user_id == currentId){
//               alert('Hi');
               var newNotificationHtml = `
               <li class="evenClass"><img style="height:50px;width:50px;border-radius:50%;margin-right: 25px;" src="`+data.image+`">`+data.message+`</li>       
        `;  
              var myList = document.getElementById("myList");
        myList.scrollTop = myList.scrollHeight;
        $("#myList").append(newNotificationHtml);
           }
      
      
//        notifications.html(newNotificationHtml + existingNotifications);

//        notificationsCount += 1;
     
//        notificationsCountElem.attr('data-count', notificationsCount);
//        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();       
      });
    </script>





<!--<script>
    let toUserId = '<?php echo $to_user_id?>';
    // Chat (WebRTC)
//
// Currently supported in Chrome and Firefox only.
// WebRTC support is ultra basic at the moment - send/receive // in current window only.
// Design based on Bookmarks app by // Eyal Zuri - http://dribbble.com/shots/1261465-Bookmarks-app-gif
//
// The below JS has been adapted from this excellent RTCDataChannel demo
// http://simpl.info/rtcdatachannel/

var sendChannel, 
	receiveChannel,
	chatWindow = document.querySelector('.chat-window'),
	chatWindowMessage = document.querySelector('.chat-window-message'),
	chatThread = document.querySelector('.chat-thread');

// Create WebRTC connection
createConnection();

// On form submit, send message
chatWindow.onsubmit = function (e) {
	e.preventDefault();

	sendData();

	return false;
};

function createConnection () {
    var servers = null;

    if (window.mozRTCPeerConnection) {
	    window.localPeerConnection = new mozRTCPeerConnection(servers, {
	        optional: [{
	            RtpDataChannels: true
	        }]
	    });
    } else {
	    window.localPeerConnection = new webkitRTCPeerConnection(servers, {
	        optional: [{
	            RtpDataChannels: true
	        }]
	    });
    }

    try {
        // Reliable Data Channels not yet supported in Chrome
        sendChannel = localPeerConnection.createDataChannel('sendDataChannel', {
            reliable: false
        });
    } catch (e) {
    }

    localPeerConnection.onicecandidate = gotLocalCandidate;
    sendChannel.onopen = handleSendChannelStateChange;
    sendChannel.onclose = handleSendChannelStateChange;

    if (window.mozRTCPeerConnection) {
	    window.remotePeerConnection = new mozRTCPeerConnection(servers, {
	        optional: [{
	            RtpDataChannels: true
	        }]
	    });
    } else {
	    window.remotePeerConnection = new webkitRTCPeerConnection(servers, {
	        optional: [{
	            RtpDataChannels: true
	        }]
	    });
    }

    remotePeerConnection.onicecandidate = gotRemoteIceCandidate;
    remotePeerConnection.ondatachannel = gotReceiveChannel;

    // Firefox seems to require an error callback
    localPeerConnection.createOffer(gotLocalDescription, function (err) {
    });
}

function sendData () {
    alert(chatWindowMessage.value);
 let obj = {
    "message": chatWindowMessage.value,
    "to_user_id": toUserId
  };
            $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            method: "POST",
            url: "{{url("messenger/send-message")}}",
            data: {'message':chatWindowMessage.value,'to_user_id':toUserId},
//            cache: false,
//            contentType: false,
//            processData: false,
            success: function (data, textStatus, jqXHR) {
            console.log(data);
            }
    }).done(function (data) {

    }).fail(function (data, textStatus, jqXHR) {
   
    });
    sendChannel.send(JSON.stringify(obj));

}

function gotLocalDescription (desc) {
    localPeerConnection.setLocalDescription(desc);
    remotePeerConnection.setRemoteDescription(desc);
    // Firefox seems to require an error callback
    remotePeerConnection.createAnswer(gotRemoteDescription, function (err) {
    });
}

function gotRemoteDescription (desc) {
    remotePeerConnection.setLocalDescription(desc);
    localPeerConnection.setRemoteDescription(desc);
}

function gotLocalCandidate (event) {
    if (event.candidate) {
        remotePeerConnection.addIceCandidate(event.candidate);
    }
}

function gotRemoteIceCandidate (event) {
    if (event.candidate) {
        localPeerConnection.addIceCandidate(event.candidate);
    }
}

function gotReceiveChannel (event) {
    receiveChannel = event.channel;
    receiveChannel.onmessage = handleMessage;
    receiveChannel.onopen = handleReceiveChannelStateChange;
    receiveChannel.onclose = handleReceiveChannelStateChange;
}

function handleMessage (event) {
//    alert(event);
//    console.log(event.data);
let myJSON = ''+event.data+'';
const myObj = JSON.parse(myJSON);
    console.log(myObj.timestamp);
    var chatNewThread = document.createElement('li'),
    	chatNewMessage = document.createTextNode(event.data);

    // Add message to chat thread and scroll to bottom
    chatNewThread.appendChild(chatNewMessage);
    chatThread.appendChild(chatNewThread);
    chatThread.scrollTop = chatThread.scrollHeight;

    // Clear text value
    chatWindowMessage.value = '';
}

function handleSendChannelStateChange () {
    var readyState = sendChannel.readyState;

    if (readyState == 'open') {
        chatWindowMessage.disabled = false;
        chatWindowMessage.focus();
    	chatWindowMessage.placeholder = "";
    } else {
        chatWindowMessage.disabled = true;
    }
}

function handleReceiveChannelStateChange () {
    var readyState = receiveChannel.readyState;
} 
</script>-->