@extends('layouts.webmain')

 @push('css')
      <link rel="stylesheet" href="/WebNutrition.css">
 @push('title')
    <title>Nutrition</title>


@section('container')

<div class="banner">
     <h2>Nutrition is More Important Than Excercise</h2>
     <p>HERE'S SOME NUTRITIONAL TIPS FROM US</p>

</div>
<div class="container">
<header>
        <h1>Nutrition Tips and Healthy Recipes</h1>
    </header>
    <section class="nutrition-tips">
        <h2>Nutritional Tips</h2>
        <ul>
            <li>Eat a balanced diet rich in fruits, vegetables, and lean proteins.</li>
            <li>Stay hydrated by drinking plenty of water throughout the day.</li>
            <li>Avoid processed foods and excessive sugar intake.</li>
            <li>Include healthy fats such as avocados, nuts, and olive oil in your diet.</li>
            <li>Don't skip breakfast; it's important to start your day with a nutritious meal.</li>
        </ul>
    </section>
    <section class="recommended-diets">
        <h2>Recommended Diets</h2>
        <div class="diet">
            <h3>Ketogenic Diet</h3>
            <p>A high-fat, low-carbohydrate diet that can help with weight loss and improve overall health.</p>
        </div>
        <div class="diet">
            <h3>Mediterranean Diet</h3>
            <p>A diet inspired by the eating habits of countries bordering the Mediterranean Sea, focusing on whole grains, fruits, vegetables, and healthy fats.</p>
        </div>
        <div class="diet">
            <h3>Plant-Based Diet</h3>
            <p>A diet that emphasizes whole, plant-based foods such as fruits, vegetables, legumes, nuts, and seeds, which can improve heart health and reduce inflammation.</p>
        </div>
    </section>
    <section class="healthy-recipes">
        <h2>Healthy Recipes</h2>
        <div class="recipe">
            <h3>Quinoa Salad</h3>
            <p>A refreshing salad with quinoa, cherry tomatoes, cucumbers, feta cheese, and a lemon vinaigrette.</p>
        </div>
        <div class="recipe">
            <h3>Grilled Chicken with Veggies</h3>
            <p>Marinated grilled chicken served with a side of roasted vegetables including bell peppers, zucchini, and carrots.</p>
        </div>
        <div class="recipe">
            <h3>Berry Smoothie</h3>
            <p>A delicious smoothie made with mixed berries, Greek yogurt, and a touch of honey.</p>
        </div>
    </section>

</div>






@endsection