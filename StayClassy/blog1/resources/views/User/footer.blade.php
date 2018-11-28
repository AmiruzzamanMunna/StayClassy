@extends('layouts.User-Home');
@section('title')
	Footer
@endsection
@section('css')

@endsection
@section('container')
	<div class="container footer-container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
						@foreach($qualitys as $quality)
							<h1>{{$quality->heading}}</h1>
							<p>{{$quality->title}}</p>
							<p>{{$quality->description}}</p>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection