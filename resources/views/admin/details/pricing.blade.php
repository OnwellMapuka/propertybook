
@extends('admin.layouts.app')
	  <!-- banner -->
	
	  @section('content')
    @if(Session::get('usertype')=='admin')
    @else
    <script>
    window.location.href = "{{ '/admin/logout' }}";
    </script>
    @endif
	  <style>#pricing{color:orange;}main{background-color:lightgray}</style>
	
    <section class="section">
      <div class="row">
        <div class="col-lg-" style="width: 100%;">
          <div class="card-body">
          @include('admin.layouts.partials.messages')
          <!--*************************************************************************-->
          <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="{{asset('assets/pages/css/style.css')}}">
		<link href="{{asset('assets/pages/plugins/summernote/summernote.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/pages/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

						
						
						
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="p-6">
										<div class="">
											<form name="addpost" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group m-b-20">
													<label for="exampleInputEmail1">Location</label>
													<select class="form-control" id="postlocation" name="postlocation" placeholder="Enter lacation" required>
                            <option></option>
                            <option value="Tab1">Tab 1</option>
                            <option value="Tab2">Tab 2</option>
                            <option value="Tab3">Tab 3</option>
                          </select>
												</div>
												<div class="form-group m-b-20">
													<label for="exampleInputEmail1">Price</label>
													<input type="text" class="form-control" id="postprice" name="postprice" placeholder="Enter title" required>
												</div>
												<div class="row">
													<div class="col-sm-12">
														<div class="card-box">
															<h4 class="m-b-30 m-t-0 header-title"><b>Top Details</b></h4>
															<textarea class="summernote" name="postcontent1" required></textarea>
														</div>
													</div>
												</div>
												<br/>
												<button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
												<button type="reset" class="btn btn-danger waves-effect waves-light">Discard</button><br/><br/>
											</form>
										</div>
									</div> <!-- end p-20 -->
								</div> <!-- end col -->
							</div>
						
<!-- ********************8************************************************************************************************************************ -->
						</div>
				</div>
		<!-- End Right Sidebar -->
	</div>
</div>
<!-- End Body -->

</body>
</html>

<script>
		var resizefunc = [];
	</script>

	<!-- jQuery  -->
	<script src="{{asset('assets/pages/assets/pages/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/pages/assets/pages/assets/js/bootstrap.min.js')}}"></script>

	<!--Summernote js-->
	<script src="{{asset('assets/pages/plugins/summernote/summernote.min.js')}}"></script>

	<script>
		jQuery(document).ready(function(){

			$('.summernote').summernote({
				height: 240,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: false                 // set focus to editable area after initializing summernote
			});
			// Select2
			$(".select2").select2();

			$(".select2-limiting").select2({
				maximumSelectionLength: 2
			});
		});
	</script>
	<script src="{{asset('assets/pages/plugins/switchery/switchery.min.js')}}"></script>
	<script src="{{asset('assets/pages/css/switch.js')}}"></script>
	<!--Summernote js-->
	<script src="{{asset('assets/pages/plugins/summernote/summernote.min.js')}}"></script>
          <!--*************************************************************************-->
                
          </div>
        </div>
      </div>
    </section>
    <script>
      var applications = document.getElementById("settings");
          applications.classList.add("bg-info"); 
    </script>
    @endsection
