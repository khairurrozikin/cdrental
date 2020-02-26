<?php
namespace App\Http\Controllers;

use App\CdCategorys;
use Illuminate\Http\Request;

class CategoryCdController extends Controller{
    public function showAllCdCategorys(){
        return response()->json(CdCategorys::all());
    }
}