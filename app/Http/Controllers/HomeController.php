<?php

namespace App\Http\Controllers;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

use App\Models\Reservations;

use App\Models\Chefs;



class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='1')
            {
                $chefs= chefs::all();
                return view('admin.home');
            }
         

        }
        
    }
    public function index()
    {
        $chef = chefs::all();
        return view('user.home',compact('chef'));
    }
  
    public function reservations(Request $request){
        $data = new reservations;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->tabletype=$request->tabletype;
        $data->message=$request->message;
        $data->date=$request->date;
        $data->time=$request->time;
  
        Alert::success('Reservations Successful','Reservations Successful!');
        $data->save();
        return redirect()->back();
    }
    public function book_chef()
    {
        // $chef = chefs::all();
        return view('user.book_chef');
    }
}
