<?php
/**
 * Created by PhpStorm.
 * User: aniat
 * Date: 11/23/2019
 * Time: 8:09 PM
 */
?>
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miracle Loading - main</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>

<body class="text-center">
<div class="row">
    <div class="col">
        <h1>Miracle Loading Cosmetics</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('home') }}">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('skin-care') }}">Skin Care</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('make-up') }}">Make-Up</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('fragrance') }}">Fragrance</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active nav-column-border" href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('cart') }}">CART</a></li>
                </ul>

                <form class="form-inline my-2"><input class="form-control" type="text"><button class="btn btn-primary" type="button">Search</button></form>
            </div>

        </nav>
    </div>
</div>
<div class="contact-clean">
    <form action="/contact" method="POST">
        @csrf
        <h2 class="text-center">Contact us</h2>

        <div class="form-group">
            <input class="form-control" type="text" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" id="message" placeholder="Message" rows="14"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">submit</button>
        </div>
    </form>
</div>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
