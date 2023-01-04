<?php

namespace App\Http\Controllers;

use App\Models\Kkni;
use Illuminate\Http\Request;

class KkniController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'image' => 'required'
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = Kkni::create([
            'file' =>$request->file,
            'image' => 'uploads/kkni/'.$new_image,
        ]);
        $image->move('uploads/kkni/', $new_image);
        return back()->with('success','File anda berhasil di Upload');
    }


    public function destroy($id)
    {
        $file = Kkni::findorfail($id);
        $file->delete();
        return back()->with('success', 'File Berhasil dihapus');
    }


    public function kkni_detail($id)
    {
        $file = Kkni::findorfail($id);
        return view('admin/file/show', compact('file'));
    }
}
