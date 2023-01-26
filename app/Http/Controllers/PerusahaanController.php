<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\User;
use App\Controllers\Carbon;

class PerusahaanController extends Controller
{
    public function index()
    {
        $data = Perusahaan::join("users", function ($join) {
            $join->on("users.id", "=", "perusahaan.edited_by")->orderBy('users.id', 'ASC');
        })->get();

        return view('perusahaan.index', [
            'title' => 'Company Changing History',
            'users' => User::all(),
            'perusahaan' => Perusahaan::paginate(10),
            'data' => $data
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
            'email' => 'required',
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
        $perusahaan->email = $request->email;
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
            ->with('Success', 'Data Has Been Updated.');
    }

    public function show()
    {
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
            'email' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'logo' => 'required',
            'edited_by' => 'required',

        ]);

        // $perusahaan = new Perusahaan;
        // $perusahaan->id = $request->id;
        // $perusahaan->nama_workshop = $request->nama_workshop;
        // $perusahaan->tahun_berdiri = $request->tahun_berdiri;
        // $perusahaan->alamat = $request->alamat;
        // $perusahaan->email = $request->email;
        // $perusahaan->phone = $request->phone;
        // $perusahaan->whatsapp = $request->whatsapp;
        // $perusahaan->facebook = $request->facebook;
        // $perusahaan->instagram = $request->instagram;
        // $perusahaan->twitter = $request->twitter;
        // $perusahaan->latitude = $request->latitude;
        // $perusahaan->longitude = $request->longitude;
        // $perusahaan->edited_by = 'test';
        // $perusahaan->logo = 'test';
        // $perusahaan->update();

        $perusahaan = new Perusahaan;
        $perusahaan->id = $request->id + 1;
        $perusahaan->nama_workshop = $request->nama_workshop;
        $perusahaan->tahun_berdiri = $request->tahun_berdiri;
        $perusahaan->alamat = $request->alamat;
        $perusahaan->email = $request->email;
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

        $perusahaan->update($request->all());
        return redirect()->route('perusahaan.index')
            ->with('sukses', 'Data Berhasil Diupdate');

        // return redirect()->route('perusahaan.index')
        //     ->with('Success', 'Data Has Been Updated.');
    }
}
