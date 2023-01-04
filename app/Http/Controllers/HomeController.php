<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Unikom;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }


    
    public function index3()
    {
        return view('asesion');
    }

    public function list_skema()
    {
        $skema = Skema::all();
        $data = Skema::all();
        return view('skema2', compact('data', 'skema'));
    }

    public function skema1()
    {
        $unikom = Unikom::all();
        $data = Skema::all();
        $skema = Skema::all();
        return view('front/skema', compact('skema', 'data', 'unikom'));
    }

    public function list(Skema $skema)
    {
        $unikom = Unikom::all();
        $data = Skema::all();
        $skema = Skema::all();
        return view('front/list', compact('skema', 'data', 'unikom'));
    }
}
