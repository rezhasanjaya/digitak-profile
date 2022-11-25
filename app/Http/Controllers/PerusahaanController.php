<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    public function index()
    {
        return view('perusahaan.index', [
            'title' => 'Tentang Perusahaan',
            'perusahaan' => Perusahaan::paginate(10)

        ]);
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function show()
    {
    }

    public function update()
    {
    }
}
