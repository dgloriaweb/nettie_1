<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../resources/css/style.css">
    <title>Challenging-Behaviour Counselling Wellbeing Foundation - {{$title['pagetitle']}} </title>
</head>

<body>
    <div class="bs-component">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
            <a class="navbar-brand" href="#">Challenging-Behaviour Counselling Wellbeing Foundation</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Counselling & Services <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/#meet')}}">Meet the Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/#charitable_foundations')}}">Charitable Foundations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/#publications')}}">Publications, shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/#contact_us')}}">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <h1>
        <a href="{{URL('/')}}">Challenging-Behaviour Counselling Wellbeing Foundation</a>
    </h1>
    @include('inc.messages')