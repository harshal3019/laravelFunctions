<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class RelationShipController extends Controller
{
    public function insert()
    {
        $user = User::findOrFail(1);

        $address = new Address(['name'=>'1234 Uttam Nagar Nashik 422010']);

        $user->address()->save($address);
        return "Data submitted success fully!";
    }

    public function update()
    {
        $address = Address::where('id','=','1')->first(); //provides object format
        $address->name = "1111 Trimurti Chowk Nashik 422008";
        $address->save();
        return "Data updated successfully!";

    }

    public function getData()
    {
        $user = User::find(1);
        echo $user->address->name;
    }

    public function delete()
    {
        $user = User::find(1);
        $user->address()->delete();
        return "Deleted Successfully";
    }
}
