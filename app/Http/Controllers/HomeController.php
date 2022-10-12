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
            $user_id = Auth::id();
            $count = Cart::where('user_id',$user_id)->count();

            return view('home',compact('data','chefs','count'));
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

    public function showcart(Request $request,$id){
        $count = Cart::where('user_id',$id)->count();
        $cart_data = Cart::select('*')->where('user_id','=',$id)->get();
        $data = Cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
        return view('showcart',compact('count','data','cart_data'));
    }

    public function remove($id){
        $data = Cart::find($id);
        $data->delete();

        return redirect()->back();
    }


}
