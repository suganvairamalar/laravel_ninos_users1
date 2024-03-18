@extends('layouts.user')
@section('title')
EDIT
@endsection
@section('content')
<div class="container-fluid mt-2">
<div class="row">
      <div class="col-md-12">
         <div class="card">
            <!--Card content-->
            <div class="card-header">
               <h4>Registered Users / Edit <a href="{{url('user_registered')}}" class="btn btn-success text-white pull-right">BACK</a> 
                </h4>
            </div>
         </div>
      </div>
   </div>

   <div class="row mt-3">
    <div class="col-md-12">
      
      <div class="card">  
     
                            
        <div class="card-body">
           
         <form action="{{url('user_registered_update/'.$user->id)}}" method="post" >
    {{ csrf_field() }}
    {{ method_field('PUT') }}
<input type="hidden" name="id" class="form-control" placeholder="" value="{{$user->id}}" readonly>


          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">First Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$user->name}}">
              </div>              
            </div>              
             <div class="col-md-6">
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Name" value="{{$user->email}}" readonly>
              </div>              
            </div>   

             <div class="col-md-6">
              <div class="form-group">
                <label for="">Father Name</label>
                <input type="text" name="father_name" placeholder="Enter Father Name" value="{{ $user->userProfile->father_name ?? ''}}"class="form-control">

                
              </div>              
            </div>              
             <div class="col-md-6">
              <div class="form-group">
                <label for="">Mother Name</label>
                <input type="text" name="mother_name" class="form-control" placeholder="Enter Mother Name"  value="{{ $user->userProfile->mother_name ?? '' }}" >
              </div>              
            </div>   

            <div class="col-md-12">
              <div class="form-group">
                <button type="submit" class="btn btn-warning">UPDATE</button>
              </div>              
            </div>

          </div>
        </form>

        </div>
      </div>
    </div>
  </div>


</div>



                    
@endsection