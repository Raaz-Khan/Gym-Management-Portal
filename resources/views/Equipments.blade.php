@extends('layouts.main')

 @push('css')
      <link rel="stylesheet" href="/Equipments.css">
 @push('title')
    <title>All Equipments</title>

 @section('container')
    
 <div class="table-container">
        <div>
            <h2>Gym Equipments</h2>
            <section>

                <form action="">
                    <input type="search" name="search" placeholder="Search by Equipment-Name" value="{{$search}}">
                    <button class="btn">Search</button>
                </form>
                <a href="{{url('/')}}/equipments">
                    <button class="res">Reset</button>
                </a>
            </section>
            <a href="{{url('/')}}/addequipment">
                <button class="btn">ADD</button>
            </a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Equipments Name</th>
                    <th>Quantity</th>
                    <th>Purchase date</th>
                    <th>Maintainance date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach ($Equipments as $Equipment)
                <tr>
                    <td>{{$Equipment->equipment_name}}</td>
                    <td>{{$Equipment->quantity}}</td>
                    <td>{{$Equipment->purchase_date}}</td>
                    <td>{{$Equipment->maintainance_date}}</td>
                    <td>{{$Equipment->status}}</td>
                    <td>
                        <a href="{{url('/')}}/deleteequipment/{{$Equipment->Equipment_id}}"><button>Delete</button></a>
                        <a href="{{url('/')}}/editequipment/{{$Equipment->Equipment_id}}"><button>Update</button></a>
                    </td>
                </tr>
            @endforeach
                
                 
                 
            </tbody>
        </table>
    </div>

 @endsection