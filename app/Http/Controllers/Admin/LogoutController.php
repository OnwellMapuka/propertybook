<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;

class LogoutController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
   function store(Request $request)
    {Session::flush();
      Session::regenerate();
     Auth::guard('admin')->logout();
     return redirect('/admin');
    }

    

}
		