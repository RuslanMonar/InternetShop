<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request , [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $user = User::add($request->all());
        $user->generatePassword($request->get('password'));
        return response()->json(['status' => 'User Registered succsesfuly'],200);
    }
    public function login(Request $request)
    {
        $this->validate($request , [
            'email' => 'required',
            'password' => 'required',
        ]);
        $resault = Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        return $resault ?  response()->json(['status' => 'Login succes','name' => Auth::user()->name],200):  response()->json(['status' => 'Invalid email or password'],401);
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return response()->json(['status' => 'Logedout'],200);
    }

}
