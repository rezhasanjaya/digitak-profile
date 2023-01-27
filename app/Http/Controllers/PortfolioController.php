<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index', [
            'title' => 'Portofolio',
            'portofolio' => Portofolio::all(),
        ]);
    }
}
