<!DOCTYPE html>
<html lang="en">

<head><div class="background-image">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <title>Wenasa blog</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('assets_back_end/css/notiflix.css') }}" rel="stylesheet" />

</head>

<body class="bg-light">


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
    <div class="container">
        <div class="py-5 text-center">
            <!-- <img class="d-block mx-auto mb-4" src="https://s.tmimgcdn.com/scr/800x500/212900/spoon-and-fork-restaurant-logo_212966-original.png" style="width: 25%"> -->
            <img class="d-block mx-auto mb-4" src="{{ asset('/HotelLogo.png') }}" style="width: 20%">
            <h2>Wenasa Blog</h2>

        </div>
        </div>
</html>