<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\User;

class BerandaController extends Controller
{
    public function index()
    {
      return view('beranda.index', [
          'title' => 'Beranda Management',
          'beranda' => Perusahaan::paginate(10)
      ]);
    }
}
