<?php

namespace App\Exports;

use App\Models\Bastman;
use Maatwebsite\Excel\Concerns\FromCollection;

class BatsmanExport implements FromCollection
{


    public function headings():array{

        return[
            'id',
            'name',
            'country',
            'Batting_style'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(Bastman::getBatsman());
    }
}
