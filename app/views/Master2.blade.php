<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
    <script src="{{asset('alert/bootstrap.js')}}"> </script>
    <title></title>
    <style>
        #tan{
            display: none;
        }
    </style>


    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Online Results System</title>
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--  Animation Style -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="pre-div">
    <div id="loader">
    </div>
</div>
<!--/. PRELOADER END -->
<div class="navbar navbar-default navbar-fixed-top move-me ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('index')}}">
                <img src="assets/img/logo.jpg" width="50" height="50" class="navbar-brand-logo " alt="kiu" TITLE="Exploring the heights"/>
            </a>

        </div>
        <div class="navbar-collapse collapse move-me">

            <ul class="nav navbar-nav navbar-right">

                <li >
                    <a href="{{URL::to('index')}}" TITLE="home">HOME

                    </a>

                </li>
                <li >
                    <a href="{{URL::to('home')}}" TITLE="results center">RESULTS CENTER

                    </a>

                </li>

                <li >
                    <a href="">
                    </a>

                </li>



                <li >
                    <a href="">

                </li>
            </ul>

        </div>

    </div>
</div>
<!--./ NAV BAR END -->
<div id="home" TITLE="Exploring the heights Through Online Results System">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 head-text">

                </div>

            </div>

        </div>

    </div>


</div>


<!--./ about begin -->


<!--./ about ends -->
<!--./ Contacts begin -->


    </div>

</div>
<!--./ Contacts end -->

<!--./ HOME SECTION END -->


<!--./ FOOTER SECTION END -->
<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  WOW Script -->
<script src="assets/js/wow.min.js"></script>
<!--  Scrolling Script -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  PrettyPhoto Script -->
<script src="assets/js/jquery.prettyPhoto.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>

@yield('body')
</body>
</html>
