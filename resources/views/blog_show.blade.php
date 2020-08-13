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
							<img src="../images/event/event-details.jpg" alt="" class="img-responsive">
						</div>

					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<h3><a href="#">Seven UK business schools for intelligent students</a></h3>
								<p>
									<span><i class="fa fa-calendar"></i>22 December, 2016</span>
									<span><i class="fa fa-map-marker"></i>NewYork Tower, Melbourne</span>
								</p>
							</div>
							<div class="description-text">
								<div class="row">

									<div class="col-sm-11">
										<div class="description-text-right">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate. Vivamus et facilisis mauris. Maecenas nec massa auctor, ultricies massa eu, tristique erat. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui
											</p>
											<p>lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.
											lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.</p>
											<p class="description-speech">
											<i class="fa fa-quote-right"></i>
											Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae id efficitur condimentum, dui nisl ullamcorper diam, at molestie nulla erat gna egestas tempor Lorem ipsum dolor sit.
											</p>
											<p>lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.
											lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="more-events">
							<div class="row">
								<h3>Upcoming Events</h3>
								<div class="col-sm-6 col-md-4 event-single">
									<div class="event-single-box">
										<div class="img-box">
											<img src="../event/up-event-01.jpg" alt="" class="img-responsive">
										</div>
										<div class="blog-content">
											<h4><a href="#">The future of Web Design</a></h4>
											<p class="blog-time">
												<span>
													<i class="fa fa-calendar event-icon"></i>
													12 July, 2019
												</span>
												<span>
													<i class="fa fa-comment"></i>
													12
												</span>
											</p>
											<div class="content-bottom">
												<p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum.</p>
												<span class="first-item"><a href="#">Read More<i class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-md-4 event-single">
									<div class="event-single-box">
										<div class="img-box">
											<img src="../event/up-event-02.jpg" alt="" class="img-responsive">
										</div>
										<div class="blog-content">
											<h4><a href="#">The future of php Programing</a></h4>
											<p class="blog-time">
												<span>
													<i class="fa fa-calendar event-icon"></i>
													19 July, 2019
												</span>
												<span>
													<i class="fa fa-comment"></i>
													17
												</span>
											</p>
											<div class="content-bottom">
												<p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum.</p>
												<span class="first-item"><a href="#">Read More<i class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-md-4 event-single">
									<div class="event-single-box">
										<div class="img-box">
											<img src="../event/up-event-03.jpg" alt="" class="img-responsive">
										</div>
										<div class="blog-content">
											<h4><a href="#">The future of Web Design</a></h4>
											<p class="blog-time">
												<span>
													<i class="fa fa-calendar event-icon"></i>
													12 July, 2019
												</span>
												<span>
													<i class="fa fa-comment"></i>
													18
												</span>
											</p>
											<div class="content-bottom">
												<p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum.</p>
												<span class="first-item"><a href="#">Read More<i class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--End .row-->


				</div>
			</div>


			{{-- <div class="col-sm-4">
				<div class="sidebar-text-post">
					<div class="row">
						<div class="col-sm-12">
							<h3>Next Events</h3>
							<div class="categories-item-post">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-angle-right"></i>USA <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Norway<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Russia<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>London<span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Australia <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Singapur <span>(23)</span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 blog-padding-none">
							<h3>Event tags</h3>
							<div class="populer-tags">
								<div class="tagcloud">
									<a href="#">USA</a>
									<a href="#">Russia</a>
									<a href="#">Events</a>
									<a href="#">Learning</a>
									<a href="#">Norway</a>
									<a href="#">Australia</a>
									<a href="#">Speakers</a>
									<a href="#">Audio</a>
									<a href="#">Singapur</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
</div>
@endsection
