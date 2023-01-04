<?php

namespace App\Http\Controllers;

use App\Models\Skkni;
use Illuminate\Http\Request;

class SkkniController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => ['required'],
            'skema_id' => ['required'],
            'image' => ['required', 'max:5000']
        ],[
            'file.required' => 'Nama File Perlu diisi',
            'image.required' => 'Gambarnya Mana?',
            'image.max' => 'Batas Ukuran Gambar 5 mb',
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = Skkni::create([
            'file' =>$request->file,
            'skema_id' =>$request->skema_id,
            'image' => 'uploads/skkni/'.$new_image,
        ]);
        $image->move('uploads/skkni/', $new_image);
        return back()->with('success','File anda berhasil di Upload');
    }


    public function destroy($id)
    {
        $file = Skkni::findorfail($id);
        $file->delete();
        return back()->with('success', 'File Berhasil dihapus');
    }


    public function skkni_detail($id)
    {
        $file = Skkni::findorfail($id);
        return view('admin/file/show', compact('file'));
    }
}
