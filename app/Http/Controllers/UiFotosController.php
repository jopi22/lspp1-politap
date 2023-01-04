<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Group_galeri;
use Illuminate\Http\Request;

class UiFotosController extends Controller
{
    public function index()
    {
        $beranda = Beranda::all();
        $galeri = Group_galeri::orderBy('created_at','desc')->get();
        return view('front/galeri', compact('galeri', 'beranda'));
    }

    public function show($id)
    {
        $beranda = Beranda::all();
        $galeri = Group_galeri::findorfail($id);
        return view('front/fotos', compact('galeri', 'beranda'));
    }

}
