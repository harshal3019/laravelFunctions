<?php

namespace App\Exports;

use App\Models\AppModelsEmployee;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection,WithHeadings
{


    public function headings():array{

        return[
            'id',
            'name',
            'email',
            'salary',
            'department',
            'phone'

        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       // return AppModelsEmployee::all();
       return collect(Employee::getEmployee());
    }
}
