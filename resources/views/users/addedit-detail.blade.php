@extends('layouts.user')
@section('title')
EDIT
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit User Profile Detail
          <a href="{{url('/users_index')}}" class="btn btn-primary pull-right">BACK</a>
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('users_index/'.$user_id.'/updatedetail')}}" method="post">
            @csrf
            @method('PUT')  
            <h4>USERS DETAIL</h4>
            <div class="mb-3">
              <label>Father Name</label>
              <input type="text" name="father_name" value="{{ $user->father_name ?? '' }}"class="form-control">
            </div>
            <div class="mb-3">
              <label>Mother Name</label>
              <input type="text" name="mother_name" value="{{ $user->mother_name ?? '' }}" class="form-control">
            </div>            
            <div class="mb-3">
            <button type="submit" class="btn btn-warning">Update</button>
            </div>
          </form>
        </div>
      </div>      
    </div>    
  </div>  
</div>



                    
@endsection