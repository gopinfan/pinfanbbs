<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>@yield('title','') - PinFan BBS</title>

    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>

@include('layouts._header')

@yield('content')

@include('layouts._footer')
</body>
</html>
