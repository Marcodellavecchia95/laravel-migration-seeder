<?php

namespace App\Http\Controllers;

use App\Models\Train;

class Controller
{
    public function index()
    {
        $trains = Train::all();

        return view("index", compact("trains"));
    }
}
