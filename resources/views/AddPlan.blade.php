 @extends('layouts.main')

 @push('css')
      <link rel="stylesheet" href="/Addplan.css">
 @push('title')
    <title>Add Plan</title>

 @section('container')
   
 <div class="form-container">
       <h2>{{$title}}</h2>
        <form action="{{$url}}" method="post">
            @csrf
            <div class="form-group">
                <label for="plan_name">Plans Name:</label>
                <input type="text" id="plan_name" name="plan_name" required value=@php if(isset($plan)) echo $plan->plan_name @endphp >
            </div>

            <div class="form-group">
                <label for="duration">Choose Plan duration:</label>
                <select id="duration" name="duration" required>
                <option value="blank"></option>
                <option value="1-Month"  @php if(isset($plan)) echo $plan->duration == "1-Month" ? "selected" : "" @endphp >1-Month</option>
                  @for($i=2;$i<=12;$i++)
                  <option value="{{$i}}-Months" @php if(isset($plan)) echo $plan->duration == $i."-Months" ? "selected" : "" @endphp >{{$i}}-Months</option>
                  @endfor
                </select>
            </div>

            <div class="form-group">
                <label for="price">Plans Price</label>
                <input type="number" id="price" name="price" required value= @php if(isset($plan)) echo $plan->price @endphp>
            </div>
            <div class="form-group">
                <label for="offer_price">Plans offer Price</label>
                <input type="number" id="offer_price" name="offer_price" required value = @php if(isset($plan)) echo $plan->offer_price @endphp>
            </div>
            
            <button type="submit">{{$btn}}</button>
        </form>
    </div>


 @endsection