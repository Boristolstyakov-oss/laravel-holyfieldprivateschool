@extends('layouts.app')
@section('content')

<body class="event-01">
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
                            <h1>School Events</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">School Events</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>

<section class="events-list-03">
	<div class="container">
		<div class="row event-body-content">
			@foreach ($lists as $events)
            <div class="col-sm-12 events-full-box">
				<div class="events-single-box">
					<div class="row">
						<div class="col-sm-5">
							<img src="/{{ $events->image }}" alt="" class="img-responsive">
						</div>

						<div class="col-sm-7 event-info">
							<h3>{{ $events->title }}</h3>
							<p class="events-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									{{ $events->date }}
								</span>
								<span>
									<i class="fa fa-clock-o event-icon"></i>
									{{ $events->time }}
								</span>
								<span>
									<i class="fa fa-map-marker event-icon"></i>
									{{ $events->location }}
								</span>
							</p>

							<p>{!! $events->detail !!}</p>


						</div>
					</div>
				</div>
			</div>
            @endforeach


		</div>
		<div class="row">
			{{ $lists->links() }}
		</div>
	</div>
</section>


@endsection
