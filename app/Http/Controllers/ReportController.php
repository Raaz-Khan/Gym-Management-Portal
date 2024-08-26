<?php

namespace App\Http\Controllers;

use App\Models\contact_person;
use App\Models\FDMember;
use App\Models\Member;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function Index(){
        $members = Member::all();
        $FTmembers = FDMember::all();
        $Contactperson = contact_person::all();
        $Allm = count($members);
        $inm = 0;
        $acm = 0;
        foreach ($members as $member){
        if($member->status == "InActive"){
        $inm++;
        }else{
            $acm++;
        }
        }
        $ftm = count($FTmembers);
        $cp = count($Contactperson);
        


        
        $dataPoints = collect(([
            ['label' => 'TotalMembers','value' => $Allm],
            ['label' => 'ActiveMembers','value' => $acm],
            ['label' => 'InactiveMembers','value' => $inm],
            ['label' => 'Person Registered for free Trial','value' => $ftm],
            ['label' => 'Person Registered for Contact-us','value' => $cp],
        ]));

        $data = compact('dataPoints');
        return view('Report')->with($data);
    }
}
