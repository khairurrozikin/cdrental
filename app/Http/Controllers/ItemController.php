<?php

namespace App\Http\Controllers;

use App\Cditems;
use Illuminate\Http\Request;

class ItemController extends Controller{
    public function showAllCdItems(){
        return response()->json(Cditems::all());
    }
}
