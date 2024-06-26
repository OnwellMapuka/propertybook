
@extends('admin.layouts.app')
	  <!-- banner -->
	
	  @section('content')
    @if(Session::get('usertype')=='admin')
    @else
    <script>
    window.location.href = "{{ '/admin/logout' }}";
    </script>
    @endif
	  <style>#images{color:orange;}main{background-color:lightgray}</style>
	
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
                        <form method='post' action='' enctype="multipart/form-data">
                          <table border='0'style='width:60%;min-width:240px;background-color:whitesmoke;height:50px;margin-top:10px;'>
                          <tr>
                            <td colspan='3'><b><u>Add Image</u></b> &emsp; </td>
                          </tr>
                          <tr>
                            <td style="width:100px;">Location : </td><td colspan='1'><select class="form-control" id="postlocation" name="postlocation" placeholder="Enter lacation" required>
                            <option></option>
                            <option value="Home">Home Tab</option>
                            <option value="Story">Story Tab</option>
                          </select></td>
                          </tr>
                          <tr>
                            <td>Choose Image : </td><td><input type='file' name='file'/></td><td><input type='submit' name='gallery_save' value='Save' style='font-size:14pt;background-color:#33FF00;border-radius:5px;border:1px ridge #33FF00;cursor:pointer;'/></td>
                          </tr>
                          </table>
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
