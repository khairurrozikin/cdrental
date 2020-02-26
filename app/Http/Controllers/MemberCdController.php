<?php

namespace App\Http\Controllers;

use App\CdMembers;
use Illuminate\Http\Request;

class MemberCdController extends Controller{
    public function showAllCdMembers(){
        return response()->json(CdMembers::all());
    }

    public function create(Request $request){
        $cdmembers = new CdMembers;

        $cdmembers->name = $request->name;
        $cdmembers->address = $request->address;
        $cdmembers->phone = $request->ktp;
        $cdmembers->member_date = $request->member_date;
        $cdmembers->active_date = $request->active_date;

        $cdmembers->save();

        return response()->json($cdmembers);
    }

    public function destroy($id){
        $cdmembers = CdMembers::find($id);
        $cdmembers->delete();

        return response()->json('process remove successfully');
    }

    public function update(Request $request, $id){
        $cdmembers = new CdMembers;

        $cdmembers->name = $request->name;
        $cdmembers->address = $request->address;
        $cdmembers->phone = $request->ktp;
        $cdmembers->member_date = $request->member_date;
        $cdmembers->active_date = $request->active_date;

        $cdmembers->save();

        return response()->json($cdmembers);
    }
}
