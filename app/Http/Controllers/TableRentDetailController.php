<?php

namespace App\Http\Controllers;

use App\Cdtablerentdetails;
use Illuminate\Http\Request;

class TableRentDetailController extends Controller{
    public function showAllCdTableRents(){
        return response()->json(Cdtablerentdetails::all());
    }
}