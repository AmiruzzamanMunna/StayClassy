@extends('layouts.Admin-Home')
@section('title')
	Right
@endsection
@section('container')
	<div class="col-md-8"><br><br><br>
		<form action="" method="post" enctype="mulipart/form-data">
			<div class="card">
				<div class="card-header"><h2>Right image</h2></div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-md-4">Title:</label>
						<input type="text" class="form-control col-md-6" name="artitle">
					</div>
					<div class="form-group row">
						<label class="col-md-4">Right Image:</label>
						<input type="file" class="form-control col-md-6" name="ar1">
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