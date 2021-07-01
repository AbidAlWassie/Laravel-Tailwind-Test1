<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {

    // dd($request->only('email', 'password'));

    $this->validate($request, [
      'name' => 'required|max:255',
      'username' => 'required|max:255',
      'email' => 'required|email|max:255',
      'password' => 'required|confirmed',
    ]);

    User::create([
      'name' => $request->name,
      'username' => $request->username,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    Auth::attempt($request->only('email', 'password'));

    return redirect()->route('dashboard');
  }
}
