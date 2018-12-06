<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table table-bordered table-striped">
		<tr>
			<th>Date</th>
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
</body>
</html>