@include('layouts.header')

@include('layouts.nav')
<div class="container-fluid landing-image">
<img src="{{ asset('images/photo.jpg') }}" 	width="699px" height="349px">
</div>

<div class="container-fluid galary">
    <div class="landing">
    <h1 class="lead" style="font-size: xx-large;"> Every Moment Counts</h1>
        <p>Priceless moments with business people at Aviators, Let your business fly</p>
    </div>
    <img src="{{ asset('images/banner_about.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/coffee.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/banner_contact.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/avaitor.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/chairs.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/office.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/door_open.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/welcome.jpg') }}" 	width="250px" height="250px">
    <img src="{{ asset('images/logo.jpg') }}"   	width="250px" height="250px">
    <img src="{{ asset('images/corridor.jpg') }}" 	width="250px" height="250px">
</div>

@include('layouts.footer')