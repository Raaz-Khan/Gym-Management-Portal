<?php

namespace App\Http\Controllers;

use App\Models\CollabUnit;
use Illuminate\Http\Request;

class CollabUnitController extends Controller
{
    public function index(Request $req){
        $search = $req['search'] ?? "";

        if ($search!= "") {
            $cu = CollabUnit::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }else{

            $cu = CollabUnit::all();
        }
        $data = compact('cu','search');
        return view('Collaboration')->with($data);
    }


    public function SubmitCollabInfo(Request $req ){
            $cu = New CollabUnit;
            $cu->name = $req['name'];
            $cu->email = $req['email'];
            $cu->org = $req['org'];
            $cu->message = $req['message'];
            $cu->save();

            return redirect()->back()->withFragment('collabsec');


    }

    public function DeleteCollabInfo($id){
        $cu = CollabUnit::find($id);

        if(!is_null($cu)){
            $cu->delete();
        }

        return redirect('/collabinfo');
    }
}

