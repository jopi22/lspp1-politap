<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Info2;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    public function index()
    {
        $info = Info::all();
        $info2 = Info2::all();
        return view('admin/info/index', compact('info', 'info2'));
    }



    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image' => ['required', 'max:1000']
        ],[
            'image.required' => 'Masukan Gambar Berita',
            'image.max' => 'Ukuran gambar maksimal 1 mb',
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $strorg = Info::create([
            'keterangan' =>$request->keterangan,
            'image' => 'uploads/info/'.$new_image,
        ]);
        $image->move('uploads/info/', $new_image);
        return redirect()->route('info.index')->with('success','Video anda berhasil di Posting');
    }


    public function save_image(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'image' => ['required', 'max:3000']
        ],[
            'image.required' => 'Masukan Gambar Berita',
            'image.max' => 'Ukuran gambar maksimal 3 mb',
        ]);
        $info = Info2::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/info/', $new_image);
            $info_data = [
                'image' => 'uploads/info/'.$new_image,
            ];
        }

        Info2::whereId($id)->update($info_data);
        return back()->with('success','Informasi berhasil di Update');
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'image' => ['max:20000']
        ],[
            // 'image.required' => 'Masukan Gambar Berita',
            'image.max' => 'Ukuran Video maksimal 20 mb',
        ]);
        $info = Info::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/info/', $new_image);
            $info_data = [
                'keterangan' =>$request->keterangan,
                'image' => 'uploads/info/'.$new_image,
            ];
        }
        else{
            $info_data = [
                'keterangan' =>$request->keterangan,
            ];
        }
        Info::whereId($id)->update($info_data);
        return back()->with('success','Informasi berhasil di Update');
    }

}
