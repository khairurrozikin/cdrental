<?php

namespace App\Http\Controllers;

use App\Cdtablereturns;
use Illuminate\Http\Request;

class TableReturnController extends Controller{
    public function showAllCdTableReturn(){
        return response()->json(Cdtablereturns::all());
    }
}
