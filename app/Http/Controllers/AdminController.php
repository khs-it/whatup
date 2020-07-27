<?php

namespace App\Http\Controllers;

use App\trip;
use App\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   function admin(){
       return view('admin.site_admin.admin.index');
   }

   function login(){
        return view('login');
    }

}

