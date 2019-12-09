<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">

</head>

<body>
<div class="contact-clean">

        <div class="container">
            <h1>Inventory List</h1>
            @foreach($products as $product)
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="{{url('product')}}/{{$product->sku}}">
                            <img src="{{$product->image}}" alt="{{$product->name}}" style="max-width:250px;max-height:250px;">
                        </a>
                        <div class="desc">
                            <p>Name: {{$product->name}}</p>
                            <p>Stock: {{$product->stock}}</p>
                            <p>Retail Price: {{$product->retail_price}}</p>
                            <p>Manufacturing Price: {{$product->manufact_price}}</p>
                        </div>
                    </div>
                </div>
            @endforeach



    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

</html>