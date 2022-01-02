<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;
class EmpController extends Controller
{
    public function getAllEmployee()
    {
        $emp = Employee::all();
        return view('employee',compact('emp'));
    }

    public function downloadPDF($id)
    {
        $emp = Employee::where('id',$id)->get();
        $pdf = PDF::loadView('employee',compact('emp'));
        return $pdf->download('employees.pdf');
    }

    public function newassign()
    {
        return view('YDDContentPage29');
    }
}
