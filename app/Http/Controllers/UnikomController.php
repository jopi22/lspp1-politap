<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Unikom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class UnikomController extends Controller
{
    public function index()  {
        $skema = Skema::all();
        $unikom = Unikom::orderBy('created_at','desc')->get();
        return view('admin/unikom/index', compact('unikom', 'skema'));
    }


    public function store(Request $request) {
        $request->validate([
            // 'kode_unikom' => ['required', 'unique:unikoms,kode_unikom'],
            'unikom' => ['required'],
            'skema_id' => ['required']
        ],[
            // 'kode_unikom.required' => 'Kode Unitnya Mana?',
            'unikom.required' => 'Nama Unitnya Mana?',
        ]);
        $unikom = Unikom::create([
            'kode_unikom' => $request->kode_unikom,
            'unikom' => $request->unikom,
            'skema_id'=> $request->skema_id
        ]);
        return redirect()->back()->with('success', 'Unit Kompetensi Berhasil Ditambahkan');
    }


    public function edit($id) {
        $decryptID = Crypt::decryptString($id);
        $skema = Skema::all();
        $unikom = Unikom::findorfail($decryptID);
        return view('admin/unikom/edit', compact('unikom', 'skema'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'kode_unikom' => ['required'],
            'unikom' => ['required'],
            'skema_id' => ['required']
        ],[
            'kode_unikom.required' => 'Kode Unitnya Mana?',
            'unikom.required' => 'Nama Unitnya Mana?',
        ]);
        $unikom_data = [
            'kode_unikom' => $request->kode_unikom,
            'unikom' => $request->unikom,
            'skema_id' => $request->skema_id,
        ];
        Unikom::whereId($id)->update($unikom_data);
        return redirect()->back()->with('success','Unit Kompetensi Berhasil di Ubah');
    }


    public function destroy($id) {
        $unikom = Unikom::findorfail($id);
        $unikom->delete();
        return redirect()->back()->with('success','Unit Kompetensi Berhasil Dihapus');
    }
}
