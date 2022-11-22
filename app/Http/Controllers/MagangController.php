<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MagangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('magang.index', [
            'title' => 'Magang Management',
            'users' => User::paginate(10)

        ]);
    }

    public function create()
    {
    }

    public function Skill()
    {
    }

    public function store()
    {
    }

    public function show()
    {
    }
}
