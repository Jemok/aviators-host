@include('layouts.header')

@include('layouts.nav')


<div class="container-fluid landing-image">
    <img src="{{ asset('images/aviators-landing.jpg') }}" 	width="699px" height="349px">
</div>
<div class="container landing">
        <h1 class="lead" style="font-size: xx-large;"> Choose to fly your business</h1>
        <p class="para">
            Finding the right area in Nairobi for your business is important. It's all about location.
            Aviators business hub is strategically located & offers your office solutions.
            Take a tour, Let your business fly.
        </p>
    </div>
<div class="container icons">
<div class="icon">
    <div class="desc">Something</div>
    <a href="#" >
        <img src="{{asset('images/office_chair.png')}}" height="150" width="100">
    </a>
    <div class="desc">Something</div>
</div>
<div class="icon">
    <div class="desc">Something</div>
    <a href="#" >
        <img src="https://png.icons8.com/headset/office/80" title="Headset" width="80" height="80">
    </a>
    <div class="desc">Something</div>
</div>
<div class="icon">
    <div class="desc">Something</div>
    <a href="#" >
        <img src="{{asset('images/meeting-office.png')}}"  height="300" width="100">
    </a>
    <div class="desc">Something</div>
</div>
<div class="icon">
    <div class="desc">Something</div>
    <a class="#">
    <img src="{{asset('images/meeting.png')}}" height="800px" width="100px">
    </a>
    <div class="desc">Something</div>
</div>
</div>


@include('layouts.footer')