@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebMembership.css">
 @push('title')
    <title>Membership</title>


@section('container')

<div class="banner">
     <h2>Buy A Membership That is Suitable For You</h2>
     <p>Select The Plan and Fill Out The Subscription Form</p>
     

</div>
 
@if(Session::has('added'))
             <div class="PopM">
                {{ Session::get('added')}}
                @php
                    Session::forget('added');
                @endphp
             </div>
        @endif
    <div class="pricing-container">
        <h1>Choose Your Pricing Plan</h1>
        <div class="pricing-table">
        @foreach($plans as $plan)
            <div class="pricing-card">
                <h2>{{$plan->plan_name}}</h2>
                <p>RECURS FOR {{$plan->duration}}</p>
                <p class="price">Regular-Price: Rs <del>{{$plan->price}}</del> </p>
                <p class="description">Unlimited access to services</p>
                <a href="{{ route('stripe.checkout',['price' => $plan->offer_price ,'plan' => $plan->plan_name , 'id' => $plan->Plan_id ]) }}" class="btn">Select</a>
                <ul>
                    <p class="price">Offer-Price: Rs {{$plan->offer_price}}</p>
                    <li>Unlimited access to yoga classes</li>
                    <li>24/7 Gym access</li>
                    <li>Use of lockers & showers</li>
                    <li>Access to pool 7 days a week</li>
                    <li>12% off on all store products</li>
                    <li>Free gym t-shirt</li>
                </ul>
            </div>
            @endforeach
            
        </div>
    </div>








@endsection