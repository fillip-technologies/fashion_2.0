<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.login.signin');
    }

    public function userList(){
        $users = User::where('role','!=','admin')->get();
        return view('admin.listings.userlist',compact('users'));
    }

public function deleteUser($id)
{
    $user = User::findOrFail($id);

    if ($user->delete()) {
        return back()->with('success', 'User Deleted Successfully');
    }
    return back()->with('error', 'Something went wrong');
}

    public function admin_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {

            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/log');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
