<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nonngorfood.com</title>

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
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}






    @include('frontend.components.header')





     @yield('content')
     @include('sweetalert::alert')




    @include('frontend.components.footer')





    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>


</html>
