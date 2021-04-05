<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-reboot.min.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" media="all" />
</head>
<body>
	<header class="header_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Customer Management System</h2>
				</div>
			</div>
		</div>
	</header> <!-- .header_area end -->



	<section class="header_bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Customer Management System</h2>
				</div>
				<div class="col-md-4">
					<form>
						<input type="search" name="search" placeholder="Search Here...">
						<button type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>
	</section> <!-- .header_bottom end -->



	<section class="main_page_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="border:2px solid #5B9BD5;background-color: #fff;padding: 0px !important;">
					<div class="main_menu">
						<ul>
							<li><a href="{{ route('home') }}" class="{{ '/' == request()->path()? 'active': '' }}">Add Customer</a></li>
							<li><a href="{{ route('display') }}" class="{{ 'display' == request()->path()? 'active': '' }}">All Customer</a></li>
						</ul>
					</div> <!-- .main_menu end -->
					<div class="content">
						@yield('content')
					</div><!-- .content end -->
				</div>
			</div>
		</div>
	</section> <!-- .main_page_section end -->


	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p></p>
				</div>
				<div class="col-md-6">
					<p> <a href="#" target="_blank"></a></p>
				</div>
			</div>
		</div>
	</footer> <!-- .footer end -->
	
	
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>