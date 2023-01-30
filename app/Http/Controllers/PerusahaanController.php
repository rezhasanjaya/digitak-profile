<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\User;

class PerusahaanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Perusahaan::join("users", function ($join) {
            $join->on("users.id", "=", "perusahaan.edited_by");
        })->orderBy('perusahaan.id_prshn', 'desc')->paginate(10);

        return view('perusahaan.index', [
            'title' => 'Ubah Data Perusahaan dan Histori',
            'users' => User::all(),
            'perusahaan' => Perusahaan::latest('perusahaan.id_prshn')->first()->orderBy('perusahaan.id_prshn', 'desc')->paginate(10),
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('perusahaan.create', ["title" => "Edit Data Perusahaan"]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_workshop' => 'required',
            'tahun_berdiri' => 'required',
            'alamat' => 'required',
            'email_workshop' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $perusahaan = new Perusahaan;
        $perusahaan->nama_workshop = $request->nama_workshop;
        $perusahaan->tahun_berdiri = $request->tahun_berdiri;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->email_workshop = $request->email_workshop;
        $perusahaan->phone = $request->phone;
        $perusahaan->whatsapp = $request->whatsapp;
        $perusahaan->facebook = $request->facebook;
        $perusahaan->instagram = $request->instagram;
        $perusahaan->twitter = $request->twitter;
        $perusahaan->latitude = $request->latitude;
        $perusahaan->longitude = $request->longitude;
        $perusahaan->edited_by = $request->edited_by;
        $perusahaan->logo = 'digitak.png';
        $perusahaan->waktu_update = now();
        $perusahaan->save();

        return redirect()->route('perusahaan.index')
            ->with('Success', 'Data berhasil ditambahkan.');
    }


    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'), ["title" => "Edit Data Perusahaan"]);
    }

    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
            'nama_workshop' => 'required',
            'tahun_berdiri' => 'required',
            'alamat' => 'required',
            'email_workshop' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'image' => 'required',
            'edited_by' => 'required',

        ]);

        $perusahaan = new Perusahaan;
        $perusahaan->id_prshn = $request->id_prshn + 1;
        $perusahaan->nama_workshop = $request->nama_workshop;
        $perusahaan->tahun_berdiri = $request->tahun_berdiri;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->email_workshop = $request->email_workshop;
        $perusahaan->phone = $request->phone;
        $perusahaan->whatsapp = $request->whatsapp;
        $perusahaan->facebook = $request->facebook;
        $perusahaan->instagram = $request->instagram;
        $perusahaan->twitter = $request->twitter;
        $perusahaan->latitude = $request->latitude;
        $perusahaan->longitude = $request->longitude;
        $perusahaan->edited_by = $request->edited_by;
        $perusahaan->image = 'digitak.png';
        $perusahaan->waktu_update = now();
        $perusahaan->save();

        $path = public_path()."/images/".$perusahaan->image;
        unlink($path);
        $perusahaan->update($request->all());
        return redirect()->route('perusahaan.index')
            ->with('sukses', 'Data berhasil diubah');
    }
}
