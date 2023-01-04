<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Fileapl2;
use App\Models\Filelain;
use App\Models\Kkni;
use App\Models\Skema;
use App\Models\Skkni;
use Illuminate\Http\Request;

class FileController extends Controller
{

    public function index()
    {
        $file = File::all();
        $filelain = Filelain::all();
        $skkni = Skkni::all();
        $kkni = Kkni::all();
        $fileapl2 = Fileapl2::all();
        $skema = Skema::all();
        return view('admin/file/index', compact('file', 'filelain', 'skkni', 'skema', 'kkni', 'fileapl2'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'file' => 'required',
            'image' => 'required'
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img1 = File::create([
            'file' =>$request->file,
            'image' => 'uploads/file/'.$new_image,
        ]);
        $image->move('uploads/file/', $new_image);
        return back()->with('success','File anda berhasil di Upload');
    }


    public function show($id)
    {
        $file = File::findorfail($id);
        return view('admin/file/show', compact('file'));
    }


    public function destroy($id)
    {
        $file = File::findorfail($id);
        $file->delete();
        return back()->with('success', 'File Berhasil dihapus');
    }
}
