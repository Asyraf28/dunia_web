<?php

namespace App\Http\Controllers;

use App\Models\Narasi;

class level12ctr extends Controller
{
    public function index()
    {
        $narasi = Narasi::pluck('narasi', 'id')->toArray();
        return view('Level 1.Level1 2', compact('narasi'));
    }
}