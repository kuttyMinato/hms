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
                $doctor =doctor::all();
                return view('user.home',compact('doctor'));
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
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $doctor =doctor::all();
        return view('user.home',compact('doctor'));

        }
    }
    public function appointments(Request $request){
        $data= new appointment;
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->date=$request->input('date');
        $data->doctor=$request->input('doctor');
        $data->phone=$request->input('phone');
        $data->message=$request->input('message');
        $data->status='In Progress';
        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }

        $data->save();
        return redirect()->back()->with('message','Appointment Request Sent Successfully..We will contact you soon..!');




    }
    public function myappointments()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }

    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();
    }

}
