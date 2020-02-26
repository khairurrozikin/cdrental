<?php

namespace App\Http\Controllers;

use App\CdItems;
use Illuminate\Http\Request;

class ItemController extends Controller{
    public function showAllCdItems(){
        return response()->json(CdItems::all());
    }
}
