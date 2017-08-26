<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ParticipantsController extends Controller
{

    public function index() {
        return Participant::all()->toArray();
    }
    //
}
