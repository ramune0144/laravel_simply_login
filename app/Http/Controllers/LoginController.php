<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class LoginController extends Controller
{
    public function index()
    {

        return view('login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user_data = user::where('email', $email)->first();
        if($user_data){
            if($user_data->password == $password){
                $request->session()->put('user_data',(object)[
                    'email' => $user_data->email,
                    'name' => $user_data->name,
                    'surname' => $user_data->surname,
                ]
                );
                return redirect()->route('home');
            }
            else{
                return redirect()->back()->with('error', 'Wrong password');
            }
        }
        else{
            return redirect()->back()->with('error', 'Wrong password');
        }


    }



    public function signup()
    {
        return view('signup');
    }
}
