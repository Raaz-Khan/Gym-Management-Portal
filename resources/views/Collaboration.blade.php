@extends('layouts.main')

 @push('css')
      <link rel="stylesheet" href="/Collaboration.css">
 @push('title')
    <title>admin Collaborations</title>

 @section('container')
    
 <div class="table-container">
        <div>
            <h2>Registered for Collaboration</h2>
            <section>

                <form action="">
                    <input type="search" name="search" placeholder="Search by name or email" value="{{$search}}">
                    <button class="btn">Search</button>
                </form>
                <a href="{{url('/')}}/collabinfo">
                    <button  class="res">Reset</button>
                </a>
            </section>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Organisation/Brand</th>
                    <th>Registered-date</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($cu as $collabunit)
                <tr>
                    <td>{{$collabunit->name}}</td>
                    <td>{{$collabunit->email}}</td>
                    <td>{{$collabunit->org}}</td>
                    <td>{{$collabunit->created_at}}</td>
                    <td>{{$collabunit->message}}</td>
                    <td>
                        <a href="{{url('/')}}/deletecollabinfo/{{$collabunit->collab_unit_id}}"><button>Delete</button></a>
                    </td>
                </tr>
            @endforeach
                 
                 
            </tbody>
        </table>
    </div>


 @endsection