
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title') | User Panel</title>
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <link rel="icon" type="image/x-icon" href="{{asset('users/css/favicon.ico')}}" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
         <link href="{{asset('users/css/styles.css')}}" rel="stylesheet">

         <style type="text/css">
  
        .img-logo{
          margin-left: 10px;
          margin-top: 1px;
          width: 220px; 
          height: 60px;
        }
    </style>
   
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                @include('layouts.inc.usersidebar')
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                     @include('layouts.inc.usernavbar')
                <!-- Page content-->
                <div id="tabbed-content" class="container-fluid mt-2">
                     @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
       <script src="{{asset('users/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
        <script src="{{asset('users/js/scripts.js')}}"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          <script type="text/javascript">
      
     
  /*  $("#tabbed-content").click(function () {
        alert("Hi");
        $("#tabbed-content .list-group-item").hide();
        $($(this).attr("href")).show();
    });*/
      
    </script>

         @yield('script')
    </body>
</html>
