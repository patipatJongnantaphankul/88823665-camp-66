<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        return view('home');
    }

    function __contruct(){
        $user = session()-get('user');

        if(!isset($user->$id)){
            return redirect('/login');
        }
    }
}
