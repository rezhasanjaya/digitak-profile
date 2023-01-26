<?php

namespace App\Http\Controllers;

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
        return view('portofolio.show', compact('porto'), ["title" => "Portofolio's Detail"]);
    }

    public function create()
    {
        return view('portofolio.create', ["title" => "Add Portofolio"]);
    }

    public function store()
    {
    }

    public function edit(Portofolio $portofolio)
    {
        return view('portofolio.create', compact('porto'), ["title" => "Add Portofolio"]);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
