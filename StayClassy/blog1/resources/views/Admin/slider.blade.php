@extends('layouts.Admin-Home')
@section('title')
	Slider
@endsection
@section('container')
	<div class="col-md-8"><br><br><br>
		<form action="" method="post" enctype="mulipart/form-data">
			<div class="card">
				<div class="card-header"><h2>Slider Images</h2></div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-md-4">Slider1:</label>
						<input type="file" class="form-control col-md-6" name="sl1">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Slider2:</label>
						<input type="file" class="form-control col-md-6" name="sl2">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Slider3:</label>
						<input type="file" class="form-control col-md-6" name="sl3">
					</div>
					<div class="row">
						<div class="col-md-3 ml-auto">
							<input type="submit" class="btn btn-success" name="" value="Update">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection