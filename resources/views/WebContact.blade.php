@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebContact.css">
 @push('title')
    <title>Contact</title>


@section('container')
<div class="banner">
     <h2>Contact I Fitness Gym</h2>
     <p>WE'D LOVE TO HEAR YOU</p>

</div>
 

    <div class="container">
        <h1>Contact Us</h1>

     <div class="content">

          <div class="contact-info">
               <h2>Phone Numbers</h2>
               <p><strong>Phone:</strong> +1 234 567 890</p>
               <p><strong>Phone:</strong> +1 234 567 890</p>
               <p><strong>Phone:</strong> +1 234 567 890</p>

               <h2>Emails</h2>
               <p><strong>Email:</strong> contact@gymwebsite.com</p>
               <p><strong>Email:</strong> contact@gymwebsite.com</p>
               <p><strong>Email:</strong> contact@gymwebsite.com</p>
          </div>
          <div class="contact-form">
               <form id="Webconsec" action="{{url('/')}}/addcontactinfo" method="post">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" required>
                    
                    <button type="submit">Submit</button>
               </form>
          </div>
     </div>
   </div>







@endsection