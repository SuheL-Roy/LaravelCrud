@extends('layout.master')
@section('content')

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

<table class="table table-responsive table-striped table-hover">
                      		<thead class="table_head">
                        		<tr>
	                        		<th>SL</th>
	                            	<th>Customer Name</th>
	                              	<th>Address</th>
	                              	<th>Email</th>
	                              	<th>Phone</th>
	                              	<th>Photo</th>
	                              	<th>Manage</th>
	                            </tr>
                        	</thead>
                            <tbody>

                            @php $i=1; @endphp
                            @foreach($customers as $customer)
                            <tr>
                            		<td>@php echo $i; @endphp</td>
                            		<td>{{ $customer->name }}</td>
                            		<td>{{ $customer->adress }}</td>
                            		<td>{{ $customer->email }}</td>
                            		<td>{{ $customer->phone }}</td>
                            		<td><img src="{{ asset('img/'.$customer->photo)}}" style="width: 60px;height: 60px"></td>
                            		<td>
                            			<a href="{{ route('edit',$customer->id)}}" class="btn btn-info">Edit</a>
                            			<a href="{{ route('delete',$customer->id)}}" onclick="return confirm('Are you sure Delete!')" class="btn btn-danger">Delete</a>
                                        
                            		</td>
                            	</tr>
                                @php $i++; @endphp
                            @endforeach

                            	
                            </tbody>
                        </table>

@endsection