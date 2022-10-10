<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Foodchef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $data = Food::all();
        $chefs = Foodchef::all();
        return view('home',compact("data","chefs"));
    }

    public function redirects(){
        $data = Food::all();
        $chefs = Foodchef::all();
        $usertype = Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.admin_home');
        }else{
            return view('home',compact('data','chefs'));
        }
    }


}
