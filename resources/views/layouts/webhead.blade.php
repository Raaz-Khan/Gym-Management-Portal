 <div id="Nav">
   <a href="{{url('/')}}">
     <div class="logocontainer">
       <img class="logo" src="{{asset('images/file.png')}}" width="50" alt="error"></img>
       <p>
         <i class="fa-solid fa-f"></i>itness
       </p>
     </div>
   </a>


   <section class="hamcontainer">

     <div class="hambutton">
       <span></span>
       <span></span>
       <span></span>
     </div>

     <ul id="content" class="menu">


       <a href="{{url('/')}}">
         <li>
           <i class="fa-solid fa-house"></i> Home
         </li>
       </a>


       <a href="{{url('/')}}/ifitness/membership">
         <li>
           <i class="fa-solid fa-dumbbell"></i> Membership
         </li>
       </a>
       <a href="{{url('/')}}/ifitness/nutrition">
         <li>
           <i class="fa-solid fa-apple-whole"></i> Nutrition
         </li>
       </a>
       <a href="{{url('/')}}/ifitness/locations">
         <li>
           <i class="fa-solid fa-map-location-dot"></i> Locations
         </li>
       </a>
       <a href="{{url('/')}}/ifitness/contact">
         <li>
           <i class="fa-solid fa-headset"></i> Contact-us
         </li>
       </a>
     </ul>



   </section>
 </div>

 <script>
   let hambtn = document.querySelector(".hambutton");
   let hamMenu = document.getElementById('content');
   let hamcontainer = document.querySelector(".hamcontainer");

   hambtn.addEventListener("click", () => {
     hambtn.classList.toggle("crossbtn");
     hamMenu.classList.toggle("menu");
     // hamcontainer.classList.toggle("fullheight");
   });
 </script>