<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogAdmin; // Asumsi model Blog ada

class BlogController extends Controller
{
    public function index(Request $request){
        $categories = Blog::select('category')->distinct()->pluck('category');

        $query = Blog::query();

        if($request->filled('category')){
            $query->where('category', $request->category);
        }

        $blogs = $query->latest()->paginate(10);

        return view('blog.blogs', compact('blogs', 'categories'));
        return response()->json($blogs);
    }

    public function show($id){
        $blog = Blog::find($id);

        if(!$blog){abort(404);}

        return view('blog.show', compact('blog'));
    }
}
