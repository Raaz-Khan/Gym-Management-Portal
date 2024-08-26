@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebFaq.css">
 @push('title')
    <title>Frequently asked questions</title>


@section('container')


<div class="banner">
     <h2>Frequently Asked Questions</h2>

</div>


<header>
        <h1>Questions</h1>
</header>
    <section class="faq-section">
        <div class="faq">
            <h2>What are your opening hours?</h2>
            <p>Our gym is open 24/7. Members can access the gym at any time using their membership card.</p>
        </div>
        <div class="faq">
            <h2>Do you offer personal training?</h2>
            <p>Yes, we offer personal training sessions with certified trainers. You can book sessions at the front desk or through our website.</p>
        </div>
        <div class="faq">
            <h2>What types of membership do you offer?</h2>
            <p>We offer several membership options including monthly, yearly, and family memberships. Each plan comes with different benefits and pricing.</p>
        </div>
        <div class="faq">
            <h2>Do you have group fitness classes?</h2>
            <p>Yes, we offer a variety of group fitness classes such as yoga, spinning, HIIT, and Zumba. Check our class schedule for more details.</p>
        </div>
        <div class="faq">
            <h2>Is there a free trial available?</h2>
            <p>Yes, we offer a 7-day free trial for new members. Sign up on our website or visit the gym to start your trial.</p>
        </div>
        <div class="faq">
            <h2>What safety measures are in place?</h2>
            <p>We have implemented various safety measures including regular cleaning, sanitizing stations, and social distancing protocols to ensure a safe environment for our members.</p>
        </div>
    </section>

    <section class="ask-question">
        <h2>Ask a Question</h2>
        <form action="submit_question.php" method="post">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="question">Your Question</label>
                <textarea id="question" name="question" rows="4" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>



@endsection