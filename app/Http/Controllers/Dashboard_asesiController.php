<?php

namespace App\Http\Controllers;

use App\Models\Data_register;
use App\Models\Info;
use App\Models\Info2;
use App\Models\Jurusan;
use App\Models\Skema;
use App\Models\Upload_file;
use App\Models\Xnxx;
use Illuminate\Http\Request;

class Dashboard_asesiController extends Controller
{

    public function index()
    {
        $xnxx = Xnxx::all();
        $info = Info::all();
        $info2 = Info2::all();
        $skema = Skema::where('status_id', '1')->get();
        $jurusan = Jurusan::all();
        $datasertifikat = Data_register::where('nim', auth()->user()->email)
            ->where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")->count();
        $upload = Upload_file::where('user_id', auth()->user()->id)->get();
        $datareg = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(163, 129, 8)'>Lengkapi Data Anda</h4>")
            ->get();
        $datareg1 = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: green'>Menunggu Validasi...</h4>")
            ->get();
        $datareg2 = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(34, 123, 138)'>Pendaftaran Divalidasi</h4>")
            ->get();
        $datareg3 = Data_register::where('user_id', auth()->user()->id)
            ->where('status', "<h4 style='color: rgb(141, 7, 7)'>Pendaftaran Ditolak</h4>")
            ->get();
        $datareg4 = Data_register::where('nim', auth()->user()->email)
            ->where('status', "<h4 style='color: rgb(0, 0, 0)'>Sertifikasi Selesai</h4>")->get();
        $datareg5 = Data_register::where('nim', auth()->user()->email)
            ->where('status', "<h4 style='color: #000'>Pendaftaran Sementara Diblokir</h4>")->get();
        return view('asesion', compact
        (
            'datareg',
            'datareg1',
            'datareg2',
            'datareg3',
            'datareg4',
            'datareg5',
            'datasertifikat',
            'xnxx',
            'skema',
            'info',
            'info2',
            'jurusan',
            'upload',
        ));
    }


}
