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
                <li class="breadcrumb-item active">Gallery List</li>
            </ol>
            <a href="/admingallery/create">Add image to Gallery</a>
        </div>
        <!-- Page header end -->

        <!-- Main container start -->
            <!-- Custom Data tables -->
 <div class="main-container">

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @foreach ($galleries as $gallery)
                   <div class="card col-4">
                       <img class="card-img-top" src="/{{$gallery->image}}" alt="">
                       <div class="card-body">
                           <h5 class="card-title">{{$gallery->caption}}</h5>
                       </div>
                       <div class="card-footer">
                        <a href="{{ url('/admingallery/delete/'.$gallery->id) }}" class="btn btn-outline-danger" role="button"> Delete Gallery</a>
                       </div>
                   </div>
                @endforeach

                {{ $galleries->links() }}

    </div>


</div>
        <!-- Main container end -->

    </div>
    <!-- Page content end -->

</div>

@endsection
