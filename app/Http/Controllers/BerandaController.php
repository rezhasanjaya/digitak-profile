<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Portofolio;
use App\Models\User;

class BerandaController extends Controller
{
  public function index()
  {
    $data = DB::table('perusahaan')->latest('id_prshn')->first();
    return view('beranda.index', [
      'title' => 'Beranda Management',
      'beranda' => $data,
      'portofolio' => Portofolio::latest('id_portofolio')->first()->paginate(6),
    ]);
  }
}
