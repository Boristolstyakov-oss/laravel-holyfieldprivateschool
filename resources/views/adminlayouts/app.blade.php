
<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/logocopy.png" />

		<title>Holy Field Private School - Admin Dashboard</title>

		<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset('admin/fonts/style.css') }}">
		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">

        <link rel="stylesheet" href="{{ asset('admin/vendor/daterange/daterange.css') }}" />
		<link rel="stylesheet" href="{{ asset('admin/js/summernote/summernote.css') }}" />


	</head>

	<body>

		@yield('content')
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
		<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('admin/js/moment.js') }}"></script>


		<script src="{{ asset('admin/vendor/slimscroll/slimscroll.min.js') }}"></script>
		<script src="{{ asset('admin/vendor/slimscroll/custom-scrollbar.js') }}"></script>

		<!-- Daterange -->
		<script src="{{ asset('admin/vendor/daterange/daterange.js') }}"></script>
		<script src="{{ asset('admin/vendor/daterange/custom-daterange.js') }}"></script>

		<!-- Polyfill JS -->
        <script src="{{ asset('admin/vendor/polyfill/polyfill.min.js') }}"></script>


<!-- Custom Data tables -->
        <script src="{{ asset('admin/vendor/datatables/custom/custom-datatables.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables/custom/fixedHeader.js') }}"></script>
        <script src="{{ asset('admin/js/summernote/summernote.js') }}"></script>

        <!-- Download / CSV / Copy / Print -->
        <script src="{{ asset('admin/vendor/datatables/buttons.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables/html5.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/datatables/buttons.print.min.js') }}"></script>

		<!-- Main JS -->
        <script src="{{ asset('admin/js/main.js') }}"></script>
        <script src="{{ asset('admin/vendor/lobipanel/js/lobipanel.js') }}"></script>
        <script src="{{ asset('admin/vendor/lobipanel/js/lobipanel-custom.js') }}"></script>

        <script>
			$(document).ready(function() {
				$('.summernote').summernote({
					height: 170,
					tabsize: 2
				});
			});
		</script>
	</body>

</html>
