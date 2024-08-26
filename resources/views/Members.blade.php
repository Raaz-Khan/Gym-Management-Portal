@extends('layouts.main')

@push('css')
     <link rel="stylesheet" href="/Members.css">
@push('title')
   <title>Members</title>

@section('container')


    <div class="table-container">
        <div>
            <h2>Members</h2>
            <section>

                <form action="">
                    <input type="search" name="search" placeholder="Search by name or email" value="{{$search}}">
                    <button class="btn">Search</button>
                </form>
                <a href="{{url('/')}}/members">
                    <button  class="res">Reset</button>
                </a>
            </section>
            <a href="{{url('/')}}/addmember">
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
                    <th>DOB</th>
                    <th>Weight</th>
                    <th>Plan</th>
                    <th>Goal</th>
                    <th>Address</th>
                    <th>Timing</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->phone}}</td>
                    <td>{{$member->gender}}</td>
                    <td>{{$member->dob}}</td>
                    <td>{{$member->weight}}</td>
                    <td>{{$member->plan}}</td>
                    <td>{{$member->goal}}</td>
                    <td>{{$member->address}}</td>
                    <td>{{$member->start_timing}}--{{$member->end_timing}}</td>
                    <td>{{$member->status}}</td>
                    <td>
                        <a href="{{url('/')}}/deletemember/{{$member->member_id}}"><button>Delete</button></a>
                        <a href="{{url('/')}}/editmember/{{$member->member_id}}"><button>Update</button></a>
                    </td>
                </tr>
               @endforeach
                 
            </tbody>
        </table>
    </div>


 
@endsection