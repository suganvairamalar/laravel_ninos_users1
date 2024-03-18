@extends('layouts.user')
@section('title')
ADD
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>EDIT PRODUCT
						<a href="{{url('addresses')}}" class=" btn btn-secondary pull-right">BACK</a>
						</h4>
					</div>		
					<div class="card-body">
						<form action="{{url('addresses/'.$address->id)}}" method="post">
								@csrf
								@method('PUT')
								<input type="hidden" name="user_id" value="{{$users}}" class="form-control" readonly>
								
								<div class="mb-3">
									<label>USER</label>
									<input type="text" name="user_name" value="{{$user_name}}" class="form-control" readonly>
								</div>

								<div class="mb-3">
									<label>Address1</label>
									<input type="text" name="address1" value="{{ $address->address1 }}" class="form-control">
								</div>
								<div class="mb-3">
									<label>Address2</label>
									<input type="text" name="address2" value="{{ $address->address2 }}" class="form-control">
								</div>
								<div class="mb-3">
									<label>Phone</label>
									<input type="text" name="pincode" value="{{ $address->pincode }}" class="form-control">
								</div>
								<div class="mb-3">
									<button type="submit" class="btn btn-primary">UPDATE</button>
								</div>
						</form> 						
					</div>			
				</div>				
			</div>
		</div>
	</div>
@endsection