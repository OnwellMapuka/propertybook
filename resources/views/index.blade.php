
<!-- resources/views/tabs.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>PropertyBook - Skills Assessment</title>
    <link rel="stylesheet" href="{{asset('assets/home/css/bootstrap.min.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/home/line/lineicons.css')}}"> 
    <link rel="stylesheet" href="{{asset('assets/home/line/css/icons.cs')}}s"> 
    <script src="{{asset('assets/home/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/home/js/jquery-3.7.1.js')}}"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
       

        .tab-container {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .tab-nav {
            width:100%;
            list-style-type: none;
            padding-bottom: 2em;
            margin: 0;
            display: flex;
            position: fixed;
            top: 0;
            z-index: 1;
        }

        .tab-nav li {
            margin-right: 10px;
        }

        .tab-nav li a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            border: 1px solid transparent;
            border-bottom: none;
        }

        .tab-nav li a.active {
            border-color: #ccc;
            font-weight: bold;
        }

        .tab-content {
            flex-grow: 1;
            overflow-y: auto;
        }
        .tab {
            background-color: transparent;
        }
        .active1{font-weight:bold;}
        .nav-item a{cursor:pointer;}
        .navbar-nav li a{color:white}
        
        .col-md-12.py-2.text-center {
  display: flex;
  justify-content: center;
  align-items: center;
}

.text-centers {
  max-width: 565px;
  width: 100%;
}
.shadows{box-shadow: none;transition:box-shadow 0.3s ease-in-out}
.shadows:hover{box-shadow:2px 2px 2px 2px rgb(232, 243, 247)}



.icon {
  width: 35px;
  height: 35px;
  border-radius: 50%;
  margin-bottom: 25px;
  background: white;
  border: 2px solid dogerblue;
  display: flex;
  align-items: center;
  justify-content: center;
  color: dodgerblue;
  font-size: 40px;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  position: relative;
}
    </style>
</head>
<body>

    <section class="tab-nav bg-primary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light" >
                <h class="col-lg-1">
                    
                   <a class="navbar-brand text-white float-start">
                        <img width="25" src="{{asset('assets/home/img/logo.jpg')}}" class="me-2"/><strong>Business</strong>
                    </a>
                </h>
                <button  class="navbar-toggler ml-md-auto" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-lg-auto me-5 text-center" style="padding-left: 5em;">
                        <li class="nav-item  col-md-3">
                            <a href="#Home"  id="HomeTab" onclick="activateTab('Home')">Home
                            </a>
                        </li>
                        <li class="nav-item col-md-3">
                            <a href="#Services"  id="ServicesTab" onclick="activateTab('Services')">
                                Services
                            </a>
                        </li>
                        <li class="nav-item col-md-3">
                            <a href="#Pricing" id="PricingTab" onclick="activateTab('Pricing')">
                                Pricing
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>  
        </div>
    </section>
	<section  class=" bg-primary pt-5 tab" id="Home">
		<div class="container mt-3">
			<div class="row">
                <div class="col-md-6 text-white" style="padding-top:4em">
                        <p class="mt-5" style="font-size:2.7em"><strong>{{$hometitle}}</strong></p>
                        <p>{{$homecontent}}</p>
                        <p class="mb-5 mt-4">
                            <button class="btn btn-s btn-light me-3 text-primary float-start"><b>GET STARTED</b></button>
                            <span class="icon text-black float-start me-2"><i class="lni lni-play text-primary" style="font-size:15px;"></i></span>
                            <span class="text-white float-start mt-2"><b>Watch Intro</b></span>
                        </p>
                </div>
                <div class="col-md-6 mb-5 img bg-success" style="padding:0">
                    <img width="100%" src="{{asset($home)}}"/>
                </div>
			</div>
		</div>
        <div class="bg-light mt-5" style="padding-top:5em;">
			<div class="container">
                <div class="col-md-6 img float-start">
                    <img width="90%" class="float-end me-1" src="{{asset($story)}}"/>
                </div>
                <div class="col-md-6 text-dark float-start" style="padding-top:0.6em;padding-left: 2em;;">
                        <h5 class="mt-5"><hr style="color:blue;width:20px;border:1px solid blue;float:left"/>&nbsp;OUR STORY</h5>
                        <p style="font-size: 2em;"><strong>{{$storytitle}}</strong></p>
                        <p class="mb-4 mt-4" style="background:lightgray;padding:0.5em;width:100%">
                            <button class="btn btn-s btn-primary me-2 text-white"><strong>Who We Are</strong></button>
                            <button class="btn btn-s btn-light me-2 text-black"><strong>Our Vision</strong></button>
                            <button class="btn btn-s btn-light me-2 text-black"><strong>Our History</strong></button>
                        </p>
                        <p>{{$storycontent}}</p>
                </div>
                <div  class="mb-5" style="clear:both"></div>
			</div>
		</div>
	</section>
    <section  class=" bg-white pt-5 mb-5 tab" id="Services">
		<div class="container mt-4">
			<div class="row">
                <div class="col-md-12 py-2 text-white">
                        <p class="text-center"><button class="mb-4 mt-4 rounded-pill btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;"><strong>Our Services</strong></button></p>
                        <div class="col-md-4 float-start" style="padding:0.5em;">
                            <div class="col-md-12 float-start text-black" style="height:250px;padding:1em;border-radius: 5px;border:1px solid lightgray">                                
                            <span class=" icon text-primary" style="padding:0.6em;border:2px solid dodgerblue;">
                                <i class="lni lni-capsule" style="font-size:0.8em;"></i></span>
                            <p><strong>Refreshing Design</strong> </p>
                                <p style="color:#999">{{$Refreshing}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">
                            <div class="col-md-12 float-start text-black" style="height:250px;padding:1em;border-radius: 5px;border:1px solid lightgray">
                                <span class="icon text-primary" style="padding:0.6em;border:2px solid dodgerblue;">
                                <i class="lni lni-bootstrap" style="font-size:0.8em;"></i></span>
                                <p><strong>Solid Bootstrap 5</strong> </p>
                                <p style="color:#999">{{$Bootstrap}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">
                            <div class="col-md-12 float-start text-black" style="height:250px;padding:1em;border-radius: 5px;border:1px solid lightgray">
                                <span class="icon text-primary" style="padding:0.6em;border:2px solid dodgerblue;">
                                <i class="lni lni-shortcode" style="font-size:0.8em;"></i></span>
                                <p><strong>100+ Components</strong> </p>
                                <p style="color:#999">{{$Components}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">
                            <div class="col-md-12 float-start text-black" style="height:250px;padding:1em;border-radius: 5px;border:1px solid lightgray">
                                <span class="icon text-primary" style="padding:0.6em;border:2px solid dodgerblue;">
                                <i class="lni lni-dashboard" style="font-size:0.8em;"></i></span>
                                <p><strong>Speed Optimized</strong> </p>
                                <p style="color:#999">{{$Speed}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">
                            <div class="col-md-12 float-start text-black" style="height:250px;padding:1em;border-radius: 5px;border:1px solid lightgray">
                                <span class="icon text-primary" style="padding:0.6em;border:2px solid dodgerblue;">
                                <i class="lni lni-layers" style="font-size:0.8em;"></i></span>
                                <p><strong>Fully Customisable</strong> </p>
                                <p style="color:#999">{{$Customise}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">
                            <div class="col-md-12 float-start text-black" style="height:250px;padding:1em;border-radius: 5px;border:1px solid lightgray">
                                <span class="icon text-primary" style="padding:0.6em;border:2px solid dodgerblue;">
                                <i class="lni lni-reload" style="font-size:0.8em;"></i></span>
                                <p><strong>Regular Updates</strong> </p>
                                <p style="color:#999">{{$Updates}}</p>
                            </div>
                        </div>
                        <div  class="mb-5" style="clear:both"></div>
                </div>
                
			</div>
		</div>
	</section>
    <section  class=" bg-light pt-5 tab" id="Pricing">
		<div class="container mt-4">
			<div class="row">
                <div class="col-md-12 py-2 text-white">
                        <p class="text-center"><button class="mb-4 mt-4 rounded-pill btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;"><strong>Pricing</strong></button></p>
                        <div  class="mb-1" style="clear:both">&nbsp;</div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">                           
                            <div class="col-md-12 float-start bg-white text-black text-center shadows" style="padding:1em;border-radius: 5px;border:1px solid whitesmoke">
                                <p class="text-center"><button class="mb-2 mt-4 rounded-pill btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;"><strong>Starter</strong></button></p>
                                <p style="color:#999">{{$tab1content1}}</p>
                                <p  class="text-blac" style="font-size:2em;color:#999;"><sup>$</sup><b class="text-black">{{$tab1price}}</b><sub>/mo</sub></p>
                                <p class="text-center"><button class="mb-2 mt-2 btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;border-radius:5px"><strong>START FREE TRIAL</strong></button></p>
                                <p  class="text-left">
                                    <ul style="list-style:none;text-align:left;color:#999">
                                    @foreach($prices2 as $price)
                                    @if($price->location=='Tab1')
                                    <li><i class="lni lni-checkmark-circle text-primary" style="font-size:0.7em"></i> {{$price->content}}</li>
                                    @endif
                                     @endforeach
                                    </ul>
                                </p>                                
                            </div>
                        </div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">                           
                            <div class="col-md-12 float-start bg-white text-black text-center shadows" style="padding:1em;border-radius: 5px;border:1px solid whitesmoke">
                                <p class="text-center"><button class="mb-2 mt-4 rounded-pill btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;"><strong>Starter</strong></button></p>
                                <p style="color:#999">{{$tab2content1}}</p>
                                <p  class="text-blac" style="font-size:2em;color:#999;"><sup>$</sup><b class="text-black">{{$tab2price}}</b><sub>/mo</sub></p>
                                <p class="text-center"><button class="mb-2 mt-2 btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;border-radius:5px"><strong>START FREE TRIAL</strong></button></p>
                                <p  class="text-left">
                                    <ul style="list-style:none;text-align:left;color:#999">
                                    @foreach($prices2 as $price)
                                    @if($price->location=='Tab2')
                                    <li><i class="lni lni-checkmark-circle text-primary" style="font-size:0.7em"></i>{{$price->content}}</li>
                                    @endif
                                     @endforeach
                                    </ul>
                                </p>                                
                            </div>
                        </div>
                        <div class="col-md-4 float-start" style="padding:0.5em;">                           
                            <div class="col-md-12 float-start bg-white text-black text-center shadows" style="padding:1em;border-radius: 5px;border:1px solid whitesmoke">
                                <p class="text-center"><button class="mb-2 mt-4 rounded-pill btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;"><strong>Starter</strong></button></p>
                                <p style="color:#999">{{$tab3content1}}</p>
                                <p  class="text-blac" style="font-size:2em;color:#999;"><sup>$</sup><b class="text-black">{{$tab3price}}</b><sub>/mo</sub></p>
                                <p class="text-center"><button class="mb-2 mt-2 btn btn-white btn-outline-primary " style="padding-left:1em;padding-right:1em;border-radius:5px"><strong>START FREE TRIAL</strong></button></p>
                                <p  class="text-left">
                                    <ul style="list-style:none;text-align:left;color:#999;">
                                    @foreach($prices2 as $price)
                                    @if($price->location=='Tab3')
                                    <li><i class="lni lni-checkmark-circle text-primary" style="font-size:0.7em"></i>{{$price->content}}</li>
                                    @endif
                                     @endforeach
                                    </ul>
                                </p>                                
                            </div>
                        </div>
                        <div  class="mb-5" style="clear:both"></div>
                </div>
                
			</div>
		</div>
        <div class="col-md-12 py-2 text-center bg-primary">
            <div class="text-centers bg-primary">                           
                <div class="text-white text-center" style="padding:1em;border-radius: 5px;">
                    <h2 class="text-center mb-2 mt-4" style='max-width:500px'><strong>{{$footertitle}}</strong></h2>
                    <p class="mt-3">{{$footercontent}}</p>
                    <p class="text-center mt-4 mb-4"><button class="mb-2 btn btn-white btn-outline-light " style="padding-left:1em;padding-right:1em;border-radius:5px"><strong>GET STARTED</strong></button></p>
                                                   
                </div>
            </div>
        </div>
	</section>

    <script>
    document.getElementById('HomeTab').style.fontWeight='bold';
        function activateTab(value)
        {   
            if(value=='Home')
            {
                document.getElementById('HomeTab').style.fontWeight='bold';
                document.getElementById('ServicesTab').style.fontWeight='normal';
                document.getElementById('PricingTab').style.fontWeight='normal';
            }
            if(value=='Services')
            {
                document.getElementById('HomeTab').style.fontWeight='normal';
                document.getElementById('ServicesTab').style.fontWeight='bold';
                document.getElementById('PricingTab').style.fontWeight='normal';
            }
            if(value=='Pricing')
            {
                document.getElementById('HomeTab').style.fontWeight='normal';
                document.getElementById('ServicesTab').style.fontWeight='normal';
                document.getElementById('PricingTab').style.fontWeight='bold';
            }

        }



$(document).ready(function() {
 
    // Scroll to the selected tab
    $('html, body').animate({
      scrollTop: $tabs.eq(index).offset().top - 100 // Adjust the offset as needed
    }, 'smooth');
  });
</script>
</body>
</html>