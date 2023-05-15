<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontend.home');
    }


    public function about(){
        return view('frontend.about');
    }


    public function contact(){
        return view('frontend.contact');
    }
}
