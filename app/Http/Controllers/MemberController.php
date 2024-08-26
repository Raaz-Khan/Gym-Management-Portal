<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\plan;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class MemberController extends Controller
{   
    public function ViewMember(Request $req){
        $search = $req['search'] ?? "";

        if ($search!= "") {
            $members = Member::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        } else{

            $members = Member::all();
        }

        $data = compact('members','search');
        return view("Members")->with($data);
    }
    public function AddMember(){
        
        $plans = plan::all();
        $url = "/addmember";
        $title = "Add Member";
        $btn = "Add";
        $data = compact('title','btn','plans','url');
        return view("AddMember")->with($data);
    }
    public function SubmitMember(Request $req){
       
        $member = New Member;
        $member->name = $req['name'];
        $member->email = $req['email'];
        $member->phone = $req['phone'];
        $member->dob = $req['dob'];
        $member->gender = $req['gender'];
        $member->weight = $req['weight'];
        $member->plan = $req['plan'];
        $member->goal = $req['goal'];
        $member->status = $req['status'];
        $member->address = $req['address'];
        $member->start_timing = $req['start_timing'];
        $member->end_timing = $req['end_timing'];
        $member->save();

        return redirect('/members');

    }

    public function DeleteMember($id){
        $member = Member::find($id);

        if(!is_null($member)){
            $member->delete();
        }

        return redirect('/members');
    }

    public function EditMember($id){
        $member = Member::find($id);

        // echo "<pre>";
         if (!is_null($member)) {
            $plans = plan::all();
            $url = url('/updatemember')."/".$id;
            $title = "Update Member";
            $btn = "Update";
            $data = compact('title','btn','member','plans','url');
            return view('AddMember')->with($data);
         }else{
            return redirect('/members');
         }
    }

    public function UpdateMember($id,Request $req){
        $member = Member::find($id);
        $member->name = $req['name'];
        $member->email = $req['email'];
        $member->phone = $req['phone'];
        $member->dob = $req['dob'];
        $member->gender = $req['gender'];
        $member->weight = $req['weight'];
        $member->plan = $req['plan'];
        $member->goal = $req['goal'];
        $member->status = $req['status'];
        $member->address = $req['address'];
        $member->start_timing = $req['start_timing'];
        $member->end_timing = $req['end_timing'];
        $member->save();
        

        return redirect('/members');
    }

    public function WebAddMember($id){
        
        $plans = plan::all();
        $WebPlan = plan::find($id);
        $data = compact('plans','WebPlan');
        return view("WebAddMember")->with($data);
    }

    public function WebSubmitMember(Request $req){
       
        $member = New Member;
        $member->name = $req['name'];
        $member->email = $req['email'];
        $member->phone = $req['phone'];
        $member->dob = $req['dob'];
        $member->gender = $req['gender'];
        $member->weight = $req['weight'];
        $member->plan = $req['plan'];
        $member->goal = $req['goal'];
        $member->status = $req['status'];
        $member->address = $req['address'];
        $member->start_timing = $req['start_timing'];
        $member->end_timing = $req['end_timing'];
        $member->save();


        session()->flush();
        return redirect('/ifitness/membership')->with('added','Added successfully')->withFragment('memsec');

    }
}
