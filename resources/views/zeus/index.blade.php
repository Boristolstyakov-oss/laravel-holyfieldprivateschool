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
                <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>

        </div>
        <!-- Page header end -->

        <!-- Main container start -->
        <div class="main-container">

            <!-- Row start -->
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4">
                        <div class="info-icon">
                            <i class="icon-message-square"></i>
                        </div>
                        <div class="sale-num">
                            <h3>{{ $news }}</h3>
                            <p>News</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4">
                        <div class="info-icon">
                            <i class="icon-event_available"></i>
                        </div>
                        <div class="sale-num">
                            <h3>{{ $events }}</h3>
                            <p>Events</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4">
                        <div class="info-icon">
                            <i class="icon-image"></i>
                        </div>
                        <div class="sale-num">
                            <h3>{{ $gallery }}</h3>
                            <p>Image Gallery</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4">
                        <div class="info-icon">
                            <i class="icon-user1"></i>
                        </div>
                        <div class="sale-num">
                            <h3>70</h3>
                            <p>Students</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="info-stats4">
                        <div class="info-icon">
                            <i class="icon-message"></i>
                        </div>
                        <div class="sale-num">
                            <h3>{{ $contacts }}</h3>
                            <p>Message</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Row end -->



        </div>
        <!-- Main container end -->

    </div>
    <!-- Page content end -->

</div>


@endsection
