<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Contracts\Auth\UserProvider;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Facades\App\Helper\Helper;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ApprovedStudent;
use App\Models\Tblappadmin;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\HtmlPart; 
use Symfony\Component\Mime\Message;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mailer\Transport\Smtp\Auth\Authenticator;
use Symfony\Component\Mailer\Transport\Smtp\Stream\TlsStream;
use Symfony\Component\Mailer\Transport\Smtp\Stream\Options;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Header\Headers;

class AdminController extends Controller
{
  
    public function index()
    {      
        
        $user=DB::table('tblappadmins')->where('ecno',Session::get('ecno'))->get();
		//dd(str_replace(' ', '',$user[0]->uniq_id)); 
        foreach($user as $users)
        {
            if(str_replace(' ', '',$users->uniq_id)!=Session::get('uniq_id'))
            {
                return redirect('/admin/logout')
                ->withErrors('You are logged in on another machine');
            }
        }
        
        //checking if user is logged in and creating a session for the id   
        if (Session::exists('ecno') && !empty(Session::get('ecno')))
        {
    	    return view('admin.details.dashboard');
        }
        else
        {
            return redirect('/admin/logout');
        }

    }//end of index method


    public function create()
    {         
        try 
        {  
            $user = DB::table('tblappadmins')->where('usertype', 'admin')->exists();
            if($user==0)
            {
    
                $result=DB::table('tblappadmins')->insert([
                    'ecno' =>'admin',
                    'firstname' =>'Admin',
                    'surname' => 'Admin',
                    'usertype' => 'admin',
                    'password' => bcrypt('admin'),
                ]);
                
            }  
            return view('admin.login.login');
        }
        catch (\Exception $exception) 
        {
            Log::error($exception->getMessage());
            return view('admin.login.login')->withErrors("DBError::Cant login.".$exception); 
        }

    }//end of create method


    public function store(Request $request)
    {   
        $a=Route::current()->uri();
            //login
            if($a=='admin')
            {
                try
                {   //validation
                    $validator=Validator::make($request->all(),[
                        'ecno'   => 'required',
                        'password'  => 'required|min:5'
                    ]);
                    //if validation fails
                    if ($validator->fails()) 
                    {
                        return redirect('admin')
                            ->withErrors($validator)
                                ->withInput();
                    }
                    //creating an array of values
                    $admin_data = array(
                        'ecno'  => $request->get('ecno'),
                        'password' => $request->get('password')
                    );
                    
                    //user authorisation and redirections
                    if(Auth::guard('admin')->attempt($admin_data))
                    
                    {   // After a successful login
                        // Generate a unique identifier
                        $machineIdentifier = uniqid();
                        $randomNumber = str_pad(mt_rand(1, 9999), 10, '0', STR_PAD_LEFT);
                        $machineIdentifier1 = uniqid(); 
                        $uniq_id=$machineIdentifier.$randomNumber.$machineIdentifier1;

                        DB::table('tblappadmins')->where('ecno',$request->get('ecno'))
                        ->update(['uniq_id'=>$uniq_id]);

                        if($request->get('ecno')=='admin')
                        {
                                $firstname=DB::table('tblappadmins')                                
                                ->select('*')
                                ->where('ecno',$request->ecno)->get(); 
                                $a=json_decode($firstname);
                            
                                if(count($a)==0)
                                {
                                    return redirect('/admin')
                                        ->withErrors('Check your username! <CS>'); 
                                } 
                                
                                Session::put([
                                'ecno' => 'admin',
                                'firstname' =>'Admin',
                                'surname' => 'Admin',
                                'usertype' => 'admin',
                                'uniq_id'=>$uniq_id,
                                ]);
                                
                                    return redirect('/admin/user.dashboard');
                        }
                    }
                    else
                    {
                        return redirect('/admin')
                            ->withErrors('Username or Password Invalid!'); 
                    }                          
                }
                catch(\Exception $exception)
                {
                    Log::error($exception->getMessage());
                    return redirect('/admin')
                        ->withErrors('Error with application');
                }
            } //end of logging in 
                       
            //checking if user is logged in and creating a session for the id
            if (Session::exists('ecno') && !empty(Session::get('ecno')))
            {
                $user=DB::table('tblappadmins')->where('ecno',Session::get('ecno'))->get();
                foreach($user as $users)
                {
                    if(str_replace(' ', '',$users->uniq_id)!=Session::get('uniq_id'))
                    {
                        return redirect('/admin/logout')
                        ->withErrors('You are logged in on another machine');
                    }
                }

                $id=Session::get('ecno');
        
                if($a=='admin/homefooter')
                {
                    {
                        try
                        { 
                            //validatioin               
                            $validator = Validator::make($request->all(), [
                                'postlocation' =>'required',
                                'posttitle' =>'required',
                                'postcontent' =>'required',
                            ]);
                            //if validation fails
                            if ($validator->fails())
                            {
                                return back()
                                    ->withErrors($validator)
                                        ->withInput();
                            }                    
                            
                            //checking if the user is empty 
                            $sql = DB::table('tblhomefooter');
                            $user = $sql->where('location', $request->postlocation)->exists();
                                // ID exists in the database, generate another ID
                                if ($user>0) 
                                {                        
                                    //inserting values into the database
                                    $newPost=DB::table('tblhomefooter')
                                        ->where('location',$request->postlocation)
                                            ->update([
                                                        'title' => ucwords($request->posttitle),
                                                        'content' => $request->postcontent,
                                                    ]);
                                }
                                else
                                {
                                    //inserting values into the database
                                    $newPost=DB::table('tblhomefooter')
                                        ->insert([
                                                    'location' => $request->postlocation,
                                                    'title' => ucwords($request->posttitle),
                                                    'content' => $request->postcontent,
                                                ]); 
                                }

                            
                            
                            //redirecting if insert successful or failed
                            if($newPost)
                            {
                                return back()
                                    ->withSuccess('Post successfully added');
                            }
                            else
                            {
                                return back()
                                    ->withErrors('Failed! Please try again.');
                            }
                        }
                        catch(\Exception $exception)
                        {
                            Log::error($exception->getMessage());
                            return back()
                                ->withErrors('Error with application');
                        }
                    }
                }//end of homefooter

                if($a=='admin/services')
                {
                    {
                        try
                        { 
                            //validatioin               
                            $validator = Validator::make($request->all(), [
                                'postlocation' =>'required',
                                'postcontent' =>'required',
                            ]);
                            //if validation fails
                            if ($validator->fails())
                            {
                                return back()
                                    ->withErrors($validator)
                                        ->withInput();
                            }                    
                            
                            //checking if the user is empty 
                            $sql = DB::table('tblservices');
                            $user = $sql->where('location', $request->postlocation)->exists();
                                // ID exists in the database, generate another ID
                                if ($user>0) 
                                {                        
                                    //inserting values into the database
                                    $newPost=DB::table('tblservices')
                                        ->where('location',$request->postlocation)
                                            ->update([
                                                        'content' => $request->postcontent,
                                                    ]);
                                }
                                else
                                {
                                    //inserting values into the database
                                    $newPost=DB::table('tblservices')
                                        ->insert([
                                                    'location' => $request->postlocation,
                                                    'content' => $request->postcontent,
                                                ]); 
                                }

                            
                            
                            //redirecting if insert successful or failed
                            if($newPost)
                            {
                                return back()
                                    ->withSuccess('Post successfully added');
                            }
                            else
                            {
                                return back()
                                    ->withErrors('Failed! Please try again.');
                            }
                        }
                        catch(\Exception $exception)
                        {
                            Log::error($exception->getMessage());
                            return back()
                                ->withErrors('Error with application');
                        }
                    }
                }//end of services

                if($a=='admin/pricing')
                {
                    {
                        try
                        { 
                            //validatioin               
                            $validator = Validator::make($request->all(), [
                                'postlocation' =>'required',
                                'postprice' =>'required',
                                'postcontent1' =>'required',
                            ]);
                            //if validation fails
                            if ($validator->fails())
                            {
                                return back()
                                    ->withErrors($validator)
                                        ->withInput();
                            }                    
                              //checking if the user is empty 
                            $sql = DB::table('tblpricing');
                            $user = $sql->where('location', $request->postlocation)->exists();
                                // ID exists in the database, generate another ID
                                if ($user>0) 
                                {                        
                                    //inserting values into the database
                                    $newPost=DB::table('tblpricing')
                                        ->where('location',$request->postlocation)
                                            ->update([                                                        
                                                        'price' => $request->postprice,
                                                        'content1' => $request->postcontent1,
                                                        'content2' => "",
                                                    ]);
                                }
                                else
                                {
                                    //inserting values into the database
                                    $newPost=DB::table('tblpricing')
                                    ->insert([
                                                'location' => $request->postlocation,
                                                'price' => $request->postprice,
                                                'content1' => $request->postcontent1,
                                                'content2' => "",
                                            ]); 
                                }                       
                                                         
                            //redirecting if insert successful or failed
                            if($newPost)
                            {
                                return back()
                                    ->withSuccess('Post successfully added');
                            }
                            else
                            {
                                return back()
                                    ->withErrors('Failed! Please try again.');
                            }
                        }
                        catch(\Exception $exception)
                        {
                            Log::error($exception->getMessage());
                            return back()
                                ->withErrors('Error with application');
                        }
                    }
                }//end of pricing 
                
                if($a=='admin/pricing-content2')
                {
                    {
                        try
                        { 
                            //validatioin               
                            $validator = Validator::make($request->all(), [
                                'postlocation' =>'required',
                                'postcontent' =>'required',
                            ]);
                            //if validation fails
                            if ($validator->fails())
                            {
                                return back()
                                    ->withErrors($validator)
                                        ->withInput();
                            }                    
                              
                                    //inserting values into the database
                                    $newPost=DB::table('tblpricing2')
                                    ->insert([
                                                'location' => $request->postlocation,
                                                'content' => $request->postcontent,
                                            ]); 
                                                   
                                                         
                            //redirecting if insert successful or failed
                            if($newPost)
                            {
                                return back()
                                    ->withSuccess('Post successfully added');
                            }
                            else
                            {
                                return back()
                                    ->withErrors('Failed! Please try again.');
                            }
                        }
                        catch(\Exception $exception)
                        {
                            Log::error($exception->getMessage());
                            return back()
                                ->withErrors('Error with application');
                        }
                    }
                }//end of pricing2




                if($a=='admin/images')
                {
                        try
                        {  //validation
                            $validator=Validator::make($request->all(),  [
                                'postlocation'=>'required',
                                'file' => 'required|file|mimes:jpg,png,jpeg,svg|max:5048',
                            ]); 
                            //if validation fails
                            if ($validator->fails()) 
                            {
                                return back()
                                    ->withErrors($validator)
                                        ->withInput();
                            }
        
                            if($request->hasFile('file'))//check if file exists
                            {
                                $file=$request->file('file');
                                $originalName=$file->getClientOriginalName();
                                $extenstion=$file->getClientOriginalExtension();
                                $fileName=pathinfo($originalName,PATHINFO_FILENAME);
                                $uniqueFileName=$request->postlocation.".".$extenstion;
        
                                $destinationPath = 'assets\home\img';
                                
                                $path=$file->move($destinationPath, $uniqueFileName);
                                $name=$path;

                                $result=DB::table('tblimages')->where('location', $request->postlocation)->exists();

                                if($result==1)
                                { 
                                    $resu=DB::table('tblimages')
                                        ->where('location', $request->postlocation)
                                            ->update(['img' => $name]);
                                }
                                else
                                {
                                    $resu=DB::table('tblimages')
                                        ->where('location', $request->postlocation) 
                                            ->insert(['location'=>$request->postlocation,'img' => $name]);
                                }
                               
                                
                                if($resu)
                                {     
                                return back()
                                    ->withSuccess('Image successfully uploaded');
                                }
                                else{
                                return back()
                                    ->withErrors('Failed! Try again.');
                                }                        
                            }//end of file exists
                        }
                        catch(\Eception $exception)
                        {
                            Log::error($exception->getMessage());
                            return back()
                                ->withErrors('Oooops! Something went wrong. Try again.');  
                        }
                }//end of images




            }//end of auth
            else
            {
                return redirect('/admin/logout');
            }
   
    }//end of store method


    public function show(Request $request)
    {   
        $user=DB::table('tblappadmins')->where('ecno',Session::get('ecno'))->get();
        foreach($user as $users)
        {
            if(str_replace(' ', '',$users->uniq_id)!=Session::get('uniq_id'))
            {
                return redirect('/admin/logout')
                ->withErrors('You are logged in on another machine');
            }
        }
        
        //find the active route        
        try{
        $a=Route::current()->uri(); 
       
        }
        catch(\Exception $exception)
        {
            Log::error($exception->getMessage());
            return back()->WithErrors('Error');   
        }

        $user=DB::table('tblappadmins')->where('ecno',Session::get('ecno'))->get();
        foreach($user as $users)
        {
            if(str_replace(' ', '',$users->uniq_id)!=Session::get('uniq_id'))
            {
                return redirect('/admin/logout')
                ->withErrors('You are logged in on another machine');
            }
        }

        //if logged in 
        if (Session::exists('ecno') && !empty(Session::get('ecno')))
        { 
                 
            if($a=='admin/homefooter')
            {
                try
                {
                    return view('admin.details.homefooter'); 
                }
                catch(\Exception $exception)
                {
                    Log::error($exception->getMessage());
                    return back()
                        ->withErrors('Error with application');
                }
            }//end of homefooter details 

            if($a=='admin/services')
            {
                try
                {
                    return view('admin.details.services'); 
                }
                catch(\Exception $exception)
                {
                    Log::error($exception->getMessage());
                    return back()
                        ->withErrors('Error with application');
                }
            }//end of services details         

            if($a=='admin/pricing')
            {
                try
                {
                    return view('admin.details.pricing'); 
                }
                catch(\Exception $exception)
                {
                    Log::error($exception->getMessage());
                    return back()
                        ->withErrors('Error with application');
                }
            }//end of pricing details 
            
            if($a=='admin/pricing-content2')
            {
                try
                {
                    return view('admin.details.pricing2'); 
                }
                catch(\Exception $exception)
                {
                    Log::error($exception->getMessage());
                    return back()
                        ->withErrors('Error with application');
                }
            }//end of pricing details 


            if($a=='admin/images')
            {
                try
                {
                    return view('admin.details.images'); 
                }
                catch(\Exception $exception)
                {
                    Log::error($exception->getMessage());
                    return back()
                        ->withErrors('Error with application');
                }
            }//end of pricing details 
        
        }//end of if logged in
        else
        {
            return redirect('/admin/logout');   
        }//end of else not logged in
    }//end of show method


}//end of class
