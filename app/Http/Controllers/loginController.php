<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OurClient;
use App\Models\Team;
use App\Models\ourbrands;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function user_login(){
        return view("backend.login");
    }

    public function user_loging(Request $req){

        $rembember = false;

        if ($req->chbox) {
           $rembember = true;
        }

        if ($req->isMethod("post")) {

            if(Auth::attempt(['email' => $req->email, 'password' => $req->password], $rembember)){
                return redirect("/admin");
            }else{
                return redirect()->back()->with("login_error","Email or password not match!");
            }

        }
    }


    public function admin_user(){

        //$clint_count = $brands_count = $teams_count = null;

        $clint_count   = OurClient::count();
        $brands_count  = ourbrands::count();
        $teams_count   = Team::count();

        return view("backend.index", compact("clint_count", "brands_count", "teams_count"));
    }


    public function logout_user(){
        Auth::logout();
        return redirect("/login");
    }



}
