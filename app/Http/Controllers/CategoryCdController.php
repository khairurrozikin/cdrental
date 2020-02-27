<?php
namespace App\Http\Controllers;

use App\Cdcategorys;
use Illuminate\Http\Request;

class CategoryCdController extends Controller{
    public function showAllCdCategorys(){
        return response()->json(Cdcategorys::all());
    }
}