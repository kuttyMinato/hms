<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0')
            {
                return view('user.home');
            }
            else
            {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        $doctor =doctor::all();
        return view('user.home',compact('doctor'));

    }
    public function appointments(Request $request){
        $data= new appointment;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->date=$request->input('date');
        $data->doctor=$request->input('doctor').value('doctor');
        $data->phone=$request->input('phone');
        $data->message=$request->input('message');
        $data->status='In Progress';
        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }
        
        $data->save();
        return redirect()->back()->with('message','Appointment Request Sent Successfully');




    }


}
