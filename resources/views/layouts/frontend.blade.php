<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title') | Ninos</title>
  <meta name="description" content="@yield('meta_description')">  
    <meta name="keywords" content="@yield('meta_keyword')"> 
 <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">  
     
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
   
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}"> 
   
  
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- OwlCarousel2 css -->
  
     <link rel="stylesheet" href="{{asset('assets/css/owlcarousel/owl.carousel.min.css')}}">
   
     <link rel="stylesheet" href="{{asset('assets/css/owlcarousel/owl.theme.default.min.css')}}">

     <style type="text/css">
  
        .img-logo{
          margin-left: -110px;
          margin-top: -10px;
          width: 180px; 
          height: 40px;
        }
    </style>
     
</head>
<body>

  <!-- Start your project here-->  
   @include('layouts.inc.front-navbar')
      <main>
        @yield('content')
      </main>
  <!-- End your project here-->

 <!-- jQuery -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- OwlCarousel2 JavaScript -->  
   <script type="text/javascript" src="{{asset('assets/js/owlcarousel/owl.carousel.min.js')}}"></script> 
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
