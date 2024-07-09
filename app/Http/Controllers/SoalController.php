<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $soal = Soal::all();
        return view('soal.index', compact('soal'));
    }

    public function show($id)
    {
        $soal = Soal::findOrFail($id);
        return view('soal.show', compact('soal'));
    }

    
    // Tambahkan method lain sesuai kebutuhan
}