<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Portofolio;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = DB::table('perusahaan')->latest('id_prshn')->first();
        return view('portfolio.index', [
            'title' => 'Portofolio',
            'portofolio' => Portofolio::all(),
            'beranda' => $data,
        ]);
    }
}
