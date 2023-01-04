<?php

namespace App\Http\Controllers;

use App\Models\Galeri_foto;
use App\Models\Group_galeri;
use Illuminate\Http\Request;

class DeleteGaleriFotoController extends Controller
{
    public function destroy($id)
    {
        $galeri = Galeri_foto::findorfail($id);
        $galeri->delete();
        return back()->with('success', 'Galeri Berhasil dihapus');
    }
}
