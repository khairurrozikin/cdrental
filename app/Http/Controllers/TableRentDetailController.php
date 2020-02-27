<?php

namespace App\Http\Controllers;

use App\Cdtablerentdetails;
use Illuminate\Http\Request;

class TableRentDetailController extends Controller{
    public function showAllCdTableRents(){
        return response()->json(Cdtablerentdetails::all());
    }

    public function create(Request $request){
        $cdtablerentdetail = new Cdtablerentdetails;

        $cdtablerentdetail->rent_id = $request->user_id;
        $cdtablerentdetail->item_id = $request->day_rent;
        $cdtablerentdetail->qty_id = $request->day_rent;
        $cdtablerentdetail->save();

        return response()->json($cdtablerentdetail);
    }

    public function destroy($id){
        $cdtablerentdetail = Cdtablerentdetails::find($id);
        $cdtablerentdetail->delete();

        return response()->json('process remove successfully');
    }
    
    public function update(Request $request, $id){
        $cdtablerentdetail = new Cdtablerentdetails;

        $cdtablerentdetail->user_id = $request->user_id;
        $cdtablerentdetail->day_rent = $request->day_rent;
        $cdtablerentdetail->save();

        return response()->json($cdtablerentdetail);
    }
}