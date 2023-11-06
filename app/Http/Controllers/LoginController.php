<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function dashLogin()
    {
        return view('dashboard.dashlog.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $admin = DB::table('admins')
            ->where('email', $credentials['email'])
            ->first();

        if ($admin) {

            if (Hash::check($credentials['password'], $admin->password)) {
                // Password matches, log in the user
                session()->put('loginname', $admin->name);
                session()->put('loginimage', $admin->image);

                // Retrieve the admin's name from the session (optional)
                // $name = session('loginname');

                return redirect('/dashboard')->with('success', 'Login Successfully');
            } else {
                return back()->with('error', 'Email or Password is invalid');
            }
        } else {
            return back()->with('error', 'Email or Password is invalid');
        }
    }

    public function adminLogout()
    {
        session()->forget('loginname');
        session()->forget('loginimage');

        return redirect()->route('adminLogin');
    }
}
