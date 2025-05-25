<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = DB::table('blogs_admin')->get();

        return view('home', compact('blogs'));
    }
}
