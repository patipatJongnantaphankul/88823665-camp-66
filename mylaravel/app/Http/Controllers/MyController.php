<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function back()
    {
        return view('myview');
    }

    public function multiplication(Request $request)
    {
        $number = $request->input('number');
        $table = [];

        for ($i = 1; $i <= 12; $i++) {
            $table[$i] = $number * $i;
        }

        return view('myview', compact('number', 'table'));
    }
}
