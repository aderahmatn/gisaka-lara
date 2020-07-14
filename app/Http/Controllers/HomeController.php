<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $slug = 'ade';
        return view('home',compact('slug'));
    }
}
