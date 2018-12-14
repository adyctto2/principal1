<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __contruct()
    {
      $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
      return view('auth.login');
    }
    public function login()
    {
    $credenciales =  $this->validate(request(), [
         'email' => 'email|required|string',
         'password' => 'required|string'
       ]);
       if(Auth::attempt($credenciales))
       {
         return redirect()->route('dashboard');
       }
        return back()
        ->withErrors(['email'=> trans('auth.failed')])
        ->withInput(request(['email']));


    }
    public function logout()
    {
      Auth::logout();
      return redirect('/');
    }
}
