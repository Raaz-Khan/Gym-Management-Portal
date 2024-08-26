<?php

// app/Http/Controllers/PayPalController.php
namespace App\Http\Controllers;

use App\Models\plan;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;

class StripeController extends Controller
{
     

    public function stripe( Request $request ){
        // $WebPlan = plan::find($id);
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        // $id = $request->id;
        
        $request->session()->put('id',$request->id);
        
        $redirectUrl = route('stripe.checkout.success').'?session_id={CHECKOUT_SESSION_ID}';

        $response = $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,  
            'payment_method_types' => ['link','card'],
            'line_items' => [
                [
                    'price_data' =>[
                        'product_data'=>[
                            'name' => $request->plan,
                        ],
                        'unit_amount' => 100 * $request->price,
                        'currency' => 'INR',
                    ],
                    'quantity' => 1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes' => true,
        ]);

        return redirect($response['url']);


        // $data = compact('WebPlan');
        // return view("WebAddMember")->with($data);
        
    }

    public function payment_success(Request $request){
        
         
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $response = $stripe->checkout->sessions->retrieve($request->session_id);
        $id = (session('id'));
        $request->session()->put('ispaid',true);
        return redirect('/ifitness/addmember/plan/'.$id)->with('success','Payment successful Lets add your details.');
    }

    // public function payment_failed(){
        
    // }
    
}


