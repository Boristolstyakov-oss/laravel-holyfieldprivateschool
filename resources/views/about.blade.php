@extends('layouts.app')
@section('content')

<body class="t-profile-01">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>


    <header id="header">
        <div class="header-body">
            <nav class="navbar edu-navbar bg-light" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                            <li><a href="/index"><img src="images/logox.png" width="120" height="120" alt=""></a></li>
                            <li><a data-scroll="" href="/index">Home</a></li>
                            <li><a data-scroll="" href="/admission">Admission</a></li>
                            <li><a data-scroll="" href="/teacher">Teachers</a></li>
                            <li><a data-scroll href="/event">Event</a></li>
                            <li><a data-scroll href="/gallery">Gallery</a></li>
                            <li><a data-scroll href="/blog">Blog</a></li>
                            <li><a data-scroll href="/about">About</a></li>
                            <li><a data-scroll href="/contact">Contact</a></li>
						<li style="display:none"><a data-scroll href="/contact">Contact</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <h1> About The School</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">About us</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>


    <section class="teacher-prolile-01">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 t-profile-left">
                    <div class="teacher-contact">
                        <img src="images/logox.png" alt="" class="img-responsive">
                        <h3>Contact Info</h3>
                        <p><span>Email:</span> hfps.ajuwon@gmail.com</p>
                        <p><span>Phone:</span> 08033845876, 08033888192</p>
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter "></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 t-profile-right">
                    <div class="row all-corsess-wapper">
                        <div class="col-sm-12">
                            <div class="all-courses">
                                <h3>Holy Field Private School</h3>

                                <p>Holy Field Private School was founded on the 22<sup>nd</sup> of september 2003 on a temporary site at no 20 Fasina street Baale Akinosi Town, Ifo local government Area of Ogun State.  </p>
                                <p>The school started with 30 pupils spread across Kindergaten, Nursery and Primary. Within a short space of time the population rose speedily beacuse of the vision of the school which is geared toward qualitative learning and superb moral upbringing.</p>

                                <p>Our watchword still remains academic and moral excellence. The school was officially approved by Ogun State Ministry of education, Science and Technology to write the first school leaving certificate examination in April 2009. And has since turned out total chldren who had held their shoulders high among their peers in other institutions of higher learning.</p>

                                <p>Today the school has succeeded in having the secondary section from junior to senior secondary. In the last two years of our attempt at WAEC or WASSCE, our school result was 100% outing with a minimum of 3A's and 2B's and only a credit in the last one of 2019</p>
                            </div>
                        </div>
                    </div>



                    <div class="row courses-instuctor">
                        <div class="col-sm-12">
                            <h3 class="courses-title">Meet the Founders</h3>
                            <div class="row item-margin">
                                <div class="col-sm-6 instractor-single">
                                    <div class="instractor-courses-single">
                                        <div class="img-box">
                                            <img src="images/daddy.jpg" style="width:410px; height:430px;" alt="" class="img-responsive">
                                        </div>
                                        <div class="instractor-courses-text">
                                            <div class="instractor-parson">


                                            </div>
                                            <div class="text-bottom">
                                                <h3><a href="#">Evang. Akintunde Francis</a></h3>
                                                <p>Director Of Studies, Holy Field Private School.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="col-sm-6 instractor-single">
                                    <div class="instractor-courses-single">
                                        <div class="img-box">
                                            <img src="images/mommy.jpg" style="width:410px; height:430px;" alt="" class="img-responsive">
                                        </div>
                                        <div class="instractor-courses-text">
                                            <div class="instractor-parson">


                                            </div>
                                            <div class="text-bottom">
                                                <h3><a href="#">Mrs Akintunde Temitope</a></h3>
                                                <p>Propritress, Holy Field Private School.</p>

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
    </section>


@endsection
