<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employee = [

            ['name'=>'harshal','email'=>'harshal@gmail.com','salary'=>'20000','department'=>'Marketing','phone'=>'1234567890'],
            ['name'=>'Ankit','email'=>'ankit@gmail.com','salary'=>'22000','department'=>'Accounting','phone'=>'1234567891'],
            ['name'=>'Ravi','email'=>'ravi@gmail.com','salary'=>'21000','department'=>'Development','phone'=>'1234567892'],
            ['name'=>'Ankita','email'=>'anki@gmail.com','salary'=>'20001','department'=>'Designing','phone'=>'1234567893']

        ];
        Employee::insert($employee); //insert function is use to store data statically
        return 'Data submitted Successfully!';
    }

    // public function getData()
    // {
        
    // }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport,'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport,'employeelist.csv');
    }
}
