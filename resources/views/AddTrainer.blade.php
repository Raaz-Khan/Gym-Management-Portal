@extends('layouts.main')

@push('css')
     <link rel="stylesheet" href="/addTrainer.css">
@push('title')
   <title>Add Trainer</title>

@section('container')
   
<div class="form-container">
        <h2>{{$title}}</h2>
        <form action="{{$url}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required value=@php if(isset($trainer)) echo $trainer->name @endphp>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value=@php if(isset($trainer)) echo $trainer->email @endphp>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required value=@php if(isset($trainer)) echo $trainer->phone @endphp>
            </div>
            <div class="form-group">
                <label for="gender">Choose Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="blank"></option>
                    <option value="Male"  @php if(isset($trainer)) echo $trainer->gender == "Male" ? "selected" : "" @endphp>Male </option>
                    <option value="Female" @php if(isset($trainer)) echo $trainer->gender == "Female" ? "selected" : "" @endphp>Female</option>
                    <option value="Others" @php if(isset($trainer)) echo $trainer->gender == "Others" ? "selected" : "" @endphp>Others</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="fee">Fee Amount</label>
                 <input type="number" id="fee" name="fee" value=@php if(isset($trainer)) echo $trainer->fee @endphp>
            </div>
            <div class="form-group">
                <label for="speciality">Speciality in:</label>
                <select id="speciality" name="speciality">
                    <option value="blank"></option>
                    <option value="Muscle-Gain Coach" @php if(isset($trainer)) echo $trainer->speciality == "Muscle-Gain Coach" ? "selected" : "" @endphp>Muscle-Gain Coach</option>
                    <option value="Fat-Loss Coach" @php if(isset($trainer)) echo $trainer->speciality == "Fat_Loss Coach" ? "selected" : "" @endphp>Fat-Loss Coach</option>
                    <option value="Weight-Lifting Coach" @php if(isset($trainer)) echo $trainer->speciality == "Weight-Lifting Coach" ? "selected" : "" @endphp>Weight-Lifting Coach</option>
                    <option value="Body-Building Coach" @php if(isset($trainer)) echo $trainer->speciality == "Body-Building Coach" ? "selected" : "" @endphp>Body-Building Coach</option>
                    <option value="Meditation Coach" @php if(isset($trainer)) echo $trainer->speciality == "Meditation Coach" ? "selected" : "" @endphp>Meditation Coach</option>
                    <option value="Others" @php if(isset($trainer)) echo $trainer->speciality == "Others" ? "selected" : "" @endphp>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="blank"></option>
                    <option value="Available" @php if(isset($trainer)) echo $trainer->status == "Available" ? "selected" : "" @endphp>Available</option>
                    <option value="UnAvailable" @php if(isset($trainer)) echo $trainer->status == "UnAvailable" ? "selected" : "" @endphp>UnAvailable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="2">@php if(isset($trainer)) echo $trainer->address @endphp</textarea>
            </div>
            <div class="form-group">
                <label for="timing">Session Timing:</label>
                 Start Time <input type="time" id="start_timing" name="start_timing" required value=@php if(isset($trainer)) echo $trainer->start_timing @endphp>
                End Time <input type="time" id="end_timing" name="end_timing" required value=@php if(isset($trainer)) echo $trainer->end_timing @endphp>
            </div>
            <button type="submit">{{$btn}}</button>
        </form>
    </div>


@endsection