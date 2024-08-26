<?php

namespace App\Http\Controllers;

use App\Models\FDMember;
use Illuminate\Http\Request;

class FDMemberController extends Controller
{
    public function SubmitFreeTrialInfo(Request $req){
        $ftmember = New FDMember;
        $ftmember->name = $req['name'];
        $ftmember->email = $req['email'];
        $ftmember->phone = $req['phone'];
        $ftmember->dt = $req['dt'];
        $ftmember->message = $req['message'];
        $ftmember->save();

        return redirect()->back()->withFragment('ftsec');
    }

    public function DeleteFreeTrialInfo($id){
        $ftmember = FDMember::find($id);

        if(!is_null($ftmember)){
            $ftmember->delete();
        }

        return redirect('/dashboard')->withFragment('fdmembers');
    }
}
