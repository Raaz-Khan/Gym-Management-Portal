<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Sedan+SC&display=swap');
    </style>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="/layouts/header.css">
    <link rel="stylesheet" href="/layouts/sidebar.css">
    <link rel="stylesheet" href="/layouts/footer.css">
    <link rel="stylesheet" href="/layouts/Main.css">
    @stack('css')
    @stack('title')
</head>

<body>
    <div id="MainContainer">
        @include('layouts.sidebar')
        <div class="secondary">

            <section class="mainbox">
                @include('layouts.header')

                @yield('container')



            </section>
            @include('layouts.footer')
        </div>


    </div>
</body>

</html>