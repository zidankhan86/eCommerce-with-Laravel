<!DOCTYPE html>
<html lang="zxx">

<head>
    @notifyCss
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @php
        $title = App\Models\Title::latest()->first();
        @endphp
    <title>{{$title->title}}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" type="text/css">

</head>


<body>







    @include('frontend.components.header')





     @yield('content')
     @include('notify::components.notify')




    @include('frontend.components.footer')





    <!-- Js Plugins -->
    <script src="{{asset ('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset ('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{asset ('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{asset ('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{asset ('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{asset ('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{asset ('frontend/js/main.js') }}"></script>
    @notifyJs


</body>


</html>
