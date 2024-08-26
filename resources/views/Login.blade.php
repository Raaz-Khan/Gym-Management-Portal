<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="/Login.css">
</head>

<body>
    <div class='section'>
        <div class='container'>
            <h1>Admin Login</h1>
            <form action="{{url('/')}}/adminlogin" method="post">
                @csrf
                <div class="input-field">
                    <input type="text" placeholder=' Username' value="" name="username">
                </div>
                <div class="input-field">
                    <input type="password" placeholder='Password' required name="password">
                    <section class="alertbox">{!!$alert ?? " "!!}</section>
                </div>


                <!-- <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div> -->
                <button type="submit" class="btn">Login</button>



                <!-- <div class="register-link"> -->
                    <!-- <p> Don't have an account? <a href="{{url('/')}}/register">Register</a></p> -->
                <!-- </div> -->
            </form>
        </div>

    </div>
</body>

</html>