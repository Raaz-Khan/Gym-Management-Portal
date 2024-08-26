@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/AddMember.css">
 @push('title')
    <title>Submit Information</title>


@section('container')


@if(Session::has('success'))
     <div class="PopM">
        {{ Session::get('success')}}
        @php
            Session::forget('success');
        @endphp
     </div>
@endif

<div id="memsec" class="form-container">
        <h2>Membership Form</h2>
        
            

        <form  action="{{url('/')}}/webaddmember" method="post">
        @csrf
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required value=@php if(isset($member)) echo $member->name @endphp>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value=@php if(isset($member)) echo $member->email @endphp>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required value=@php if(isset($member)) echo $member->phone @endphp>
            </div>
            <div class="form-group">
                <label for="dob">Enter Dob:</label>
                <input type="date" id="dob" name="dob" value=@php if(isset($member)) echo $member->dob @endphp>
            </div>

            <div class="form-group">
                <label for="gender">Choose Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="blank"></option>
                    <option value="Male" @php if(isset($member)) echo $member->gender == "Male" ? "selected" : "" @endphp>Male </option>
                    <option value="Female"  @php if(isset($member)) echo $member->gender == "Female" ? "selected" : "" @endphp>Female</option>
                    <option value="Others"  @php if(isset($member)) echo $member->gender == "Others" ? "selected" : "" @endphp>Others</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="weight">Enter weight:</label>
                <input type="number" id="weight" name="weight" value=@php if(isset($member)) echo $member->weight @endphp>
            </div>

            <div class="form-group">
                <label for="plan">Choose Plan:</label>
                <select id="plan" name="plan" required>
                    <option value="blank"></option>
                @foreach ($plans as $plan)
                    <option value="{{$plan->plan_name}}" @php if(isset($WebPlan)) echo $WebPlan->plan_name == $plan->plan_name ? "selected" : ""  @endphp  
                        @php if(isset($WebPlan)) echo $WebPlan->plan_name != $plan->plan_name ? "disabled" : ""  @endphp> {{$plan->plan_name}} </option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="goal">Choose Goal:</label>
                <select id="goal" name="goal">
                    <option value="blank"></option>
                    <option value="Muscle-Gain"  @php if(isset($member)) echo $member->goal == "Muscle-Gain" ? "selected" : "" @endphp>Muscle-Gain</option>
                    <option value="Fat-Loss" @php if(isset($member)) echo $member->goal == "Fat-Loss" ? "selected" : "" @endphp>Fat-Loss</option>
                    <option value="Weight-Lifting" @php if(isset($member)) echo $member->goal == "Weight-Lifting" ? "selected" : "" @endphp>Weight-Lifting</option>
                    <option value="Body-Building" @php if(isset($member)) echo $member->goal == "Body_Building" ? "selected" : "" @endphp>Body-Building</option>
                    <option value="Meditation" @php if(isset($member)) echo $member->goal == "Meditation" ? "selected" : "" @endphp>Meditation</option>
                    <option value="Others" @php if(isset($member)) echo $member->goal == "Others" ? "selected" : "" @endphp>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="blank"></option>
                    <option value="Active" @php if(isset($member)) echo $member->status == "Active" ? "selected" : "" @endphp>Active</option>
                    <option value="InActive" @php if(isset($member)) echo $member->status == "InActive" ? "selected" : "" @endphp>InActive</option>
                </select>
            </div>
            

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="2" >@php if(isset($member)) echo $member->address @endphp</textarea>
            </div>
            <div class="form-group">
                <label for="timing">Training Timing:</label>
                 Start Time <input type="time" id="start_timing" name="start_timing" value=@php if(isset($member)) echo $member->start_timing @endphp>
                End Time <input type="time" id="end_timing" name="end_timing" value=@php if(isset($member)) echo $member->end_timing @endphp>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>




@endsection