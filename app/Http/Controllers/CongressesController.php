<?php

namespace App\Http\Controllers;

use App\Models\Congress;

class CongressesController extends Controller
{

    public function index() {
        return Congress::all()->toArray();
    }
    //
}
