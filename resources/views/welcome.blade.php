
@extends('layout.master')
@section('content')

                <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
				       {{ csrf_field() }}
					   @if($errors->any())
					   <div class="alert alert-danger">
					   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					   <ul>
					   @foreach($errors->all() as $error)
					   <p> {{ $error }} </p>
					   @endforeach
					   </ul>
					   </div>
					   @endif
					   @if(Session::has('success'))
					   <div class="alert alert-success">
					   <p>{{Session::get('success') }}</p>
					   </div>
					   @endif
						  <div class="form-group">
						    <label for="CustomerName" class="col-form-label col-form-label-sm">Customer Name</label>
						    <input type="text" class="form-control form-control-sm" id="CustomerName" name="CustomerName">
						  </div>
						  <div class="form-group">
						    <label for="Address" class="col-form-label col-form-label-sm">Address</label>
						    <input type="text" class="form-control form-control-sm" id="Address" name="Address">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1" class="col-form-label col-form-label-sm">Email address</label>
						    <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" name="email" >
						  </div>
						  <div class="form-group">
						    <label for="Phone" class="col-form-label col-form-label-sm">Phone</label>
						    <input type="text" class="form-control form-control-sm" id="Phone" name="Phone">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlFile1">Photo</label>
						    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="Photo">
						  </div>
						  <div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Check me out</label>
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
					</form>

@endsection







						