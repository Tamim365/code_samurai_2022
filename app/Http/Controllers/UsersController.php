<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function pending(){
        return view("pending_users");
    }
    public function active(){
        return view("accepted_users");
    }
    public function accept(Request $req,$id){
    $file = DB::table('users')
            ->where('user_id',$id)
            ->update(
                ['status' => "accepted"]
            );
            return redirect()->back();
    }
    public function decline(Request $req,$id){
        $file = DB::table('users')
                ->where('user_id',$id)
                ->update(
                    ['status' => "declined"]
                );
                return redirect()->back();
        }
}
