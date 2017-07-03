@include('layouts.header')
<div class="container-fluid">
    <div class="row" style="margin-top: -22px;">
        <div class="col-md-6 cuadro_intro_hover" style="border-right: 1px #1C2B39 solid; border-bottom: 1px #1C2B39 solid;">
            <img src="{{ asset('images/photo.jpg') }}" class="img-responsive" alt="">
            <div class="caption">
                <div class="col-md-12 blur"></div>
                <div class="col-md-12 caption-text">
                    <h3>
                        <span class="badge" style="background-color: red;">
                            1
                        </span>
                        Business Moments</h3>
                    <p>
                        <span class="badge" style="background-color: red;">
                            2
                        </span>
                        We provide you with the right environment to enable your business prosper.</p>

                    {{--<a class=" btn btn-default" href="http://trovacamporella.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>--}}
                </div>
            </div>
        </div>
        <div class="row col-md-6" style="margin-top: 4%;">
            <h4 class="text-center text-aviators">
                <span class="badge" style="background-color: red;">
                            3
                        </span>
                Lorem</h4>
            <p class="text-center text-aviators">
                <span class="badge" style="background-color: red;">
                            4
                        </span>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta ducimus ea laboriosam molestias nam
                omnis quasi ratione rem, repellendus reprehenderit sed unde.
                Asperiores eos ex nihil quasi unde? Illo!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores commodi consequuntur corporis
                dignissimos et illum impedit ipsam labore laboriosam laudantium libero magnam, modi natus obcaecati praesentium
                soluta vel vero.
            </p>
        </div>
    </div>
</div>

<div class="container galary">
    <div class="landing">
    <h1 class="lead" style="font-size: xx-large;">
        <span class="badge" style="background-color: red;">
                            5
                        </span>Every Moment Counts</h1>
        <p>
            <span class="badge" style="background-color: red;">
                            6
                        </span>Priceless moments with business people at Aviators, Let your business fly</p>
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