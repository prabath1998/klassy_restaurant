<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

    public function addtocart(Request $request,$id){
        if(Auth::id()){

            $user_id = Auth::id();
            $food_id = $id;

            $quantity = $request->quantity;
            $cart = new Cart();

            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;

            $cart->save();
            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }


}
