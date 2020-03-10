<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <!-- bootswatch superhero -->
	<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/css/style.css">
    <title>Friends of Challenging Behaviour - {{$title['pagetitle']}} </title>
</head>

<body>
    <div class="bs-component">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Friends of Challenging Behaviour</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="{{URL('/charitable_foundations')}}">Charitable Foundations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/publications')}}">Publications, shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL('/contact_us')}}">Contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="d-flex p-2">
            <h1>
                <a href="{{URL('/')}}">Friends of Challenging Behaviour</a>
            </h1>
        </div>
        @include('inc.messages')
