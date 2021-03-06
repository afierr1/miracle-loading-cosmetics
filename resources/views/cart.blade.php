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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>

<body class="text-center">
<div class="row">
    <div class="col">
        <h1></h1>
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
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('cart') }}">CART</a></li>
                </ul>

                <form action="/search" method="POST" class="form-inline my-2">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="search" id="search">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>

        </nav>
    </div>
</div>

<h2></h2>

<!--Column header-->
<div class="row">
    <div class="col">
        <h1>Shopping Cart</h1>
        <div class="row">
            <div class="col">

            </div>
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
<!--item rows-->
@foreach($cartList as $item)
<div class="row">
    <div class="col">
        <img src="{{$item->image}}" style="width: 113px;height: 119px;">
        <form action="/cart" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <input type="hidden" id="index" name="index" value="{{$item->index}}">
            <button class="btn btn-sm btn-primary">Delete Item</button>
        </form>
    </div>
    <div class="col">
        <p>{{$item->name}}</p>
        <p>Option: {{$item->option}}</p>
    </div>
    <div class="col">
        <p>{{$item->quantity}}</p>
    </div>
    <div class="col">
        <div class="row">
            <div class="col">
                <p>${{$item->cost}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach

<hr>

<!--calculations row-->
<div class="row">
    <div class="col"></div>
    <div class="col">
        <p>TOTAL: ${{$total}}</p>
        <div id="paypal-button-container"></div>

        <script src="https://www.paypal.com/sdk/js?client-id={{$credential}}&currency=USD" data-sdk-integration-source="button-factory"></script>
        <script>
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: 'gold',
                    layout: 'vertical',
                    label: 'paypal',

                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '{{$total}}'
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        alert('Transaction completed by ' + details.payer.name.given_name + '!');
                    });
                }
            }).render('#paypal-button-container');
        </script>
</div>
</div>

</body>

</html>
