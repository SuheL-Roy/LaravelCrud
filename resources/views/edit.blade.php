
@extends('layout.master')
@section('content')

                <form action="{{ route('update', $customer->id) }}" method="POST" enctype="multipart/form-data">
				       {{ csrf_field() }}
					  
						  <div class="form-group">
						    <label for="CustomerName" class="col-form-label col-form-label-sm">Customer Name</label>
						    <input type="text" class="form-control form-control-sm" id="CustomerName" name="CustomerName" value="{{ $customer->name }}">
						  </div>
						  <div class="form-group">
						    <label for="Address" class="col-form-label col-form-label-sm">Address</label>
						    <input type="text" class="form-control form-control-sm" id="Address" name="Address" value="{{ $customer->adress }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1" class="col-form-label col-form-label-sm">Email address</label>
						    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" name="email"value="{{ $customer->email }}" >
						  </div>
						  <div class="form-group">
						    <label for="Phone" class="col-form-label col-form-label-sm">Phone</label>
						    <input type="text" class="form-control form-control-sm" id="Phone" name="Phone" value="{{ $customer->phone }}">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlFile1">Photo</label>
						    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Photo">
						  </div>
						  <div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Check me out</label>
						  </div>
						  <button type="submit" class="btn btn-primary">Update</button>
					</form>

@endsection







						