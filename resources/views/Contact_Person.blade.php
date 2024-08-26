@extends('layouts.main')

 @push('css')
      <link rel="stylesheet" href="/Contact.css">
 @push('title')
    <title>admin Contact</title>

 @section('container')
    
 <div class="table-container">
        <div>
            <h2>Registered for Contact</h2>
            <section>

                <form action="">
                    <input type="search" name="search" placeholder="Search by name or email" value="{{$search}}">
                    <button class="btn">Search</button>
                </form>
                <a href="{{url('/')}}/contactinfo">
                    <button  class="res">Reset</button>
                </a>
            </section>
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
                    <th>Registered-Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            

            @foreach($cp as $person)
                <tr>
                    <td>{{$person->name}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->phone}}</td>
                    <td>{{$person->created_at}}</td>
                    <td>
                        <a href="{{url('/')}}/deletecontactinfo/{{$person->contact_person_id}}"><button>Delete</button></a>
                    </td>
                </tr>
            @endforeach
            
                 
                 
                 
            </tbody>
        </table>
    </div>


 @endsection