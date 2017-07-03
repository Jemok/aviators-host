<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aviators - serviced offices</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="row">
    <div class="row pull-left logo">
        <div class="col-md-6">
            <img src="{{ asset('images/logo.svg')  }}" width="170" height="75" alt="serviced offices" data-mu-svgfallback="images/logo_poster_.png"/>
        </div>
        <div class="col-md-6" style="margin-top: 10%;">
            <span class="slogan">
                Let your business fly
            </span>
        </div>
    </div>

    <div class="pull-right social-icons">
         <span class="text-aviators">
                <i class="fa fa-phone fa-2x" aria-hidden="true"></i>&nbsp;
                +254 795 600 090
          </span>

        <span class="text-aviators">
                <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>&nbsp;
                info@aviators.co.ke
        </span>
        <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
        <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
        <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
    </div>
</div>


<nav class="navbar navbar-aviators navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only ">Toggle navigation</span>
                <span class="icon-bar" style="color: red;"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about-aviators') }}">About Aviators</a></li>
                    <li><a href="{{ url('experiences') }}">Serviced offices</a></li>
                    <li><a href="{{ url('experiences') }}">Meeting and boardroom</a></li>
                    <li><a href="{{ url('experiences') }}">Virtual offices</a></li>
                    <li><a href="{{ url('experiences') }}">Experiences</a></li>
                    <li><a href="{{ url('contacts') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

</body>
