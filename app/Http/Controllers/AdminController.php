<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
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
            return view('admin.showappointment');
      }

      public function updatedoctor($id)
      {
        $data = doctor::find($id);

        return view('admin.update_doctor',compact('data'));
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
