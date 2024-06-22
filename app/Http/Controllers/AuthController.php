<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\UserMjm;


class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect() -> route('dashboard');
        }
        return view('login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = UserMjm::where('email', $request->email)->first();


        if ($user && Hash::check($request->password, $user->password)) {
            // echo $user;
            // echo Hash::check($request->password, $user->password);
            // exit;
    
            Auth::login($user);
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        // dd($request);
    }

    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register');
    }

    // Handle the registration request
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:user_mjms,email',
            'password' => 'required|string|min:8',
        ]);

     
        $user = new UserMjm();
        $user->username = $validatedData['name'];
        $user -> email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);

        $user->save();

        // Auth::login($user);

        return redirect()->route('login');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('login');
        }

        return redirect()->route('login');
    }
}
