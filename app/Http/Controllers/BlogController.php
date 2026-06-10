<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $kategori_id = $request->query('kategori');
        $query = Artikel::with(['penulis', 'kategori'])->orderBy('id', 'desc');

        if ($kategori_id) {
            $query->where('id_kategori', $kategori_id);
        }

        $artikel = $query->paginate(5);
        $kategori = KategoriArtikel::withCount('artikel')->get();
        return view('blog.index', compact('artikel', 'kategori', 'kategori_id'));
    }

    public function show($id)
    {
        $artikel = Artikel::with(['penulis', 'kategori'])->findOrFail($id);
        $artikel_terkait = Artikel::where('id_kategori', $artikel->id_kategori)
                                  ->where('id', '!=', $id)
                                  ->orderBy('id', 'desc')
                                  ->take(5)
                                  ->get();

        return view('blog.show', compact('artikel', 'artikel_terkait'));
    }
}