<?php

namespace App\Http\Controllers;

use App\Models\Strorg;
use Illuminate\Http\Request;

class StrorgController extends Controller
{

    public function index()
    {
        $strorg = Strorg::all();
        return view('admin/strorg/index', compact('strorg'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:500'],
        ],[
            'image.required' => 'Gambarnya mana?',
            'image.max' => 'Gambarnya Kegedean?',
        ]);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $strorg = Strorg::create([
            'keterangan' =>$request->keterangan,
            'image' => 'uploads/strorg/'.$new_image,
        ]);
        $image->move('uploads/strorg/', $new_image);
        return redirect()->route('strorg.index')->with('success','Gambar anda berhasil di Posting');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => ['required', 'max:1000'],
        ],[
            'image.required' => 'Gambarnya mana?',
            'image.max' => 'Gambarnya Kegedean.., ukuran gambar maksimal 1 mb',
        ]);
        $strorg = Strorg::findorfail($id);
        if ($request->has('image')) {
            $image = $request->image;
            $new_image = time().$image->getClientOriginalName();
            $image->move('uploads/strorg/', $new_image);
            $strorg_data = [
                'keterangan' =>$request->keterangan,
                'image' => 'uploads/strorg/'.$new_image,
            ];
        }
        else{
            $strorg_data = [
                'keterangan' =>$request->keterangan,
            ];
        }
        Strorg::whereId($id)->update($strorg_data);
        return redirect()->route('strorg.index')->with('success','Gambar Struktur Organisasi berhasil di Update');
    }
}
