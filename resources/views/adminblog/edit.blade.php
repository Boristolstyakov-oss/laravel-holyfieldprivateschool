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

            <form action="{{ route('adminblog.update',[$news->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="id" value={{ $news->id }}>
                <div class="form-group">
                    <label for="title">News Title</label>
                    <input type="text" name="title" required id="" value="{{ $news->title }}" class="form-control">
                </div>


                <div class="form-group">
                    <label for="my-input">News Details</label>
                   <textarea name="details" class="summernote" required cols="30" rows="10">{{ $news->details }}</textarea>
                </div>

                <div class="form-group">
                    <label for="title">Added By: </label>
                   <select name="poster" required class="form-control">
                    <option value="{{ $news->poster }}">{{ $news->poster }}</option>
                    <option value="Admin">Admin</option>
                    <option value="Student">Student</option>
                   </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update News" class="btn btn-primary">
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


