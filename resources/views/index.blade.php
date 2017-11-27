@extends('layouts.app')

@section('content')

    <div id="home" name="home">
        <div id="headerwrap">
            <header class="clearfix"> 
                <i class="fa text-shadow fa-desktop icon"></i>
                <div class="text-white">
                    <h1>Creative &amp; High Quality </h1>
                    <h2 >Computer Hardware assurance.</h2>
                </div>  
                <a href="#portfolio" class="smoothScroll btn btn-lg">See, what I do..</a> 
            </header>
        </div>
    </div>

    <div id="about" name="about">
        <div class="container">
            <div class="row white">
                <h2 class="centered">ABOUT ME</h2>
                <hr>
                <div class="col-md-6">
                    <img class="img-responsive" src="/images/about/about1.jpg" align="">
                </div>
                <div class="col-md-6">
                    <h3>Who I am !</h3>
                    <p class="bigmeP">I'm Kanti Bhuva. An Engineer specialized is Computer Hardware-devices and Networking. I Repair any kind of hardware fault in Electronic devices specially related to computers like Printers, MotherBoards etc. </p>
                    <br>
                    <h3>Why to choose me ?</h3>
                    <p class="bigmeP">I've Experience in this field since 10 years and more. Also I've done specialization in Networking field.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="services" name="services">
        <div class="container">
            <div class="row">
                <h2 class="centered">SERVICES</h2>
                <hr>
                <div class="col-lg-8 col-lg-offset-2"></div>
                <div class="col-lg-4 callout">
                    <i class="fa fa-desktop fa-3x"></i>
                    <h3>Computer Repairs</h3>
                </div>
                <div class="col-lg-4 callout">
                    <i class="fa fa-gears fa-3x"></i>
                    <h3>Hardware Replacement</h3>
                </div>
                <div class="col-lg-4 callout">
                    <i class="fa fa-dot-circle-o fa-3x"></i>
                    <h3>Networking</h3>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio">
        <div class="container">
            <div class="row">
                <h2 class="centered">PORTFOLIO</h2>
                <hr>
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <p class="large">Here are some of devices I'm expert in..</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="grid mask">
                            <figure>
                                <img alt="" class="img-responsive" src="/images/portfolio/advanced-computer.jpg">
                                <figcaption>
                                    <h5>Laptops</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                                    <h4 class="modal-title">Project Title</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, quo meis audire placerat eu, te eos porro veniam. An everti maiorum detracto mea. Eu eos dicam voluptaria, erant bonorum albucius et per, ei sapientem accommodare est. Saepe dolorum constituam ei vel</p>
                                    <p><b><a href="#">Visit Site</a></b></p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="grid mask">
                            <figure>
                                <img alt="" class="img-responsive" src="/images/portfolio/motherboard.jpg">
                                <figcaption>
                                    <h5>Motherboards</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="grid mask">
                            <figure>
                                <img alt="" class="img-responsive" src="/images/portfolio/display.jpg">
                                <figcaption>
                                    <h5>Displays</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="grid mask">
                            <figure>
                                <img alt="" class="img-responsive" src="/images/portfolio/hdd.png">
                                <figcaption>
                                    <h5>Harddrives</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="grid mask">
                            <figure>
                                <img alt="" class="img-responsive" src="/images/portfolio/printer.jpg">
                                <figcaption>
                                    <h5>Printers</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="grid mask">
                            <figure>
                                <img alt="" class="img-responsive" src="/images/portfolio/computer_repair.png">
                                <figcaption>
                                    <h5>Processing Units</h5>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ( !auth()->guard()->guest() && ( Auth::user()->role == 'user' || Auth::user()->role == 'admin' ) )
        <div id="software" name="software">
            <div class="container">
                <h2 class="centered">SOFTWARES</h2><hr>
                @if ( Auth::user()->role == 'admin' )
                    <a class="btn upload-btn" data-toggle="modal" data-target="#addSoftware">Upload Software</a>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email ID</th>
                            <th>Software Name</th>
                            <th>Download</th>
                            @if ( Auth::user()->role == 'admin' )
                                <th>Delete</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 0;?>
                        @foreach($softwares as $s)
                            <tr>
                                <td>{{++$id}}</td>
                                <td>{{$s->name}}</td>
                                <td>{{$s->email}}</td>
                                <td><a href="/software/download/{{$s->software_id}}" class="btn btn-success"> <i class="fa fa-download"></i> </a></td>
                                @if ( Auth::user()->role == 'admin' )
                                    <td><a href="/software/delete/{{$s->software_id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    @if ( !auth()->guard()->guest() && Auth::user()->role == 'admin' )
        <div id="user" name="user">
            <div class="container">
                <h2 class="centered">USERS</h2><hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email ID</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 0;?>
                        @foreach($users as $u)
                            <tr>
                                <td>{{++$id}}</td>
                                <td>{{$u->name}}</td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->role}}</td>
                                <td><a href="/user/edit/{{$u->user_id}}" class="btn btn-primary"> <i class="fa fa-pencil"></i></a></td>
                                <td><a href="/user/delete/{{$u->user_id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif


    <div id="contact">
        <div class="container">
            <div class="row">
                <h2 class="centered">CONTACT ME</h2>
                <hr>
                <div class="col-md-4 centered">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <p>21, Indrajit Park, Nikol Gam Road, Nr, Sardar Mall Ahmedabad - 382350</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-envelope-o fa-2x"></i>
                    <p>support@kantibhuva.com</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-phone fa-2x"></i>
                    <p>+91 9913092695</p>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <form class="form" id="contactForm" name="sentMessage" novalidate="">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="name" placeholder="Name" required="required" type="text">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="email" placeholder="Email" required="required" type="email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Message" required="" rows="5"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div><button class="btn btn btn-lg" id="btnx" type="submit">Send Message</button>
                    </form>
                </div>
            </div> -->
        </div>
    </div>

    <div class="modal" id="addSoftware" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <i type="button" class="fa fa-close btn-cancel" data-dismiss="modal"></i>
                <form class="modalform" method="post" action="{{ Route('uploadSoftware') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <h2 class="header">Upload Software</h2>
                    <div class="form-group">
                        <input type="file" class="form-control" name="software" required>
                    </div>
                    <button type="submit" class="btn-upload">Upload Software</button>
                </form>
            </div>
        </div>
    </div>

@endsection