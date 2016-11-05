<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css'
          href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/transission-style.css">

    <!--
    Accord Template
    http://www.templatemo.com/tm-478-accord
    -->

    <script src="js/display.js"></script>


    <title>Accord - Free Bootstrap Template</title>
</head>

<body>

<div align="center" style="background:url(/templatemo_478_accord/images/pie.gif) no-repeat center center; z-index: 30000;width:100%;height:100%;" id="loadingDiv"></div>


<video poster="" id="bgvid" playsinline autoplay muted loop>
    <source src="images/tech_day.mp4" type="video/mp4">
</video>

<div id="test">
    <div class="main-body">
        <div class="container">
            <div class="row">
                <div class="main-page">
                    <div class="content-main">
                        <div class="row margin-b-30">
                            <div class="col-xs-12 col-sm-12 col-md-12 biliend">
                                <div class="banner-2-container">
                                    <div class="aenean">
                                        <h4>2016 </h4>
                                        <h3>Tech Day</h3>
                                        <a onclick="slideTransition()"><i
                                                class="fa fa-caret-right"></i><span> Welcome</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="pt-main" class="pt-perspective">
                            <div id="pop-display" class="pt-page pt-page-1">
                                <div class="row margin-b-30">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="banner-main-home">
                                            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                                                <div class="banner-main-home-text">

                                                    <p class="name-text"><br><b>Hello, I am</b></p>

                                                    <div class="heading">
                                                        <h1 id="first-name" class="text-uppercase">Simran</h1>
                                                        <p id="last-name">Aroura Janeslaw</p>
                                                    </div>

                                                    <div class="col-sm-12 name-bottom-title">
                                                        <h4>Designation</h4>
                                                        <h3 id="designation" class=""><b>UX Engineer</b></h3>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <div class="img-box">
                                                    <img src="images/Profile-Pictures.PNG" alt="Image"
                                                         class="img-responsive">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                                    <div class="">
                                                        <div class="row">

                                                        </div>
                                                        <br><br><br><br>
                                                        <div class="row">
                                                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="bottom-img fade-in one">

                                                                    <p id="info-text"
                                                                       class="first bottom-img name-bottom-text">
                                                                        With MillenniumIT <br> for... <br><span
                                                                            id="lobby"
                                                                            class="change-text"></span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="bottom-img fade-in two">

                                                                    <p id="info-text"
                                                                       class="second bottom-img name-bottom-text"><span
                                                                            id="report-to" style="visibility: hidden"
                                                                            class="change-text"> </span><br>Months</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="bottom-img fade-in three">


                                                                    <p id="info-text-third"
                                                                       class="third bottom-img name-bottom-text"
                                                                       style="background-color: #1b6d85"><span
                                                                            id="service-years" class="change-text"
                                                                            style="visibility: hidden"></span><br>Years
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- row -->
                    </div> <!-- .content-main -->
                </div> <!-- .main-page -->
            </div> <!-- .row -->
            <footer class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                    <p class="copyright">Copyright © 2016 Company Name</p>
                </div>
            </footer>  <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .main-body -->
</div>

<!-- JavaScript -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $('#loadingDiv').delay(1000).fadeOut('slow');

    setTimeout(function () {
        $("#test").addClass("load");
    }, 1000);

</script>


</body>
</html>
