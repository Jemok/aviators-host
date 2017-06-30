@include('layouts.header')

@include('layouts.nav')
<div class="container-fluid landing-image">
<img src="{{ asset('images/photo.jpg') }}" width="699"; height="349";>
    <div class="lorem">
        <h4>Lorem</h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta ducimus ea laboriosam molestias nam
            omnis quasi ratione rem, repellendus reprehenderit sed unde.
            Asperiores eos ex nihil quasi unde? Illo!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores commodi consequuntur corporis
            dignissimos et illum impedit ipsam labore laboriosam laudantium libero magnam, modi natus obcaecati praesentium
            soluta vel vero.
        </p>
    </div>
</div>

<div class="container-fluid galary">
    <div class="landing">
    <h1 class="lead" style="font-size: 4em;"> Every Moment Counts</h1>
        <p><strong>Priceless moments with business people at Aviators, Let your business fly</strong></p>
    </div>
    <img src="{{ asset('images/banner_about.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/coffee.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/banner_contact.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/avaitor.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/chairs.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/office.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/door_open.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/welcome.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/logo.jpg') }}"   	width="350px" height="250px">
    <img src="{{ asset('images/corridor.jpg') }}" 	width="350px" height="250px">
    <img src="{{ asset('images/On-duty.jpg') }}" 	width="350px" height="250px">

</div>

@include('layouts.footer')