<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{__('Report Management')}}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('public/admin_asset')}}/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="{{asset('public/admin_asset')}}/js/plugin/webfont/webfont.min.js"></script>
    <script>
WebFont.load({
    google: {"families": ["Lato:300,400,700,900"]},
    custom: {"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset('public/admin_asset')}}/css/fonts.min.css']},
    active: function () {
        sessionStorage.fonts = true;
    }
});
    </script>

    <!-- CSS Files -->
    <link href="{{asset('public/admin_asset')}}/css/loader.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/admin_asset')}}/select2/select2.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('public/admin_asset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/admin_asset')}}/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!--<link rel="stylesheet" href="{{asset('public/admin_asset')}}/css/demo.css">-->
    <script src="{{asset('public/admin_asset')}}/js/core/jquery.3.2.1.min.js"></script>

    <!-- Datatables -->
    <script src="{{asset('public/admin_asset')}}/js/plugin/datatables/datatables.min.js"></script>

<!-- Atlantis JS -->
    <script src="{{asset('public/admin_asset')}}/js/atlantis.min.js"></script>
    <link href="{{asset('')}}public/admin_asset/calender/dncalendar-skin.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    
    <style>
        table#myTable {overflow-x: scroll;display: inline-block;white-space: nowrap;}
        .select2-container{
            width:100%;
        }

 .form-control.error {
	 animation: shake 0.2s ease-in-out 0s 2;
	 box-shadow: 0 0 0.5em red;
}
 @keyframes shake {
	 0% {
		 margin-left: 0rem;
	}
	 25% {
		 margin-left: 0.5rem;
	}
	 75% {
		 margin-left: -0.5rem;
	}
	 100% {
		 margin-left: 0rem;
	}
}
  body > .skiptranslate {
    display: none;
}
body {
    top: 0px !important; 
    }

.zoom {
  transition: transform .2s;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
   

/*Line Break*/

    .line-block {
      width:0px;
      height:307px;
      position:relative;
 }
.line-block:before {
      content:"";
      width:1px;
      height:100%;
      display:block;
      left:50%;
      position:absolute;
	    background-image: -webkit-linear-gradient(top, #fff, #000, #fff);
      background-image: -moz-linear-gradient(top, #fff, #000, #fff);
      background-image: -ms-linear-gradient(top, #fff, #000, #fff);
      background-image: -o-linear-gradient(top, #fff, #000, #fff);
      background-image: linear-gradient(top, #fff, #000, #fff);
	}

    </style>
     @yield('usercdn')
</head>