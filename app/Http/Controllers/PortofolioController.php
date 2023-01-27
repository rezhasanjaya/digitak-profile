<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortoReq;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('portofolio.index', [
            'title' => 'Portofolio Management',
            'portofolio' => Portofolio::paginate(10)
        ]);
    }

    public function show(Portofolio $portofolio)
    {
        return view('portofolio.show', compact('portofolio'), ["title" => "Portofolio's Detail"]);
    }

    public function create()
    {
        return view('portofolio.create', ["title" => "Tambah Portofolio"]);
    }

    public function store(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'nama_aplikasi' => 'required',
            'tahun_pembuatan' => 'required',
            'created_by' => 'required',
            'kategori' => 'required',
            'klien' => 'required',
            'link_demo' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        Portofolio::create($input);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil ditambah');
    }

    public function edit(Portofolio $portofolio)
    {
        return view('portofolio.edit', compact('portofolio'), ["title" => "Ubah Portofolio"]);
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'nama_aplikasi' => 'required',
            'tahun_pembuatan' => 'required',
            'created_by' => 'required',
            'kategori' => 'required',
            'klien' => 'required',
            'link_demo' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        } else {
            unset($input['image']);
        }

        $portofolio->update($input);
        return redirect()->route('portofolio.index')->with('success', 'Data telah diupdated');
    }

    public function destroy(Portofolio $portofolio)
    {
        $portofolio->delete();
        return redirect()->route('portofolio.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
