<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        $products = [

            ['name'=>'phone'],
            ['name'=>'Tablet'],
            ['name'=>'Fan'],
            ['name'=>'Freez'],
            ['name'=>'Telivison']

        ];

        Product::insert($products);
        return "Product inserted successfully!";
    }

    public function searchProduct()
    {
        return view('search');
    }

    public function autocomplete(Request $request)
    {
        $data = Product::select("name")
                        ->where("name","LIKE","%{request->terms}%")
                        ->get();
                 return response()->json($data);       
    }
}
