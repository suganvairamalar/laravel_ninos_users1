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
      .sidebar-fixed{height:100vh;width:270px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);z-index:1050;background-color:#fff;padding:0 1.5rem 1.5rem}.sidebar-fixed .list-group .active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);box-shadow:0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);-webkit-border-radius:5px;border-radius:5px}.sidebar-fixed .logo-wrapper{padding:2.5rem}.sidebar-fixed .logo-wrapper img{max-height:50px}@media (min-width:1200px){.navbar,.page-footer,main{padding-left:270px}}@media (max-width:1199.98px){.sidebar-fixed{display:none}}

        .container-for-admin{
          background-color: #eee!important;
        }

        .map-container{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
        }
        .map-container iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
        }
        .img-logo{
          margin-left: -35px;
          margin-top: -30px;
          width: 220px; 
          height: 400px;
        }
    </style>
     
</head>
<body>
   
  <!-- Start your project here-->  
   <header><!--Main Navigation-->
      @include('layouts.inc.adminnavbar')
      @include('layouts.inc.adminsidebar')
      </header><!--End Main Navigation-->
      <main class="pt-5 mx-lg-5">
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
