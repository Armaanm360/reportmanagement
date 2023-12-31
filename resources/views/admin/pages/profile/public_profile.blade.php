
<style>
    @import url("https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600&display=swap");

:root {
	--swatch-size: 50px;
}

* {
	font-family: "Dosis", sans-serif;
}

body {
	margin: 0;
	box-sizing: border-box;
	background-color: #444757;
}

main {
	width: 100vw;
	height: 100vh;
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}

#user-card {
	--user-card-width: 500px;
	--user-card-ratio: 1.5;
	--user-beafter-width: 90%;
	width: var(--user-card-width);
	height: calc(var(--user-card-width) / var(--user-card-ratio));
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
}

#user-card::after,
#user-card::before {
	content: "";
	position: absolute;
	width: var(--user-beafter-width);
	height: var(--user-beafter-width);
	background-color: rgba(1, 1, 1, 0.2);
	transition: transform 0.3s;
	transform: translateY(0%), translateX(0%);
}

#user-card::before {
	top: 0;
	left: 0;
	z-index: 2;
}

#user-card::after {
	bottom: 0;
	right: 0;
}

#user-card.loading::before {
	transform: translateX(25px) translateY(16px);
}

#user-card.loading::after {
	transform: translateX(-25px) translateY(-17px);
}

#user-content {
	position: relative;
	z-index: 3;
	width: 80%;
	height: 80%;
	display: flex;
	justify-content: center;
	align-items: center;
}

#user-picture {
	--picture-size: 90px;
	width: var(--picture-size);
	height: var(--picture-size);
	border-radius: 50%;
	overflow: hidden;
	margin: auto;
	margin-bottom: 20px;
}

#user-picture > img {
	width: 100%;
	height: 100%;
	filter: grayscale(70%);
	transform: scale(1);
	opacity: 1;
	transition: transform 0.5s, opacity 0.5s;
}

#user-infos {
	text-align: center;
	color: white;
}

#user-infos > label {
	display: block;
	font-size: 1.2em;
	height: 25px;
	margin-bottom: 5px;
}

#user-infos > p {
	height: 20px;
	margin: 0;
	letter-spacing: 1px;
	font-size: 0.8em;
}

#user-card.loading #user-picture > img,
#user-card.loading #user-background {
	transform: scale(1.2);
	opacity: 0;
}

#user-card.loading #user-picture,
#user-card.loading #user-infos > label,
#user-card.loading #user-infos > p {
	background-color: rgba(1, 1, 1, 0.1);
}

#user-picture,
#user-infos > label,
#user-infos > p {
	position: relative;
	overflow: hidden;
}

#user-picture::before,
#user-infos > label::before,
#user-infos > p::before {
	position: absolute;
	content: "";
	left: 0px;
	top: 0px;
	bottom: 0;
	width: 10px;
	background-color: rgba(255, 255, 255, 0.1);
	opacity: 0.3;
	transform: translateX(-20px) rotate(10deg);
	transform-origin: 50% 50%;
}

#user-card.loading #user-picture::before,
#user-card.loading #user-infos > label::before,
#user-card.loading #user-infos > p::before {
	animation: translate_loading 1s infinite;
}

#user-background {
	display: flex;
	height: 30px;
	margin-top: 10px;
	transition: transform 0.3s, opacity 0.3s;
	transform: scale(0.9);
}

#user-background > .swatch {
	width: var(--swatch-size);
	height: var(--swatch-size);
	transform: scale(0);
	transform-origin: top;
	transition: transform 0.3s border-radius 0.3s;
	filter: grayscale(80%);
	cursor: pointer;
}

#user-background > .swatch:hover {
	border-radius: 50%;
}

.swatch.displayed {
	transform: scale(0.6) !important;
}

#float-background {
	position: fixed;
	top: 0;
	right: 0;
	left: 0;
	bottom: 0;
	opacity: 0.3;
	transition: transform 0.15s;
	filter: grayscale(80%);
}

#updateBackground {
	--ratio-size: 0.65;
	vertical-align: top;
	width: calc(var(--ratio-size) * var(--swatch-size));
	height: calc(var(--ratio-size) * var(--swatch-size));
	transform: translateY(-1px);
	background-color: transparent;
	border: 2px solid white;
	border-radius: 50%;
	outline: none;
	cursor: pointer;
	transition: transform 0.3s;
}

#updateBackground:hover {
	transform: rotate(45deg);
}

#updateBackground::before {
	content: "+";
	font-size: 40px;
	position: absolute;
	top: -16px;
	left: 0;
	right: 0;
	text-align: center;
	color: white;
}

/* All Patterns from Lea Verou's CSS3 Patterns Gallery: https://projects.verou.me/css3patterns/ */

.argyle {
	background-color: #6d695c;
	background-image: repeating-linear-gradient(
			120deg,
			rgba(255, 255, 255, 0.1),
			rgba(255, 255, 255, 0.1) 1px,
			transparent 1px,
			transparent 60px
		),
		repeating-linear-gradient(
			60deg,
			rgba(255, 255, 255, 0.1),
			rgba(255, 255, 255, 0.1) 1px,
			transparent 1px,
			transparent 60px
		),
		linear-gradient(
			60deg,
			rgba(0, 0, 0, 0.1) 25%,
			transparent 25%,
			transparent 75%,
			rgba(0, 0, 0, 0.1) 75%,
			rgba(0, 0, 0, 0.1)
		),
		linear-gradient(
			120deg,
			rgba(0, 0, 0, 0.1) 25%,
			transparent 25%,
			transparent 75%,
			rgba(0, 0, 0, 0.1) 75%,
			rgba(0, 0, 0, 0.1)
		);
	background-size: 70px 120px;
}

.houndstooth {
	background: linear-gradient(
				-45deg,
				white 25%,
				transparent 25%,
				transparent 75%,
				black 75%,
				black
			)
			0 0,
		linear-gradient(
				-45deg,
				black 25%,
				transparent 25%,
				transparent 75%,
				white 75%,
				white
			)
			1em 1em,
		linear-gradient(
				45deg,
				black 17%,
				transparent 17%,
				transparent 25%,
				black 25%,
				black 36%,
				transparent 36%,
				transparent 64%,
				black 64%,
				black 75%,
				transparent 75%,
				transparent 83%,
				black 83%
			)
			1em 1em;
	background-color: white;
	background-size: 2em 2em;
}

.zigzag {
	background: linear-gradient(135deg, #eceddc 25%, transparent 25%) -50px 0,
		linear-gradient(225deg, #eceddc 25%, transparent 25%) -50px 0,
		linear-gradient(315deg, #eceddc 25%, transparent 25%),
		linear-gradient(45deg, #eceddc 25%, transparent 25%);
	background-size: 100px 100px;
	background-color: #ec173a;
}

.madras {
	background-color: hsl(34, 53%, 82%);
	background-image: repeating-linear-gradient(
			45deg,
			transparent 5px,
			hsla(197, 62%, 11%, 0.5) 5px,
			hsla(197, 62%, 11%, 0.5) 10px,
			hsla(5, 53%, 63%, 0) 10px,
			hsla(5, 53%, 63%, 0) 35px,
			hsla(5, 53%, 63%, 0.5) 35px,
			hsla(5, 53%, 63%, 0.5) 40px,
			hsla(197, 62%, 11%, 0.5) 40px,
			hsla(197, 62%, 11%, 0.5) 50px,
			hsla(197, 62%, 11%, 0) 50px,
			hsla(197, 62%, 11%, 0) 60px,
			hsla(5, 53%, 63%, 0.5) 60px,
			hsla(5, 53%, 63%, 0.5) 70px,
			hsla(35, 91%, 65%, 0.5) 70px,
			hsla(35, 91%, 65%, 0.5) 80px,
			hsla(35, 91%, 65%, 0) 80px,
			hsla(35, 91%, 65%, 0) 90px,
			hsla(5, 53%, 63%, 0.5) 90px,
			hsla(5, 53%, 63%, 0.5) 110px,
			hsla(5, 53%, 63%, 0) 110px,
			hsla(5, 53%, 63%, 0) 120px,
			hsla(197, 62%, 11%, 0.5) 120px,
			hsla(197, 62%, 11%, 0.5) 140px
		),
		repeating-linear-gradient(
			135deg,
			transparent 5px,
			hsla(197, 62%, 11%, 0.5) 5px,
			hsla(197, 62%, 11%, 0.5) 10px,
			hsla(5, 53%, 63%, 0) 10px,
			hsla(5, 53%, 63%, 0) 35px,
			hsla(5, 53%, 63%, 0.5) 35px,
			hsla(5, 53%, 63%, 0.5) 40px,
			hsla(197, 62%, 11%, 0.5) 40px,
			hsla(197, 62%, 11%, 0.5) 50px,
			hsla(197, 62%, 11%, 0) 50px,
			hsla(197, 62%, 11%, 0) 60px,
			hsla(5, 53%, 63%, 0.5) 60px,
			hsla(5, 53%, 63%, 0.5) 70px,
			hsla(35, 91%, 65%, 0.5) 70px,
			hsla(35, 91%, 65%, 0.5) 80px,
			hsla(35, 91%, 65%, 0) 80px,
			hsla(35, 91%, 65%, 0) 90px,
			hsla(5, 53%, 63%, 0.5) 90px,
			hsla(5, 53%, 63%, 0.5) 110px,
			hsla(5, 53%, 63%, 0) 110px,
			hsla(5, 53%, 63%, 0) 140px,
			hsla(197, 62%, 11%, 0.5) 140px,
			hsla(197, 62%, 11%, 0.5) 160px
		);
}

.move-down {
	transform: scale(1.1);
	opacity: 0;
}

.move-up {
	transform: scale(0.9);
}

@keyframes translate_loading {
	0% {
		transform: translateX(-20px) rotate(0deg);
	}

	100% {
		transform: translateX(300px) rotate(0deg);
	}
}

</style>
<div class="content">
    <div class="page-inner">
       
        <div class="row">
            <div class="col-md-12">

                <main>
                    <div id="float-background" class="argyle" data-classname="argyle">
                        <img style="margin-left:42%;margin-top:1px" src="{{asset('public')}}/logo.png">
                    </div>
	<div id="user-card" class="loading">
            <style>
                #user-card{
                    margin-top:13%
                }
            </style>
		<div id="user-content">                     
                    <div id="user-general">
				<div id="user-picture">
					<img id="user-picture-img" src="" alt="picture">
				</div>
				<div id="user-infos">
                                    <label id="user-infos-firstname" style="color:white !important;"></label>
					<p id="user-infos-lastname"></p>
					<p id="user-infos-location"></p>
                                        <p id="address"></p>
				</div>
				<div id="user-background">
					<div class="swatch argyle displayed" data-classname="argyle">
					</div>
					<div class="swatch houndstooth displayed" data-classname="houndstooth">
					</div>
					<button id="updateBackground"></button>
					<div class="swatch zigzag displayed" data-classname="zigzag">
					</div>
					<div class="swatch madras displayed" data-classname="madras">
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
          
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    let permission_holders = [<?php if (isset($permission_holders)) {
    echo $permission_holders;
} else {
    echo '""';
} ?>];
    if (permission_holders) {
        $(".select-permission-holder").val(permission_holders);
    }

    $("#add_form").submit(function (e) {
        e.preventDefault();
        $(".error_msg").html('');
        var data = new FormData($('#add_form')[0]);
        $('#loader').show();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: "POST",
            url: "{{url("employees")}}/" + $("[name=id]").val(),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data, textStatus, jqXHR) {

            }
        }).done(function () {
            $("#success_msg").html("Data Save Successfully");
            window.location.href = "{{ url('employees')}}";
            // location.reload();
        }).fail(function (data, textStatus, jqXHR) {
            $('#loader').hide();
            var json_data = JSON.parse(data.responseText);
            $.each(json_data.errors, function (key, value) {
                $("#" + key).after("<span class='error_msg' style='color: red;font-weigh: 600'>" + value + "</span>");
            });
        });
    });
    
      $('#name').keyup(function(){
    let name = this.value.split(/[ ,]+/).join('-');
    let x = Math.floor((Math.random() * 1000000) + 1);
    document.getElementById("userId").value = name+x;
    });
</script>
<script>$(document).ready(function(){
        const $ = (s) => document.querySelector(s);
const $$ = (s) => document.querySelectorAll(s);
const $$$ = (s) => Array.from(s);
       var slug = '<?php echo $userData[0]->slug?>';
class RUser {
	constructor() {
		this.user = {};
	}

	load() {
		const ceci = this;
		ceci.clearUser();
		if (!window.fetch) {
			console.err("");
			return;
		}
		fetch('<?php echo url('/').'/profile-data/'?>'+slug)
			.then(function (response) {
				return response.json();
			})
			.then(function (response) {
				setTimeout(() => {
					ceci.updateUser(response);
					ceci.updateDom();
				}, 2500);
			});
	}

	clearUser() {
		$("#user-card").classList.add("loading");
		$("#user-infos-firstname").innerText = "";
		$("#user-infos-lastname").innerText = "";
		$("#user-infos-location").innerText = "";
		$("#address").innerText = "";
	}

	updateUser(data) {
		this.user = data;
	}

	updateDom() {
            console.log(this.user);
		$("#user-card").classList.remove("loading");
		$("#user-picture-img").src = '<?php echo asset('public').'/user_images/'?>'+this.user.image;
		$("#user-infos-firstname").innerText = this.user.name;
		$("#user-infos-lastname").innerText = this.user.designation;
		$("#user-infos-location").innerText = this.user.email;
		$("#address").innerText = `${this.user.description ? 'Bio : ' + this.user.description : ''}`;
	}
}

const user = new RUser();
user.load();

const elements = $$$($$(".swatch"));
let backgroundChoiceDisplayed = true;
$("#updateBackground").addEventListener(
	"click",
	() => {
		elements.forEach((element, index) => {
			setTimeout(() => {
				if (backgroundChoiceDisplayed) element.classList.remove("displayed");
				else element.classList.add("displayed");
				if (index === elements.length - 1)
					backgroundChoiceDisplayed = !backgroundChoiceDisplayed;
			}, 100 * index);
		});
	},
	false
);

const duration = 150;
const profileBackground = $("#float-background");
elements.forEach((element) => {
	element.addEventListener(
		"click",
		(e) => {
			const element = e.target.dataset.classname;
			const className = profileBackground.dataset.classname;
			if (element !== className) {
				profileBackground.classList.add("move-down");
				setTimeout(() => {
					profileBackground.classList.add("move-up");
					profileBackground.classList.remove(className);
					profileBackground.classList.add(element);
					profileBackground.setAttribute("data-classname", element);
					setTimeout(() => {
						profileBackground.classList.remove("move-down");
						setTimeout(() => {
							profileBackground.classList.remove("move-up");
						}, duration / 2);
					}, duration);
				}, duration);
			}
		},
		false
	);
});
});

</script>

