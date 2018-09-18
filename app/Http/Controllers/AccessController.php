<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessController extends Controller
{
   public function index()
   {
       if(Auth::user())
       {
            return redirect('/');
       }
       else
       {
           return view('welcome');
       }
   }
}
