<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

class MyController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function validate(Request $request) {

        print_r($request->all());
        die();

    }


}
