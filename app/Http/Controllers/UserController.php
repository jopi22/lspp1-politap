<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        $user = User::all();
        return view('admin/user/index', compact('user'));
    }


    public function show($id){
        $user = User::findorfail($id);
        $jurusan = Jurusan::all();
        $semester = Semester::all();
        return view('admin/user/show', compact('user', 'jurusan', 'semester'));
    }


    public function update(Request $request, $id) {
        // dd($request->all());
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
            'email2' => ['email','min:3', 'max:100', 'required', 'unique:users,email2,'.auth()->id()],
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

    public function user_update2(Request $request, $id) {
        // dd($request->all());
        $request->validate([
            'name' => ['min:1', 'max:100', 'required'],
            'email' => ['required'],
            'password' => ['min:4', 'required'],
        ]);

        $user_data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        User::whereId($id)->update($user_data);
        return back()->with('success', ' Data Profil Pengguna Berhasil diUpdate');
    }


    public function destroy($id) {
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->back()->with('success','Akun Pengguna Berhasil Dihapus');
    }
}
