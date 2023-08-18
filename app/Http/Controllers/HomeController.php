<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $user_data = session('user_data');

        return view('homePage',compact('user_data'));
    }
}
