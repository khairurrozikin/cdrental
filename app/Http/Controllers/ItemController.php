<?php

namespace App\Http\Controllers;

use App\Cditems;
use Illuminate\Http\Request;

class ItemController extends Controller{
    public function showAllCdItems(){
        return response()->json(Cditems::all());
    }

    public function create(Request $request){
        $cditems = new Cditems;

        $cditems->title = $request->title;
        $cditems->rate = $request->rate;
        $cditems->catecory = $request->catecory;
        $cditems->qty = $request->qty;
        $cditems->price_item = $request->price_item;
        $cditems->price_rent = $request->price_rent;

        $cditems->save();

        return response()->json($cditems);
    }
    
    public function destroy($id){
        $cditems = Cditems::find($id);
        $cditems->delete();

        return response()->json('process remove successfully');
    }

    public function update(Request $request, $id){
        $cditems = new Cditems;

        $cditems->title = $request->title;
        $cditems->rate = $request->rate;
        $cditems->catecory = $request->catecory;
        $cditems->qty = $request->qty;
        $cditems->price_item = $request->price_item;
        $cditems->price_rent = $request->price_rent;

        $cditems->save();

        return response()->json($cditems);
    }
}
