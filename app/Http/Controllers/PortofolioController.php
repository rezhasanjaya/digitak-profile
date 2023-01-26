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
        $data = Portofolio::join("users", function ($join) {
            $join->on("users.id", "=", "portofolio.created_by")
                ->orderBy('portofolio_id', 'desc');
        })->get();
        return view('portofolio.show', compact('porto'), ["title" => "Portofolio's Detail"]);
    }

    public function create()
    {
        return view('portofolio.create', ["title" => "Tambah Portofolio"]);
    }

    public function store(PortoReq $request)
    {
        $imageName = time() . '.' . $request->image->extension();
        $uploadedImage = $request->image->move(public_path('images'), $imageName);
        $imagePath = 'images/' . $imageName;

        $params = $request->validated();

        if ($portofolio = Portofolio::create($params)) {
            $portofolio->image = $imagePath;
            $portofolio->save();

            return redirect(route('portofolio.index'))->with('success', 'Portofolio baru telah ditambahkan');
        }
    }

    public function edit(Portofolio $portofolio)
    {
        return view('portofolio.create', compact('portofolio'), ["title" => "Ubah Portofolio"]);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
