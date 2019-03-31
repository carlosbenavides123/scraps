<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrashML;

class TrashMLController extends Controller
{
    public function getMlData()
    {
        return TrashML::all();
    }
}