<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	
	<!-- css -->
	<link href="{{URL::asset("backend/css/bootstrap.min.css")}}" rel="stylesheet">
	
	<link href="{{URL::asset("backend/css/styles.css")}}" rel="stylesheet">
	<!--Icons-->
	
	<script src="{{URL::asset("backend/js/lumino.glyphs.js")}}"></script>
	<link rel="stylesheet" href="{{URL::asset("backend/Awesome/css/all.css")}}">
</head>
<body>
	<!-- header -->
	@include('backend.master.header')
	<!-- header -->
	<!-- sidebar left-->
	@include('backend.master.sidebar')
	<!--/. end sidebar left-->

	<!--main-->
	@yield('content')
	<!--end main-->

    <!-- javascript -->
	@section('script')
        <script src="{{URL::asset("backend/js/jquery-1.11.1.min.js")}}"></script>
        <script src="{{URL::asset("backend/js/bootstrap.min.js")}}"></script>
        <script src="{{URL::asset("backend/js/chart.min.js")}}"></script>   
        <script src="{{URL::asset("backend/js/chart-data.js")}}"></script>
    @show
	

</body>

</html>