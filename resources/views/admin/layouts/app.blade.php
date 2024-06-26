<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>PropertyBook- Admin</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />   
	  
	 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

	<!-- Vendor CSS Files -->
	<link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/admin/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
<!--  //banner-slider  -->
<!-- Scripts -->

	 
</head>
<body>
	@if(Session::exists('ecno') && !empty(Session::get('ecno')))
	@else
	@php return redirect('/login')->withErrors('Login please!!'); @endphp
	@endif
	  <!-- ======= Header ======= -->
	  <style>#tables-nav{display:block;}@media print {#header{background-color:transparent;display:none;}body{background-color:white;}#main{z-index:1000;margin-top:-10px}.no-print{display:none;}.print{display:block;}}</style>
	  <header id="header" class="header fixed-top d-flex align-items-center bg-info no-print">

		<div class="d-flex align-items-center justify-content-between no-print">
		<a  class="logo d-flex align-items-center no-print">
			<img src="{{asset('assets/home/img/logo.jpg')}}" alt="" class="no-print">
			<span class="d-none d-lg-block text-light no-print remove" id="remove">Property <span class="text-dark">Book</span></span>
		</a>
		<i class="bi bi-list toggle-sidebar-btn no-print"></i>
		</div><!-- End Logo -->

		<nav class="header-nav ms-auto no-print" style="margin-right:50px" >
		<ul class="d-flex align-items-center no-print">
			<li class="nav-item dropdown pe-3 no-print">
				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
					@if(Session::exists('ecno') && !empty(Session::get('ecno')))
						<img src="{{asset(Session::get('profile'))}}" style="width:35px;height:35px" alt="" class="rounded-circle">
						<span class="d-none d-md-block dropdown-toggle ps-2">
							@if(Session::get('usertype')=='admin')
								{{ ucwords(Session::get('firstname'))}}
							@else
								{{ ucwords(Session::get('firstname') )}}&nbsp;{{ ucwords(Session::get('surname') )}}
							@endif
						</span>
					@endif
				</a><!-- End Profile Iamge Icon -->
				
				<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" style="right:95;">
					<li class="dropdown-header">
					<h6>@if(Session::get('usertype')=='admin'){{ ucwords(Session::get('firstname'))}}
						@else
						{{ ucwords(Session::get('firstname') )}}&nbsp;{{ ucwords(Session::get('surname') )}}
						@endif

					</h6>
					<span>{{ strtoupper(Session::get('usertype')) }}</span>
					</li>
					<li>
					<hr class="dropdown-divider">
					</li>
					<li>
					<hr class="dropdown-divider">
					</li>

					<li>
					<a class="dropdown-item d-flex align-items-center" href="/admin/logout">
						<i class="bi bi-box-arrow-right"></i>
						<span>Sign Out</span>
					</a>
					</li>
				</ul><!-- End Profile Dropdown Items -->
			</li><!-- End Profile Nav -->

		</ul>
		</nav><!-- End Icons Navigation -->

		</header><!-- End Header -->

		<!-- ======= Sidebar ======= -->
		<aside id="sidebar" class="sidebar bg-dark no-print">

		<ul class="sidebar-nav no-print" id="sidebar-nav">
			<li class="nav-item no-print">
				<a class="nav-link collapsed" id="dashboard" href="/admin/user.dashboard">
				<i class="bi bi-grid"></i>
				<span>Dashboard</span>
				</a>
			</li><!-- End Dashboard Nav -->


			
			@if(Session::get('usertype')=='admin')			
			<li class="nav-item">
				<a class="nav-link  collapsed" id="settings" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
				<i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="tables-nav" class="nav-content collapse bg-info-light" data-bs-parent="#sidebar-nav">
					@if(Session::get('usertype')=='admin')
					<li >
						<a href="/admin/homefooter" id="homefooter" style="padding-top:3px;padding-bottom:2px;">
						<i class="bi bi-circle"></i><span>Home/Footer</span>
						</a>
					</li>
					<li>
						<a href="/admin/services" id="services"  style="padding-top:3px;padding-bottom:2px;">
						<i class="bi bi-circle"></i><span>Services</span>
						</a>
					</li>
					<li>
						<a href="/admin/pricing" id="pricing"  style="padding-top:3px;padding-bottom:2px;">
						<i class="bi bi-circle"></i><span>Pricing</span>
						</a>
					</li>
					<li>
						<a href="/admin/pricing-content2" id="pricing2"  style="padding-top:3px;padding-bottom:2px;">
						<i class="bi bi-circle"></i><span>Pricing (Bottom Details)</span>
						</a>
					</li>
					<li>
						<a href="/admin/images" id="images"  style="padding-top:3px;padding-bottom:2px;">
						<i class="bi bi-circle"></i><span>Images</span>
						</a>
					</li>				
					
				</ul>
				
			</li><!-- End Settings Nav -->			
			@endif
			@endif

		</ul>

		</aside><!-- End Sidebar-->

		<main id="main" class="main bg-white" style="min-height:77.2vh;">
            @yield('content')
    </main>
	<!-- ======= Footer ======= -->
	<!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center no-print"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/chart.js/chart.umd.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/echarts/echarts.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/quill/quill.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/tinymce/tinymce.min.js')}}"></script>
	<script src="{{asset('assets/admin/vendor/php-email-form/validate.js')}}"></script>

	<!-- Template Main JS File -->
	<script src="{{asset('assets/admin/js/main.js')}}"></script>
	<script src="{{asset('assets/admin/js/fontawesome.min.js')}}"></script>
	<script src="{{asset('assets/admin/js/fontawesome.js')}}"></script>
	<script src="{{asset('assets/admin/js/chartjs.js')}}"></script>
	<script src="{{asset('assets/admin/js/bootstrap.js')}}"></script>
	 <script src="{{asset('assets/admin/js/custom.js')}}"></script>


	</body>

	</html>