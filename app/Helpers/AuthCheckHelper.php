<?php

use Illuminate\Support\Facades\Auth;


if (! function_exists('AdminLogin')) {
    function AdminLogin()
    {
        if (Auth::guard('admin')->check()) {
            $users = Auth::guard('admin')->user();

            return $users;
        } else {
            return redirect()->route('admin.admin');
        }
    }
}

if (! function_exists('UserLogin')) {
    function UserLogin()
    {
        if (Auth::guard('user')->check()) {
            $users = Auth::guard('user')->user();

            return $users;
        } else {
            return redirect('/');
        }
    }
}



