@extends('layouts.admin')
@section('title')
Dashboard
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
				<div class="card">
					<div class="card-header">
						 <h1 class="text-center pt-4 ">Search with <strong class="text-danger">Relationships</strong></h1>
						 <div class="row py-2">
            <div class="col-md-2">
                <h2><a href="{{url('/uaddress')}}" class="btn btn-success">REFRESH</a></h2>
            </div>
    
            <div class="col-md-10">
                <div class="form-group">
                    <form action="{{url('/search')}}" method="get">
                        @csrf
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>    
                </div>
            </div>
        </div>
					</div>	
					<div class="card-body">
						<table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">S.NO</th>
                <th scope="col">User Name</th>
                <th scope="col">ADDRESS1</th>
                <th scope="col">ADDRESS2</th>
                <th scope="col">PINCODE</th>
            </tr>
            </thead>
            <?php $i=0; ?>
             @foreach ($user_addresses as $user_address)
        	<?php $i++; ?>
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>{{ $user_address->user->name }}</td>
                <td>{{ $user_address->address1 }}</td>
                <td>{{ $user_address->address2 }}</td>
                <td>{{ $user_address->pincode }} </td>
              
              </tr>
              
             @endforeach
            </tbody>
          </table>
					</div>				
				</div>				
			</div>
		</div>
		
		{{ $user_addresses->links() }}
		
	</div>
@endsection