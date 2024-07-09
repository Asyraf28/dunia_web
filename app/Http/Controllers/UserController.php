<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('updateUser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->score = $request->score;
        $user->save();

        return redirect()->route('adminDashboard')->with('success', 'User updated successfully');
    }
}
