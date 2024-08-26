<?php

namespace App\Http\Controllers;

use App\Models\trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function ViewTrainer(Request $req){

        $search = $req['search'] ?? "";

        if ($search!= "") {
        $trainers = trainer::where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%")->get();
        }else{

            $trainers = trainer::all();
        }
        $data = compact('trainers','search');
        return view("Trainers")->with($data);
    }

    public function AddTrainer(){
        
        $url = "/addtrainer";
        $title = "Add Trainer";
        $btn = "Add";
        $data = compact('title','btn','url');
        return view("AddTrainer")->with($data);
    }

    public function SubmitTrainer(Request $req){
       
        $trainer = New trainer;
        $trainer->name = $req['name'];
        $trainer->email = $req['email'];
        $trainer->phone = $req['phone'];
        $trainer->gender = $req['gender'];
        $trainer->fee = $req['fee'];
        $trainer->speciality = $req['speciality'];
        $trainer->status = $req['status'];
        $trainer->address = $req['address'];
        $trainer->start_timing = $req['start_timing'];
        $trainer->end_timing = $req['end_timing'];
        $trainer->save();

        return redirect('/trainers');

    }

    public function DeleteTrainer($id){
        $trainer = trainer::find($id);

        if(!is_null($trainer)){
            $trainer->delete();
        }

        return redirect('/trainers');
    }

    public function EditTrainer($id){
        $trainer = trainer::find($id);

        // echo "<pre>";
         if (!is_null($trainer)) {
            $url = url('/updatetrainer')."/".$id;
            $title = "Update Member";
            $btn = "Update";
            $data = compact('title','btn','trainer','url');
            return view('AddTrainer')->with($data);
         }else{
            return redirect('/trainers');
         }
    }

    public function UpdateTrainer($id,Request $req){
        $trainer = trainer::find($id);
        $trainer->name = $req['name'];
        $trainer->email = $req['email'];
        $trainer->phone = $req['phone'];
        $trainer->gender = $req['gender'];
        $trainer->fee = $req['fee'];
        $trainer->speciality = $req['speciality'];
        $trainer->status = $req['status'];
        $trainer->address = $req['address'];
        $trainer->start_timing = $req['start_timing'];
        $trainer->end_timing = $req['end_timing'];
        $trainer->save();

        return redirect('/trainers');
    }


}
