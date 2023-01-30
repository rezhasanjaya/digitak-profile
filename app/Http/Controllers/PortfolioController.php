<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Portofolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = DB::table('perusahaan')->latest('id_prshn')->first();
        return view('portfolio.index', [
            'title' => 'Portofolio',
            'portofolio' => Portofolio::latest('created_at')->first()->orderBy('created_at', 'desc')->paginate(9),
            'beranda' => $data,
        ]);
    }

    public function show(Portofolio $portfolio)
    {
        $data = DB::table('perusahaan')->latest('id_prshn')->first();
        return view('Portfolio.show', compact('portfolio'), ["title" => "Detail Portofolio", 'beranda' => $data,]);
    }
}
