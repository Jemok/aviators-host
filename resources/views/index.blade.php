@include('layouts.header')

@include('layouts.nav')
<div class="container-fluid">
    <div class="row index">
        <div id="carousel-example-generic" class="carousel slide col-md-offset-1 col-md-7 landing-image" data-ride="carousel">
            <!-- Indicators -->
            {{--<ol class="carousel-indicators">--}}
                {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
                {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
                {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
            {{--</ol>--}}

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('images/aviators-landing.jpg') }}" class="img-responsive" alt="service offices">
                    <div class="carousel-caption">
                       <h3>
                           Serviced offices
                       </h3>
                        <p style="color: whitesmoke;">
                            You pay a set monthly price and in exchange you will receive everything you will need to run your company.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('images/aviators-landing-2.jpg') }}" class="img-responsive" alt="virtual offices">
                    <div class="carousel-caption">
                       <h3>
                           Virtual offices
                       </h3>
                        <p>
                            We will reduce your costs of doing business and increase your bottom line. In addition we will give you the use of our address. Let your business fly.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{--<div class="col-md-offset-1 col-md-7 landing-image">--}}
            {{--<img src="{{ asset('images/aviators-landing.jpg') }}" class="img-responsive">--}}
        {{--</div>--}}

        <div class="row col-md-4">
            <div class="para-info">
                <h3>Chose a perfect office for your business</h3>
                <p>
                    <i class="fa fa-check fa-2x" aria-hidden="true"></i>

                    Finding the right area in Nairobi for your business is important. It's all about location. Aviators business hub is strategically located & offers your office solutions. Take a tour, Let your business fly.
                </p>

                <p>
                    <i class="fa fa-check fa-2x" aria-hidden="true"></i>

                    Priceless moments with business people at Aviators, Let your business fly
                </p>

                <p>
                    <i class="fa fa-check fa-2x" aria-hidden="true"></i>

                    We are a leading provider of flexible office solutions, virtual offices, meeting rooms and Boardroom hire in Nairobi. We deliver serviced office space solutions and our range of products are tailored towards our clients needs, from sole traders to multinationals. Let your business fly.
                </p>
            </div>
            <div class="para-info">
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                    Get a quote now
                </button>

                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#bookTour">
                    Book a tour
                </button>
            </div>

        </div>
    </div>

    <div class="row " style="margin-top: 1%; margin-bottom: 2em">
        <h1 class="text-center" style="padding-top: 1%;">
            Office solutions
        </h1>
        <div class="col-md-offset-1 col-md-10 blogShort">
            <h1>Serviced offices</h1>
            <img src="{{ asset('images/aviators-landing.jpg') }}" height="250" width="250"  alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
            <article>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.
                </p>

                <a href="{{ url('serviced-offices') }}" class="btn btn-info btn-lg text-center">Find out more</a>
            </article>
        </div>
        <div class="col-md-offset-1 col-md-10 blogShort">
            <h1>Virtual offices</h1>
            <img src="{{ asset('images/aviators-landing-1.jpg') }}" height="250" width="250"  alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
            <article>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.
                </p>
                <a href="{{ url('virtual-offices') }}" class="btn btn-info btn-lg text-center">Find out more</a>
            </article>
        </div>

        <div class="col-md-offset-1 col-md-10 blogShort">
            <h1>Meeting and boardroom</h1>
            <img src="{{ asset('images/aviators-landing-2.jpg') }}" height="250" width="250"  alt="post img" class="pull-left img-responsive postImg img-thumbnail margin10">
            <article>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                    five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                    of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.
                </p>
                <a href="{{ url('meeting-and-boardroom') }}" class="btn btn-info btn-lg text-center">Find out more</a>
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