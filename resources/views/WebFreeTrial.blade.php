@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebFreeTrial.css">
 @push('title')
    <title>Ifitness-Free-Trail</title>


@section('container')

<div class="banner">
     <h2>Book A Free Trial With I Fitness</h2>
     <p>Fill Out This Form to Book Your Free Trial</p>

</div>

<div id="ftsec" class="form-container">
        <form action="{{url('/')}}/freetrial" method="post">
          @csrf
            <input type="text" name="name" placeholder="Enter Full Name" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="tel" name="phone" placeholder="Enter Phone Number" required>
            <input type="date" name="dt" placeholder="Date" required>
            <textarea name="message" rows="5" placeholder="Enter Message"></textarea>

            <button type="submit">Submit</button>
        </form>
</div>







@endsection