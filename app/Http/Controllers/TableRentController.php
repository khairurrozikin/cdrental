<?php

namespace App\Http\Controllers;

use App\Cdtablerents;
use Illuminate\Http\Request;

class TableRentController extends Controller{
    public function showAllCdTableRents(){
        return response()->json(Cdtablerents::all());
    }
}