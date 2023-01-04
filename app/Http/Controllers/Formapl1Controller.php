<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data_register;
use App\Models\Asesor;
use App\Models\Dokumen_Upload;
use App\Models\Tuk;
use App\Models\Upload_file;
use App\Models\Xnxx;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Formapl1Controller extends Controller
{

    public function jwp1(Request $request, $id)
    {
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin.format.formapl1.jwp1', compact('validasi','tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function index()
    {
        $form1 = Dokumen_Upload::all();
        return view('admin.form1_crud.index', compact('form1'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(['name' => 'required'],['name.required' => 'Nama datanya mana?']);
        $form1 = Dokumen_Upload::create(['name' => $request->name]);
        return redirect()->back()->with('success', 'Data formulir berhasil disimpan');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => ['required']],['name.required' => 'Nama datanya mana?']);
        $form1 = [
            'name' => $request->name,
        ];
        Dokumen_Upload::whereId($id)->update($form1);
        return redirect()->back()->with('success', 'Data berhasil diupdate');
    }


    public function destroy($id)
    {
        $form1 = Dokumen_Upload::findorfail($id);
        $form1->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
