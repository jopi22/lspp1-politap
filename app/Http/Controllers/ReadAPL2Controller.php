<?php

namespace App\Http\Controllers;

use App\Models\Xnxx;
use Illuminate\Http\Request;

class ReadAPL2Controller extends Controller
{
    public function show($id)
    {
            $xnxx = Xnxx::findorfail($id);
            return view('admin/register/show2', compact('xnxx'));

    }

}
