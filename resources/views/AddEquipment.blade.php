@extends('layouts.main')

@push('css')
<link rel="stylesheet" href="/addequipment.css">
@push('title')
<title>Add Equipment</title>

@section('container')

<div class="form-container">
       <h2>{{$title}}</h2>
        <form action="{{$url}}" method="post">
            @csrf
            <div class="form-group">
                <label for="equipment_name">Equipment Name</label>
                <input type="text" id="equipment_name" name="equipment_name" required value=@php if(isset($Equipment)) echo $Equipment->equipment_name @endphp>
            </div>

            <div class="form-group">
                <label for="quantity">Equipments Quantity</label>
                <input type="number" id="quantity" name="quantity" required value=@php if(isset($Equipment)) echo $Equipment->quantity @endphp>
            </div>

            <div class="form-group">
                <label for="purchase_date">Purchase Date</label>
                <input type="date" id="purchase_date" name="purchase_date" required value=@php if(isset($Equipment)) echo $Equipment->purchase_date @endphp>
            </div>
            <div class="form-group">
                <label for="maintainance_date">Maintainance Date</label>
                <input type="date" id="maintainance_date" name="maintainance_date" required value=@php if(isset($Equipment)) echo $Equipment->maintainance_date @endphp>
            </div>

            
            <div class="form-group">
                <label for="status">Equipment Status</label>
                <select id="status" name="status" required>
                <option value="blank"></option>
                <option value="Working"  @php if(isset($Equipment)) echo $Equipment->status == "Working" ? "selected" : "" @endphp>Working</option>
                  <option value="Defective" @php if(isset($Equipment)) echo $Equipment->status == "Defective" ? "selected" : "" @endphp>Defective</option>
                </select>
            </div>
            
            <button type="submit">{{$btn}}</button>
        </form>
    </div>


@endsection