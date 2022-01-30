<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('components.users.index');
    }
    public function create()
    {
        return view('components.users.create');
    }
    public function edit()
    {
        return view('components.users.edit');
    }
}
