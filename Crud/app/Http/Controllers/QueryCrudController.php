<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class QueryCrudController extends Controller
{
    public function show_student()
    {
        return view('addStudent');
    }

    public function store(Request $request)
    {
        DB::table('students')->insert([

            'student_name'=>$request->student_name,
            'student_rno'=>$request->student_rno,
            'student_address'=>$request->student_address

        ]);
        return back()->with('profile_create','Student Profile CReated');
    }

    public function listing()
    {
        $data=DB::table('students')->get();
        return view('listStudent',compact('data'));
    }

    public function studentById($id)
    {
        $data = DB::table('students')->where('id',$id)->first();
        return view('detailStudent',compact('data'));
    }
    public function delete($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return back()->with('profile_delete','Student Data Deleted');
    }

    public function edit($id)
    {
        $data = DB::table('students')->where('id',$id)->first();
        return view('updateStudent',compact('data'));
    }

    public function update(Request $request)
    {
        DB::table('students')->where('id',$request->id)->update([

            'student_name' => $request->student_name,
            'student_rno' => $request->student_rno,
            'student_address' => $request->student_address

        ]);

        return back()->with('update_profile','Studnet Profile Has been Updated');
    }

    public function innerJoinClause()
    {
        $result = DB::table('users')
                ->join('students','users.id','=','students.user_id')
                ->select('users.name','students.student_name','students.student_rno')
                ->get();

                return $result;
    }

    public function leftJoinClause()
    {
        $request = DB::table('users')
                 ->leftJoin('students','users.id','=','students.user_id')
                 ->get();
        
        return $request;
    }

    public function RightJoinClause()
    {
        $right = DB::table('users')
              ->rightJoin('students','users.id','=','students.user_id')
              ->select('users.*','students.student_name')
              ->get();
           //   echo "prev";
              return $right;
    }

}
