<?php

namespace App\Http\Controllers;

use App\Exports\BatsmanExport;
use App\Models\Bastman;
use Illuminate\Support\Facades\File;
use App\TimeTesting\Time;
use Illuminate\Http\Request;
use PDF;
use Excel;

class BastmanController extends Controller
{
    public function addBastman()
    {
        return view('add-bastman');
    }

    public function store(Request $request)
    {
        $bastman = new Bastman();
        $bastman->name = $request->name;
        $bastman->country = $request->country;
        $bastman->Batting_style = $request->Batting_style;
        if($request->hasFile('profileImg'))
        {
            $file = $request->file('profileImg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bastmen/',$filename);
            $bastman->profileImg = $filename;
        }

        $bastman->save();
        return redirect()->back()->with('status','Profile Add Successfully!');
    }

    public function list()
    {
        $time = Time::process();
        $bastman = Bastman::paginate(5);
        return view('bastmanlist',compact('bastman','time'));
    }

    public function edit($id)
    {
        $bastmen = Bastman::find($id);
        return view('editbastman',compact('bastmen'));
    }

    public function update(Request $request,$id)
    {
        $bastmen = Bastman::find($id); 
        $bastmen->name = $request->name;
        $bastmen->country = $request->country;
        $bastmen->Batting_style = $request->Batting_style;

        if($request->hasFile('profileImg'))
        {
            $destination = 'uploads/bastmen/'.$bastmen->profileImg;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('profileImg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/bastmen/',$filename);
            $bastmen->profileImg = $filename;
        }

        $bastmen->update();
        return redirect(route('bastman.list'))->with('status','Profile Update Successfully!');
    }


    public function destroy($id)
    {
        $bastmen = Bastman::find($id);
        $destination = 'uploads/bastmen/'.$bastmen->profileImg;
        if(File::exists($destination))
        {
            File::delete($destination);
        }

        $bastmen->delete();
        return response()->json($bastmen);
    }

    public function downloadPDF($id)
    {
        $emp = Bastman::where('id',$id)->get();
        $data = [
            'title' => "Batsman Records",
            'date' => date('m/d/Y')
            ];
        $pdf = PDF::loadView('bastman_records',compact('emp'),$data);
        return $pdf->download('Batsman.pdf');
    }

    public function downloadAllPDF()
    {
        $emp = Bastman::all();
        $data = [
            'title' => "Batsman Records",
            'date' => date('m/d/Y')
            ];
        $pdf = PDF::loadView('bastman_records',compact('emp'),$data);
        return $pdf->download('Batsman.pdf');

    }

    public function exportIntoExcel()
    {
        return Excel::download(new BatsmanExport,'batsmanlist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new BatsmanExport,'batsmanlist.csv');
    }

    
}
