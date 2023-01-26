<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\User;

class BerandaController extends Controller
{
    public function index()
    {
        $data = Perusahaan::join("users", function ($join) {
            $join->on("users.id", "=", "perusahaan.edited_by");
        })->orderBy('id_prshn', 'desc')->paginate(10);

        return view('beranda.index', [
            'title' => 'Ubah Data Perusahaan dan Histori',
            'users' => User::all(),
            'perusahaan' => Perusahaan::latest('id_prshn')->first()->orderBy('id_prshn', 'desc')->paginate(10),
            'data' => $data,
        ]);
    }
}
