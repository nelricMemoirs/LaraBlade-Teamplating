<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('HTML.form');
    }

    public function welcome(Request $request){
        // dd($request->all());
        $namadepan = $request["first-name"];
        $namabelakang = $request["last-name"];
        // $request["first-name"] = $namadepan;
        // return view('HTML.welcome');
        return view('HTML.welcome' , \compact('namadepan', 'namabelakang'));
    }
}
