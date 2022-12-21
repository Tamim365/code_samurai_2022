<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function index(){
        return ('index');
    }
    function register(Request $request){
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
                if($request->type == "Application Users") $user->status = "accepted";

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
    function login(Request $request){
        if ($request->isMethod('post')){
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|min:6'
            ]);
            $user = User::where('email','=', $request->email)->first();
            if($user && Hash::check($request->password, $user->password))
            {
                $request->session()->put('LoggedUser', [$user]);
                return redirect('/');
            }
        }
        return redirect('/');
    }
    function logOut(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
        else return redirect('/auth/login');
    }
}
