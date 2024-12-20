<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    function index()
    {
        return view('index');
    }

    function resume()
    {
        return view('resume');
    }

    function projects()
    {
        return view('projects');
    }

    function contact()
    {
        return view('contact');
    }

    function contact_data(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required',
            'message' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'image' => 'nullable',
        ]);

        $data = $request->except(['_token','image']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path('images'), $image->getClientOriginalName());
            $data['image'] = $image->getClientOriginalName();
        }
        //dd($data);

        Mail::to('ahmedalamir521 @gmail.com')->send(new \App\Mail\ContactUsMail($data));
    }
}
