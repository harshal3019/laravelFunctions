<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\SuperHeroDataTable;
class SuperHeroController extends Controller
{
    public function index(SuperHeroDataTable $datatables)
    {
        return $datatables->render('superhero');
    }
}
