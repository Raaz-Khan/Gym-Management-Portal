@extends('layouts.main')

 @push('css')
      <link rel="stylesheet" href="/Plans.css">
 @push('title')
    <title>All Plans</title>

 @section('container')
    
 <div class="table-container">
        <div>
            <h2>Subscription Plans</h2>
            <section>

                <form action="">
                    <input type="search" name="search" placeholder="Search by Plan-Name" value="{{$search}}">
                    <button class="btn">Search</button>
                </form>
                <a href="{{url('/')}}/plans">
                    <button  class="res">Reset</button>
                </a>
            </section>
            <a href="{{url('/')}}/addform">
                <button class="btn">ADD</button>
            </a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Plan Name</th>
                    <th>Duration</th>
                    <th>Price</th>
                    <th>Offer Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($plans as $plan)
                <tr>
                    <td>{{$plan->plan_name}}</td>
                    <td>{{$plan->duration}}</td>
                    <td><del>{{$plan->price}}</del></td>
                    <td>{{$plan->offer_price}}</td>
                    <td>
                        <!-- <a href="{{url('/')}}/deleteplan/{{$plan->Plan_id}}"><button>Delete</button></a> -->
                        <a href="{{route('plan.delete',['id'=>$plan->Plan_id])}}"><button>Delete</button></a>
                        <a href="{{route('plan.edit',['id'=>$plan->Plan_id])}}"><button>Update</button></a>
                    </td>
                </tr>
            @endforeach
                 
                 
                 
            </tbody>
        </table>
    </div>


 @endsection