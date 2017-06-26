@yield('content')
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about-aviators') }}">About Aviators</a></li>
                <li><a href="{{ url('office-solutions') }}">Office Solutions</a></li>
                <li><a href="{{ url('experiences') }}">Experiences</a></li>
                <li><a href="{{ url('contacts') }}">Contact Us</a></li>
            </ul>
        </div>

    </div>
</nav>
