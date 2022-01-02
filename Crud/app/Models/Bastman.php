<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bastman extends Model
{
    use HasFactory;

    protected $table= 'bastmen';

    protected $fillable =[

        'name',
        'country',
        'batting_style',
        'profileImg'

    ];


    public static function getBatsman()
    {
        $records =DB::table('bastmen')->select('name','country','Batting_style')->get()->toArray();
        return $records;
    }
}
