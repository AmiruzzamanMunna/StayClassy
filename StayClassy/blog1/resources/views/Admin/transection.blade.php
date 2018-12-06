@extends('layouts.Admin-Home')
@section('title')
	Transection
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script type="text/javascript" src="{{asset('js')}}/calender.js"></script>
	<script src="{{asset('js')}}/calenderscript.js"></script>
	<script src="{{asset('js')}}/script2.js"></script>
@endsection
@section('container')
	<div class="col-md-8"><br><br>
		<div class="card">
			<div class="card-header"><h1>Transection History</h1></div>
			<div class="card-body">
				<table class="table table-bordered table-striped">
					<tr>
						<th>
							<form method="POST">
								{{csrf_field()}}
								<div class="row m-auto">
									Date: <input type="text" id="datepicker" name="startdate" class="target">&nbsp;&nbsp;&nbsp;
									TO:<input type="text" id="datepicker1" name="enddate" class="target">&nbsp;&nbsp;&nbsp;
									<input type="submit" name="transaction" class="btn btn-success" value="Submit">
								</div>	
							</form>
						</th>
						<th>Amount</th>
						<th>Role</th>
						</th>
					</tr>
						@forelse($transetions as $transetion)
						<tr>
							<td>{{$transetion->date}}</td>
							<td>{{$transetion->amount}}</td>
							<td>
								@if($transetion->role == 0)
									Invest
								@else
									Income
								@endif
							</td>
						</tr>
						@empty
						@endforelse
						<tr>
							<td>Total</td>
							<td>Invest={{$invest}}</td>
							<td>Income={{$income}}</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								@if($profit == 0)
								Loss = {{$loss}}
								@else
								Profit = {{$profit}}
								@endif
							</td>
						</tr>
				</table>
			</div>
			<div class="card-footer">
				<a href="{{route('Pdf.report')}}" class="btn btn-success">Download</a>
			</div>
		</div>
	</div>
@endsection