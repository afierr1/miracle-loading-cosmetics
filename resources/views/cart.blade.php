<?php
/**
 * Created by PhpStorm.
 * User: aniat
 * Date: 11/24/2019
 * Time: 8:31 PM
 */
?>
        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miracle Loading - main</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
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
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="#">Skin Care</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="#">Make-Up</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="#">Fragrance</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('cart') }}">CART</a></li>
                </ul>

                <form class="form-inline my-2"><input class="form-control" type="text"><button class="btn btn-primary" type="button">Search</button></form>
            </div>

        </nav>
    </div>
</div>
<div class="row">
    <div class="col">
        <h1>Shopping Cart</h1>
        <div class="row">
            <div class="col">
                <p>Product</p>
            </div>
            <div class="col">
                <p>Quantity</p>
            </div>
            <div class="col">
                <p>Subtotal</p>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col"><img style="width: 113px;height: 119px;"></div>
    <div class="col">
        <p>Product Name</p>
    </div>

    <div class="col">
        <div class="row">
            <div class="col">
                <p>$10.00</p>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <p>SUBTOTAL $10.00</p>
        <p>SHIPPING $1.00</p>
        <p>TOTAL $11.00</p><button class="btn btn-primary" type="button">PAYPAL</button><button class="btn btn-primary" type="button">CHECKOUT</button></div>
</div>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
