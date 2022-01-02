<?php

namespace App\Http\Controllers;

use App\Models\Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ChartController extends Controller
{
    public function index()
    {
        $charts = Charts::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

       $months = Charts::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');


        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month)
        {
            $datas[$month] = $charts[$index];
        }
        return view('chart',compact('datas'));

    }

    public function BarChart()
    {
        $charts = Charts::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

       $months = Charts::select(DB::raw("Month(created_at) as month"))
                ->whereYear('created_at',date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('month');


        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $month)
        {
            $datas[$month] = $charts[$index];
        }
        return view('barchart',compact('datas'));

    }
}
