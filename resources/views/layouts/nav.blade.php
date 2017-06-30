@yield('content')
<nav class="navbar">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about-aviators') }}">About Aviators</a></li>
                <li><a href="{{ url('experiences') }}">Experiences</a></li>
                <li><a href="{{ url('contacts') }}">Contact Us</a></li>
            </ul>

            <p class="navbar-text navbar-right">
                <i class="fa fa-phone " aria-hidden="true"></i>&nbsp;
                +254 795 600 090
            </p>

            <p class="navbar-text navbar-right">
                <i class="fa fa-envelope " aria-hidden="true"></i>&nbsp;
                info@aviators.co.ke
            </p>
        </div>
    </div>
</nav>
