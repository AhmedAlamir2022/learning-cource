<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('index');
    }

    function resume(){
        return view('resume');
    }

    function projects(){
        return view('projects');
    }

    function contact(){
        return view('contact');
    }



}
