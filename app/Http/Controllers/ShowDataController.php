<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class ShowDataController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('index', compact('blogs'));
    }
}
