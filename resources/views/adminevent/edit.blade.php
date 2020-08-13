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
                <li class="breadcrumb-item active">Update News</li>
            </ol>
        </div>
        <!-- Page header end -->

        <!-- Main container start -->
            <!-- Custom Data tables -->
 <div class="main-container">

    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <form action="{{ route('adminevent.update',[$event->id]) }}" method="POST" >
                @csrf
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value={{ $event->id }}>
                <div class="form-group">
                    <label for="title">Event Title</label>
                    <input type="text" required name="title" value={{ $event->title }} id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="my-input">Event Details</label>
                   <textarea name="details" required class="summernote" cols="30" rows="10">{!! $event->detail !!}</textarea>
                </div>

                <div class="form-group">
                    <label for="title">Event Location</label>
                    <input type="text" required name="location" value="{{ $event->location }}" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Event Date</label>
                    <input type="date" required name="date" value="{{ $event->date }}" id="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Event Time</label>
                    <input type="text" required name="time" value="{{ $event->time }}" placeholder="7am - 3pm" id="" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="Udpate Event Details" class="btn btn-primary">
                </div>
            </form>

        </div>

    </div>


</div>
        <!-- Main container end -->

    </div>
    <!-- Page content end -->

</div>


@endsection


