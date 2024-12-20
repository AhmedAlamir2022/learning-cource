<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function form1()
    {
        return view('forms.form1');
    }

    function form1_store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        return 'Email: ' . $email . ' Password: ' . $password;
    }

    function user_form()
    {
        return view('forms.user_form');
    }

    function user_form_store(Request $request)
    {
        $request->validate([
            'email' => 'required|ends_with:@gmail.com',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'f_name' => 'required|min:3|max:20',
            'l_name' => 'required|min:3|max:20',
            'gender' => 'required',
            'hobbies' => 'required',
            'bio' => 'required',
            'level' => 'required',
        ]);
        // $email = $request->email;
        // $password = $request->password;
        // $dob = $request->dob;
        //return $request->except(['_token']);
        dd($request->all());

        // return view('forms.user_form_data', compact('email', 'password', 'dob'));
    }

    function form_image()
    {
        return view('forms.form_image');
    }

    function form_image_store(Request $request)
    {


        $request->validate([
            'name' => 'required|min:3|max:20',
            'image' => 'required',
        ]);


       // dd($request->all());

        //single image
        // $image = $request->file('image');
        // $image->move(public_path('images'), $image->getClientOriginalName());
        // return $image->getClientOriginalName();

        //multiple image
        foreach ($request->file('image') as $image) {
            $image->move(public_path('images'), $image->getClientOriginalName());
        }
    }
}
