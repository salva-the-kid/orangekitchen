<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;


use App\Models\Reservations;

use App\Models\Chefs;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendEmailNotification;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class AdminController extends Controller
{
    public function make_reservations()
    {
        $data= reservations::all();
        return view('admin.make_reservations',compact('data'));
    }
    public function deletereservations($id)
    {
        $data= reservations::find($id);
        $data->delete();
        Alert::success('Deleted Successful','');

        return redirect()->back() ;
    }
    public function emailview($id){


        $data=reservations::find($id);

        return view('admin.email_view',compact('data'));
    }


    public function sendemail(Request $request,$id){
        $data =reservations::find($id);
        $details=[

            'greeting' => $request->greeting,
            'actiontext' => $request->actiontext,
            'body' => $request->body,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart,
        ];

        Notification::send($data,new
        SendEmailNotification($details));
        Alert::success('Email Sent Successfully','');

        return redirect()->back();
        

    }

    public function menu_view()
    {
        return view('admin.menu_view');
    }
    public function chefs()
    {
        return view('admin.chefs');
    }
    public function allchefs()
    {
        $data = chefs::all();
        return view('admin.allchefs',compact('data'));
    }
    
    public function upload_chefs(Request $request)
    {
        $chefs = new chefs;
        $image = $request->image;
        $imagename =time().'.'.$image->getClientoriginalExtension();

        $request->image->move('chefimage',$imagename);

        $chefs->image=$imagename;
        $chefs->name=$request->name;
        $chefs->specialty=$request->specialty;
        $chefs->qualifications=$request->qualifications;  
       
        $chefs->save();
        Alert::success('Upload Successfull');

        return redirect()->back();   
     }
     public function deletechef($id){
         $data= chefs::find($id);
         $data->delete();
         Alert::success('Chef Info Deleted Successfully!');

         return redirect()->back();
     }
     public function updatechef($id){
         $data= chefs::find($id);
        //  $data->delete();
        //  Alert::success('Chef Info Deleted Successfully!');

         return view('admin.update_chef',compact('data'));
     }
     public function editchef( Request $request, $id){
        $chef= chefs::find($id);
        $chef-> name= $request->name;
        $chef-> specialty= $request->specialty;
        $chef-> qualifications= $request->qualifications;
        $image =$request->image;
        $imagename= $request-> image;

        if($image)
        {
        $imagename =time().'.'.$image->getClientoriginalExtension();

        $request->image->move('chefimage',$imagename);
        $chef->image=$imagename;
        }
         Alert::success('Chef Info Updated Successfully!');

       $chef->save();
       return redirect()->back();
    }



}

   
