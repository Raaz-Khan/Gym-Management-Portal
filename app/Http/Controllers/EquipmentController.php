<?php

namespace App\Http\Controllers;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function ViewEquipment(Request $req){
        $search = $req['search'] ?? "";

        if ($search!= "") {
            $Equipments = Equipment::where('equipment_name','LIKE',"%$search%")->get();
        }else{
            
            $Equipments = Equipment::all();
        }
        $data = compact('Equipments','search');
        return view("Equipments")->with($data);
    }

    public function AddEquipment(){
        
        $url = "/addequipment";
        $title = "Add Equipment";
        $btn = "Add";
        $data = compact('title','btn','url');
        return view("AddEquipment")->with($data);
    }

    public function SubmitEquipment(Request $req){
       
        $Equipment = New Equipment;
        $Equipment->equipment_name = $req['equipment_name'];
        $Equipment->quantity = $req['quantity'];
        $Equipment->purchase_date = $req['purchase_date'];
        $Equipment->maintainance_date = $req['maintainance_date'];
        $Equipment->status = $req['status'];
        $Equipment->save();

        return redirect('/equipments');

    }

    public function DeleteEquipment($id){
        $Equipment = Equipment::find($id);

        if(!is_null($Equipment)){
            $Equipment->delete();
        }

        return redirect('/equipments');
    }

    public function EditEquipment($id){
        $Equipment = Equipment::find($id);

        // echo "<pre>";
         if (!is_null($Equipment)) {
            $url = url('/updateequipment')."/".$id;
            $title = "Update Member";
            $btn = "Update";
            $data = compact('title','btn','Equipment','url');
            return view('AddEquipment')->with($data);
         }else{
            return redirect('/equipments');
         }
    }

    public function UpdateEquipment($id,Request $req){
        $Equipment = Equipment::find($id);
        $Equipment->equipment_name = $req['equipment_name'];
        $Equipment->quantity = $req['quantity'];
        $Equipment->purchase_date = $req['purchase_date'];
        $Equipment->maintainance_date = $req['maintainance_date'];
        $Equipment->status = $req['status'];
        $Equipment->save();

        return redirect('/equipments');
    }
}
