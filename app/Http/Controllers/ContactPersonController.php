<?php

namespace App\Http\Controllers;

use App\Models\contact_person;
use Illuminate\Http\Request;

class ContactPersonController extends Controller
{
    public function index(Request $req){
        $search = $req['search'] ?? "";

        if ($search!= "") {
            $cp = contact_person::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }else{

            $cp = contact_person::all();
        }
        $data = compact('cp','search');
        
        return view('Contact_Person')->with($data);
    }


    public function SubmitContactInfo(Request $req ){
            $cp = New contact_person;
            $cp->name = $req['name'];
            $cp->email = $req['email'];
            $cp->phone = $req['phone'];
            $cp->save();

            return redirect()->back()->withFragment('formsec');


    }

    public function DeleteContactInfo($id){
        $cp = contact_person::find($id);

        if(!is_null($cp)){
            $cp->delete();
        }

        return redirect('/contactinfo');
    }


}
