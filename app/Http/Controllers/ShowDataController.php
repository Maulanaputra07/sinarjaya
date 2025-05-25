<?php

namespace App\Http\Controllers;
use App\Models\BlogAdmin;  // sesuaikan dengan model kamu

class ShowDataController extends Controller
{
    public function index()
    {
        // Ambil semua data blog
        $blogs = BlogAdmin::all();

        // Kirim data ke view index
        return view('index', compact('blogs'));
    }
}