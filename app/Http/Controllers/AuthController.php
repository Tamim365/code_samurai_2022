<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function save_user(Request $request){
        if ($request->isMethod('post')) {
            // dd($request);
            $request->validate([
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password' => 'required|min:6',
                'type'=> 'required',
                'confirm_password' => 'required|same:password|min:6',
            ]);
            try {
                $user = new user;
                $user->Name = (string) $request->name;
                $user->Email = (string) $request->email;
                $user->Password = (string) Hash::make($request->password);
                $user->type = (string) $request->type;
                // $member->Student_ID = (string)$request->Student_ID;
                // if($request->filled('picture')){
                //     $user->picture = (string)$request->picture;
                // }
                $save = $user->save();
                // dd($save);
                if($save){
                    return back()->with('success','Registration Successful');
                }else{
                    return back()->with('fail','Something went wrong, try again later');
                }
            }
            catch(exception $e) {
                DB::rollback();
                return;
            }
        }
        else{
            return back();
        }
    }
}
