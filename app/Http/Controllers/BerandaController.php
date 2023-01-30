<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Portofolio;
use Cake\View\Helper\UrlHelper;

class BerandaController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }
  public function index()
  {
    if (Portofolio::all() == null) {
    $data = DB::table('perusahaan')->latest('id_prshn')->first();
    return view('beranda.index', [
      'title' => 'Beranda',
      'portofolio' => Portofolio::latest('created_at')->first()->orderBy('created_at', 'desc')->paginate(6),
      'beranda' => $data,
    ]);
    }else{
    $data = DB::table('perusahaan')->latest('id_prshn')->first();
    return view('beranda.index', [
      'title' => 'Beranda',
      'portofolio' => Portofolio::all(),
      'beranda' => $data,
    ]);
    }
  }
}
