<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\CekPendaftaran;
use App\Models\Data_register;
use App\Models\Dokumen_Upload;
use App\Models\Jurusan;
use App\Models\Semester;
use App\Models\Sex;
use App\Models\Skema;
use App\Models\Tuk;
use App\Models\Unikom;
use App\Models\Upload_file;
use App\Models\User;
use App\Models\Xnxx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegistrasiController extends Controller
{

    public function index()
    {
        $dokumen_upload = Dokumen_Upload::all();
        $sex = Sex::all();
        $jurusan = Jurusan::all();
        $semester = Semester::all();
        $skema = Skema::all();
        $unikom =Unikom::all();
        return view('asesi/registrasi/pilihan_skema', compact('skema','dokumen_upload', 'unikom', 'semester','sex','jurusan'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'kode' => ['required', 'unique:data_registers,kode'],
            'skema_id' => ['required', 'unique:data_registers,skema_id'],
            'id' => ['required', 'unique:data_registers,id'],
            // 'sex_id' => ['required'],
            'kode_skema' => ['required'],
            'nim' => ['required'],
            // 'tmpt_lahir' => ['required'],
            // 'no_hp' => ['required'],
            // 'semester_id' => ['required'],
            // 'tgl_lahir' => ['required'],
            // 'surel' => ['required'],
            'jurusan_id' => ['required'],
            // 'alamat' => ['required'],
            // 'negara' => ['required'],
            'id_skema' => ['required'],
            // 'image' => ['required'],
            // 'kode_post' => ['required'],
            // 'provinsi' => ['required'],
            // 'kabupaten' => ['required'],
            // 'kecamatan' => ['required'],
            // 'kota' => ['required']
        ],[
            'kode.unique' => 'Pendaftaran Sertifikasi Ditolak',
            'skema_id.unique' => 'Harap periksa kembali status pendaftaran sertifikasi sebelumnya',
            'id.unique' => ' Kemungkinan anda sudah mendaftar dengan skema ini',
        ]);

            $data_register = Data_register::create([
                'id' => $request->id,
                'kode' => $request->kode,
                'nim' => $request->nim,
                'skema_name' => $request->skema_name,
                'tuk_id' => $request->tuk_id,
                'kode_skema' => $request->kode_skema,
                'asesor_id' => $request->asesor_id,
                'status' => $request->status,
                'skema_id' => $request->skema_id,
                'user_id' => $request->user_id,
                'id_skema' => $request->id_skema,
                'user_name' => $request->user_name,
                'status' => $request->status,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'tmpt_lahir' => $request->tmpt_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'kode_post' => $request->kode_post,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'image' => $request->image,
                'institusi' => $request->institusi,
                'jabatan' => $request->jabatan,
                'email3' => $request->email3,
                'fax' => $request->fax,
                'telp' => $request->telp,
                'postal' => $request->postal,
                'jenis' => $request->jenis,
                'rmh' => $request->rmh,
                'ktr' => $request->ktr,
                'tmt' => $request->tmt,
                'alamat_kantor' => $request->alamat_kantor,
            ]);
        return back()->with('success', ' Pendaftaran anda Berhasil, Selanjutnya Silahkan "Ambil Formulir Pendafatran"');
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        // $request->validate([
        //     'kode' => ['required', 'unique:data_registers,kode'],
        //     'skema_id' => ['required', 'unique:data_registers,skema_id'],
        //     'sex_id' => ['required'],
        //     'nim' => ['required'],
        //     'tmpt_lahir' => ['required'],
        //     'no_hp' => ['required'],
        //     'semester_id' => ['required'],
        //     'provinsi' => ['required'],
        //     'kabupaten' => ['required'],
        //     'kecamatan' => ['required'],
        //     'kota' => ['required'],
        //     'tgl_lahir' => ['required'],
        //     'surel' => ['required'],
        //     'jurusan_id' => ['required'],
        //     'alamat' => ['required'],
        //     'kode_post' => ['required'],
        //     'negara' => ['required'],
        //     // 'image' => ['required']
        // ]);
        $data = [
                // 'id' => $request->id,
                // 'kode' => $request->kode,
                // 'nim' => $request->nim,
                // 'skema_name' => $request->skema_name,
                // 'tuk_id' => $request->tuk_id,
                // 'asesor_id' => $request->asesor_id,
                // 'status' => $request->status,
                'skema_id' => $request->skema_id,
                // 'user_id' => $request->user_id,
                // 'user_name' => $request->user_name,
                'status' => $request->status,
                // 'email' => $request->email,
                // 'sex_id' => $request->sex_id,
                // 'tgl_lahir' => $request->tgl_lahir,
                // 'tmpt_lahir' => $request->tmpt_lahir,
                // 'negara' => $request->negara,
                // 'alamat' => $request->alamat,
                // 'no_hp' => $request->no_hp,
                // 'kode_post' => $request->kode_post,
                // 'surel' => $request->surel,
                // 'provinsi' => $request->provinsi,
                // 'kabupaten' => $request->kabupaten,
                // 'kecamatan' => $request->kecamatan,
                // 'kota' => $request->kota,
                // 'semester_id' => $request->semester_id,
                // 'jurusan_id' => $request->jurusan_id,
                // 'image' => $request->image
            ];
            Data_register::whereId($id)->update($data);
        return redirect()->route('dashasesi.index')->with('success', ' Data Anda Berhasil di DiUpdate');
    }

    public function edit($id)
    {
        $xnxx = Xnxx::where('user_id', auth()->user()->id)
                ->where('kode', '>', 2)
                ->get();
        $dokumen_upload = Dokumen_Upload::all();
        $user = User::all();
        $identitas = Upload_file::where('user_id', auth()->user()->id)
                ->where('kode', '>', 2)
                ->get();
        $datareg = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(163, 129, 8)'>Lengkapi Data Anda</h4>")
            ->get();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $skema = Skema::findorfail($id);
        return view('asesi/registrasi/mengambil_formulir', compact('semester', 'datareg', 'xnxx', 'dokumen_upload', 'jurusan','sex', 'identitas', 'user', 'skema'));
    }


    public function show($id)
    {
        $decryptID = Crypt::decryptString($id);
        $registrasi = Data_register::where('user_id', auth()->user()->id)->get();
        $xnxx = Xnxx::where('user_id', auth()->user()->id)
                    ->where('kode', '>', 3)
                    ->get();

        $datareg = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(163, 129, 8)'>Lengkapi Data Anda</h4>")
            ->get();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $dokumen_upload = Dokumen_Upload::all();
        $data = Data_register::findorfail($decryptID);
        $identitas = Upload_file::where('user_id', auth()->user()->id)
                    ->where('kode', '>', 3)
                    ->get();
        return view('asesi/registrasi/formulirapl1', compact('data', 'datareg', 'sex', 'jurusan', 'semester', 'dokumen_upload', 'identitas', 'xnxx', 'registrasi'));
    }


    public function data_edit_tolak($id)
    {
        $registrasi = Data_register::where('user_id', auth()->user()->id)->get();
        $xnxx = Xnxx::where('user_id', auth()->user()->id)
                    ->where('kode', '>=', 1)
                    ->get();

        $datareg = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(141, 7, 7)'>Pendaftaran Ditolak</h4>")
            ->get();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $dokumen_upload = Dokumen_Upload::all();
        $data = Data_register::findorfail($id);
        $identitas = Upload_file::where('user_id', auth()->user()->id)
                ->where('kode', '>', 1)
                ->get();
        return view('asesi/registrasi/formulirapl1_tolak', compact('data', 'datareg', 'sex', 'jurusan',
        'semester', 'dokumen_upload', 'identitas', 'registrasi', 'xnxx'));
    }


    public function formulirapl2edit($id)
    {
        $data = Data_register::findorfail($id);
        $registrasi = Data_register::where('user_id', auth()->user()->id)->get();
        $xnxx = Xnxx::where('user_id', auth()->user()->id)
                    ->where('kode', '>', 3)
                    ->get();
        $identitas = Upload_file::where('user_id', auth()->user()->id)->get();
        return view('asesi/registrasi/formulirapl2', compact('data', 'identitas', 'xnxx', 'registrasi'));
    }


    public function formulirapl2edit_tolak($id)
    {
        $data = Data_register::findorfail($id);
        $registrasi = Data_register::where('user_id', auth()->user()->id)->get();
        $xnxx = Xnxx::where('user_id', auth()->user()->id)
                    ->where('kode', '>=', 1)
                    ->get();
        $identitas = Upload_file::where('user_id', auth()->user()->id)->get();
        return view('asesi/registrasi/formulirapl2_tolak', compact('data', 'identitas', 'xnxx', 'registrasi'));
    }


    public function destroy($id)
    {
        $data = Data_register::findorfail($id);
        $data->delete();
        return back()->with('success', 'Pendaftaran Asesi Berhasil dihapus');
    }


    public function rekap_pendaftaran($id)
    {
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('asesi/registrasi/rekap_pendaftaran', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function info_sertifikasi($id)
    {
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('asesi/registrasi/info_sertifikasi', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function daftar()
    {
        $skema = Skema::all();
        return view('asesi.registrasi.daftar_sertifikasi', compact('skema'));
    }


    public function skema_pendaftaran()
    {
        $skema = Skema::all();
        return view('asesi.registrasi.skema_pendaftaran', compact('skema'));
    }


}
