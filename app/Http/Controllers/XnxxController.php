<?php

namespace App\Http\Controllers;

use App\Models\Data_register;
use App\Models\Register;
use App\Models\Skema;
use App\Models\Token;
use App\Models\Unikom;
use App\Models\Upload_file;
use App\Models\Xnxx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class XnxxController extends Controller
{
    public function store(Request $request )
    {
        // dd($request->all());

        $request->validate([
                'kode' => ['required', 'unique:xnxxes,kode'],
                'kode_elemen' => ['required', 'unique:xnxxes,kode_elemen']
                ],[
                    'kode.unique' => 'Data sudah diambil',
                    'kode.required' => 'Data Elemen Kosong',
                    'kode_elemen.required' => 'Tidak dapat mengambil formulir',
                ]);

                if ($request->hasFile('image')) {
                    $images = $request->image;
                    foreach ($images as $image) {
                        $new_image = time() . $image->getClientOriginalName();
                        $image->move('uploads/formulir_apl2/', $new_image);
                        $laptop = Xnxx::create([
                            'image' => 'uploads/formulir_apl2/' . $new_image,
                        ]);
                    }
                } else {
                    $data = $request->all();
                    foreach($data['unikom_name'] as $item => $value) {
                                $data2 = array(
                                    'unikom_name' => $data['unikom_name'][$item],
                                    'unikom_id' => $data['unikom_id'][$item],
                                    'unikom_kode' => $data['unikom_kode'][$item],
                                    'data_register_id' => $data['data_register_id'][$item],
                                    'user_id' => $data['user_id'][$item],
                                    'status' => $data['status'][$item],
                                    'kode' => $data['kode'][$item],
                                    'kode_elemen' => $data['kode_elemen'][$item],
                                    'skema_id' => $data['skema_id'][$item],
                                    'skema_name' => $data['skema_name'][$item],
                                    'asesmen_name' => $data['asesmen_name'][$item],
                                    'kriteria' => $data['kriteria'][$item],
                                );
                                Xnxx::create($data2);
                            }
                }
        return back()->with('success', 'Formulir APL-02 Berhasil Diambil');
    }


    public function update(Request $request, $id )
    {
        // dd($request->all());
        $request->validate([
            'image' => ['required', 'max:2000']
            ]);
            $image = $request->image;
            $new_image = time() . $image->getClientOriginalName();
            $image->move('uploads/formulir_apl2/', $new_image);
            $data = [
                'status' => $request->status,
                'koreksi' => $request->koreksi,
                'image' => 'uploads/formulir_apl2/' . $new_image,
            ];

        xnxx::whereId($id)->update($data);
        return back()->with('success', 'Dokumen Berhasil Disimpan');
    }

    public function upload_identitas_store2(Request $request )
    {
        // dd($request->all());
        $request->validate([
            'kode' => ['required', 'unique:upload_files,kode'],
            'name' =>['required']
        ]);

        $xnxx = Upload_file::create([
            'data_register_id' => $request->data_register_id,
            'name' => $request->name,
            'user_id' => $request->user_id,
            'kode' => $request->kode,
            'status' => $request->status,
        ]);
        return back()->with('success', 'Dokumen Berhasil Diupload');
    }


    public function destroy3($id)
    {
        $identitas = Upload_file::findorfail($id);
        $identitas->delete();
        return back();
    }


    public function show($id)
    {
        $xnxx = Xnxx::where('user_id', auth()->user()->id)->get();
        $identitas = Upload_file::where('user_id', auth()->user()->id)->get();
        $skema = Skema::findorfail($id);
        $skema2 = Skema::all();
        $registrasi = Data_register::where('user_id', auth()->user()->id)->get();
        return view('asesi/registrasi/formulir2', compact('skema', 'skema2','identitas','registrasi', 'xnxx'));
    }


    public function token_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'token' => ['required', 'unique:tokens,token'],
            'user_id' => ['required']
        ]);

        $xnxx = Token::create([
            'token' => $request->token,
            'user_id' => $request->user_id
        ]);
        return redirect()->route('register.last');
    }


    public function destroy($id)
    {
        $xnxx = Xnxx::findorfail($id);
        $xnxx->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }


    public function rekap_register()
    {
        return view('asesi/registrasi/rekap_register');
    }


    public function token2_store(Request $request)
    {
        $request->validate([
            'kode_register' => ['required', 'unique:registers,kode_register']
        ]);

        $xnxx = Register::create([
            'kode_register' => $request->kode_register,
            'skema_id' => $request->skema_id,
            'user_id' => $request->user_id,
            'user_name' => $request->user_name,
            'skema_name' => $request->skema_name,
            'status' => $request->status
        ]);
        return redirect()->route('rekap.registrasi');
    }


    public function rekap_registrasi()
    {
        $register = Register::where('user_id', auth()->user()->id)->get();
        $xnxx = Xnxx::all();
        return view('asesi/registrasi/rekap_register', compact('register', 'xnxx'));
    }


    public function destroy2($id)
    {
        $register = Register::findorfail($id);
        $register->delete();
        return back();
    }
}
