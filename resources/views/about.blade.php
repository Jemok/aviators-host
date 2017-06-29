@include('layouts.header')

@include('layouts.nav')

<div class="container-fluid landing-image">
    <img src="{{ asset('images/about_us.jpg') }}" width="699px" height="349px">
</div>
<div class="container about ">
    <div class="row">
        <div class="col-md-6">
            <h3><u>Who we are</u></h3>
            <p>We are a leading provider of flexible office solutions, virtual offices,
                meeting rooms and Boardroom hire in Nairobi.
                We deliver serviced office space solutions and our range of products are tailored towards
                our clients needs,
                from sole traders to multinationals.
                Let your business fly.</p>
            <h1><u>Let your business fly</u></h1>
        </div>
        <div class="col-md-6">
            <h3><u>Our Vision </u></h3>
            <p>To be the leader in providing affordable world class office space.</p>
            <h3><u>Our Mission</u></h3>
            <p>To help companies prosper through our office solutions</p>
            <h3><u>Our Values</u></h3>
            <p>Integrity, professionalism, Innovation, Quality service, Staff Empowerment and Teamwork</p>
        </div>
    </div>
</div>
<div class="container-fluid about_us">
    <div class="us">
        <h1 class="lead"> What they say about Us</h1>
        <p class="lead">Whatever your business,Whatever your budget, we help your business fly</p>
    </div>
    <div class=" row testimony">
        <div class="lady">
            <img src="{{asset('images/lady.jpg')}}" height="170px" width="200px">
            <div class="lady-item">
                <p>We had an infrastructure project in Kenya and needs a liasim office,
                    Aviators gave us solutions. Asante</p>
                <h3>Bridgite</h3>
                <p>Thysenkupp Corp. Dulsberg</p>
            </div>
        </div>
        <div class="gent">
            <img src="{{asset('images/gent.jpg')}}" height="170px" width="200px">
            <div class="gent-item">
                <p>We had an infrastructure project in Kenya and needs a liasim office,
                    Aviators gave us solutions. Asante</p>
                <h3>Denise Peppard</h3>
                <p>Northrop Gunmann</p>
            </div>
        </div>
    </div>
</div>
</div>
@include('layouts.footer')