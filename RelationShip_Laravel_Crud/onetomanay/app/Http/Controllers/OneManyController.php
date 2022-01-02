<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class OneManyController extends Controller
{
    public function create()
    {
        $user = User::findOrFail(1);

        $post = new Post(['title'=>'New Page 2','body'=>'Uttam Nagar Nashik 422010']);

        $user->posts()->save($post);
        return "Data submitted success fully!";
    }

    public function getData()
    {
        $user = User::findOrFail(1);
        foreach($user->posts as $post)
        {
            echo $post->title."<br>";
        }
    }

    public function update()
    {
        $user = User::findOrFail(1);
        $user->posts()->where('id','=',1)->update(['title'=>'New Page Update','body'=>'i live php']);
        return "Data Updated Successfully";
    }

    public function delete()
    {
        $user = User::find(1);
        $user->posts()->where('id','=',1)->delete();
        return "Data Delete Successfully";
    }
}
