<?php

namespace App\Http\Controllers\Auth; //add Auth
use App\Http\Controllers\Controller; //import
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenthicateSessionController extends Controller
{
    public function create(){
        return view('auth.login');
        
    }
    public function store(){

        //dd(request()->all());
        //if(! Auth::attempt($this->only('email','password'),$this->boolean('remember'))){}
        $input = request()->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        //dd(filter_var($input['username'],FILTER_VALIDATE_EMAIL) ? 'email' : 'username');

        $key = filter_var(request('username'), FILTER_VALIDATE_EMAIL)
        ? 'email'
        : 'username';

    $credentials = request()->merge([$key => request('username')]);

    if (! Auth::attempt($credentials->only($key, 'password'))) {
        throw ValidationException::withMessages([
            'username' => trans('auth.failed'),
        ]);
    }

    request()->session()->regenerate();

    return redirect(RouteServiceProvider::HOME);
        
    }
}

