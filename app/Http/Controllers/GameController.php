<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function updateScore(Request $request)
    {
        $request->validate([
            'score' => 'required|integer',
        ]);

        $user = Auth::user();
        $user->score += $request->score;
        $user->save();

        return response()->json(['message' => 'Score updated successfully!']);
    }
}
