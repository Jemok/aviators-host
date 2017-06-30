@include('layouts.header')

@include('layouts.nav')
<div class="container-fluid landing-image">
    <img src="{{ asset('images/corridor.jpg') }}" width="699"; height="349";>
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
<div class="container-fluid serviced">
    <h1 class="lead" style="font-size: 4em;"> Virtual (VO)Offices </h1>
    <p><strong>We will reduce your costs of doing business and increase your bottom line.
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