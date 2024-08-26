@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebHome.css">
 @push('title')
    <title>Home</title>


@section('container')

<section id="HomeNav">
        <section id="Home">
          <div class="homediv">
            <h2>
              <i class="fa-solid fa-m"></i>ake
              <i class="fa-brands fa-yoast"></i>ourself
            </h2>
            <h3>Stronger Than Your Excuses</h3>
          </div>

          <div class="homediv">
            <p>Build your body Transform your life Upgrade yourself </p>
            <p>Book your Free trail Now</p>
            <a href="{{url('/')}}/ifitness/freetrial">
              <div>Book Now</div>
            </a>
          </div>
        </section>
      </section>

    <section class="programe">
        <div>
          <p>EXPERIENCE THE FITNESS JOURNEY</p>

          <h2>1200 SQ.FT OPEN AIR FITNESS STUDIO</h2>

          <p>
            Our rooftop open air Fitness studio will help you push your limits
            and get you to your fitness goals.
          </p>

          <a href="{{url('/')}}/ifitness/membership">
            <button>Join Today</button>
          </a>
        </div>

        <div></div>
      </section>

     <div class="slide">
        
    </div>

      <div class="container">
        <h2>Our Classes</h2>

        <div class="main-box">
          <div class="main">
            <img
              src="https://www.fitnessfirst.net.in/sites/default/files/dynamic_movement_training/staff-_-member-gym-floor-1-600x400.jpg"
              alt="Cardio"
            >
            <div class="text">
              <h3>Cardio Sessions</h3>
              <p>
                We Provide full cardio Sessions.There are many benefits of
                cardio exercises. The first and most important is it helps
                strengthen the heart muscle and lungs. Weight loss is the main
                advantage of the day, and also maximizes the amount of oxygen
                that the body takes and also improves blood circulation.
              </p>
            </div>
          </div>

          <div class="main">
            <div class="text">
              <h3>Strength Training</h3>
              <p>
                Our Main Focus is on Strength Training Because Strength training
                may enhance your quality of life and improve your ability to do
                everyday activities. Strength training can also protect your
                joints from injury. Building muscle also can contribute to
                better balance and may reduce your risk of falls.
              </p>
            </div>
            <img
              src="https://www.fitnessfirst.net.in/sites/default/files/dynamic_movement_training/pt-_-member-5-600x400.jpg"
              alt="Strength"
            >
          </div>

          <div class="main">
            <img
              src="https://www.fitnessfirst.net.in/sites/default/files/clubs/gx-body-attack-3-600x400.png"
              alt="Group excercise"
            >
            <div class="text">
              <h3>Endurance Training</h3>
              <p>
                We also give Endurance Training to our Members. endurance
                exercise includes activities that increase your breathing and
                heart rate such as walking, jogging, swimming, biking and
                jumping rope. Endurance activity keeps your heart, lungs and
                circulatory system healthy and improves your overall fitness.
              </p>
            </div>
          </div>
        </div>
      </div>


      <!-- community -->
     <section id="community">
          <h3>Why US</h3>
          <div>
            <p>On the 30th of September at 7 o’clock in the afternoon, it’s time to start on my workout routine. As I’m heading into the small gym building I feel calm and anxious. This is the feeling I would always get as I entered through the glass doors. I hear music playing in the background and the see people working out with different machines and weights. A friend and also front desk worker name Dong said to me, “Welcome, good choice to be here today.” “The gym is a great place to go for people to feel healthier mentally and physically.” People go to the gym for different reasons. Most people go to the gym regularly because they want to maintain a healthy lifestyle through exercise. Another reason is to lose weight and transition into a healthy lifestyle. You can be someone who weighs 300 pounds and finally decide to lose it all. Some people find a community at the gym, and they value the social interactions they have there(Idea). I personally go to the gym to relieve stress and maintain a healthy lifestyle through exercise.</p>
          </div>
          <div>
            <div>
            <img src="https://images.squarespace-cdn.com/content/v1/5daedc99ae72575df5d8d8f9/fc3825dc-72ca-4a48-b92a-fe01c5eb4d7d/OneLDN-NewEquipment-30.jpg?format=1500w" alt="error occured" height=250 >
            <h4>Full with Equipments</h4>
            </div>
            <div>
            <img src="https://images.squarespace-cdn.com/content/v1/5daedc99ae72575df5d8d8f9/62230044-38fc-491f-8423-8c1d21483d36/OneLDN-NewEquipment-29.jpg?format=1500w" alt="error occured" height=250 >
            <h4>Wide Area For Working Out</h4>
            </div>
            <div>
            <img src="https://images.squarespace-cdn.com/content/v1/5daedc99ae72575df5d8d8f9/13979148-3949-4afb-85ca-6bf2cb8fa6fe/Yoga+Class-05.jpg?format=1500w" alt="error occured" height=250 >
            <h4>Meditation with Peace</h4>
            </div>
            <div>
            <img src="https://images.squarespace-cdn.com/content/v1/5daedc99ae72575df5d8d8f9/223708c4-c324-4361-a2bb-eb140202f30b/Photo+23-09-2021%2C+15+32+07.jpg?format=1500w" alt="error occured" height=250 >
            <h4>Clean, Comfortable and Safe</h4>
            </div>
          </div>

      </section>




@endsection