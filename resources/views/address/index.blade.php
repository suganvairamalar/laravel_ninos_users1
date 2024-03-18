@extends('layouts.user')
@section('title')
Index
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				@if(session('message'))
				<div class="alert alert-success">{{session('message')}}</div>
				@endif
				<div class="card">
					<div class="card-header">
						<h4>ADDRESS DETAILS
						<a href="{{url('addresses/create')}}" class=" btn btn-primary pull-right">ADD ADDRESS</a>
						</h4>
					</div>	
					<div class="card-body">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<td>S.NO</td>
									<td>ADDRESS1</td>
									<td>ADDRESS2</td>
									<td>PINCODE</td>
									<td>ACTION</td>
								</tr>
							</thead>
							<tbody>
								<?php $i=0; ?>
								@foreach($addresses as $item)
								<?php $i++; ?>
								<tr>
									<td>{{ $i }}</td>
									
									<td>{{ $item->address1}}</td>
									<td>{{ $item->address2}}</td>
									<td>{{ $item->pincode}}</td>
									<td><a href="{{ url('addresses/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>				
				</div>				
			</div>
		</div>
		{!! $addresses->links() !!}
	</div>
@endsection