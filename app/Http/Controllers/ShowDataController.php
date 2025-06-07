<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class ShowDataController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->take(3)->get();
        return view('index', compact('blogs'));
    }
}
