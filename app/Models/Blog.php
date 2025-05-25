<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $guarded = ['id'];

     protected static function booted()
    {
         static::updating(function ($blog) {
            if ($blog->isDirty('thumbnail')) {
                $old = $blog->getOriginal('thumbnail');
                if ($old && Storage::disk('public')->exists($old)) {
                    Storage::disk('public')->delete($old);
                }
            }
        });

        static::deleting(function ($blog) {
            if ($blog->thumbnail && Storage::disk('public')->exists($blog->thumbnail)) {
                Storage::disk('public')->delete($blog->thumbnail);
            }
        });
    }
}
