<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index() {
        $prodi = Prodi::orderBy('created_at','desc')->get();
        return view('admin/prodi/index', compact('prodi'));
    }


    public function store(Request $request) {
        $request->validate([
            'prodi' => ['required']
        ]);
        $prodi = Prodi::create([
            'prodi' => $request->prodi
        ]);
        return back()->with('success', 'Prodi Sudah Berhasil diBuat');
    }


    public function destroy($id){
        $prodi = Prodi::findorfail($id);
        $prodi->delete();
        return redirect()->back()->with('success','Prodi Berhasil Dihapus');
    }
}
