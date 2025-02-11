<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        return view('product');
    }

    function store(){
        return redirect('/product');
    }
}
