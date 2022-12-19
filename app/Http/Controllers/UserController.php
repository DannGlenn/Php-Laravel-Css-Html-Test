<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $data = json_decode($request->getContent());
        $user = $data->username;
        $pwd = $data->password;
        $login_pwd = DB::table('users')->where('username', $user)->value('password');
        if ($login_pwd == $pwd && $login_pwd != '') {
            return ;
        }
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }
}