<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class BeritaController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        $berita = Berita::orderBy('created_at','desc')->get();
        return view('admin/berita/index', compact('berita', 'kategori'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'kategori_id' => ['required'],
            'body' => ['required'],
            'status' => ['required'],
            'image' => ['required', 'max:1000']
        ],[
            'title.required' => 'Masukan Judul Berita',
            'excerpt.required' => 'Masukan excerpt Berita',
            'kategori_id.required' => 'Pilih Kategori Berita',
            'body.required' => 'Masukan Isi Konten Berita',
            'status.required' => 'Pilih Status Postingan Berita',
            'image.required' => 'Masukan Gambar Berita',
            'image.max' => 'Ukuran gambar maksimal 1 mb',
        ]);
        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $berita = Berita::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'kategori_id' => $request->kategori_id,
            'body' => $request->body,
            'status' => $request->status,
            'image' => 'uploads/berita/' . $new_image,
        ]);
        $image->move('uploads/berita/', $new_image);
        return back()->with('success', 'Artikel Berita Anda  berhasil di Posting');
    }


    public function show($id)
    {
        $decryptID = Crypt::decryptString($id);
        $kategori = Kategori::all();
        $berita = Berita::findorfail($decryptID);
        return view('admin/berita/show', compact('berita', 'kategori'));
    }


    public function edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $berita = Berita::findorfail($decryptID);
        return view('admin/berita/edit', compact('berita'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => ['required'],
            'excerpt' => ['required'],
            'kategori_id' => ['required'],
            'body' => ['required'],
            'status' => ['required'],
            // 'image' => ['required']
        ],[
            'title.required' => 'Masukan Judul Berita',
            'excerpt.required' => 'Masukan excerpt Berita',
            'kategori_id.required' => 'Pilih Kategori Berita',
            'body.required' => 'Masukan Isi Konten Berita',
            'status.required' => 'Pilih Status Postingan Berita',
            // 'image.required' => 'Masukan Gambar Berita',
        ]);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time() . $image->getClientOriginalName();
            $image->move('uploads/berita/', $new_image);
            $berita_data = [
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'kategori_id' => $request->kategori_id,
                'body' => $request->body,
                'status' => $request->status,
                'image' => 'uploads/berita/' . $new_image,
            ];
        } else {
            $berita_data = [
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'body' => $request->body,
                'status' => $request->status,
                'kategori_id' => $request->kategori_id,
            ];
        }

        Berita::whereId($id)->update($berita_data);
        return back()->with('success', 'Artikel Berita Anda  berhasil di Update');
    }


    public function destroy($id)
    {
        $berita = Berita::findorfail($id);
        $berita->delete();
        return back()->with('success', 'Artikel Berita Anda  berhasil di Hapus');
    }
}
