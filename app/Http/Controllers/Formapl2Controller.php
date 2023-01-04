<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formapl2;
use App\Models\Formapl2_child;
use App\Models\Skema;
use App\Models\Data_register;
use App\Models\Asesor;
use App\Models\Tuk;
use App\Models\Upload_file;
use App\Models\Xnxx;
use Illuminate\Support\Facades\Crypt;


class Formapl2Controller extends Controller
{

    public function jwp2(Request $request, $id)
    {
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin.format.formapl2.jwp2', compact('validasi','tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function dgm2(Request $request, $id)
    {
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin.format.formapl2.dgm2', compact('validasi','tuk', 'asesor', 'identitas', 'xnxx'));
    }




    
    public function index()
    {
        $skema = Skema::all();
        $formapl2 = Formapl2::all();
        return view('admin.formapl2.index', compact('formapl2', 'skema'));
    }


    public function store(Request $request)
    {
        // dd($request->ALL());
        $request->validate([
            'skema' => ['required'],
            'kode' => ['required'],
        ],[
            'skema.required' => 'Nama Skema perlu diisi',
            'kode.required' => 'Kode Skema perlu diisi',
        ]);

        $skema = Formapl2::create([
            'skema' => $request->skema,
            'kode' => $request->kode,
            'skema_id' => $request->skema_id,
        ]);
        return redirect()->back()->with('success', 'Formulir APL-02 berhasil di tambah');
    }


    Public function formapl2_save(Request $request)
    {
        // dd($request->ALL());
        $request->validate([
            'unit' => ['required'],
            'elemen' => ['required'],
            'formapl2_id' => ['required'],
        ],[
            'unit.required' => 'Nama unit perlu diisi',
            'elemen.required' => 'Elemen unit perlu diisi',
        ]);

        $unit = Formapl2_child::create([
            'unit' => $request->unit,
            'elemen' => $request->elemen,
            'formapl2_id' => $request->formapl2_id,
        ]);
        return redirect()->back()->with('success', 'Formulir APL-02 berhasil di tambah');
    }


    public function show($id)
    {
        $decryptID = Crypt::decryptString($id);
        $skema = Skema::all();
        $formapl2 = Formapl2::findorfail($decryptID);
        return view('admin.formapl2.show', compact('formapl2', 'skema'));
    }


    public function edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $formapl2 = Formapl2::findorfail($decryptID);
        $skema = Skema::all();
        return view('admin.formapl2.edit', compact('formapl2', 'skema'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $formapl2 = Formapl2::findorfail($id);
        $formapl2->delete();
        return redirect()->back()->with('success', 'Formulir Berhasil Dihapus');
    }
}
