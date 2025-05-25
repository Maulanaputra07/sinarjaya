<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogAdmin; // Asumsi model Blog ada

class BlogController extends Controller
{
    public function show($id)
    {
        $blog = BlogAdmin::find($id);

        if (!$blog) {
            return view('blog.notfound'); // Bisa bikin view khusus untuk 404 blog
        }

        // Array bulan Indonesia
        $bulanIndo = [
            '01' => 'Januari', '02' => 'Februari', '03' => 'Maret',
            '04' => 'April', '05' => 'Mei', '06' => 'Juni',
            '07' => 'Juli', '08' => 'Agustus', '09' => 'September',
            '10' => 'Oktober', '11' => 'November', '12' => 'Desember'
        ];

        $created = $blog->created_at; // asumsikan $created_at adalah Carbon instance
        $jam = $created->format('H.i');
        $tanggal = $created->format('d');
        $bulan = $bulanIndo[$created->format('m')] ?? '';
        $tahun = $created->format('Y');
        $formattedDate = "$jam WIB, $tanggal $bulan $tahun";

        return view('blog.show', compact('blog', 'formattedDate'));
    }
}
