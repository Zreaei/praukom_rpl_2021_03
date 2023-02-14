<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('login.register', $data);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $id_user = DB::select('SELECT newiduser() AS id_user');
        $array = Arr::pluck($id_user, 'id_user');
        $kode_baru = Arr::get($array, '0');
        $level_siswa = 'LVL003';
        $user = new User([
            'id_user' => $kode_baru,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $level_siswa,
        ]);
        $user->save();
        return redirect()->route('login')->with('success','Registration Success, Please Login!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('login.login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
        {
            // $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level === 'LVL001') { 
                return redirect()->intended('/admin');
            } else if ($user->level === 'LVL002') {
                return redirect()->intended('/operator');
            } else if ($user->level === 'LVL003') {
                return redirect()->intended('/siswa/home');
            } else if ($user->level === 'LVL004') {
                return redirect()->intended('/pbsekolah');
            } else if ($user->level === 'LVL005') {
                return redirect()->intended('/pbsekolah');
            } else if ($user->level === 'LVL006') {
                return redirect()->intended('/pbsekolah');
            } else if ($user->level === 'LVL007') {
                return redirect()->intended('/pbsekolah');
            } else if ($user->level === 'LVL008') {
                return redirect()->intended('/pbsekolah');
            } else if ($user->level === 'LVL009') {
                return redirect()->intended('/pbsekolah');
            }
            // return redirect()->intended('/');
        }
        return back()->withErrors(['password' => 'Wrong Username or Password!']);
    }
}
