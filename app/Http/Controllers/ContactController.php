<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Perusahaan;

class ContactController extends Controller
{
    public function index()
    {
        $data = DB::table('perusahaan')->latest('id_prshn')->first();
        return view('kontak.index', [
            'title' => 'Kontak Kami',
            'portofolio' => Portofolio::all(),
            'beranda' => $data,
        ]);
    }
}
