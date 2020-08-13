@extends('layouts.app')

@section('content')

<body class="blog_1 mean-container">
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
                            <h1> School News</h1>
                            <p><span><a href="/index">Home <i class="fa fa-angle-right"></i></a></span> <span class="b-active">Blog</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>


    <div class="blog-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 bolg_side-left">

                    @foreach ($allnews as $news)
                    <div class="col-sm-12 single-item-box">
                        <div class="single-item">
                                <a href="blog/{{$news->id}}"><img src="/{{ $news->image }}" alt="" class="" style="background-size:cover" height="300"></a>
                                <span><a href="blog/{{$news->id}}" class="overlay"></a></span>
                            <div class="single-text-box">
                                <h3><a href="blog/{{$news->id}}">Students in Class Room</a></h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">By {{ $news->poster }}</a></li>
                                    <li><a href="#">{{ $news->created_at }}</a></li>
                                </ul>
                                <p></p>
                                <div class="blog-btn-box">
                                    <a href="blog/{{$news->id}}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  <center>{{ $allnews->links() }}</center>
                </div>

                <div class="col-sm-4 blog_side-right">
                    <div class="sidebar-content">
                        <div class="col-sm-12 recent-post-01">
                            <h3>Student's News</h3>
                            <div class="row">

                               @foreach ($studentnews as $snews)
                               <div class="row">


                               <div class="col-sm-12 recent-single " style="margin-top:12px;margin-bottom:7px;">
                                <div class="recent-content-item">
                                    <div class="img-box"><a href="blog/{{$snews->id}}"><img src="/{{  $snews->image  }}" alt=""></a></div>
                                    <div class="recent-text pull-right">
                                        <a href="blog/{{$snews->id}}">{{ $snews->title }}</a>
                                        <p> <span class="content"><i class="fa fa-calendar"></i>{{ $snews->created_at }}</span></p>
                                    </div>
                                </div>
                            </div></div>
                               @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
