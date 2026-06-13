<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createUsers(Request $request){

    $validated = $request->validate([
        'firstname'   => 'required|string|min:3|max:100',

        'lastname'    => 'required|string|min:3|max:100',
        'email'       => 'required|email|max:255',
        'title'       => 'required|string|max:100',
        'password'    => 'required|string',
       'phone'       => 'required|digits_between:10,12',
      'month'       => 'required|string',
       'day'         => 'required|integer|between:1,31',
       'year'        => 'required|integer|min:1900|max:' . date('Y'),
       'location'    => 'nullable|string|max:255',
       'address'     => 'nullable|string|max:255',
    'addres_two'  => 'nullable|string|max:255',
    'state'       => 'nullable|string|max:100',
    'city'        => 'nullable|string|max:100',
    'pincode'     => 'nullable|digits:6',
    'company'     => 'nullable|string|max:255',
       ]);



          $user = User::create([
            'firstname'   => $validated['firstname'],
            'lastname'    => $validated['lastname'],
            'email'       => $validated['email'],
            'title'       => $validated['title'],
            'password'    => Hash::make($validated['password']),
            'phone'       => $validated['phone'],
            'month'       => $validated['month'],
            'day'         => $validated['day'],
            'year'        => $validated['year'],
            'location'    => $validated['location'] ?? null,
            'address'     => $validated['address'] ?? null,
            'addres_two'  => $validated['addres_two'] ?? null,
            'state'       => $validated['state'] ?? null,
            'city'        => $validated['city'] ?? null,
            'pincode'     => $validated['pincode'] ?? null,
            'company'     => $validated['company'] ?? null,
            'role'=>'user'
        ]);

        if($user){
            return back()->with('success','User Registration SuccessFul');
        }else{
            return back()->with('error','Something Went wrong');
        }

    }



    public function UserLogin(Request $request){
       $request->validate([
        'email'=>'required|email|exists:users',
        'password'=>'required'
      ]);

      if(Auth::guard('user')->attempt(['email'=>$request->email,'password'=>$request->password])){
       return redirect()->route('user.welcome');
      }else{
        return back()->with('error','Invalide Email And Password');
      }

    }

    public function UserLogout(){
        Auth::guard('user')->logout();
        return redirect('/');
    }

    public function UserDashboard(){
         return view('pages.accountoverview');
    }

    public function WelcomeUser(){
        return view('pages.accountconfirmed');
    }

    public function profile(){
       return view('pages.profile');
    }


   public function wishList(){
     return view('pages.wishlist');
   }

   public function oredrList(){
     return view('pages.orders');
   }

   public function addressBook(){
    return view('pages.addressbook');
    }



}
