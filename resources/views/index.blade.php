<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Kanti Bhuva | Sun Services</title>

        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom CSS -->
        <link href="/css/main.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
        
        <div id="navbar-main"> 
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand smoothScroll" href="#home">Sun Services</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home" class="smoothScroll">Home</a></li>
                            <li><a href="#about" class="smoothScroll"> About</a></li>
                            <li><a href="#services" class="smoothScroll"> Services</a></li>
                            <li><a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
                            <li><a href="#download" class="smoothScroll"> Download</a></li>
                            <li><a href="#contact" class="smoothScroll"> Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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

        <div id="download" name="download">
            <div class="container">
                <h2 class="centered">DOWNLOAD</h2><hr>
                <ul>
                    <li>
                        <a href="login/index.php"><span>Sign Up / Login</span></a>
                    </li>
                </ul>
            </div>
        </div>

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

        <div id="footerwrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <span class="copyright">Copyright &copy; 2016 <a class="urlextern" href="ftp://kantibhuva.com" rel="nofollow" title="ftp://kantibhuva.com">Kanti Bhuva.</a> Design by <a rel="nofollow">Devang Bhuva</a></span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/2.1.3/retina.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/12.1.5/js/smooth-scroll.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.min.js"></script> 

        <script type="text/javascript" src="/js/contact_me.js"></script> 
        <script type="text/javascript" src="js/jquery-func.js"></script>
        <script type="text/javascript" src="/js/application.js"></script>

    </body>
</html>
