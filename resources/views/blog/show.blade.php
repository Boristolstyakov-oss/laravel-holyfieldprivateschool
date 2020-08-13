@extends('layouts.app')
@section('content')
<body class="event-details-1">
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

                            <li><a href="/index"><img src="../images/logox.png" width="130" height="130" alt=""></a></li>
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
                            <h1> School News</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">Blog</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
</header>

<div class="event-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 post_left-side">
				<div class="row">
					<div class="col-sm-12 ">
						<div class="post--box">
							<img src="/{{ $blog->image }}" alt="" class="img-responsive">
						</div>

					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<h3><a href="#">{{ $blog->title }}</a></h3>
								<p>
									<span><i class="fa fa-calendar"></i>{{ $blog->created_at }}</span>
									<span><i class="fa fa-user"></i>Posted by {{ $blog->poster }}</span>
								</p>
							</div>
							<div class="description-text">
								<div class="row">

									<div class="col-sm-11">
										<div class="description-text-right">
											<p class="text-justify">{!! $blog->details !!}</p>
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
@endsection
