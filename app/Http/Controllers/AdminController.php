<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //get all the users
    public function user()
    {
        $data = User::all();
        return view('admin.users', compact("data"));
    }

    //delete a user
    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return Redirect()->back();
    }


    //show food menu
    public function foodmenu()
    {
        $data = Food::all();
        return view('admin.food_menu',compact('data'));
    }

    //save food menu
    public function upload(Request $request)
    {
        $data = new Food();

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

     //delete a food menu
     public function deletemenu($id)
     {
         $data = Food::find($id);
         $data->delete();
         return Redirect()->back();
     }

     //edit food item view
     public function editmenu($id){
        $data = Food::find($id);
        return view('admin.edit_menu',compact('data'));
     }

     //update food menu
     public function updatefood($id,Request $request){
        $data = Food::find($id);

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
     }

     //make reservation
     public function reservation(Request $request)
     {
         $data = new Reservation();


         $data->name = $request->name;
         $data->email = $request->email;
         $data->phone = $request->phone;
         $data->guest = $request->guest;
         $data->date = $request->date;
         $data->time = $request->time;
         $data->message = $request->message;

         $data->save();

         return redirect()->back();
     }

     //view all reservations
     public function viewreservations(){
        $data = Reservation::all();
        return view('admin.admin_reservation',compact('data'));
     }

     public function viewchef(){
        $data = Foodchef::all();
        return view('admin.admin_chef',compact('data'));
     }

     //save chef to db
     public function uploadchef(Request $request){
        $data = new Foodchef();

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);

        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();
        return redirect()->back();
     }

     //show update chef form
     public function updatechef($id,Request $request){
        $data = Foodchef::find($id);

        return view('admin.update_chef',compact('data'));
     }


     //update chef
     public function updatefoodchef(Request $request,$id){

        $data = Foodchef::find($id);
        $image = $request->image;
        if($image){

        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);
        $data->image = $imagename;
        }

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();

     }

     public function deletechef($id)
     {
         $data = Foodchef::find($id);
         $data->delete();
         return Redirect()->back();
     }
}
