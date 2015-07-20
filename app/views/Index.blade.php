<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip({
                placement : 'top'
            });
        });
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Online Results System</title>
    <!--  Bootstrap Style -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.js" rel="stylesheet" />
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
    <script src="{{asset('alert/jquery-1.11.0.js')}}"> </script>
    <script src="{{asset('alert/bootstrap.js')}}"> </script>
    <title></title>
    <style>
        #tan{
            display: none;
        }
    </style>
    <![endif]-->
</head>
<body>
<hr/>
<hr/>

@if(Auth::Check() and $auth=Auth::User())



    <b class="alert alert-success  col-lg-12 glyphicon glyphicon-user">Someone has logged in using this Machine at:{{$auth->updated_at}}    <p></p>
       Please destroy this session by clicking  <a href="{{URL::to('logout')}}" class="btn btn-danger glyphicon glyphicon-off  " title="logout"></a>button
    </b>
    @endif

@if(Session::has('out'))
    <div id="tan"  class="btn btn-info col-lg-12 ">
        <i> {{Session::get('out')}}<i/>
    </div>
    @endif
@if(Session::has('success'))
    <div id="tan"  class="btn btn-success col-lg-12 ">
        <i> {{Session::get('success')}}<i/>
    </div>
@endif
@if(Session::has('failed'))
    <div id="tan"  class="btn btn-danger col-lg-12 ">
        <i> {{Session::get('failed')}} <i/>

    </div>
@endif
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

            <a class="navbar-brand " href="{{URL::to('index')}}">
                <img src="assets/img/logo.jpg" width="90" height="90" class="navbar-brand-logo " alt="kiu" TITLE="Exploring the heights" />

            </a>
        </div>
        <div class="navbar-collapse collapse move-me ">
            <ul class="nav navbar-nav navbar-right">

                <li >
                    <a href="#home"     TITLE="home">HOME

                    </a>

                </li>
                <li >
                    <a href="{{URL::to('home')}}" TITLE="results center">RESULTS CENTER

                    </a>

                </li>

                <li >
                    <a href="#contact" TITLE="contact us">CONTACT US
                    </a>

                </li>



                <li >
                    <a href="">
                    </a>

                </li>
            </ul>
        </div>

    </div>
</div>
<!--./ NAV BAR END -->
<div id="home" TITLE="Exploring the heights Through Online Results System">
    <div class="overlay">
        <div class="container">
            <div class="row ">
                <div class="col-lg-9 col-md-9 head-text">
<!--corosol--->
                    <div class="donars-section" TITLE="Exploring the heights Through Online Results System">
                        <div class="overlay">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-12 ">
                                        <div id="testimonials" class="carousel slide" data-ride="carousel">

                                            <ol class="carousel-indicators">
                                                <li data-target="#testimonials" data-slide-to="0" class=""></li>
                                                <li data-target="#testimonials" data-slide-to="1" class=""></li>
                                                <li data-target="#testimonials" data-slide-to="2" class=""></li>
                                                <li data-target="#testimonials" data-slide-to="3" class="active"></li>
                                            </ol>

                                            <div class="carousel-inner" TITLE="Exploring the heights Through Online Results System">
                                                <div class="item">
                                                    <div class="container center">
                                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                                            <h4> <i>Welcome: Student Online Results System</i></h4>
                                                            <div class="user-img pull-right">
                                                                <img src="assets/img/en.jpg" width="100%" height="150%" alt="" class="img-circle image-responsive">
                                                            </div>
                                                            <h5 class="pull-right"><strong class="c-black"> </strong></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item" TITLE="Exploring the heights Through Online Results System">
                                                    <div class="container center">
                                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                                            <h4><i class="fa fa-quote-left">Enjoy Accessing Your Results Remotely!!</i> <i class="fa fa-quote-right"></i></h4>
                                                            <div class="user-img pull-right">
                                                                <img src="assets/img/user2.jpg" width="100%" height="120%" alt="" class="img-circle image-responsive">
                                                            </div>
                                                            <h5 class="pull-right"><strong class="c-black"> </strong></h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item" TITLE="Exploring the heights Through Online Results System">
                                                    <div class="container center">
                                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                                            <h4><i class="fa fa-quote-left">Feel Proud Of KIU with Digital Servisce!!</i> <i class="fa fa-quote-right"></i></h4>
                                                            <div class="user-img pull-right">
                                                                <img src="assets/img/en.jpg" width="100%" height="150%" alt="" class="img-circle image-responsive">
                                                            </div>
                                                            <h5 class="pull-right"><strong class="c-black"> </strong></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item active" TITLE="Exploring the heights Through Online Results System">
                                                    <div class="container center">
                                                        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                                            <h4><i class="fa fa-quote-left">Feel Good!!! </i></h4>
                                                            <div class="user-img pull-right">
                                                                <img src="assets/img/book.jpg" width="100%" height="150%" alt="" class="img-circle image-responsive">
                                                            </div>
                                                            <h5 class="pull-right"><strong class="c-black"> </strong></h5>
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
<!--corosol--->
                </div>

            </div>

        </div>

    </div>


<!--./ HOME SECTION END -->

    <div id="contact" TITLE="Exploring the heights Through Online Results System">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 data-wow-delay="0.3s" class="wow rollIn animated"><strong>CONTACT US </strong></h2>
                    <p class="sub-head">
                    <p class="sub-head  wow rotateIn animated" data-wow-delay="0.4s"><strong>ADDRESS :</strong>+255714729379 Dar Es Salaam ,Tanzania</p>
                </div>
            </div>
            <div class="row  text-center wow rotateIn animated" data-wow-delay="0.4s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <a href="#">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                    <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                    <a href="#"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                </div>
            </div>
            <div class="row pad-top-botm">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form action="{{URL::to('mail')}}" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control wow rotateIn animated" name="name" data-wow-delay="0.5s" required="required" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wow rotateIn animated" name="email" required="required" data-wow-delay="0.6s" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="comment"  required="required" data-wow-delay="0.7s" class="wow rotateIn animated form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block btn-lg wow rotateIn animated " data-wow-delay="0.8s">SUBMIT REQUEST</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
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
    <script>
        $('#document').ready(function(){
            $("#tan").delay(2500).slideDown(1000).delay(1200).slideUp(1200)
        });
    </script>
</body>
</html>
