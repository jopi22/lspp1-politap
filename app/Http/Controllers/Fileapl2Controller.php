<?php

namespace App\Http\Controllers;

use App\Models\Fileapl2;
use Illuminate\Http\Request;

class Fileapl2Controller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'image' => 'required'
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = Fileapl2::create([
            'file' =>$request->file,
            'image' => 'uploads/fileapl2/'.$new_image,
        ]);
        $image->move('uploads/fileapl2/', $new_image);
        return back()->with('success','File anda berhasil di Upload');
    }


    public function destroy($id)
    {
        $file = Fileapl2::findorfail($id);
        $file->delete();
        return back()->with('success', 'File Berhasil dihapus');
    }


    public function fileapl2_detail($id)
    {
        $file = Fileapl2::findorfail($id);
        return view('admin/file/show', compact('file'));
    }
}
