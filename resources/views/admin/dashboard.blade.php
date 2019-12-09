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
    <form method="post">
        <h2 class="text-center">Select Activity</h2>
        <div class="form-group">
            <a href="{{url('inventory')}}"><button class="btn btn-primary" type="button" style="width: 416px;">Edit inventory</button></a>

        </div>
        <div class="form-group">
            <a href="{{url('forms')}}">
                <button class="btn btn-primary" type="button" style="width: 416px;">check contact forms</button>
            </a>
        </div>
        <div class="form-group">
            <a href="{{url('home')}}">
                <button class="btn btn-primary" type="button" style="width: 416px;">check orders</button>
            </a>

        </div>
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