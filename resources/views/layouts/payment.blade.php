<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>

    <!-- All CSS -->

    <!-- custom css if you need -->
    <link rel="stylesheet" href="{{ mix('assets/app.css') }}">

    <!-- Color Palette. simple uncommned if you need any color palette -->
    <!-- <link rel="stylesheet" href="css/switcher/css/red.css"> -->

    <title>Roysha- Money Transfer and Online Payments HTML Template</title>
</head>


@if(Request::route()->getPrefix() == '/account')
  @include('layouts.__inc_body.auth')
@else
    @include('layouts.__inc_body.default')
@endif

</html>
