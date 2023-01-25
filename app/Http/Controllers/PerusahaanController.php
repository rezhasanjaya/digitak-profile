<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use DB;

class PerusahaanController extends Controller
{
    public function index()
    {
        return view('perusahaan.index', [
            'title' => 'Riwayat Perusahaan',
            'perusahaan' => Perusahaan::latest('id')->first()->orderBy('id', 'desc')->paginate(10)
        ]);
    }

    public function create()
    {
        return view('perusahaan.create', ["title" => "Edit Data Perusahaan"]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pt' => 'required',
            'nama_workshop' => 'required',
            'tahun_berdiri' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
        ]);
        $perusahaan = new Perusahaan;
        $perusahaan->nama_pt = $request->nama_pt;
        $perusahaan->nama_workshop = $request->nama_workshop;
        $perusahaan->tahun_berdiri = $request->tahun_berdiri;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->email = $request->email;
        $perusahaan->phone = $request->phone;
        $perusahaan->whatsapp = $request->whatsapp;
        $perusahaan->facebook = $request->facebook;
        $perusahaan->instagram = $request->instagram;
        $perusahaan->twitter = $request->twitter;
        $perusahaan->longitude = $request->longitude;
        $perusahaan->latitude = $request->latitude;
        $perusahaan->logo = "digitak.com";
        $perusahaan->created_by = "test";
        $perusahaan->edited_by = "mang iih";
        $perusahaan->save();

        return redirect()->route('perusahaan.index')
            ->with('success', 'Data Has Been Updated.');
    }

    public function show()
    {
    }

    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'), ["title" => "Edit Data Perusahaan"]);
    }

    public function update()
    {
    }
}
