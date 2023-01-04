<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Beranda;
use App\Models\Beranda_img1;
use App\Models\Beranda_img2;
use App\Models\Berita;
use App\Models\Data_register;
use App\Models\F_profil;
use App\Models\File;
use App\Models\Galeri_foto;
use App\Models\Group_galeri;
use App\Models\Info;
use App\Models\Skema;
use App\Models\Strorg;
use App\Models\Tuk;
use App\Models\Unikom;
use App\Models\Upload_file;
use Illuminate\Http\Request;

class UiController extends Controller
{

    public function index()
    {
        $skema = Beranda::where('name', 'Skema')->get();
        $tuk = Beranda::where('name', 'TUK')->get();
        return view('admin/beranda/index', compact('skema', 'tuk'));
    }


    public function pdf()
    {
        return view('pdf');
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $skema = Beranda::findorfail($id);
        $image = $request->image;
        $new_image = time().$image->getClientOriginalName();
        $image->move('uploads/info/', $new_image);
        $info_data = [
            'image' => 'uploads/info/'.$new_image,
        ];

        Beranda::whereId($id)->update($info_data);
        return redirect()->back()->with('success','Data Anda Berhasil di Ubah');
    }


    public function ui_beranda()
    {
        $image2 = Beranda_img2::orderBy('created_at','desc')->take(4)->get();
        $carousel = Beranda_img1::all();
        $beranda = Beranda::all();
        $profil = F_profil::where('id', '1')->get();
        $strorg = Strorg::all();
        $skema = Skema::all();
        $unikom = Unikom::all();
        $tuk = Tuk::where('id', '>', 1)->get();
        $asesor = Asesor::where('id', '>', 1)->get();
        $sertifikat = Data_register::where('status', 'Sertifikasi Selesai')->get();
        $galeri = Galeri_foto::orderBy('created_at','desc')->get();
        $artikel = Berita::orderBy('created_at','desc')->take(3)->get();
        $info = Info::all();
        $karyawan = Beranda_img2::all();
        return view('beranda2', compact
        (
            'beranda',
            'artikel',
            'galeri',
            'asesor',
            'sertifikat',
            'tuk',
            'skema',
            'unikom',
            'strorg',
            'profil',
            'carousel',
            'image2',
            'info',
            'karyawan',
        ));
    }


    public function ui_beranda2()
    {
        return view('beranda');
    }


    public function profil()
    {
        $strorg = Strorg::all();
        $beranda = Beranda::all();
        $profil = F_profil::where('id', '2')->get();
        return view('front/profil', compact('profil', 'strorg', 'beranda'));
    }


    public function berita_list()
    {
        $file = File::all();
        $info = Info::all();
        $carousel = Beranda_img1::all();
        $beranda = Beranda::all();
        $berita = Berita::where('kategori_id', '1')->get();
        $pengumuman = Berita::where('kategori_id', '2')->get();
        return view('front/berita', compact('berita', 'file', 'carousel', 'info', 'beranda', 'pengumuman'));
    }


    public function pengumuman_list()
    {
        $carousel = Beranda_img1::all();
        $beranda = Beranda::all();
        $pengumuman = Berita::where('kategori_id', '2')->get();
        $berita = Berita::where('kategori_id', '1')->get();
        return view('front/pengumuman', compact('berita','carousel', 'beranda', 'pengumuman'));
    }


    public function uiskema_show($id)
    {
        $carousel = Beranda_img1::all();
        $skema = Skema::findorfail($id);
        $beranda = Beranda::all();
        return view('front/skema', compact('skema','carousel', 'beranda'));
    }

    public function berita_tampil($id)
    {
        $carousel = Beranda_img1::all();
        $pengumuman = Berita::where('kategori_id', '2')->take(6)->get();
        $artikel = Berita::where('kategori_id', '1')->take(6)->get();
        $berita = Berita::findorfail($id);
        $beranda = Beranda::all();
        return view('front/show_berita', compact('berita','carousel', 'artikel', 'beranda', 'pengumuman'));
    }


    public function galeri_front()
    {
        $carousel = Beranda_img1::all();
        $beranda = Beranda::all();
        $galeri = Group_galeri::all();
        return view('front/galeri', compact('galeri','carousel', 'beranda'));
    }


    public function galeri_fotos($id)
    {
        $carousel = Beranda_img1::all();
        $galeri = galeri_foto::findorfail($id);
        return view('front/fotos', compact('galeri','carousel'));
    }

    public function tampil_skema()
    {
        $tuk = Tuk::where('id', '>', 1)->get();
        $asesor = Asesor::where('id', '>', 1)->get();
        $sertifikat = Data_register::where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")->get();
        $skema = Skema::all();
        $info = Info::all();
        $carousel = Beranda_img1::all();
        $beranda = Beranda::all();
        $galeri = Group_galeri::all();
        return view('front/tampil_skema', compact('galeri', 'info', 'tuk', 'asesor', 'sertifikat', 'skema','carousel', 'beranda'));
    }


    public function file()
    {
        $beranda = Beranda::all();
        $file = File::all();
        return view('front/file', compact('file', 'beranda'));
    }


    public function notfound(){
        return view('layout.404');
    }
}
