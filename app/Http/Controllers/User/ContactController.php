<?php

namespace App\Http\Controllers\User;

use App\Events\QueryEmailEvent;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function customerQuery(Request $request){
        $request->validate([
            'title'=>'required',
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'query_type'=>'required|string',
            'message'=>'required|string'
        ]);

          $data = Contact::create($request->all());
          $send = QueryEmailEvent::dispatch($data);
         if($send){
            return back()->with('success','Thanks for you connect with me !');
         }else{
            return back()->with('error','Something went wrong');
         }


    }

    public function queryList(){
        $users = Contact::paginate(10);
        return view('admin.listings.contact',compact('users'));
    }
}
