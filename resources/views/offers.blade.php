
<!DOCTYPE html>
<html>
    <head><div class="background-image">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>offers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
 
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link href="{{ asset('assets_back_end/css/notiflix.css') }}" rel="stylesheet" />
    </head>

    <body>
    <nav class="navbar navbar-light bg-dark">

<div class="container d-flex justify-content-between">
    <div>
        <b>
            <a style="font-family: Times New Roman;font-size: 30px;color:white;" class="navbar-brand" href="/">WENASA HOTEL</a>
        </b>
    </div>
    <div>
        <a class="navbar-text" href="/">
            <button id="reservation_btn" type="button" class="btn btn-secondary" data-toggle="modal">Reservation</button></a>
        <a class="navbar-text" href="/OFFERS">
            <button id="offers_btn" type="button" class="btn btn-secondary" data-toggle="modal">Offers</button></a>
        <a class="navbar-text" href="/BLOG">
            <button id="blog_btn" type="button" class="btn btn-secondary" data-toggle="modal">Wenasa Blog</button></a>
        <a class="navbar-text" href="/CONTACTUS">
            <button id="contactUs_btn" type="button" class="btn btn-secondary" data-toggle="modal">Contact Us</button></a>
        <button id="loginModal_btn" type="button" class="btn btn-warning" data-toggle="modal">Login</button>
        <button id="user_name" type="button" class="btn btn-info d-none"></button>
        <a id="post_register" class="btn btn-info d-none">View Order History</a>
    </div>
</div>
</nav>
<br>
        <section>
            <div class = "image">
               <img src="{{ asset('/HotelLogo.png') }}">
            </div>

            <div class = "content">
                <br><br>
                <h2>offers</h2>
                <span><!-- line here --></span>
                <ul class = "links">
                    <li><a href = "#">Enjoy 20% off on Hot Kitchen Items with Sampath credit cards <br>MORE INFO -</a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "#">WIN a DOCTOR STRANGE Multiverse of Madness movie ticket by a online reservation<br>MORE INFO -</a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "#">Did you know that you can book out a whole villa at Wenasa hotel?​<br>MORE INFO </a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "#">5% OFF SURVEY DEAL<br>MORE INFO -</a></li>

                </ul>

                <ul class = "icons">
                    <li>
                        <i class = "fa fa-instagram"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-youtube"></i>
                    </li>
                    </li>
                </ul>
            </div>
        </section><br><br>
    </body>
</html>
