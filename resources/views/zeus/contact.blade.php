

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
                    <!-- Custom Data tables -->
		 <div class="main-container">

            <div class="row gutters">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="table-container">
						<div class="t-header">No Search Field</div>								<div class="table-responsive">
								<table id="copy-print-csv" class="table custom-table">
									<thead>
										<tr>
                                          <th>S/N</th>
										  <th>Name</th>
										  <th>Email</th>
										  <th>Subject</th>
										  <th>Message</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($contact as $message)
                                          <tr>
                                            <td>{{ $message->id }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>{{ $message->message }}</td>


                                        </tr>
                                        @endforeach


									</tbody>
						    	</table>
							</div>
						</div>

                    </div>
            </div>


		</div>
                <!-- Main container end -->

            </div>
            <!-- Page content end -->

        </div>


        @endsection


