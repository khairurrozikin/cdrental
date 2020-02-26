<?php

namespace App\Http\Controllers;

use App\tablemembercd;
use Illuminate\Http\Request;

class MemberCdController extends Controller{
    public function showAllItem(){
        return response()->json(tablemembercd::all());
    }
}
