@include('layouts.header')
<div class="container">
    <div class='row'>
        <div class='col-md-10'>
            <div class="carousel slide media-carousel col-md-offset-3" id="media" >
                <div class="carousel-inner">
                    <div class="item  active">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="{{ asset('images/aviators-landing.jpg') }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="{{ asset('images/aviators-landing-1.jpg') }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img src="{{ asset('images/aviators-landing-2.jpg') }}"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                            </div>
                            <div class="col-md-4">
                                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                <a data-slide="next" href="#media" class="right carousel-control">›</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid serviced">
    <h1 class="lead" style="font-size: 4em;">
        <span class="badge" style="background-color: red;">
                            1
                        </span>
        Meeting & Boardroom </h1>
    <p><strong>
            <span class="badge" style="background-color: red;">
                            2
                        </span>
            Do you need a meeting room or boardroom? We are the right people to talk to.
            In addition we have state of the art video conferencing facilities, go on, call us for a quote!</strong></p>
    <div class="responsive">
        <table class="table-striped table-hover ">
            <thead class="head">
            <tr>
                <th colspan="2">Aviators (M&B) Package</th>
            </tr>
            </thead>
            <tbody>
            <tr class="">
                <td>Professional Reception Services</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>High Speed Internet / WiFi</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Use of Address</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Video Conferencing</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Telephone Line</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Low Level Branding</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Instant Set Up</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Copy / Bind / Print Services</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Security-Alarm / CCTV</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>IT Support</td>
                <td><span class="glyphicon glyphicon-ok"></span></td>
            </tr>
            <tr class="">
                <td>Cleaning Services</td>
                <td><span class="glyphicon glyphicon-ok"></span></td>
            </tr>
            <tr class="">
                <td>Secure Parking</td>
                <td>On Request</td>
            </tr>
            <tr class="">
                <td>Courier Services</td>
                <td>On Request</td>
            </tr>
            <tr class="">
                <td>LCD TV / Protector</td>
                <td><span class="glyphicon glyphicon-ok"></span></td>
            </tr>
            <tr class="">
                <td>Flip Chart, Markers</td>
                <td><span class="glyphicon glyphicon-ok"></span></td>
            </tr>
            <tr class="">
                <td>Catering Services</td>
                <td>On Request</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

@include('layouts.footer')