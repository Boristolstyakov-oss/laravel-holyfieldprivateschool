@extends('layouts.app')

@section('content')

<body class=" contact">
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

                        <li><a href="/index"><img src="images/logox.png" width="130" height="130" alt=""></a></li>
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
                    <h1>Contact Us</h1>
                    <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">Contact</span></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
</header>


<section class="contact-area-02">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 contact-info">
                <div class="col-sm-12 contact-title">
                    <h2>Contact Info</h2>
                    <p class="content-sub_p">Welcome to Holy Field Private School. We are glad to have you around. Get in touch with us. </p>
                </div>
                <div class="col-sm-12 contact-box">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Phone</h4>
                                <p style="padding-left:43px;">08033845876</p><p style="padding-left:44px;"> 08033888192</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <p>hfps.ajuwon@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Location:</h4>
                                <p>11, Ayinla Ademokoya Street </p><p style="padding-left:44px;"> Off Baale Road </p><p style="padding-left:45px;"> Iju- Ajuwon</p>
                            </div>
                        </div>
                        <div class="col-sm-12 single-address-box">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin teacher-icon"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram teacher-icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6  col-sm-offset-1 contact-form">
                <div class="row">
                    <div class="col-sm-12 contact-title-btm">
                        <h2>Send A Message</h2>
                        <p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
                    </div>
                </div>
                <div class="input-contact-form">


                    <div id="contact">
                        <div id="message"></div>
                        <form method="post" action="{{route('contact.store')}}" >
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" required class="form-control" placeholder="Name" name="name" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" required class="form-control" placeholder="Email" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" required name="subject" id="subject">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" placeholder="Message" required name="message" id="comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="full-width">
                                        <input value="Submit" type="submit" name="submit" id="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


@endsection
