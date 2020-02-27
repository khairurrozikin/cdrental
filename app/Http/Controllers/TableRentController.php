<?php

namespace App\Http\Controllers;

use App\Cdtablerents;
use App\User;
use Illuminate\Http\Request;

class TableRentController extends Controller{
    public function showAllCdTableRents(){
        
        return response()->json(Cdtablerents::all());
    }

    public function create(Request $request){
        $cdtablerent = new Cdtablerents;

        $cdtablerent->user_id = $request->user_id;
        $cdtablerent->day_rent = $request->day_rent;
        $cdtablerent->save();

        return response()->json($cdtablerent);
    }

    public function destroy($id){
        $cdtablerent = Cdtablerents::find($id);
        $cdtablerent->delete();

        return response()->json('process remove successfully');
    }

    public function update(Request $request, $id){
        $cdtablerent = new Cdtablerents;

        $cdtablerent->user_id = $request->user_id;
        $cdtablerent->day_rent = $request->day_rent;
        $cdtablerent->save();

        return response()->json($cdtablerent);
    }
}