@extends('layouts.User-Home')
@section('title')
	User Profile
@endsection
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/order.css">

@endsection
@section('script')
@endsection
@section('container')
	<div class="col-md-5 m-auto">
        <div class="card">
            <div class="card-header">User info</div>
            <div class="card-body">
                <div class="form-group row">
                    @foreach($users as $customer)
                    <label class="col-md-6">Name</label>
                    <label class="col-md-6">{{$customer->name}}</label>
                    <label class="col-md-6">Email</label>
                    <label class="col-md-6">{{$customer->email}}</label>
                    <label class="col-md-6">Mobile1</label>
                    <label class="col-md-6">{{$customer->mobile1}}</label>
                    <label class="col-md-6">Mobile2</label>
                    <label class="col-md-6">{{$customer->mobile2}}</label>
                    <label class="col-md-6">Address</label>
                    <label class="col-md-6">{{$customer->address}}</label>
                    @endforeach
                </div>
                <div class="row">
                    @foreach($orders as $customer)
                    <div class="col-md-6">
                       <a href="{{route('user.orderdetails',[$customer->invoice_id])}}" class="btn btn-primary">All Order</a>
                       @break
                       @endforeach
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <dir class="col-md-12">
                        <div class="row">
                            <div class="col-md-2 m-auto">
                              
                            </div>
                        </div>
                    </dir>
                </div>
            </div>
        </div>
	</div>
@endsection