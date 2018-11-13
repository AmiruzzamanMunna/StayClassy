@extends('layouts.Admin-Home')
@section('title')
	Stuff List
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
			<div class="card-header"><h2>Stuff List</h2></div>
				<div class="card-body">
					<table class="table table-bordered table-md table-striped">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Username</th>
							<th>Phone</th>
							<th>E-Mail</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>
						@forelse($stuffs as $stuff)
						<tr>
							<td>{{$stuff->id}}</td>
							<td>{{$stuff->name}}</td>
							<td>{{$stuff->username}}</td>
							<td>{{$stuff->phone}}</td>
							<td>{{$stuff->email}}</td>
							<td><a href="{{route('stuff.edit',[$stuff->id])}}">Edit</a></td>
							<td><a href="{{route('stuff.destroy',[$stuff->id])}}">Delete</a></td>
						</tr>
						@empty
						@endforelse
					
					</table>
				</div>
			</div>
		</div>
	</div>	
@endsection