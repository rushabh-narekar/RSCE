<!DOCTYPE html>
<html>

<head>
    <style>

h1 {
    font-weight: 700;
}
h1 strong {
    font-weight: 900;
}
h2 {
    line-height: 20px;
    margin: 0;
    color: #121d1f;
    font-weight: 400;
    margin-bottom: 30px;
    font-size: 34px;
}
h3, h4 {
    color: #121d1f;
    font-size: 20px;
    font-weight: 600;
}
h5 {
    text-transform: uppercase;
    font-weight: 700;
    line-height: 20px;
}
p.intro {
    font-size: 16px;
    margin: 12px 0 0;
    line-height: 24px;
    font-family: 'Open Sans', sans-serif;
}
a {
    color: #333;
}
a:hover, a:focus {
    text-decoration: none;
    color: #7bc3d1;
}
ul, ol {
    list-style: none;
}
.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}
.clearfix {
    display: inline-block;
}
* html .clearfix {
    height: 1%;
}
.clearfix {
    display: block;
}
ul, ol {
    padding: 0;
    webkit-padding: 0;
    moz-padding: 0;
}
hr {
    height: 4px;
    width: 70px;
    text-align: center;
    position: relative;
    background: #7bc3d1;
    margin: 0 auto;
    margin-bottom: 30px;
    border: 0;
}
/* Navigation */
#nav {
    z-index: 9999;
}
#nav.affix {
    position: fixed;
    top: 0;
    width: 100%
}
.navbar-custom {
    margin-bottom: 0;
    background-color: #121d1f;
    border-radius: 0px;
    padding: 10px 0;
}
.navbar-custom .navbar-brand {
    font-weight: 600;
}
.navbar-custom .navbar-brand:focus {
    outline: 0;
}
.navbar-custom .navbar-brand .navbar-toggle {
    padding: 4px 6px;
    font-size: 16px;
    color: #fff;
}
.navbar-custom .navbar-brand .navbar-toggle:focus, .navbar-custom .navbar-brand .navbar-toggle:active {
    outline: 0;
}
.navbar-custom a {
    color: #f4f5f6;
}
.navbar-custom .nav li a {
    text-transform: uppercase;
    letter-spacing: 1px;
    -webkit-transition: background .3s ease-in-out;
    -moz-transition: background .3s ease-in-out;
    transition: background .3s ease-in-out;
}
.navbar-custom .nav li a:hover {
    outline: 0;
    color: #7bc3d1;
    background-color: transparent;
}
.navbar-custom .nav li a:focus, .navbar-custom .nav li a:active {
    outline: 0;
    background-color: transparent;
    color: #7bc3d1;
}
.navbar-custom .nav li.active {
    outline: 0;
}
.navbar-custom .nav li.active a {
    background-color: rgba(255,255,255,.3);
}
.navbar-custom .nav li.active a:hover {
    color: #fff;
}
.btn-default {
    color: #fff;
    background-color: transparent;
    border-color: #fff;
    padding: 10px 20px;
    margin: 0;
    font-size: 16px;
    border-radius: 0;
}
.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active {
    color: #fff;
    background-color: #121d1f;
    border-color: #121d1f;
}
.btn-primary {
    color: #fff;
    background-color: #121d1f;
    padding: 10px 20px;
    border-color: #121d1f;
    border-radius: 0;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active {
    color: #fff;
    background-color: #7bc3d1;
    border-color: #7bc3d1;
}
.btn-primary i.fa {
    margin-right: 10px;
}
/* Home Section */
.intro {
    display: table;
    width: 100%;
    height: auto;
    padding: 100px 0;
    text-align: center;
    color: #fff;
    background: url(../img/1.jpg) no-repeat center top;
    background-color: #7bc3d1;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
.section-title.center {
    padding: 25px 0 45px 0;
}
/* About Section */
#about {
    padding: 100px 0;
    background: #f6f6f6;
}
#about .about-text {
    margin-bottom: 10px;
}
#about img {
    border-radius: 50%;
    width: 300px;
    height: 300px;
    display: inline-block;
}
#about p {
    margin-top: 20px;
    margin-bottom: 30px;
    
}

/* Contact Section */
#contact {
    padding: 100px 0 40px 0;
    color: #121d1f;
    background: #7bc3d1;
}
#contact h2 {
    color: #fff;
}
#contact hr {
    background: rgba(255,255,255,0.3);
}
#contact h3 {
    padding-top: 20px;
    font-size: 20px;
    font-weight: 400;
    color: #fff;
}
#contact form {
    padding: 30px 0;
}
#contact i.fa {
    color: #121d1f;
    margin-bottom: 10px;
}
#contact .text-danger {
    color: #E87E04;
    text-align: bottom;
}
label {
    font-size: 12px;
    font-weight: 400;
    font-family: 'Open Sans', sans-serif;
    float: bottom;
}
#contact .form-control {
    display: block;
    width: 100%;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #2c3e50;
    background-color: rgba(255,255,255,0.8);
    background-image: none;
    border: 0;
    border-radius: 2px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
}
#contact .form-control:focus {
    border-color: inherit;
    outline: 0;
    -webkit-box-shadow: transparent;
    box-shadow: transparent;
}
.form-control::-webkit-input-placeholder {
color: #2c3e50;
}
.form-control:-moz-placeholder {
color: #2c3e50;
}
.form-control::-moz-placeholder {
color: #2c3e50;
}
.form-control:-ms-input-placeholder {
color: #2c3e50;
}
#contact .social {
    margin-top: 60px;
}
#contact .social ul li {
    display: inline-block;
    margin: 0 20px;
}
#contact .social i.fa {
    font-size: 30px;
    padding: 4px 5px;
    color: #fff;
    transition: all 0.5s;
}
#contact .social i.fa:hover {
    color: #121d1f;
}
#contact .btn {
    background-color: transparent;
    border: 1px solid #fff;
    border-radius: 0;
    padding: 10px 20px;
    color: #fff;
    margin-top: 15px;
}
#contact .btn:hover, #contact .btn:focus {
    background-color: #121d1f;
    border: 1px solid #121d1f;
}
.btn:active, .btn.active {
    background-image: none;
    outline: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
a:focus, .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
    outline: none;
    outline-offset: none;
}
/* Footer Section*/
#footer {
    background: #121d1f;
    color: #7d8384;
    padding: 30px 0 25px 0;
}
#footer p {
    font-size: 13px;
}
#footer a {
    color: #a0a5a5;
}
#footer a:hover {
    color: #7bc3d1;
}

/* Media Queries */
@media(min-width:768px) {
.intro {
    height: 20%;
    padding: 0;
    text-align: bottom;
    color: #fff;
}
.intro H1 {
    font-size: 60px;
    font-weight: 500;
    letter-spacing: -2px;
}
.intro .name {
    font-weight: 600;
}
.intro .intro-text {
    max-width: 75%;
}
.intro .intro-text p {
    font-family: 'Lato', sans-serif;
    font-size: 20px;
    margin-bottom: 40px;
    margin-top: 20px;
}
section {
    padding: 120px 0;
}
header .intro-text {
    padding-top: 300px;
    padding-bottom: 200px;
}
.timeline:before {
    bottom: 50%;
}
.timeline>li {
    margin-bottom: 100px;
    min-height: 100px;
}
.timeline>li .timeline-panel {
    float: bottom;
    width: 41%;
    padding: 0 20px 20px 30px;
    text-align: right;
}
.timeline>li .timeline-image {
    bottom: 50%;
    width: 100px;
    height: 100px;
    margin-bottom: -50px;
}
.timeline>li .timeline-image h4 {
    margin-top: 16px;
    line-height: 18px;
    font-weight: 400;
}
.timeline>li.timeline-inverted>.timeline-panel {
    float: right;
    padding: 0 30px 20px 20px;
    text-align: bottom;
}
}

@media(min-width:992px) {
#here-me h1 {
    margin: 10px 0 0px;
}
.timeline>li {
    min-height: 150px;
}
.timeline>li .timeline-panel {
    padding: 0 20px 20px;
}
.timeline>li .timeline-image {
    width: 150px;
    height: 150px;
    margin-bottom: -75px;
}
.timeline>li .timeline-image h4 {
    margin-top: 30px;
    font-size: 18px;
    line-height: 26px;
}
.timeline>li.timeline-inverted>.timeline-panel {
    padding: 0 20px 20px;
}
}

@media(min-width:1200px) {
.timeline>li {
    min-height: 170px;
}
.timeline>li .timeline-panel {
    padding: 10px 20px 20px 100px;
}
.timeline>li .timeline-image {
    width: 150px;
    height: 150px;
    margin-bottom: -75px;
}
.timeline>li .timeline-image h4 {
    margin-top: 40px;
    font-weight: 400;
}
.timeline>li.timeline-inverted>.timeline-panel {
    padding: 10px 100px 20px 20px;
}
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Contact Us | RSCE</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../../plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Morris Css -->
    <link href="../../plugins/morrisjs/morris.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="../../css/prettyPhoto.css">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a class="navbar-brand" href="../../index.php"><i class="material-icons">home</i>
                            <span>HOME</span></a>
            </div>
        </div>
    </nav>
    
    <!-- #Top Bar -->
<!-- DIVISION  -->
<center>
<!-- MEET PANCHAL-->
<div style="margin-top:70px;">

  <div class="container" style="width: 100%; background: #7bc3d1;"> 
    <div style="margin-bottom: 50px;">
        <h1>Meet Our Developers Team</h1>
    </div>
    <div>
      <h2>Mr. Meet Panchal</h2>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="../../images/devl1.jpg" class="img-responsive" style="border-radius: 50%;
    width: 300px;
    height: 300px;
    display: inline-block;">
      </div>
      <div class="col-md-8 col-md-offset-2" style="text-align: justify;">
        <div class="about-text" style="margin-top: 50px;">
         <font size="3" color="black"><b>
          <center><p>Lead Developer & Android Developer
          <br>Website : <a href="http://meetbpanchal.000webhostapp.com" target="_blank">meetpanchal.com</a>
          <br>Contact No : +91 96871 13602
          <br>Email : meetpanchal738@gmail.com
          <br>: Social Media :
            </p></center>
          </b></font>
        </div>
      </div>
    </div>
    
        <!-- SOCIAL MEDIA LINKS -->
        <a href="https://www.facebook.com/meet.panchal.35175" target="_blank">
        <img src="../../images/icons/fb.png" style="height: 35px; width: 35px;" title="Facebook" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> </a> &nbsp



        <a href="https://twitter.com/Panchalm0079" target="_blank">
        <img src="../../images/icons/twit.png" style="height: 35px; width: 35px;" title="Twitter" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></a> &nbsp


        <a href="https://github.com/panchalmeet" target="_blank">
        <img src="../../images/icons/git.png" title="Github" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
        </a> &nbsp


        <a href="https://instagram.com/meet7325" target="_blank">
        <img src="../../images/icons/insta.png" title="Instagram" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></a> &nbsp


        <a href="https://www.linkedin.com/in/meet-panchal-7a7747156" target="_blank"> 
        <img src="../../images/icons/link.png" title="Linkedin" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></a> &nbsp


        <br>
        <br>
</div>

<!-- RUSHABH NAREKAR-->
<div class="container" style="width: 100%; background: #ffffff;"> 
    <div style="margin-top: 50px;">
      <h2>Mr. Rushabh Narekar</h2>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="../../images/dev2.jpg" class="img-responsive" style="border-radius: 50%;
    width: 300px;
    height: 300px;
    display: inline-block;">
      </div>
      <div class="col-md-8 col-md-offset-2" style="text-align: justify;">
        <div class="about-text" style="margin-top: 50px;">
         <font size="3" color="black"><b>
          <center><p>Back-End Developer
          <br>Contact No : +91 97227 53135
          <br>Email : rush7665@gmail.com
          <br>: Social Media :
            </p></center>
          </b></font>
        </div>
      </div>
    </div>
    
     <!-- SOCIAL MEDIA LINKS -->
        <a href="https://www.facebook.com/narekar.rushabh" target="_blank">
        <img src="../../images/icons/fb.png" title="Facebook" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> </a> &nbsp
        <a href="https://twitter.com/rush7549" target="_blank">
        <img src="../../images/icons/twit.png" title="Twitter" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></a> &nbsp
        <a href="https://github.com/rushabh219" target="_blank">
        <img src="../../images/icons/git.png" title="Github" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
        </a> &nbsp
        <a href="https://www.instagram.com/rush551997/" target="_blank">
        <img src="../../images/icons/insta.png" title="Instagram" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></a> &nbsp
        <a href="https://www.linkedin.com/in/rushabh-narekar-738349156" target="_blank">
        <img src="../../images/icons/link.png" title="Linkedin" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></a> &nbsp
        <br>
        <br>
</div>

<!-- VIJAY SOLANKI-->
<div class="container" style="width: 100%; background: #7bc3d1;"> 
    <div style="margin-top: 50px;">
      <h2>Mr. Vijay Solanki</h2>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="../../images/dev3.jpg" class="img-responsive" style="border-radius: 50%;
    width: 300px;
    height: 300px;
    display: inline-block;">
      </div>
      <div class="col-md-8 col-md-offset-2" style="text-align: justify;">
        <div class="about-text" style="margin-top: 50px;">
         <font size="3" color="black"><b>
          <center><p>Web Developer
          <br>Contact No : +91 83060 41400
          <br>Email : vijusolankivs7@gmail.com
          <br>: Social Media :
            </p></center>
          </b></font>
        </div>
      </div>
    </div>
    
     <!-- SOCIAL MEDIA LINKS -->
        <a href="https://www.facebook.com/viju.solanki.12" target="_blank">
        <img src="../../images/icons/fb.png" title="Facebook" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> </a> &nbsp
        <a href="https://twitter.com/VIJAY__SOLANKI" target="_blank">
        <img src="../../images/icons/twit.png" title="Twitter" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></a> &nbsp
        <a href="https://github.com/vijaysolankii/" target="_blank">
        <img src="../../images/icons/git.png" title="Github" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
        </a> &nbsp
        <a href="https://www.instagram.com/vijay._solanki/" target="_blank">
        <img src="../../images/icons/insta.png" title="Instagram" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"></a> &nbsp
        <a href="https://www.linkedin.com/in/vijay-solanki-9b923a130" target="_blank"> 
        <img src="../../images/icons/link.png" title="Linkedin" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></a> &nbsp
        <br>
        <br>
</div>

<!-- JIGAR NAYAK--> 
<div class="container" style="width: 100%; background: #ffffff;">     
    <div style="margin-top: 50px;">
      <h2>Mr. Jigar Nayak</h2>
    </div>
    <div class="row">
      <div class="col-md-12 text-center"><img src="../../images/devl5.jpg" class="img-responsive" style="border-radius: 50%;
    width: 300px;
    height: 300px;
    display: inline-block;">
      </div>
      <div class="col-md-8 col-md-offset-2" style="text-align: justify;">
        <div class="about-text" style="margin-top: 50px;">
         <font size="3" color="black"><b>
          <center><p>Web Desginer
          <br>Contact No : +91 99249 87784
          <br>Email : nayakjigar4824@gmail.com
          <br>: Social Media :
            </p></center>
          </b></font>
        </div>
      </div>
    </div>
    
    
     <!-- SOCIAL MEDIA LINKS -->
        <a href="https://www.facebook.com/jigar.nayak.334" target="_blank">
        <img src="../../images/icons/fb.png"  title="Facebook" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> </a> &nbsp
        <a href="javascript:void(0);">
        <img src="../../images/icons/twit.png" style="opacity: 0.4; height: 35px; width: 35px;"></a> &nbsp
        <a href="javascript:void(0);">
        <img src="../../images/icons/git.png"  style="opacity: 0.4; height: 35px; width: 35px;">
        </a> &nbsp
        <a href="javascript:void(0);">
        <img src="../../images/icons/insta.png"  style="opacity: 0.4; height: 35px; width: 35px;"></a> &nbsp
        <a href="https://www.linkedin.com/in/jigar-nayak-628a7316a" target="_blank"> 
        <img src="../../images/icons/link.png" title="Linkedin" style="height: 35px; width: 35px;" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></a> &nbsp
        <br>
        <br>
</div>
</div>   
</center>

<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2018 DTE-Admin All Rights Reserved. Designed by Hackathon-2018 Team</p>
    </div>
  </div>
</div>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../../plugins/jquery-countto/jquery.countTo.js"></script>

    
    <!-- ChartJs -->
    <script src="../../plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="../../plugins/flot-charts/jquery.flot.js"></script>
    <script src="../../plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../../plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../../plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../../plugins/flot-charts/jquery.flot.time.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="../../plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>
    <!-- Morris Plugin Js -->
    <script src="../../plugins/raphael/raphael.min.js"></script>
    <script src="../../plugins/morrisjs/morris.js"></script>
    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/charts/morris.js"></script>
    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/ui/tooltips-popovers.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>
</html>
