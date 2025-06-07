<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogAdmin; // Asumsi model Blog ada

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('blog.blogs')->with('blogs', $blogs);
        return response()->json($blogs);
    }
    public function show($id){
        $blog = Blog::find($id);

        if(!$blog){abort(404);}

        return view('blog.show', compact('blog'));
    }
}
