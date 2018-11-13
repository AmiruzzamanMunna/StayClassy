@extends('layouts.User-Home')
@section('title')
	Travelling
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/style3.css">
@endsection
@section('container')
	<div class="container c1">
		<div class="row">
			<div class="col-md-2">
				<img src="images/bag-1.jpg" class="rounded-circle crc" alt="logo">
				<button type="button" class="btn btn-danger"><a href="http://localhost:8000/details">Buy Now</a></button>
				<p><b id="b">Name A</b></p>
				
			</div>
			<div class="col-md-2">
				<img src="images/bag-3.jpg" class="rounded-circle crc" alt="logo">
				<button type="button" class="btn btn-danger"><a href="http://localhost:8000/details1">Byu Now</a></button>
				<p><b id="b">Name c</b></p>
				
			</div>
			<div class="col-md-2">
				<img src="images/bag-6.jpg" class="rounded-circle crc" alt="logo">
				<button type="button" class="btn btn-danger"><a href="http://localhost:8000/details3">Buy Now</a></button>
				<p><b id="b">Name D</b></p>
				
			</div>
		</div>
	</div>
	<div class="container c1">
		<div class="row">
			
		</div>
	</div>
	<div class="container c1">
		
	</div>
	<div class="container">
			<footer>
				<ul class="pagination justify-content-center">
					<li class="page-iterm "><a class="page-link" href="http://localhost:8080/StayClassy/category.php">Previous</a></li>
					<li class="page-iterm"><a class="page-link" href="http://localhost:8080/StayClassy/category.php">1</a></li>
					<li class="page-iterm"><a class="page-link" href="http://localhost:8080/StayClassy/category.php ">2</a></li>
					<li class="page-iterm"><a class="page-link" href="http://localhost:8080/StayClassy/category.php">3</a></li>
					<li class="page-iterm"><a class="page-link" href="http://localhost:8080/StayClassy/category.php">Next</a></li>
				</ul>
			</footer>
	</div>
@endsection