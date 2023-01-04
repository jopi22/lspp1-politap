<?php

namespace App\Http\Controllers;

use App\Models\Asesi;
use App\Models\Asesor;
use App\Models\Beranda;
use App\Models\Beranda_img1;
use App\Models\Beranda_img2;
use App\Models\Berita;
use App\Models\Data_register;
use App\Models\F_profil;
use App\Models\File;
use App\Models\Fileapl2;
use App\Models\Filelain;
use App\Models\Galeri_foto;
use App\Models\Group_galeri;
use App\Models\Info;
use App\Models\Info2;
use App\Models\Jurusan;
use App\Models\Kkni;
use App\Models\Prodi;
use App\Models\Skema;
use App\Models\Skkni;
use App\Models\Strorg;
use App\Models\Tuk;
use App\Models\Unikom;
use App\Models\Upload_file;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Illuminate\Support\Facades\Crypt;


class ClientController extends Controller
{

    public function clientutama()
    {
        $datatuk = Tuk::where('id', '>', 1)->count();
        $dataasesi = User::where('id', '>', 2)->count();
        $dataskema = Skema::all()->count();
        $dataprodi = Prodi::all()->count();
        $datasertifikat = Data_register::where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")->count();
        $dataasesor = Asesor::where('id', '>', 1)->count();
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
        $artikel = Berita::orderBy('created_at','desc')
            ->where('status', '<label class="badge badge-info">Posting</label>')->take(3)->get();
        $info = Info::all();
        $karyawan = Beranda_img2::all();
        return view('beranda', compact
        (
            'datatuk',
            'dataasesi',
            'dataprodi',
            'datasertifikat',
            'dataskema',
            'dataasesor',
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

    public function berita()
    {
        $berita = Berita::orderBy('created_at','desc')->paginate(4);
            // ->where('status', '<label class="badge badge-info">Posting</label>')->get();
        return view('client.berita', compact('berita'));
    }


    public function kontak()
    {
        return view('client.kontak');
    }


    public function berita_detail($id)
    {
        $decryptID = Crypt::decryptString($id);
        $pengumuman = Berita::where('kategori_id', '2')->take(6)->get();
        $artikel = Berita::where('kategori_id', '1')->take(6)->get();
        $berita = Berita::findorfail($decryptID);
        return view('client.berita_detail', compact('berita', 'artikel', 'pengumuman'));
    }


    public function galeri()
    {
        $galeri = Group_galeri::all();
        return view('client.galeri', compact('galeri'));
    }


    public function galeri_detail($id)
    {
        $decryptID = Crypt::decryptString($id);
        $galeri = Group_galeri::findorfail($decryptID);
        return view('client.galeri_detail', compact('galeri'));
    }


    public function download()
    {
        $file = File::all();
        return view('client/download', compact('file'));
    }


    public function asesor()
    {
        $asesor = Asesor::where('id', '>', 1)->get();
        return view('client/asesor', compact('asesor'));
    }


    public function asesor_detail($id)
    {
        $decryptID = Crypt::decryptString($id);
        $asesor = Asesor::findorfail($decryptID);
        return view('client/asesor_detail', compact('asesor'));
    }


    public function sertifikat()
    {
        $sertifikat = Data_register::where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")->get();
        return view('client/sertifikat', compact('sertifikat'));
    }


    public function skema()
    {
        $banner = Beranda::where('name', 'Skema')->get();
        $skema = Skema::all();
        return view('client/skema', compact('skema', 'banner'));
    }


    public function skema_detail($id)
    {
        $decryptID = Crypt::decryptString($id);
        $skema = Skema::findorfail($decryptID);
        return view('client/skema_detail', compact('skema'));
    }


    public function tuk()
    {
        $banner = Beranda::where('name', 'TUK')->get();
        $tuk = Tuk::where('id', '>', 1)->get();
        return view('client/tuk', compact('tuk', 'banner'));
    }


    public function tuk_detail($id)
    {
        $decryptID = Crypt::decryptString($id);
        $tuk = Tuk::findorfail($decryptID);
        return view('client/tuk_detail', compact('tuk'));
    }


    public function tentang()
    {
        $profil = F_profil::where('id', '2')->get();
        return view('client/tentang', compact('profil'));
    }


    public function tutorial()
    {
        $tutorial = Info::all();
        $tutorial2 = Info2::all();
        return view('client/tutorial', compact('tutorial', 'tutorial2'));
    }


    public function logo()
    {
        $logo = F_profil::where('id', '2')->get();
        return view('client/logo', compact('logo'));
    }


    public function pengelola()
    {
        $pengelola = Beranda_img2::all();
        return view('client/pengelola', compact('pengelola'));
    }


    public function pengelola_detail($id)
    {
        $decryptID = Crypt::decryptString($id);
        $pengelola = Beranda_img2::findorfail($decryptID);
        return view('client/pengelola_detail', compact('pengelola'));
    }


    public function struktur()
    {
        $struktur = Strorg::all();
        return view('client/struktur', compact('struktur'));
    }


    public function visi()
    {
        $visi = F_profil::where('id', '2')->get();
        return view('client/visi', compact('visi'));
    }


    public function skkni()
    {
        $file = Skkni::all();
        return view('client/skkni', compact('file'));
    }


    public function kkni()
    {
        $file = Kkni::all();
        return view('client/kkni', compact('file'));
    }


    public function fileapl2()
    {
        $file = Fileapl2::all();
        return view('client/fileapl2', compact('file'));
    }


    public function filelain()
    {
        $file = Filelain::all();
        return view('client/filelain', compact('file'));
    }


    public function loginadmin()
    {
        return view('auth/loginadmin');
    }


    public function reg()
    {
        $jurusan = Jurusan::all();
        return view('auth/register', compact('jurusan'));
    }



}
