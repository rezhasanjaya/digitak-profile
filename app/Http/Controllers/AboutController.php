<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Perusahaan;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index', [
            'title' => 'Kontak Kami',
            'portofolio' => Portofolio::all(),
        ]);
    }
}
