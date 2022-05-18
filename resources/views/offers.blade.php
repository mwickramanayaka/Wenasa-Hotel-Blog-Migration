
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
               <img class="center" src="{{ asset('/HotelLogo.png') }}" >
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
         <!-- login session begin -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn btn-white" onclick="closeLoginModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <form method="POST">
                            @csrf

                            <div class="col-12 mt-2">
                                <label for="user_email">Email</label>
                            </div>

                            <div class="col-12 mt-2">
                                <input id="user_email" name="user_email" type="email" class="form-control" placeholder="example@gmail.com">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="user_password">Password</label>
                            </div>

                            <div class="col-12 mt-2">
                                <input id="user_password" name="user_password" type="password" class="form-control" placeholder="******">
                            </div>

                            <div class="col-12 mt-3">
                                <button type="button" class="btn btn-warning" onclick="closeLoginModal()">Close</button>
                                <button type="button" class="btn btn-primary" onclick="login()">Login</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets_back_end/js/notiflix.js') }}"></script>
    <script src="{{ asset('assets_back_end/js/process/print.js') }}"></script>

    <script>
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function closeLoginModal() {
            $('#loginModal').modal('hide');
        }

        $('#loginModal_btn').click(function(e) {
            e.preventDefault();
            $('#loginModal').modal('toggle');
        });

        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "/CLEAR_SESSIONS",
                success: function(response) {
                    console.log(response);
                }
            });
        });

        function login() {

            $.ajax({
                type: "GET",
                url: "/LOGIN",
                data: {
                    email: $('#user_email').val(),
                    password: $('#user_password').val(),
                },
                success: function(response) {
                    console.log(response);

                    if (response['color'] == 'danger') {
                        Notiflix.Notify.Failure(response['msg']);
                    } else {

                        if (response['data']['id'] != null) {
                            $('#loginModal_btn').addClass('d-none');
                            $('#user_name').removeClass('d-none');
                            $('#post_register').removeClass('d-none');
                            $('#user_name').html(response['data']['name']);

                            $('#home_firstName').val(response['data']['name']);
                            $('#home_tel').val(response['data']['tel']);
                            $('#home_email').val(response['data']['email']);
                            $('#home_address').val(response['data']['address']);
                        }

                        $('#loginModal').modal('hide');

                    }
                }
            });
        }

        function addToSession() {

            let product = $('#home_Product').val();
            let qty = $('#home_Qty').val();

            $.ajax({
                type: "GET",
                url: "/SAVE_PRODUCT_TO_SESSION",
                data: {
                    product_id: product,
                    qty: qty,
                },
                success: function(response) {

                    content = '';
                    content_total = '';
                    full_content = '';
                    total = 0;

                    $.each(response, function(key, item) {

                        total += item[4]

                        content +=
                            '<li class="list-group-item d-flex justify-content-between lh-condensed">' +
                            '<div>' +
                            '<h6 class="my-0">' + item[2] + '</h6>' +
                            '<small class="text-muted"> QTY : ' + item[1] +
                            ' AND UNIT PRICE : ' + numberWithCommas(item[3]) + '</small>' +
                            '</div>' +
                            '<span class="text-muted">' + numberWithCommas(item[4]) +
                            '</span>' +
                            '</li>';

                        content_total =
                            '<li class="list-group-item d-flex justify-content-between">' +
                            '<span>Total (LKR)</span>' +
                            '<strong>' + numberWithCommas(total) + '</strong>' +
                            '</li>';
                    });

                    full_content = content + content_total;

                    $('#product_list').html(full_content);

                }
            });
        };

        function checkout() {
            let name = $('#home_firstName').val();
            let email = $('#home_email').val();
            let tel = $('#home_tel').val();
            let address = $('#home_address').val();
            let date = $('#home_date').val();
            let room = $('#home_room').val();

            $.ajax({
                type: "GET",
                url: "/CHECKOUT",
                data: {
                    name: name,
                    email: email,
                    tel: tel,
                    address: address,
                    date: date,
                    room: room,
                },
                success: function(response) {

                    if ($.isEmptyObject(response.error)) {
                        Notiflix.Loading.Remove();

                        if (response == 2) {
                            Notiflix.Notify.Failure('Please add foods');
                        } else if (response == 1) {
                            Notiflix.Notify.Success('Successfully saved');

                            $('#home_firstName').val('');
                            $('#home_firstName').val('');
                            $('#home_email').val('');
                            $('#home_tel').val('');
                            $('#home_address').val('');
                            $('#home_date').val('');
                            $('#home_room').val('');

                            content =
                                '<li class="list-group-item d-flex justify-content-between">' +
                                '<span>Total (LKR)</span>' +
                                '<strong> 0.00 </strong>' +
                                '</li>';

                            $('#product_list').html('');
                            $('#product_list').html(content);

                        }

                    } else {
                        $.each(response.error, function(key, value) {
                            Notiflix.Loading.Remove();
                            Notiflix.Notify.Failure(value);
                        });
                    }

                }
            });

        }
    </script>
    <!-- login session end -->
    </body>
</html>
