 
<footer>
    <div>
      <h3>JOIN NOW AND BOTH GET 50% OFF YOUR FIRST FULL MONTH</h3>
      <p>FULL ACCESS TO ALL FACILITIES</p>
    </div>

    <div>
      <h4>
        Joining a gym can be a difficult decision and we are here to help
        you.
      </h4>

      <form id="formsec" action="{{url('/')}}/addcontactinfo" method="post">
        @csrf
        <input type="text" id="name" name="name" required placeholder="Full Name"></input>
        <input type="email" id="email" name="email" required placeholder="Email Address"></input>
        <input type="tel" id="phone" name="phone" required placeholder="Mobile Number"></input>
        <button type="submit">SUBMIT</button>
      </form>
      
    </div>
    <div>
      <section>
        <h4>Follow us on</h4>

        <section>
          <a href="https://msng.link/o?I fitness=ig" target="_blank" ><i class="fa-brands fa-instagram"></i></a>
          <a href="http://facebook.com/profile.php?=1000000982382771"target="_blank"><i class="fa-brands fa-facebook"></i></a>
          <a href="https://x.com/testmiller33?t=ELe4z9QAEYzqQEJtrS4QvQ&s=09" target="_blank"   ><i class="fa-brands fa-x-twitter"></i></a>
        </section>
      </section>
      <div>
      <a href="{{url('/')}}">
        <div class="logocontainer2">
          <img class="logo" src="{{asset('images/file.png')}}" width=60 alt="error"></img>
          <p>
            <i class="fa-solid fa-f"></i>itness
          </p>
        </div>
      </a>
      </div>
    </div>
    <div>
      <p>All rights reserved © 2024 I Fitness</p>
      <p>Wasseypur, Near Lords Club, Dhanbad, Jharkhand India</p>
      <section class="footerlast">
        <a href="{{url('/')}}/ifitness/contact"><section>CONTACT & CLUB INFO</section></a>
        <a href="{{url('/')}}/ifitness/membership"><section>MEMBERSHIP</section></a>
        <a href="{{url('/')}}/ifitness/faq"><section>FAQS</section></a>
        <a href="{{url('/')}}/dashboard"><section>ADMIN</section></a> 
        <a href="{{url('/')}}/ifitness/termsandconditions"><section>TERMS & CONDITIONS</section></a>
        <a href="{{url('/')}}/ifitness/collab"><section>COLLABORATION</section></a> 
      </section>
    </div>
  </footer>

