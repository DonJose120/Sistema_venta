<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;

use Session;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller

{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Bienvenido');
        }
        return redirect("login")->withSeccess('Las credenciales son incorrectas');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data  = $request->all();
        $user = $this->create($data);

        Auth::login($user);
        return redirect("dashboard")->withSuccess('Te has registrado sastifactoriamente!');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view(view: 'dashboard');
        }
        return redirect(to: "login")->withSuccess('No tienes acceso a esta seccion');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect(to: 'login');
    }
}
