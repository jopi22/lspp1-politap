<?php

namespace App\Http\Controllers;

use App\Models\Beranda_img2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class Beranda_img2Controller extends Controller
{

    public function index()
    {
        $beranda_img2 = Beranda_img2::orderBy('created_at','desc')->get();
        return view('admin/beranda_img2/index', compact('beranda_img2'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            // 'image' => ['required'],
            'nama' => ['required'],
            'keterangan' => ['required'],
            // 'no_hp' => ['required', 'numeric']
        ],[
            'nama.required' => 'Namanya mana?',
            'keterangan.required' => 'Jabatannya Tolong diisi',
        ]);

        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $beranda_img2 = Beranda_img2::create([
            'keterangan' =>$request->keterangan,
            'nama' =>$request->nama,
            'facebook' =>$request->facebook,
            'twitter' =>$request->keterangan,
            'intagram' =>$request->intagram,
            'no_hp' =>$request->no_hp,
            'email' =>$request->email,
            'image' => 'uploads/pengelola/'.$new_image,
        ]);
        $image->move('uploads/pengelola/', $new_image);
        return back()->with('success','Portofolio anda berhasil di Posting');
    }

    public function edit($id)
    {
        $decryptID = Crypt::decryptString($id);
        $pengelola = Beranda_img2::findorfail($decryptID);
        return view('admin/beranda_img2/edit', compact('pengelola'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'nama' => ['required'],
            'keterangan' => ['required'],
        ],[
            'nama.required' => 'Namanya mana?',
            'keterangan.required' => 'Jabatannya Tolong diisi',
        ]);
        $beranda_img2 = Beranda_img2::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/pengelola/', $new_image);
            $beranda_img2_data = [
                'nama' =>$request->nama,
                'facebook' =>$request->facebook,
                'twitter' =>$request->twitter,
                'instagram' =>$request->instagram,
                'no_hp' =>$request->no_hp,
                'email' =>$request->email,
                'keterangan' =>$request->keterangan,
                'image' => 'uploads/pengelola/'.$new_image,
            ];
        }
        else{
            $beranda_img2_data = [
                'keterangan' =>$request->keterangan,
                'nama' =>$request->nama,
                'facebook' =>$request->facebook,
                'twitter' =>$request->twitter,
                'instagram' =>$request->instagram,
                'no_hp' =>$request->no_hp,
                'email' =>$request->email,
            ];
        }
        $beranda_img2->update($beranda_img2_data);
        return back()->with('success','Portofolio anda berhasil di Update');
    }


    public function destroy($id)
    {
        $beranda_img2 = Beranda_img2::findorfail($id);
        $beranda_img2->delete();
        return redirect()->back()->with('success','Portofolio Berhasil Dihapus');
    }
}
