    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bappeda | Babel</title>
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/assets/css/style.css')}}">
   {{--  <style>
        @foreach($slider as $key=>$slider)
            .slide-2 {
                background: rgba(0, 0, 0, 0) url({{ asset('storage/images/slider/'.$slider->slider_gambar) }}) repeat scroll right center;
            }        
        @endforeach
    </style> --}}


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
{{-- section-head --}}
@section('head')
    @show
