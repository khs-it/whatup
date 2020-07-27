<?php

namespace App\Http\Controllers;

use App\trip;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view('index');
    }

    function detail(){
        $result = trip::orderBy('id','desc')->get();
        return view('detail')->with('data',$result);
    }

    function contact(){
        return view('contact');
    }

    function booking(){
        return view('booking');
    }
}
