<?php
require 'lib/mysql.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Love INC</title>
    <meta name="description" content="Love In The Name of Christ (Love INC)">
    <meta name="author"
          content="Alex Johnson, David Poling, and Melanie Meister">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link
        href='http://fonts.googleapis.com/css?family=Comfortaa:400,700&amp;Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300'
          rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Font Awesome CSS -->
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet"/>

    <!-- Plugins -->
    <link href="css/animations.css" rel="stylesheet"/>

    <link href="css/animate.css" rel="stylesheet"/>

    <!-- Worthy core CSS file -->
    <link href="css/style.css" rel="stylesheet"/>

    <!-- Custom css -->
    <link href="css/custom.css" rel="stylesheet"/>

    <!-- jQuery UI CSS -->
    <link rel="stylesheet"
          href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css"/>

</head>
<!--Facebook Widget-->
<body class="no-trans">
<noscript class="text-center">
    <h1>Javascript Disabled!</h1>

    <p>
        <strong>Javascript has been disabled on your browser, please enable it to access the content of this
            website.</strong>
    </p>
    <style type="text/css">
        #body {
            display: none;
        }
    </style>
</noscript>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=825907460758802&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop"><i class="icon-up-open-big"></i>
</div>

<!-- header start -->
<!-- ================ -->
<span id="body">
    <header class="header fixed clearfix navbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <!-- header-left start -->
                    <!-- ================ -->
                    <div class="header-left clearfix">

                        <!-- logo -->
                        <div class="logo smooth-scroll">
                            <a href="#home"><img id="logo" src="images/logo.png" alt="Love INC"></a>
                        </div>

                        <!-- name-and-slogan -->
                        <div class="site-name-and-slogan smooth-scroll">
                            <div class="site-name">
                                <a href="#home">Love INC</a>
                            </div>
                            <div class="site-slogan">Love In The Name of Christ</div>
                        </div>

                    </div>
                    <!-- header-left end -->

                </div>
                <div class="col-md-8">

                    <!-- header-right start -->
                    <!-- ================ -->
                    <div class="header-right clearfix">

                        <!-- main-navigation start -->
                        <!-- ================ -->
                        <div class="main-navigation animated">

                            <!-- navbar start -->
                            <!-- ================ -->
                            <nav class="navbar navbar-default" role="navigation">
                                <div class="container-fluid">

                                    <!-- Toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle"
                                                data-toggle="collapse" data-target="#navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse scrollspy smooth-scroll"
                                         id="navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="#home">Home</a></li>
                                            <li><a href="#about">About Us</a></li>
                                            <li><a href="#calendar">Calendar</a></li>
                                            <li><a href="#donors">Donors</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </nav>
                            <!-- navbar end -->

                        </div>
                        <!-- main-navigation end -->

                    </div>
                    <!-- header-right end -->

                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- banner start -->
    <!-- ================ -->
    <div id="home" class="banner">
        <div class="banner-image"></div>
        <div class="banner-caption">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
                        <h1 class="text-center"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
<div class="wrap">
    <div class="container">
        <div id="about" class="section object-non-visible" data-animation-effect="fadeIn">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="text-center">About Us</h1>
                    <?php
                    $query = "SELECT content FROM section WHERE name='about'";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result);
                    echo $row['content'];
                    ?>
                </div>
                <div class="col-md-4">
                    <div class="fb-like-box" data-href="https://www.facebook.com/loveofjackson" data-colorscheme="light"
                         data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                </div>
            </div>
        </div>

        <div id="calendar" class="section text-center object-non-visible" data-animation-effect="fadeIn"">
            <h1>Calendar</h1>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                        src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=se84kndcbippuj0tqcrv7e66tg%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=America%2FNew_York"
                        style=" border-width:0;background-color:#E1FAF2" frameborder="0" scrolling="no"
                        align="center"></iframe>
            </div>
        </div>


        <div id="donors" class="section text-center object-non-visible" data-animation-effect="fadeIn"">
            <div class="row">
                <div class="col-md-8">
                    <h1>Donors</h1>

                </div>
                <!--Amazon Smile Link-->
                <div class="col-md-4">
                    <div id="amznCharityBanner"
                         style='width: 300px !important; height: 250px !important; text-align: center !important; position: relative; background-image: url("https://d1ev1rt26nhnwq.cloudfront.net/ccmtblv2.png") !important; background-repeat: no-repeat !important;'>
                        <a target="_blank"
                           style="padding: 100px 10px !important; left: 0px !important; top: 0px !important; right: 0px !important; bottom: 0px !important; position: absolute !important;"
                           href="http://smile.amazon.com/ch/38-2765855">
                            <div id="bannerTextWrapper" style="height: 100%; overflow: hidden;"><span
                                    style="height: 100%; vertical-align: middle; display: inline-block;"></span><span
                                    style="margin: 0px; width: 95%; color: black !important; line-height: 26px; overflow: hidden; font-family: Arial; font-size: 26px; text-decoration: none; vertical-align: middle; display: inline-block;">Love Inc Of Jackson County Area</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hidden-xs">
                    Copyright &copy; <?php echo date("Y"); ?> Love INC of Jackson
                </div>
                <div class="col-md-4 col-xs-6">
                    <h3>Contact Info</h3>
                </div>
                <div class="col-md-2 col-xs-1">
                    <button type="button" class="btn" data-toggle="modal" data-target="#loginModal">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="loginLabel">Login</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password"
                                   placeholder="Password">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</span>

<!-- JavaScript files placed at the end of the document so the pages load faster
    ================================================== -->
<!-- Jquery core js files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Jquery Ui js -->

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

<!-- Bootstrat core js files -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="plugins/modernizr.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript"
        src="plugins/isotope/isotope.pkgd.min.js"></script>


<!-- Backstretch javascript -->
<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="plugins/jquery.appear.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
