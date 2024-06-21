<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
 public function addview(){
    return view('admin.add_doctor');
 }
 public function upload(Request $request ){
       $doctor=new doctor;
       $image=$request->file;
       $imagename=time().'.'.$image->getClientOriginalExtension();
       $request->file->move('doctorimage',$imagename);
       $doctor->image=$imagename;
       $doctor->name=$request->name;
       $doctor->phone=$request->phone;
       $doctor->speciality=$request->speciality;
       $doctor->room=$request->room;
       $doctor->save();
       return redirect()->back()->with('message','Doctor Added Successfully');
 }
      public function showappointments(Request $request)
      {
            $data = Appointment::all();
            return view('admin.showappointment', compact('data'));
      }
      public function approved($id)
      {
            $data = Appointment::find($id);
            $data->status = 'Approved';
            $data->save();
            return redirect()->back();
      }
      public function showdoctor()
      {
            $data = Doctor::all();
            return view('admin.showdoctor', compact('data'));
      }
      public function deletedoctor($id)
      {
            $data = Doctor::find($id);
            $data->delete();
            return redirect()->back();
      }
      public function updatedoctor($id)
      {
            $data = Doctor::find($id);
            return view('admin.update_doctor', compact('data'));
      }


      public function editdoctor(Request $request , $id)
      {
        $doctor = doctor::find($id);

        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->speciality = $request->speciality;

        $doctor->room = $request->room;


        $image=$request->file;

        $imagename=time().'.'.$image->getOriginalClientExtension();

        $request->file->move('doctorimage',$imagename);


        $doctor->image=$imagename;



        $doctor->save();
        return redirect()->back()->with('message','Doctor Updated Successfully');

      }
}
