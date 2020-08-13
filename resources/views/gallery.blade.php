@extends('layouts.app')
@section('content')

<body class="courses">
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
                            <h1>Image Gallery</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">School Gallery</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>


<div class="section-paddings gallery-images event-01">
	<div class="container">

		<div class="row gallery_img_wrapper">
            @foreach ($galleries as $gallery)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="single-gallery">
					<figure>
						<img src="/{{ $gallery->image }}" height="300" width="300" alt="">
						<figcaption>
							<a href="/{{ $gallery->image }}" title=""><i class="fa fa-eye"></i></a>
							<h4>Caption <span>{{ $gallery->caption }}</span></h4>
						</figcaption>
					</figure>
				</div>
			</div>
            @endforeach
            {{ $galleries->links() }}

		</div>
	</div>
</div>


@endsection
