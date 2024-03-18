@extends('layouts.user')
@section('title')
Dashboard
@endsection
@section('content')

<div class="row">
      <div class="col-md-12">
         <div class="card">
            <!--Card content-->
            <div class="card-body">
               <h6 class="mb-0">
                  Welcome To Users                   
               </h6>
              
            </div>
         </div>
      </div>
   </div>

   <div class="row mt-3">
    <div class="col-md-12">
      <div class="card">
             <!-- @if(session('status'))
                  <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                  </div>
               @endif -->
        <div class="card-body">
            <h1 >Welcome to Users Dashboard</h1>
         
        </div>
      </div>
    </div>
  </div>





 @endsection