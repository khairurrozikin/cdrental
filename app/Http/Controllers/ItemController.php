<?php

namespace App\Http\Controllers;

use App\tablecd;
use Illuminate\Http\Request;

class ItemController extends Controller{
    public function showAllItem(){
        return response()->json(tablecd::all());
    }
}
