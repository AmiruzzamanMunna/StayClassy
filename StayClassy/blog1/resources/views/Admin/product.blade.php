@extends('layouts.Admin-Home')
@section('title')
	Product
@endsection
@section('container')
	<div class="col-md-7"><br>
		<div class="row">
			<div class="card">
				<div class="card-header">
					<h2>All Products</h2>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-striped">
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Code</th>
							<th>Category</th>
							<th>Type</th>
							<th>Buy Price</th>
							<th>Price</th>
							<th>Discount %</th>
							<th>Quantity</th>
						</tr>
						<tr>
							<td><img src="images/bag-1.jpg" class="ig"></td>
							<td>BackPack Fasttrack</td>
							<td>back1</td>
							<td>Regular</td>
							<td>Gents</td>
							<td>3000</td>
							<td>3500</td>
							<td>10%</td>
							<td>20</td>
						</tr>
						<tr>
							<td><img src="images/bag-1.jpg" class="ig"></td>
							<td>BackPack Fasttrack</td>
							<td>back1</td>
							<td>Regular</td>
							<td>Gents</td>
							<td>3000</td>
							<td>3500</td>
							<td>10%</td>
							<td>20</td>
						</tr>
						<tr>
							<td><img src="images/bag-1.jpg" class="ig"></td>
							<td>BackPack Fasttrack</td>
							<td>back1</td>
							<td>Regular</td>
							<td>Gents</td>
							<td>3000</td>
							<td>3500</td>
							<td>10%</td>
							<td>20</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"><br>
		<div class="row m-auto">
			<div class="card">
				<div class="card-header">
					<h3>Categories</h3>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group row">
							<label>
								<input type="checkbox" name="new">Select All
							</label>
						</div>
						<div class="form-group row">
							<label>
								<input type="checkbox" name="new1">Travelling
							</label>
						</div>
						<div class="form-group row">
							<label>
								<input type="checkbox" name="new2">Duffel
							</label>
						</div>
						<div class="form-group row">
								<label>
									<input type="checkbox" name="new3">Office
								</label>
						</div>
						<div class="form-group row">
							<label>
								<input type="checkbox" name="new4">Regular
							</label>
						</div>
						<div class="form-group row">
							<label>
								<input type="checkbox" name="new5">Other Bags
							</label>
						</div>
					</form>
				</div>
			</div>
		</div><br>
		<div class="row m-auto">
			<div class="card">
				<div class="card-header">
					<h4> Category Types</h4>
				</div>
				<div class="card-body">
					<div class="form-group row">
						<label>
							<input type="checkbox" name="new6">Select All
						</label>
					</div>
					<div class="form-group row">
						<label>
							<input type="checkbox" name="new7">Gents
						</label>
					</div>
					<div class="form-group row">
						<label>
							<input type="checkbox" name="new8">Ladis
					</div>
					<div class="form-group row">
						<label>
							<input type="checkbox" name="new9">SugarBox
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection