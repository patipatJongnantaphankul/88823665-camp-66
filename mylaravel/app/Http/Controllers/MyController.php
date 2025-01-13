<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('multiplication');
    }

    public function show(Request $request)
    {
        $number = $request->input('number');
        $table = [];

        for ($i = 1; $i <= 12; $i++) {
            $table[$i] = $number * $i;
        }

        return view('multiplication', compact('number', 'table'));
    }
}

