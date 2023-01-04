<?php

namespace App\Http\Controllers;

use App\Models\F_profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class F_profilController extends Controller
{


    public function index()
    {
        $profil = F_profil::where('id', '1' )->get();
        $profil2 = F_profil::where('id', '2' )->get();
        return view('admin/f_profil/index', compact('profil', 'profil2'));
    }


    public function store(Request $request)
    {
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $profil = F_profil::create([
            'profil' =>$request->profil,
            'isi' =>$request->isi,
            'visi' =>$request->visi,
            'misi' =>$request->misi,
            'motto' =>$request->motto,
            'image' => 'uploads/f_profil/'.$new_image,
        ]);
        $image->move('uploads/f_profil/', $new_image);
        return redirect()->route('f_profil.index')->with('success','Profil LSP POLITAP berhasil di Posting');
    }


    public function edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $profil = F_profil::findorfail($decryptID);
        return view('admin/f_profil/edit', compact('profil'));
    }


    public function update(Request $request, $id)
    {
        $profil = F_profil::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/f_profil/', $new_image);
            $profil_data = [
                'profil' =>$request->profil,
                'visi' =>$request->visi,
                'isi' =>$request->isi,
                'misi' =>$request->misi,
                'motto' =>$request->motto,
                'image' => 'uploads/f_profil/'.$new_image,
            ];
        }
        else{
            $profil_data = [
                'profil' =>$request->profil,
                'visi' =>$request->visi,
                'isi' =>$request->isi,
                'misi' =>$request->misi,
                'motto' =>$request->motto,
            ];
        }
        $profil->update($profil_data);
        return redirect()->route('f_profil.index')->with('success','Data Profil Web anda berhasil di Update');
    }
}
