<?php

namespace App\Http\Controllers;

use App\Cdtablereturns;
use Illuminate\Http\Request;

class TableReturnController extends Controller{
    public function showAllCdTableReturn(){
        return response()->json(Cdtablereturns::all());
    }
    
    public function create(Request $request){
        $cdtablereturn = new Cdtablereturns;

        $cdtablereturn->rent_id = $request->rent_id;
        $cdtablereturn->day_return = $request->day_return;
        $cdtablereturn->payment = $request->payment;
        $cdtablereturn->pinalty = $request->pinalty;
        $cdtablereturn->save();

        return response()->json($cdtablereturn);
    }

    public function destroy($id){
        $cdtablereturn = Cdtablereturns::find($id);
        $cdtablereturn->delete();

        return response()->json('process remove successfully');
    }

    public function update(Request $request, $id){
        $cdtablereturn = new Cdtablereturns;

        $cdtablereturn->rent_id = $request->rent_id;
        $cdtablereturn->day_return = $request->day_return;
        $cdtablereturn->payment = $request->payment;
        $cdtablereturn->pinalty = $request->pinalty;
        $cdtablereturn->save();

        return response()->json($cdtablereturn);
    }
}
