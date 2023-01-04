<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Data_register;
use App\Models\Tuk;
use App\Models\Upload_file;
use App\Models\Xnxx;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class ValidasiController extends Controller
{

    public function registrasi_baru(){
        $validasi = Data_register::where('status', "<h4 style='color: green'>Menunggu Validasi...</h4>")->get();
        return view('admin/register/index', compact('validasi'));
    }


    public function list_valid(){
        $validasi = Data_register::where('status', "<h4 style='color: rgb(34, 123, 138)'>Pendaftaran Divalidasi</h4>")->get();
        return view('admin/register/list_valid', compact('validasi'));
    }


    public function list_tolak(){
        $validasi = Data_register::where('status', "<h4 style='color: rgb(141, 7, 7)'>Pendaftaran Ditolak</h4>")->get();
        return view('admin/register/list_tolak', compact('validasi'));
    }


    public function list_blacklist(){
        $validasi = Data_register::where('status', "<h4 style='color: #000'>Pendaftaran Sementara Diblokir</h4>")->get();
        return view('admin/register/list_blacklist', compact('validasi'));
    }

    public function list_sertifikat(){
        $validasi = Data_register::where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")->get();
        return view('admin/register/list_sertifikat', compact('validasi'));
    }



    public function show(Request $request, $id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/show', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function proses_show(Request $request, $id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/proses_show', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function sertifikat_show(Request $request, $id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/sertifikat_show', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function blacklist_show(Request $request, $id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/blacklist_show', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }


    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'date' => ['required'],
            'time' => ['required'],
            'asesor_id' => ['required'],
            'tuk_id' => ['required'],
        ],[
            'date.required' => 'Masukan tanggal sertifikasi',
            'time.required' => 'Masukan waktu sertifikasi',
            'asesor_id.required' => 'Pilih Penguji',
            'tuk_id.required' => 'Pilih Tempat Uji Kompetensi',
        ]);
        $validasi_data = [
            'status' => $request->status,
            'date' => $request->date,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);
        return back()->with('success', 'Proses Update Data Registrasi Berhasil');
    }


    public function update2(Request $request, $id){
        // dd($request->all());
        $validasi_data = [
            'status' => $request->status,
            // 'date' => $request->date,
            'id_skema' => $request->id_skema,
            'kode' => $request->kode,
            // 'time' => $request->time,
            // 'asesor_id' => $request->asesor_id,
            // 'tuk_id' => $request->tuk_id,
            // 'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);
        return back()->with('success', 'Proses Validasi Data Registrasi Berhasil');
    }

    public function finishstore(Request $request)
    {
        // dd($request->all());
        $data = Data_register::create([
            'status' => $request->status,
            'date' => $request->date,
            'id_skema' => $request->id_skema,
            'kode' => $request->kode,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan,
            'skema_id' => $request->skema_id,
            'id' => $request->id
        ]);
        return back()->with('success', 'Proses Validasi Data Registrasi Berhasil');
    }


    public function update3(Request $request, $id)
    {
        // dd($request->all());
        $validasi_data = [
            'status' => $request->status,
            'date' => $request->date,
            'time' => $request->time,
            'asesor_id' => $request->asesor_id,
            'tuk_id' => $request->tuk_id,
            'keterangan' => $request->keterangan
        ];
        Data_register::whereId($id)->update($validasi_data);
        return back()->with('success', 'Proses Validasi Data Registrasi Berhasil');
    }


    public function destroy($id){
        $validasi = Data_register::findorfail($id);
        $validasi->delete();
        return back()->with('success', 'Peserta Asesi Berhasil dihapus');
    }


    public function koreksiformulir($id){
        $validasi = Data_register::findorfail($id);
        $xnxx = Xnxx::all();
        $identitas = Upload_file::all();
        $tuk = Tuk::all();
        $asesor = Asesor::all();
        return view('admin/register/koreksi', compact('validasi', 'tuk', 'asesor', 'identitas', 'xnxx'));
    }

    public function koreksiformulir_update(Request $request, $id)
    {
        // dd($request->all());
        $validasi_data = [
            'kode' => $request->kode,
            'koreksi' => $request->koreksi
        ];
        Upload_file::whereId($id)->update($validasi_data);
        return back()->with('success', 'Koreksi Data Formulir Berhasil');
    }


    public function koreksiformulirapl2_update(Request $request, $id)
    {
        // dd($request->all());
        $validasi_data = [
            'kode' => $request->kode,
            'koreksi' => $request->koreksi
        ];
        Xnxx::whereId($id)->update($validasi_data);
        return back()->with('success', 'Koreksi Data Formulir Berhasil');
    }

    public function backup_store(Request $request)
    {
        dd($request->all());
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

}
