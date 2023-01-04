<?php

namespace App\Http\Controllers;

use App\Models\Beranda_img1;
use Illuminate\Http\Request;

class Beranda_img1Controller extends Controller
{
    public function index()
    {
        $beranda_img1 = Beranda_img1::orderBy('created_at','desc')->get();
        return view('admin/beranda_img1/index', compact('beranda_img1'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ],[
            'image.required' => 'Gambar Diperlukan',
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = Beranda_img1::create([
            'judul' =>$request->judul,
            'keterangan' =>$request->keterangan,
            'image' => 'uploads/carousel/'.$new_image,
        ]);
        $image->move('uploads/carousel/', $new_image);
        return redirect()->route('beranda_img1.index')->with('success','Carousel anda berhasil di Posting');
    }


    public function edit($id)
    {
        $beranda_img1 = Beranda_img1::findorfail($id);
        return view('admin/beranda_img1/edit', compact('beranda_img1'));
    }


    public function show($id)
    {
        $beranda_img1 = Beranda_img1::findorfail();
        return view('admin/beranda_img1/edit', compact('beranda_img1'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $beranda_img1 = Beranda_img1::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/carousel/', $new_image);
            $beranda_img1_data = [
                'judul' =>$request->judul,
                'keterangan' =>$request->keterangan,
                'image' => 'uploads/carousel/'.$new_image,
            ];
        }
        else{
            $beranda_img1_data = [
                'judul' =>$request->judul,
                'keterangan' =>$request->keterangan,
            ];
        }
        $beranda_img1->update($beranda_img1_data);
        return redirect()->back()->with('success','Carousel anda berhasil di Update');
    }


    public function destroy($id)
    {
        $beranda_img1 = Beranda_img1::findorfail($id);
        $beranda_img1->delete();
        return redirect()->back()->with('success','Carousel Berhasil Dihapus');
    }

}
