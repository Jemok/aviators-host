@include('layouts.header')
<div class="container-fluid">
    <div class="row" style="margin-top: -22px;">
        <div class="col-md-6 cuadro_intro_hover" style="border-right: 1px #1C2B39 solid; border-bottom: 1px #1C2B39 solid;">
            <img src="{{ asset('images/aviators-landing-2.jpg') }}" class="img-responsive" alt="">
            <div class="caption">
                <div class="col-md-12 blur"></div>
                <div class="col-md-12 caption-text">
                    <h3>
                         <span class="badge" style="background-color: red;">
                            1
                        </span>
                        First Class Business</h3>
                    <p>
                         <span class="badge" style="background-color: red;">
                            2
                        </span>
                        Book your business with Aviator and we will book you to a first class experience.</p>

                    <button class="btn btn-default btn-lg btn-email" data-toggle="modal" data-target="#bookTour">
                        <i class="fa fa-envelope" aria-hidden="true"></i> Email us
                    </button>

                    {{--<a class=" btn btn-default" href="http://trovacamporella.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>--}}
                </div>
            </div>
        </div>
        <div class="row col-md-6" style="margin-top: 4%;">
            <h4 class="text-center text-aviators">
                <span class="badge" style="background-color: red;">
                            3
                        </span>
                Lorem
            </h4>
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
<div class="container about ">
    <div class="row">
        <div class="col-md-6">
            <h3><u>
                     <span class="badge" style="background-color: red;">
                            5
                        </span>
                    Who we
                </u>
            </h3>
            <p>
                <span class="badge" style="background-color: red;">
                            6
                        </span>
                We are a leading provider of flexible office solutions, virtual offices,
                meeting rooms and Boardroom hire in Nairobi.
                We deliver serviced office space solutions and our range of products are tailored towards
                our clients needs,
                from sole traders to multinationals.
                Let your business fly.</p>
            {{--<h1><u>Let your business fly</u></h1>--}}
        </div>
        <div class="col-md-6">
            <h3><u>
                    <span class="badge" style="background-color: red;">
                            7
                        </span>
                    Our Vision
                </u>
            </h3>
            <p>
                <span class="badge" style="background-color: red;">
                            8
                        </span>
                To be the leader in providing affordable world class office space.
            </p>
            <h3><u>
                    <span class="badge" style="background-color: red;">
                            9
                        </span>
                    Our Mission
                </u></h3>
            <p>
                <span class="badge" style="background-color: red;">
                            10
                        </span>
                To help companies prosper through our office solutions</p>
            <h3><u>
                    <span class="badge" style="background-color: red;">
                            11
                        </span>
                    Our Values</u></h3>
            <p>
                <span class="badge" style="background-color: red;">
                            12
                        </span>
                Integrity, professionalism, Innovation, Quality service, Staff Empowerment and Teamwork</p>
        </div>
    </div>
</div>
<div class="container-fluid about_us">
    <div class="us">
        <h1 class="lead">
            <span class="badge" style="background-color: red;">
                            13
                        </span>
            What they say about Us</h1>
        <p class="lead">
            <span class="badge" style="background-color: red;">
                            14
                        </span>
            Whatever your business,Whatever your budget, we help your business fly</p>
    </div>
    <div class="row testimony">
        <div class="row col-md-6 col-md-offset-1">
            <div class="col-md-5">
                <img src="{{asset('images/lady.jpg')}}" height="170px" width="200px">
            </div>
            <div class="col-md-7">
                <p>
                    <span class="badge" style="background-color: red;">
                            15
                        </span>
                    We had an infrastructure project in Kenya and needs a liasim office,
                    Aviators gave us solutions. Asante</p>
                <h3>
                    <span class="badge" style="background-color: red;">
                            16
                        </span>
                    Bridgite</h3>
                <p>
                    <span class="badge" style="background-color: red;">
                            17
                        </span>
                    Thysenkupp Corp. Dulsberg</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row col-md-5">
                <img src="{{asset('images/gent.jpg')}}" height="170px" width="200px">
            </div>
            <div class="col-md-7">
                <p>
                    <span class="badge" style="background-color: red;">
                            18
                        </span>
                    We had an infrastructure project in Kenya and needs a liasim office,
                    Aviators gave us solutions. Asante</p>
                <h3>
                    <span class="badge" style="background-color: red;">
                            19
                        </span>
                    Denise Peppard</h3>
                <p>
                    <span class="badge" style="background-color: red;">
                            20
                        </span>
                    Northrop Gunmann</p>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')