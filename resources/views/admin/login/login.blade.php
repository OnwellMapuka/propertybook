<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>PropertyBook - Admin</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />   
	  
	 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Vendor CSS Files -->
	<link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('assets/admin/css/font-awesome.min.css')}}" rel="stylesheet">
</head>

<body>

<style>#accounts{color:white;}main{background-color:skyblue}</style>
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block text-light">Property</span><span class="d-none d-lg-block text-dark">&nbsp;Book</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <form  method="post" action="" class="row g-3 needs-validation" novalidate>
                    @include('admin.layouts.partials.messages')
                    {{ csrf_field() }}

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="ecno" class="form-control" id="yourUsername" required>                        
                      </div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-key"></i></span>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                      </div>                     
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>                   
                  </form>
<!--<a href="email"><button>email</button></a>-->
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>