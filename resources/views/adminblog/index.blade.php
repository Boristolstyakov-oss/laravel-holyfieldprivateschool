        @extends('adminlayouts.app')

        @section('content')

        <div id="loading-wrapper">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Loading ends -->


        <!-- Page wrapper start -->
        <div class="page-wrapper">

            <!-- Sidebar wrapper start -->
            @include('adminsidebar')
            <!-- Sidebar wrapper end -->

            <!-- Page content start  -->
            <div class="page-content">

                <!-- Header start -->
                @include('adminheader')
                <!-- Header end -->

                <!-- Page header start -->
                <div class="page-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">News List</li>
                    </ol>
                    <a href="/adminblog/create">Create News</a>
                </div>
                <!-- Page header end -->

                <!-- Main container start -->
                    <!-- Custom Data tables -->
		 <div class="main-container">

            <div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        @foreach ($newss as $news)
                             <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card">
                                    <img class="card-img-top" src="" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $news->title }}</h5>
                                        <p class="card-text">{!! $news->details !!}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{url('/adminblog/'.$news->id.'/edit')}}" role="button" class="btn  btn-outline-primary btn-md">Edit News</a>

                                        <a href="{{ url('/adminblog/delete/'.$news->id) }}" class="btn btn-outline-danger" role="button"> Delete News</a>

                                    </div>
                                </div>
                             </div>
                        @endforeach

                        {{ $newss->links() }}

            </div>


		</div>
                <!-- Main container end -->

            </div>
            <!-- Page content end -->

        </div>

        @endsection
