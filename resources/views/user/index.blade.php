<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('user'))
    <div class="alert alert-danger">
        @php
            print_r(Session::get('user'))
        @endphp
    </div>
    @endif
</body>
</html>