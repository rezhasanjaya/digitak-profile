<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Perusahaan;

class ContactController extends Controller
{
    public function index()
    {
        return view('kontak.index', [
            'title' => 'Kontak Kami',
            'portofolio' => Portofolio::all(),
        ]);
    }
}
