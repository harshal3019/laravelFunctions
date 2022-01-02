<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teachers::orderBy('id','DESC')->get();
        return view('teachers',compact('teacher'));
    }

    public function addTeacher(Request $request)
    {
        $teacher = new Teachers();
        $teacher->firstname = $request->firstname;
        $teacher->lastname = $request->lastname;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->save();
        return response()->json($teacher);
    }

    public function deleteTeacher($id)
    {
        $teacher = Teachers::find($id);
        $teacher->delete();
        return response()->json(['success'=>'Records Has been deleted']);
    }
}
