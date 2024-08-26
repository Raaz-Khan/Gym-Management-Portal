<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('Login');
    }

    public function login(Request $req){
        $member = Admin::where('username', $req->username)->first();
        if (!is_null($member)) {
            
            // $p = Hash::make($req->password);
            // print_r($p);
            if(Hash::check($req->get('password'),$member->password)){
                //session(['name' => $member->username]);
                // $n=$member->username;
                // return view('Dashboard',['name'=>$n]);
                $req->session()->put('name',$member->username);
                $req->session()->put('islogin',true);
                return redirect('/dashboard');
            }
            else{
                $alert= "Password is Incorrect";
                return view('Login',compact('alert'));
            }
        }
        else{
            
           $alert = "User does not exist";
            
            return view('Login',compact('alert'));
        }
    }

    public function logout(){

        session()->flush();

        return redirect("/login");

    }
}
