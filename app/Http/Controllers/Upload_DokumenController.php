<?php

namespace App\Http\Controllers;

use App\Models\Upload_file;
use Illuminate\Http\Request;

class Upload_DokumenController extends Controller
{
    public function store(Request $request)
    {
        //   dd($request->all());

        $request->validate([
            'kode' => ['required', 'unique:upload_files,kode'],
            'kode_dokumen' => ['required', 'unique:upload_files,kode_dokumen'],
            'name' =>['required'],
        ],[
            'kode.unique' => 'Data sudah diambil',
        ]);
        $data = $request->all();
        foreach($data['name'] as $item => $value) {
                    $data2 = array(
                        'name' => $request->name[$item],
                        'data_register_id' => $request->data_register_id[$item],
                        'user_id' => $request->user_id[$item],
                        'status' => $request->status[$item],
                        'kode' => $request->kode[$item],
                        'y' => $request->y[$item],
                        'n' => $request->n[$item],
                        'z' => $request->z[$item],
                        'kode_dokumen' => $request->kode_dokumen[$item],
                    );
                    Upload_file::create($data2);
                }
        return back()->with('success', 'Formulir APL-01 Berhasil Diambil');
    }


    public function update(Request $request, $id)
    {
        //  dd($request->all());
        $request->validate([
            'image' =>['required', 'mimes:png,pdf', 'max:2000']
        ]);
        $image = $request->image;
        $new_image = time() . $image->getClientOriginalName();
        $image->move('uploads/uploads_file_register/', $new_image);
        $data = [
            'status' => $request->status,
            'koreksi' => $request->koreksi,
            'y' => $request->y,
            'n' => $request->n,
            'z' => $request->z,
            'image' => 'uploads/uploads_file_register/' . $new_image,
        ];
    Upload_file::whereId($id)->update($data);
    return back()->with('success', 'Dokumen Berhasil Diupload');
    }

}
