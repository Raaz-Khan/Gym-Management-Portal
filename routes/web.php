<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CollabUnitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\ContactPersonController;
use App\Http\Controllers\FDMemberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StripeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

// Website routes


// post routes for website

Route::post('/addcontactinfo',[ContactPersonController::class,'SubmitContactInfo']);


Route::post('/addcollabinfo',[CollabUnitController::class,'SubmitCollabInfo']);

Route::post('/freetrial',[FDMemberController::class,'SubmitFreeTrialInfo']);



// view routes

Route::get('/', function () {
    return view('WebHome');
});

// membership routes

Route::get('/ifitness/membership',[PlanController::class,'MembershipView'])->name('membership.view');


Route::group(['middleware' => 'paymentSessionMiddleware'], function () { 
    
Route::get('/ifitness/addmember/plan/{id}',[MemberController::class,'WebAddMember'])->name('webmember.add');
Route::post('/webaddmember',[MemberController::class,'WebSubmitMember']);

});

// payment
Route::get('/stripe/checkout',[StripeController::class,'stripe'])->name('stripe.checkout');
Route::get('/stripe/checkout/success',[StripeController::class,'payment_success'])->name('stripe.checkout.success');




Route::get('/ifitness/nutrition', function () {
    return view('WebNutrition');
});
Route::get('/ifitness/locations', function () {
    return view('WebLocations');
});
Route::get('/ifitness/contact', function () {
    return view('WebContact');
});
Route::get('/ifitness/freetrial', function () {
    return view('WebFreeTrial');
});
Route::get('/ifitness/faq', function () {
    return view('WebFaq');
});
Route::get('/ifitness/termsandconditions', function () {
    return view('WebTermsConditions');
});
Route::get('/ifitness/collab', function () {
    return view('WebCollaboration');
});



Route::group([],function(){

Route::get('/login',[AdminController::class,'index'])->name('login');

Route::get('/logout',[AdminController::class,'logout']);


Route::post('/adminlogin',[AdminController::class,'login']);

});





// middleware routes


Route::group(['middleware' => 'adminSessionMiddleware'], function () { 

    
    // Dashboard Routes 
Route::group([],function(){

    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/dashboard/search',[DashboardController::class,'index2']);
    
});    
    
    // Plan model Routes
  Route::group([],function (){

      
      Route::get('/plans',[PlanController::class,'index']);
      Route::get('/addform',[PlanController::class,'addform']);
      Route::post('/addplan',[PlanController::class,'submitplan']);
      Route::get('/deleteplan/{id}',[PlanController::class,'deleteplan'])->name('plan.delete');
      Route::get('/editplan/{id}',[PlanController::class,'editplan'])->name('plan.edit');
      Route::post('/updateplan/{id}',[PlanController::class,'updateplan'])->name('plan.update');
});  
      
    
    // Member model Routes
Route::group([],function(){

    
    Route::get('/members',[MemberController::class,'ViewMember']);
    Route::get('/addmember',[MemberController::class,'AddMember'])->name('member.add');
    Route::post('/addmember',[MemberController::class,'SubmitMember']);
    Route::get('/deletemember/{id}',[MemberController::class,'DeleteMember'])->name('member.delete');
    Route::get('/editmember/{id}',[MemberController::class,'EditMember'])->name('member.edit');
    Route::post('/updatemember/{id}',[MemberController::class,'UpdateMember'])->name('member.update');
    
});
    
    // Trainer model Routes
Route::group([],function(){   

    Route::get('/trainers',[TrainerController::class,'ViewTrainer']);
    Route::get('/addtrainer',[TrainerController::class,'AddTrainer'])->name('trainer.add');
    Route::post('/addtrainer',[TrainerController::class,'SubmitTrainer']);
    Route::get('/deletetrainer/{id}',[TrainerController::class,'DeleteTrainer'])->name('trainer.delete');
    Route::get('/edittrainer/{id}',[TrainerController::class,'EditTrainer'])->name('trainer.edit');
    Route::post('/updatetrainer/{id}',[TrainerController::class,'UpdateTrainer'])->name('trainer.update');
    
});  
    
    // Equipment Model Routes
Route::group([],function(){

    Route::get('/equipments',[EquipmentController::class,'ViewEquipment']);
    Route::get('/addequipment',[EquipmentController::class,'AddEquipment'])->name('equipment.add');
    Route::post('/addequipment',[EquipmentController::class,'SubmitEquipment']);
    Route::get('/deleteequipment/{id}',[EquipmentController::class,'DeleteEquipment']);
    Route::get('/editequipment/{id}',[EquipmentController::class,'EditEquipment']);
    Route::post('/updateequipment/{id}',[EquipmentController::class,'UpdateEquipment']);
});  
    
    
    // contact member routes
Route::group([],function(){

    Route::get('/contactinfo',[ContactPersonController::class,'Index']);
    Route::get('/deletecontactinfo/{id}',[ContactPersonController::class,'DeleteContactInfo']);
   
});
//   collab info routes
Route::group([],function(){

    Route::get('/collabinfo',[CollabUnitController::class,'Index']);
    Route::get('/deletecollabinfo/{id}',[CollabUnitController::class,'DeleteCollabInfo']);
});

// freetrial routes
    Route::get('/deleteftmember/{id}',[FDMemberController::class,'DeleteFreeTrialInfo']);



// report routes

    Route::get('/report',[ReportController::class,'index']);
    
    
});





 








// For Learning
// Route::get('/plans/{name?}', function ($name = null) {
//     // $data = compact('name');
//         // print_r($data);
//     return view('Plans',['na'=>$name]);

//     use $na in your view page