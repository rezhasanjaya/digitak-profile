<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PortofolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::count();

        $widget = [
            'users' => $users,
            //...
        ];

        return view('portofolio/index', compact('widget'));
    }
}
