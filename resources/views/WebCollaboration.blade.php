@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebCollaboration.css">
 @push('title')
    <title>Collaboration</title>


@section('container')

<div class="banner">
     <h2>Collaboration With Ifitness</h2>
     <p>FILL OUT THE FORM WE WILL CONTACT YOU</p>

</div>


<div class="container">

    <header>
        <h1>Collaboration Opportunities</h1>
    </header>
    <section class="collaboration-section">
        <div class="collaboration-content">
            <h2>Partner with Us</h2>
            <p>We are always looking for exciting new collaboration opportunities with like-minded businesses and professionals. Whether you are a brand, fitness expert, or community organization, we would love to hear from you!</p>
            <p>Fill out the form below to tell us more about yourself and how we can work together.</p>
        </div>
        <section id="collabsec" class="collaboration-form">
            <h2>Collaboration Form</h2>
            <form action="{{url('/')}}/addcollabinfo" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="organization">Organization/Brand</label>
                    <input type="text" id="org" name="org" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>

            <div class="sidelogo">
                I Fitness
            </div>
        </section>
    </section>
</div>
    
    
    
    
    
    
    @endsection