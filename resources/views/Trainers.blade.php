@extends('layouts.main')

 @push('css')
      <link rel="stylesheet" href="/Trainers.css">
 @push('title')
    <title>All Trainers</title>

 @section('container')


    <div class="table-container">
        <div>
            <h2>Trainers</h2>
            <section>

                <form action="">
                    <input type="search" name="search" placeholder="Search by name or email" value="{{$search}}">
                    <button class="btn">Search</button>
                </form>
                <a href="{{url('/')}}/trainers">
                    <button  class="res">Reset</button>
                </a>
            </section>
            <a href="{{url('/')}}/addtrainer">
                <button class="btn">ADD</button>
            </a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Fee</th>
                    <th>Speciality</th>
                    <th>Address</th>
                    <th>Timing</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach ($trainers as $trainer)
                <tr>
                    <td>{{$trainer->name}}</td>
                    <td>{{$trainer->email}}</td>
                    <td>{{$trainer->phone}}</td>
                    <td>{{$trainer->gender}}</td>
                    <td>Rs-{{$trainer->fee}}</td>
                    <td>{{$trainer->speciality}}</td>
                    <td>{{$trainer->address}}</td>
                    <td>{{$trainer->start_timing."--".$trainer->end_timing}}</td>
                    <td>{{$trainer->status}}</td>
                    <td>
                        
                        <a href="{{url('/')}}/deletetrainer/{{$trainer->Trainer_id}}"><button>Delete</button></a>
                        <a href="{{url('/')}}/edittrainer/{{$trainer->Trainer_id}}"><button>Update</button></a>
                    </td>
                </tr>
            @endforeach
                 
            </tbody>
        </table>
    </div>
 

@endsection