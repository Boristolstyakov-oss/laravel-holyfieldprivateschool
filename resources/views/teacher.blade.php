@extends('layouts.app')
@section('content')

<body class="teachers-01">
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
                            <h1>Meet the school teachers</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">School Teachers</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>


  <section class="teachers-area">
	<div class="container">
		<div class="row teachers-wapper-01">
			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-01.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>David Martin</h3>
						<span>PROFESSOR OF MATHEMATICS</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-10.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>Michael Smith</h3>
						<span>PROFESSOR OF BIOLOGY</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-09.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>Katie Hale</h3>
						<span>GEOMETRY TEACHER</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-02.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>Willian Kane</h3>
						<span>Manegment Teacher</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="row  teachers-wapper-01">
			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-05.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>Taylor Butler</h3>
						<span>PROFESSOR OF MATHEMATICS</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-01.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>Jhothan Smith</h3>
						<span>PROFESSOR OF BIOLOGY</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-07.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>Anna Fry</h3>
						<span>GEOMETRY TEACHER</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3 teacher-single">
				<div class="teacher-body">
					<img src="images/teachars/teachar-02.jpg" alt="" class="img-responsive">
					<div class="teachars-info">
						<h3>Jhothan Smith</h3>
						<span>Manegment Teacher</span>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>


		</div>

</section>


@endsection
