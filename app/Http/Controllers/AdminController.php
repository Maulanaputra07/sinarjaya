<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogAdmin;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = BlogAdmin::all();
        return view('admin.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $imagePath = $request->file('thumbnail')->store('blog-images', 'public');

        \Log::info('Image path: ' . $imagePath);
        \Log::info('Request judul: ' . $request->judul);
        \Log::info('Request deskripsi: ' . $request->deskripsi);

        $blog = BlogAdmin::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'thumbnail' => $imagePath,
        ]);

        \Log::info('Blog created: ', $blog->toArray());

        return redirect()->route('admin.index')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = BlogAdmin::findOrFail($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = BlogAdmin::findOrFail($id);

        $validateData = $request->validate([
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($request->file('thumbnail')) {
            if ($data->thumbnail) {
                Storage::disk('public')->delete($data->thumbnail);
            }

            $imagePath = $request->file('thumbnail')->store('blog-images', 'public');
            $validateData['thumbnail'] = $imagePath;
        }

        $data->update($validateData);

        return redirect()->route('admin.index')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = BlogAdmin::findOrFail($id);
        Storage::delete('public'. $data->thumbnail);
        $data->delete();

        return redirect()->route('admin.index')->with('success', 'Data has been deleted');
    }
}
