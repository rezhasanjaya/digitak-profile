<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\User;
use App\Models\Portofolions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::count();
        $portofolio = Portofolio::count();

        $widget = [
            'users' => $users,
            'portofolio' => $portofolio,
        ];

        return view('home', [
            'title' => 'Beranda Admin',
        ], compact('widget'));
    }
}
