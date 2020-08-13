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
                <li class="breadcrumb-item active">Events List</li>
            </ol>
            <a href="/adminevent/create">Create Event</a>
        </div>
        <!-- Page header end -->

        <!-- Main container start -->
            <!-- Custom Data tables -->
 <div class="main-container">

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @foreach ($lists as $event)
                     <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                      <div class="card">
                          <img class="card-img-top" src="/{{ $event->image }}" alt="">
                          <div class="card-body">
                              <h5 class="card-title">{{ $event->title }}</h5>
                              <p class="card-text">{!! $event->detail !!}</p>
                              <p class="card-text"><i class="icon-location"></i> &nbsp; {{ $event->location }}</p>
                              <p class="card-text"><i class="icon-calendar"></i> &nbsp; {{ $event->date }}</p>
                              <p class="card-text"><i class="icon-clock1"></i> &nbsp; {{ $event->time }}</p>
                          </div>
                          <div class="card-footer">
                            <a href="{{url('/adminevent/'.$event->id.'/edit')}}" role="button" class="btn  btn-outline-primary btn-md">Edit News</a>
                            <a href="{{ url('/adminevent/delete/'.$event->id) }}" class="btn btn-outline-danger" role="button"> Delete Event</a>
                          </div>
                      </div>
                     </div>
                @endforeach

                {{ $lists->links() }}

    </div>


</div>
        <!-- Main container end -->

    </div>
    <!-- Page content end -->

</div>

@endsection
