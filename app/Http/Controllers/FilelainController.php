<?php

namespace App\Http\Controllers;

use App\Models\Filelain;
use Illuminate\Http\Request;

class FilelainController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'image' => 'required'
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = Filelain::create([
            'file' =>$request->file,
            'image' => 'uploads/file/'.$new_image,
        ]);
        $image->move('uploads/file/', $new_image);
        return back()->with('success','File anda berhasil di Upload');
    }


    public function destroy($id)
    {
        $file = Filelain::findorfail($id);
        $file->delete();
        return back()->with('success', 'File Berhasil dihapus');
    }


    public function filelain_detail($id)
    {
        $file = Filelain::findorfail($id);
        return view('admin/file/show', compact('file'));
    }
}
