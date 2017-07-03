@include('layouts.header')

<div class="container-fluid">
    <div class="row">
        <img src="{{ asset('images/contact.jpg') }}" class="img-responsive center-block" width="50%">
    </div>
    <div class="col-md-9 col-md-offset-1" style="margin-top: 1%;">
        <h1 class="text-center">
            <span class="badge" style="background-color: red;">
                            1
                        </span>
            Lorem</h1>
        <p class="text-center">
            <span class="badge" style="background-color: red;">
                            2
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
<div class="container">
    <div class="contacts">
    <p class="contact_p"> For more information </p>
    <div class="row">
        <div class="col-md-6 get_in">
            <h3><u>Get in touch </u></h3>
            <p> Aviators Business Park, Nyerere Road.</p>
            <p>Luther Plaza, 1st Floor, Left wing.</p>
            <p>P.O.Box 58339 - 00200</p>
            <p>Nairobi, Kenya</p>
            <p>Tel: +254 795 600090</p>
            <p> +254 795 600 060</p>
            <p>Email: info@aviators.co.ke</p>
        </div>
        <div class="col-md-6 border">
            <div class="form-group">
                <label class="control-label" for="inputDefault">First Name</label>
                <input class="form-control" id="inputDefault" placeholder="First Name" type="text">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Second Name</label>
                <input class="form-control" id="inputDefault" placeholder="Second Name" type="text">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Phone Number</label>
                <input class="form-control" id="inputDefault" placeholder="Phone Number" type="phone_number">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Email</label>
                <input class="form-control" id="inputDefault" placeholder="Email" type="email">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputDefault">Message/Enquiry/Thoughts</label>
                <textarea class="form-control" rows="3" id="textArea"></textarea>
            </div>
            <a href="#" class="btn btn-primary ">Send</a>
        </div>
    </div>
</div>
</div>
@include('layouts.footer')