<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('welcome');
    }

    function about() {
            return 'about';
    }

    function team() {
        return 'team';
    }

    function services() {
        return 'services';
    }

    function blog() {
        return 'blog';
    }


    function articles() {
        return 'articles';
    }


}
