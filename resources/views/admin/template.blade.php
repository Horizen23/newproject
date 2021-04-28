<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - </title>
    @include('admin.style.css')
</head>
<body>
        @include('admin.layout.navleft')
        <div class="conten">
            @include('admin.layout.navhead')
            <div class="cbody">
                @yield('cbody')
                </div>
            </div>
        </div>
    </div>
</body>
@include('admin.script.script')
</html> 



