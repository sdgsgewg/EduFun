<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduFun</title>
    @include('links.css')
</head>

<body>
    @include('partials.header')

    <div class="content container-fluid px-0">
        @yield('container')
    </div>

    @include('partials.footer')

    @include('links.js')
</body>

</html>
