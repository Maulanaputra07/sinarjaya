<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function show($kategori){
        $folderPath = public_path("images/$kategori");

        if(!File::exists($folderPath)){
            abort(404, "Pages tidak ditemukan");
        }

        $files = File::files($folderPath);

        $imagePaths = array_map(function ($file) use ($kategori) {
            return asset("images/$kategori/" . $file->getFileName());
        }, $files);

        return view('pages.produk', ['kategori' => $kategori, 'images' => $imagePaths]);
    }
}
