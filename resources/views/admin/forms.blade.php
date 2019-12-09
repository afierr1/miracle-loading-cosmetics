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
        <div class="form-group">
            <a href="{{url('/dashboard')}}">
                <button class="btn btn-primary" type="button" style="width: 416px;">Return to Dashboard</button>
            </a>
        </div>
        <div class="form-group">
            <a href="{{url('/allforms')}}">
                <button class="btn btn-primary" type="button" style="width: 416px;">See all</button>
            </a>
        </div>
        <h2 class="text-center">Contact Forms</h2>
            <div class="container" style="border: 2px solid black;">
                @foreach($forms as $form)
                    <p><b>Name: {{$form->name}}</b></p>
                    <p><b>Email: {{$form->email}}</b></p>
                    <p>Sent at: {{$form->created_at}}</p>
                    <p>{{$form->message}}</p>
                    <br>
                @endforeach

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