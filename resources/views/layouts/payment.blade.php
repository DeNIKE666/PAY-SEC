<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <link rel="stylesheet" href="{{ mix('assets/app.css') }}">

    <title>@yield('title')</title>
</head>

    @if(Request::route()->getPrefix() == '/account')
        @include('__partials.body.noDefault')
    @else
        @include('__partials.body.default')
    @endif

</html>
