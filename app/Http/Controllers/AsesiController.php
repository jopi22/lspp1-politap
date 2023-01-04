<?php

namespace App\Http\Controllers;

use App\Models\Asesi;
use App\Models\Data_register;
use App\Models\Info;
use App\Models\Jurusan;
use App\Models\Semester;
use App\Models\Sex;
use App\Models\Skema;
use App\Models\Unikom;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class AsesiController extends Controller
{


    public function index(){
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        $asesi = Asesi::all();
        return view('asesi/index', compact('asesi', 'semester', 'jurusan'));
    }


    public function edit(){
        $user = User::all();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        return view('asesi/profil_edit', compact('semester', 'jurusan','sex', 'user'));
    }


    public function update(Request $request, $id) {
        dd($request->all());
        $request->validate([
            'name' => ['min:1', 'max:100', 'required'],
            'email' => ['min:3', 'required'],
            // 'sex_id' => ['max:100', 'required'],
            // 'tgl_lahir' => ['min:3', 'max:100', 'required'],
            // 'tmpt_lahir' => ['min:3', 'max:100', 'required'],
            // 'negara' => ['min:3', 'max:100', 'required'],
            // 'alamat' => ['min:3', 'max:100', 'required'],
            'jurusan_id' => ['required'],
            // 'semester_id' => ['required'],
            // 'kode_post' => ['max:100000000000'],
            // 'no_hp' => ['required', 'unique:users,no_hp,'.auth()->id()],
            'email2' => ['email','min:3', 'max:100', 'required', 'unique:users,surel,'.auth()->id()],
            // 'image' => ['required'],
            // 'ktm' => ['required'],
        ]);

        if ($request->has('image'))
        {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/beranda_img2/', $new_image);
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'no_hp' => $request->no_hp,
                'postal' => $request->postal,
                'email2' => $request->email2,
                'telp' => $request->telp,
                'fax' => $request->fax,
                'email3' => $request->email3,
                'jabatan' => $request->jabatan,
                'alamat_kantor' => $request->alamat_kantor,
                'institusi' => $request->institusi,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'password' => bcrypt($request->password),
                'image' => 'uploads/beranda_img2/'.$new_image,
            ];
        }
        else{
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'no_hp' => $request->no_hp,
                'postal' => $request->postal,
                'email2' => $request->email2,
                'telp' => $request->telp,
                'fax' => $request->fax,
                'email3' => $request->email3,
                'jabatan' => $request->jabatan,
                'alamat_kantor' => $request->alamat_kantor,
                'institusi' => $request->institusi,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'password' => bcrypt($request->password),
            ];
        }
        User::whereId($id)->update($user_data);
        return back()->with('success', ' Data Profil Pengguna Berhasil diUpdate');
    }


    public function edit2(){
        $user = User::all();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        return view('asesi/registrasi/profil_edit2', compact('semester', 'jurusan','sex', 'user'));
    }


    public function formulirapl2_edit(){
        $user = User::all();
        $sex = Sex::all();
        $semester = Semester::all();
        $jurusan = Jurusan::all();
        return view('asesi/registrasi/forapl1', compact('semester', 'jurusan','sex', 'user'));
    }


    public function formulirapl2_update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'email' => [ 'required', 'min:3','unique:users,email,'. auth()->id()],
            'sex_id' => ['max:100', 'required'],
            'tgl_lahir' => ['required'],
            'negara' => ['min:3', 'max:100', 'required'],
            'alamat' => ['min:3', 'max:100', 'required'],
            'jurusan_id' => ['required'],
            'semester_id' => ['required'],
            'no_hp' => ['required', 'unique:users,no_hp,'.auth()->id()],
            'tempat_lahir' => ['required'],
            'email2' => ['required'],
        ],[
            'name.required' => 'Nama anda harus diisi',
            'name.min' => 'Nama minimal 3 karakter',
            'email.min' => 'NIM minimal 3 karakter',
            'email.required' => 'NIM anda harus diisi',
            'email2.required' => 'Email anda harus diisi',
            'sex_id.required' => 'Jenis Kelamin anda harus diisi',
            'tgl_lahir.required' => 'Tanggal Lahir anda harus diisi',
            'negara.required' => 'Negara anda harus diisi',
            'tempat_lahir.required' => 'Tempat Lahir anda harus diisi',
            'alamat.required' => 'Alamat anda harus diisi',
            'no_hp.required' => 'Nomor Handphone anda harus diisi',
            'semester_id.required' => 'Semester anda harus diisi',
            'jurusan_id.required' => 'Jurusan anda harus diisi',
        ]);

        if ($request->has('image'))
        {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/beranda_img2/', $new_image);
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'email2' => $request->email2,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'no_hp' => $request->no_hp,
                'telp' => $request->telp,
                'fax' => $request->fax,
                'email3' => $request->email3,
                'jabatan' => $request->jabatan,
                'alamat_kantor' => $request->alamat_kantor,
                'institusi' => $request->institusi,
                'postal' => $request->postal,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'image' => 'uploads/beranda_img2/'.$new_image,
            ]);
        }
        else{
            auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'email2' => $request->email2,
            'sex_id' => $request->sex_id,
            'tgl_lahir' => $request->tgl_lahir,
            'negara' => $request->negara,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'no_hp' => $request->no_hp,
            'postal' => $request->postal,
            'surel' => $request->surel,
            'telp' => $request->telp,
            'fax' => $request->fax,
            'email3' => $request->email3,
            'jabatan' => $request->jabatan,
            'alamat_kantor' => $request->alamat_kantor,
            'institusi' => $request->institusi,
            'semester_id' => $request->semester_id,
            'jurusan_id' => $request->jurusan_id,
            ]);
        }
        // Data_register::whereId($id)->update($data);
        return redirect()->back()->with('success', ' Data Profil Anda Berhasil Disimpan');
    }


    public function formulirapl3_update(Request $request)
     {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'email' => [ 'required', 'min:3','unique:users,email,'. auth()->id()],
            'sex_id' => ['max:100', 'required'],
            'tgl_lahir' => ['required'],
            'negara' => ['required', 'min:3', 'max:100'],
            'alamat' => ['required', 'min:3', 'max:100'],
            'jurusan_id' => ['required'],
            'semester_id' => ['required'],
            'no_hp' => ['required', 'unique:users,no_hp,'.auth()->id()],
            'tempat_lahir' => ['required'],
            'email2' => ['required'],
            'kode_post' => ['required'],
        ],[
            'name.required' => 'Nama anda harus diisi',
            'name.min' => 'Nama minimal 3 karakter',
            'email.min' => 'NIM minimal 3 karakter',
            'email.required' => 'NIM anda harus diisi',
            'email2.required' => 'Email anda harus diisi',
            'sex_id.required' => 'Jenis Kelamin anda harus diisi',
            'tgl_lahir.required' => 'Tanggal Lahir anda harus diisi',
            'negara.required' => 'Negara anda harus diisi',
            'tempat_lahir.required' => 'Tempat Lahir anda harus diisi',
            'alamat.required' => 'Alamat anda harus diisi',
            'no_hp.required' => 'Nomor Handphone anda harus diisi',
            'semester_id.required' => 'Semester anda harus diisi',
            'jurusan_id.required' => 'Jurusan anda harus diisi',
            'kode_post.required' => 'Kode Post anda harus diisi',
        ]);

        if ($request->has('image'))
        {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/beranda_img2/', $new_image);
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'email2' => $request->email2,
                'sex_id' => $request->sex_id,
                'tgl_lahir' => $request->tgl_lahir,
                'negara' => $request->negara,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'no_hp' => $request->no_hp,
                'telp' => $request->telp,
                'fax' => $request->fax,
                'email3' => $request->email3,
                'jabatan' => $request->jabatan,
                'alamat_kantor' => $request->alamat_kantor,
                'institusi' => $request->institusi,
                'postal' => $request->postal,
                'surel' => $request->surel,
                'semester_id' => $request->semester_id,
                'jurusan_id' => $request->jurusan_id,
                'rmh' => $request->rmh,
                'ktr' => $request->ktr,
                'kode_post' => $request->kode_post,
                'tmt' => $request->tmt,
                'image' => 'uploads/beranda_img2/'.$new_image,
            ]);
        }
        else{
            auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'email2' => $request->email2,
            'sex_id' => $request->sex_id,
            'tgl_lahir' => $request->tgl_lahir,
            'negara' => $request->negara,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'no_hp' => $request->no_hp,
            'postal' => $request->postal,
            'surel' => $request->surel,
            'telp' => $request->telp,
            'fax' => $request->fax,
            'email3' => $request->email3,
            'jabatan' => $request->jabatan,
            'alamat_kantor' => $request->alamat_kantor,
            'institusi' => $request->institusi,
            'semester_id' => $request->semester_id,
            'jurusan_id' => $request->jurusan_id,
            'rmh' => $request->rmh,
            'kode_post' => $request->kode_post,
            'ktr' => $request->ktr,
            'tmt' => $request->tmt,
            ]);
        }
        // Data_register::whereId($id)->update($data);
        return redirect()->route('daftar')->with('success', ' Data Profil Anda Berhasil Disimpan, Selanjutnya Pilih Skema dan Ambil Formulir Anda');
    }



    public function info_skema(){
        $skema = Skema::where('status_id', '1')->get();
        return view('asesi/info_skema', compact('skema'));
    }


    public function info_skema_show($id){
        $decryptID = Crypt::decryptString($id);
        $skema = Skema::findorfail($decryptID);
        return view('asesi/info_skema_show', compact('skema'));
    }


    public function koleksi_sertifikat(){
        $datareg = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")
            ->get();
        return view('asesi/koleksi', compact('datareg'));
    }


    public function sertifikat_show($id){
        $decryptID = Crypt::decryptString($id);
        $validasi = Data_register::findorfail($decryptID);
        return view('asesi/sertifikat_show', compact('validasi'));
    }


    public function instruksi_registrasi(){
        $info = Info::all();
        return view('asesi/instruksi', compact('info'));
    }
}
