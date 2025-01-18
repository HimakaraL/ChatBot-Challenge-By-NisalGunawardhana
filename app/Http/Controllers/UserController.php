<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        try {
            $user->save();
            return redirect()->route('login')->with('success', 'User created!');;
        } catch (\Exception $e) {
            return redirect('home')->with('error', 'Creation failed!');;
        }
    }

    public function loginUser(Request $request)
    {
        try {
            $user = User::where('email', $request->email)->first();
    
            if ($user && Hash::check($request->password, $user->password)) {
                session(['user' => $user]);
                return redirect()->route('home')->with('success', 'Login successful!');;
            } else {
                dd('Password unmatched!');
                return redirect()->route('signup')->with('error', 'Password unmatched!');;
            }
        } catch (\Exception $e) {
            dd($request->email);
            return redirect()->route('signup')->with('error', 'No user!');;
        }
    }

    public function logoutUser()
    {
        session()->forget('user');
        return redirect()->route('home')->with('success', 'Logout successful!');;
    }
}
