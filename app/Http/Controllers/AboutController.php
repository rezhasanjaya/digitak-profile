<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Perusahaan;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        $data = DB::table('perusahaan')->latest('id_prshn')->first();
        return view('about.index', [
            'title' => 'Kontak Kami',
            'beranda' => $data
        ]);
    }
}
