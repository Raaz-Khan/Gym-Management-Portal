@extends('layouts.main')

@push('css')
<link rel="stylesheet" href="/Dashboard.css">
@push('title')
<title>Dashboard</title>

@section('container')

<div class="cardcontainer">
    <div class="card">
        <p>Active Members</p>
        @php
        $m = 0;
        foreach ($members as $member){
        if($member->status == "Active"){
        $m++;
        }
        }
        @endphp
        <h2>{{$m}}</h2>

    </div>
    <div class="card">
        <p>Available Trainers</p>
        @php
        $t = 0;
        foreach ($trainers as $trainer){
        if($trainer->status == "Available"){
        $t++;
        }
        }
        @endphp
        <h2>{{$t}}</h2>
    </div>
    <div class="card">
        <p>Working Equipments</p>
        @php
        $e = 0;
        foreach ($equipments as $equipment){
        if($equipment->status == "Working"){
        $e++;
        }
        }
        @endphp
        <h2>{{$e}}</h2>
    </div>
    <div class="card">
        <p>Available Plans</p>
        <h2>{{count($plans)}}</h2>
    </div>
</div>

<div class="graphcontainer">
    <div class="graph">
        <div class="table-container">
            <div>
                <h2>Recent added Members</h2>
                <!-- <a href="#">
                    <button>ADD</button>
                </a> -->
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Plan</th>
                        <th>Join Date</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($recentmembers as $member)
                    <tr>
                        <td>{{$member->name}}</td>
                        <td>{{$member->email}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->plan}}</td>
                        <td>{{$member->created_at}}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>

    </div>

    <div class="sidecard">
        <p>Total Members</p>
        <h2>{{count($members)}}</h2>
    </div>
    <div class="sidecard">
        <p>InActive Members</p>
        @php
        $im = 0;
        foreach ($members as $member){
        if($member->status == "InActive"){
        $im++;
        }
        }
        @endphp
        <h2>{{$im}}</h2>
    </div>
    <div class="sidecard">
        <p>Total Trainers</p>
        <h2>{{count($trainers)}}</h2>
    </div>
    <div class="sidecard">
        <p>Unavailable Trainers</p>
        @php
        $ut = 0;
        foreach ($trainers as $trainer){
        if($trainer->status == "UnAvailable"){
        $ut++;
        }
        }
        @endphp
        <h2>{{$ut}}</h2>
    </div>
    <div class="sidecard">
        <p>Total Equipments</p>
        <h2>{{count($equipments)}}</h2>
    </div>
    <div class="sidecard">
        <p style="font-size: 15px;">Defective Equipments</p>
        @php
        $de = 0;
        foreach ($equipments as $equipment){
        if($equipment->status == "Defective"){
        $de++;
        }
        }
        @endphp
        <h2>{{$de}}</h2>
    </div>

    <div id="fdsec" class="downgraph">
    <div id="fdmembers" class="table-container">
            <div>
                <h2>Booked for Free Trial</h2>
                <section>

                <form action="{{url('/')}}/dashboard/search" method="get">
                    <input type="search" name="search" placeholder="Search by name or email" value="{{$search}}">
                    <button class="btn">Search</button>
                </form>
                <a href="{{url('/')}}/dashboard">
                    <button  class="res">Reset</button>
                </a>
            </section>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Registered-date</th>
                        <th>Trial-date</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($ftmembers as $ftmember)
                    <tr>
                        <td>{{$ftmember->name}}</td>
                        <td>{{$ftmember->email}}</td>
                        <td>{{$ftmember->phone}}</td>
                        <td>{{$ftmember->created_at}}</td>
                        <td>{{$ftmember->dt}}</td>
                        <td>{{$ftmember->message}}</td>
                        <td>
                            <a href="{{url('/')}}/deleteftmember/{{$ftmember->FDMember_id}}"><button>Delete</button></a>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@if($search != "")


<script>

document.addEventListener("DOMContentLoaded",function(e){
    var section = document.getElementById("fdsec");
    section.scrollIntoView({behavior:'smooth'});
});

</script>    

@endif






@endsection