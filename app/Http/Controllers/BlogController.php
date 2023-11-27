<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function resume()
    {
        return view('resume');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }

    public function message(Request $request)
    {
        return view('contact', ['data' => $request]);
    }
}
