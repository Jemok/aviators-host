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
<div class="container-fluid serviced">
    <h1 class="lead" style="font-size: 4em;">
        <span class="badge" style="background-color: red;">
                            1
                        </span>
        Virtual (VO)Offices </h1>
    <p><strong>
            <span class="badge" style="background-color: red;">
                            2
                        </span>
            We will reduce your costs of doing business and increase your bottom line.
            In addition we will give you the use of our address. Let your business fly.</strong></p>
    <div class="responsive">
        <table class="table-striped table-hover ">
            <thead class="head">
            <tr>
                <th colspan="2">Aviators Package</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Professional Reception Services</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr>
                <td>Prestigious Corporate Address</td>
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
                <td>Telephone Line</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Security-Alarm / CCTV</td>
                <td><span class="glyphicon glyphicon-ok"></span> </td>
            </tr>
            <tr class="">
                <td>Meeting Room</td>
                <td>On Request</td>
            </tr>
            <tr class="">
                <td>Use of Boardroom</td>
                <td>On Request</td>
            </tr>
            <tr class="">
                <td>IT Support</td>
                <td>On Request</td>
            </tr>
            <tr class="">
                <td>Video Conferencing</td>
                <td>On Request</td>
            </tr>
            <tr class="">
                <td>Insurance</td>
                <td>On Request</td>
            </tr>
            <tr class="">
                <td>Parking</td>
                <td>On Request</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

@include('layouts.footer')