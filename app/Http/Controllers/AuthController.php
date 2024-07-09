<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()->with('error', 'Invalid credentials');
        } 
        if (Auth::user()->email == 'admin@admin.com') {
            return redirect()->route('adminDashboard');
        }

        return redirect()->route('player.menu');
    }


     public function dashboard(Request $request)
    {
        $query = User::query();

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%')
                  ->orWhere('email', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($request->filled('sort')) {
            $sort = $request->sort;
            switch ($sort) {
                case 'name_asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('name', 'desc');
                    break;
                case 'email_asc':
                    $query->orderBy('email', 'asc');
                    break;
                case 'email_desc':
                    $query->orderBy('email', 'desc');
                    break;
                case 'score_asc':
                    $query->orderBy('score', 'asc');
                    break;
                case 'score_desc':
                    $query->orderBy('score', 'desc');
                    break;
            }
        }

        $users = $query->get();

        return view('adminDashboard', compact('users'));
    }

     // Menampilkan form edit
     public function editUser($id)
     {
         $user = User::find($id);
         return view('admin-edit-user', compact('user'));
     }
 
     // Menyimpan perubahan
     public function updateUser(Request $request, $id)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users,email,' . $id,
             'password' => 'nullable|string|min:8|confirmed',
         ]);
 
         $user = User::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         if ($request->filled('password')) {
             $user->password = Hash::make($request->password);
         }
         $user->save();
 
         return redirect()->route('adminDashboard')->with('success', 'User updated successfully');
     }

     public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('adminDashboard')->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('adminDashboard')->with('error', 'User not found');
        }
    }

    public function resetScore($id) {
        $user = User::findOrFail($id);
        $user->score = 0; // Set score to 0
        $user->save();
    
        return redirect()->route('adminDashboard')->with('success', 'Score has been reset successfully');
    }
    
}
