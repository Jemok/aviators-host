@include('layouts.header')
<div class="container-fluid">
    <div class="row" style="margin-top: -22px;">
        <div class="col-md-6 cuadro_intro_hover" style="border-right: 1px #1C2B39 solid; border-bottom: 1px #1C2B39 solid;">
            <img src="{{ asset('images/aviators-landing.jpg') }}" class="img-responsive" alt="">
            <div class="caption">
                <div class="col-md-12 blur"></div>
                <div class="col-md-12 caption-text">
                    <h3>
                        <span class="badge" style="background-color: red;">
                            1
                        </span>
                        Let your business fly
                    </h3>
                    <p>
                        <span class="badge" style="background-color: red;">
                            2
                        </span>
                        Located strategically at Luther plaza, we offer furnished office solutions for as short as a day and as long as a year!</p>

                    <button class="btn btn-default btn-lg btn-email" data-toggle="modal" data-target="#bookTour">
                        <i class="fa fa-envelope" aria-hidden="true"></i> Email us
                    </button>

                    {{--<a class=" btn btn-default" href="http://trovacamporella.com"><span class="glyphicon glyphicon-plus"> INFO</span></a>--}}
                </div>
            </div>
        </div>
        <div class="row col-md-6" style="margin-top: 4%;">
            <div class="para-info">
                <h3 class="text-center text-aviators">
                      <span class="badge" style="background-color: red;">
                            3
                        </span>
                    Chose the perfect office for your business
                </h3>
                <p class="text-center text-aviators">
                     <span class="badge" style="background-color: red;">
                            4
                        </span>
                    Finding the right area in Nairobi for your business is important. It's all about location. Aviators business hub is strategically located & offers your office solutions. Take a tour, Let your business fly.
                </p>

            </div>
            <div class="para-info">
                <button class="btn btn-info btn-lg btn-quote center-block" data-toggle="modal" data-target="#myModal">
                    Get a quote now
                </button>

                <button class="btn btn-info btn-lg btn-quote center-block" data-toggle="modal" data-target="#bookTour">
                    Book a tour
                </button>
            </div>

            <div class="para-info downloads text-center">
                <i class="fa fa-download fa-2x text-aviators" aria-hidden="true"></i>
                <span class="text-aviators">
                    Download our brochure
                </span>

                <i class="fa fa-download fa-2x text-aviators" aria-hidden="true"></i>
                <span class="text-aviators">
                    Download Aviators company profile
                </span>
            </div>
            {{--<div class="para-info downloads text-center">--}}
            {{----}}
            {{--</div>--}}
        </div>
    </div>

    <h1 class="text-center text-aviators" style="padding-top: 1%;">
        <span class="badge" style="background-color: red;">
                            5
                        </span> Office solutions
    </h1>

    <div class="row" style="margin-top: 1%;">
        <div class="col-md-offset-1 col-md-10 blogShort">
            <h1 class="text-aviators">
                    <span class="badge" style="background-color: red;">
                            6
                        </span>
                Serviced offices
            </h1>
            <img src="{{ asset('images/aviators-landing.jpg') }}" height="250" width="250"  alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
            <article>
                <p class="text-aviators">
                    <span class="badge" style="background-color: red;">
                            7
                        </span>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                </p>

                <a href="{{ url('serviced-offices') }}" class="btn btn-info btn-sm btn-email">
                    Find out more <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            </article>
        </div>
        <div class="col-md-offset-1 col-md-10 blogShort">
            <h1 class="text-aviators">
                <span class="badge" style="background-color: red;">
                            8
                        </span>
                Virtual offices
            </h1>
            <img src="{{ asset('images/aviators-landing-1.jpg') }}" height="250" width="250"  alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
            <article>
                <p class="text-aviators">
                    <span class="badge" style="background-color: red;">
                            9
                        </span>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                </p>
                <a href="{{ url('serviced-offices') }}" class="btn btn-info btn-sm btn-email">
                    Find out more <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            </article>
        </div>

        <div class="col-md-offset-1 col-md-10 blogShort">
            <h1 class="text-aviators">
                <span class="badge" style="background-color: red;">
                            10
                        </span>
                Meeting and boardroom</h1>
            <img src="{{ asset('images/aviators-landing-2.jpg') }}" height="250" width="250"  alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
            <article>
                <p class="text-aviators">
                    <span class="badge" style="background-color: red;">
                            11
                        </span>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                </p>
                <a href="{{ url('serviced-offices') }}" class="btn btn-info btn-sm btn-email">
                    Find out more <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </a>
            </article>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Get a quote</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Office type</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option>Meeting room</option>
                                <option>Serviced office</option>
                                <option>Virtual office</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Organization</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Organization">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputPassword3" placeholder="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number of people</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Preference</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Get quote</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bookTour" tabindex="-1" role="dialog" aria-labelledby="bookTourLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Book a tour</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Office type</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option>Meeting room</option>
                                <option>Serviced office</option>
                                <option>Virtual office</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Organization</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Organization">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputPassword3" placeholder="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Date of tour</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Book tour</button>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')