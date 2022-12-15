<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorizationValidation;
use App\Http\Requests\RegistrationValidation;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registrationView()
    {
        return view('users.registration');
    }

    public function registrationPost(RegistrationValidation $request)
    {
        $requests = $request->validated();
        $requests['password'] = Hash::make($requests['password']);
        User::create($requests);
        return redirect()->route('auth')->with(['successReg' => 'Операция регистрации прошла успешно']);
    }

    public function authorizationView()
    {
        return view('users.authorization');
    }

    public function authorizationPost(AuthorizationValidation $request)
    {
        if(Auth::attempt($request->validated())){
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin') return redirect()->route('/');
            return redirect()->route('acc');
        }
        return back()->with(['errorAuth' => 'Неверный логин или пароль']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth');
    }

    public function accountView()
    {
        return view('users.account');
    }

    public function adminView()
    {
        return view('admin.admin');
    }
}
