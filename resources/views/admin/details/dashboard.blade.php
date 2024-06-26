
	@extends('admin.layouts.app')
	<!-- banner -->
	
	@section('content')
	@if(Session::get('usertype')!='')	
  @else
  <script>
  window.location.href = "{{ '/admin/logout' }}";
  </script>
	@endif
	<style>main{background-color:lightgray}</style>

<div class="pagetitle">
  <h1>Dashboard</h1>
</div><!-- End Page Title -->

<section class="sectio dashboard">
  <div class="row">
   
  </div>
</section>
    <script>
      var dashboard = document.getElementById("dashboard");
          dashboard.classList.add("bg-info"); 
    </script>
@endsection
