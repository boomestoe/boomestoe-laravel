<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- head -->
    @include('frontEnd.layouts.head')
</head>
<body>

    <!-- header -->
    @include('frontEnd.layouts.header')

	<!-- slider -->
	@section('slider')
	@include('frontEnd.layouts.slider')
		@show

	<!-- banner -->
	@section('banner')
	@include('frontEnd.layouts.banner')
		@show

   <!-- section -->
	@section('main-content')
		@show

   
    <!-- footer -->
    @include('frontEnd.layouts.footer')
                


</body>
</html>