@extends('layouts.Admin-Home')
@section('title')
	Manage User
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/stufflist.css">
@endsection
@section('container')
	<div class="col-md-8">
		
		<div class="card">
			<div class="row">
			@if(session('message'))
				<div class="alert alert-success m-auto">
					{{session('message')}}
				</div>
			@endif
		</div>
			<div class="card-header"><h2>Manage User</h2></div>
				<div class="card-body">
					<table class="table table-bordered table-md table-striped">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Username</th>
							<th>E-Mail</th>
							<th>Mobile1</th>
							<th>Mobile2</th>
							<th>Delete</th>
						</tr>
						@forelse($admins as $admin)
						<tr>
							<td>{{$admin->id}}</td>
							<td>{{$admin->name}}</td>
							<td>{{$admin->username}}</td>
							<td>{{$admin->email}}</td>
							<td>{{$admin->mobile1}}</td>
							<td>{{$admin->mobile2}}</td>
							<td><a href="{{route('admin.destroy',[$admin->id])}}">Delete</a></td>
						</tr>
						@empty
						@endforelse
					
					</table>
				</div>
			</div>
		</div>
	</div>	
@endsection