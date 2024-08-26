<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\FDMember;
use App\Models\Member;
use App\Models\plan;
use App\Models\trainer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

  public function index(){

    $plans = plan::all();
    $members = Member::all();
    $recentmembers = Member::orderBy('member_id','desc')->get();
    $trainers = trainer::all();
    $equipments = Equipment::all();
    $ftmembers = FDMember::all();
    $search = "";
      
    $data = compact('plans','recentmembers','members','trainers','equipments','ftmembers','search');
    return view('Dashboard')->with($data);
      }


  public function index2(Request $req){

    $plans = plan::all();
    $members = Member::all();
    $recentmembers = Member::orderBy('member_id','desc')->get();
    $trainers = trainer::all();
    $equipments = Equipment::all();


    $search = $req['search'] ?? "";

        if ($search!= "") {
            $ftmembers = FDMember::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }else{

          $ftmembers = FDMember::all();
        }



    
    $data = compact('plans','recentmembers','members','trainers','equipments','ftmembers','search');

    return view('Dashboard')->with($data);
  }
}
