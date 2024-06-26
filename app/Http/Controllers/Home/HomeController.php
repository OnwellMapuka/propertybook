<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Validator;

class HomeController extends Controller
{
    public function index(Request $request) 
    {   
      
    }

    public function show(Request $request) 
    {   //loading images
        $images=DB::table('tblimages')->select('*')->get();
        $story="";$home="";
        foreach($images as $image)
        {
            if($image->location=='Home'){$home=$image->img;}
            if($image->location=='Story'){$story=$image->img;}
        }

       //loading home and footer 
       $homefooters=DB::table('tblhomefooter')->select('*')->get();
        $footertitle="";$hometitle="";$storytitle="";$storycontent="";$footercontent="";$homecontent="";
        foreach($homefooters as $foot)
        {
            if($foot->location=='Home'){$hometitle=$foot->title;$homecontent=$foot->content;}
            if($foot->location=='Story'){$storytitle=$foot->title;$storycontent=$foot->content;}
            if($foot->location=='Footer'){$footertitle=$foot->title;$footercontent=$foot->content;}
        }

        //loading services 
        $services=DB::table('tblservices')->select('*')->get();
        $Refreshing="";$Bootstrap="";$Components="";$Speed="";$Customise="";$Updates="";
        foreach($services as $service)
        {
            if($service->location=='Refreshing'){$Refreshing=$service->content;}
            if($service->location=='Bootstrap'){$Bootstrap=$service->content;}
            if($service->location=='Components'){$Components=$service->content;}
            if($service->location=='Speed'){$Speed=$service->content;}
            if($service->location=='Customise'){$Customise=$service->content;}
            if($service->location=='Updates'){$Updates=$service->content;}
        }

        //loading services 
        $prices=DB::table('tblpricing')->select('*')->get();
        $tab1price="";$tab1content1="";$tab1content2="";
        $tab2price="";$tab2content1="";$tab2content2="";
        $tab3price="";$tab3content1="";$tab3content2="";
        foreach($prices as $price)
        {
            if($price->location=='Tab1'){$tab1price=$price->price;$tab1content1=$price->content1;}
            if($price->location=='Tab2'){$tab2price=$price->price;$tab2content1=$price->content1;}
            if($price->location=='Tab3'){$tab3price=$price->price;$tab3content1=$price->content1;}
        }

        //loading services 
        $prices2=DB::table('tblpricing2')->select('*')->get();

        return view('index',
            [
                'home'=>$home,
                'story'=>$story,
                'storytitle'=>$storytitle,
                'storycontent'=>$storycontent,
                'hometitle'=>$hometitle,
                'homecontent'=>$homecontent,
                'footertitle'=>$footertitle,
                'footercontent'=>$footercontent,
                'Refreshing'=>$Refreshing,
                'Bootstrap'=>$Bootstrap,
                'Customise'=>$Customise,
                'Components'=>$Components,
                'Speed'=>$Speed,
                'Updates'=>$Updates,
                'tab1price'=>$tab1price,
                'tab1content1'=>$tab1content1,
                'tab2price'=>$tab2price,
                'tab2content1'=>$tab2content1,
                'tab3price'=>$tab3price,
                'tab3content1'=>$tab3content1,
                'prices2'=>$prices2,
            ]);
        
    }

}