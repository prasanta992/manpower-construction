<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function service()
    {
        return view('service');
    }

    public function projects()
    {
        return view('projects');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function careers()
    {
        return view('careers');
    }
}
