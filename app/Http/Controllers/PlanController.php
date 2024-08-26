<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use PhpParser\Node\Stmt\Return_;
use App\Models\plan;

class PlanController extends Controller
{
    public function index(Request $req){
        $search = $req['search'] ?? "";

        if ($search!= "") {
            $plans = plan::where('plan_name','LIKE',"%$search%")->get();
        }else{

            $plans = plan::all();
        }

        $data = compact('plans','search');
        return view('Plans')->with($data);
    }

    public function addform(){
        $url = url('/addplan');
        $title = "Add Subscription Plan";
        $btn = "Add";
        $data = compact('url','title','btn');
        return view("AddPlan")->with($data);
    }


    public function submitplan(Request $req){

        // echo "<pre>";
        // print_r($req->all());

        $plan = New plan;
        $plan->plan_name = $req['plan_name'];
        $plan->duration = $req['duration'];
        $plan->price = $req['price'];
        $plan->offer_price = $req['offer_price'];
        $plan->save();

        return redirect('/plans');
    }

    public function deleteplan($id){

        // plan::find($id)->delete();
        $plan =plan::find($id);

        if(!is_null($plan)){
            $plan->delete();
        }


        return redirect("/plans");
    }

    public function editplan($id){
        $plan = plan::find($id);
        if(!is_null($plan)){
            $url = url('/updateplan')."/".$id;
            $title = "Update Subscription Plan";
            $btn = "Update";
            $data = compact('plan','url','title','btn');
            return view("AddPlan")->with($data);
        }else{
            return redirect("/plans");
        }
    }

    public function updateplan($id,Request $req){
        print_r($id);
        $plan = plan::find($id);
        $plan->plan_name = $req['plan_name'];
        $plan->duration = $req['duration'];
        $plan->price = $req['price'];
        $plan->offer_price = $req['offer_price'];
        $plan->save();

        return redirect('plans');
    }




    public function MembershipView(){
        $plans = plan::all();
        $data = compact('plans');

        return view('WebMembership')->with($data);

    }



}
