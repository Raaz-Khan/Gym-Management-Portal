<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <link rel="stylesheet" href="/Register.css">
</head>
<body>
    <div class='section'>

    <div class='container'>
          <h1>Admin Register</h1>
          <form action="#">
          <div class="input-field">
        
            <input type="name" placeholder=' Enter Name' required/>

          </div>
          <div class="input-field">

            <input type="email" placeholder=' Email' required/>
            
          </div>
          <div class="input-field">

          <input type="password" placeholder='Password'  required/>
          
          </div>
          <div class="input-field">

            <input type="password" placeholder='Confirm Password'  required/>
            
            </div>
            
                <button type="submit" class="btn">Submit</button>
    
                <div class="register-link">
                    <p>Already have an account? <a href="{{url('/')}}/login">Login</a></p>
                </div>
                
          </form>
          </div>
    
    </div>
</body>
</html>