
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif -->


           

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rwanda Leaders Fellowship</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/assets/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/assets/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/assets/css/pe-icon-7-stroke.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/assets/css/theme-lava.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
    
        <script src="/assets/js/allscripts.js.html"></script>
        
        <a id="top"></a>
                
        <div class="nav-container">
                        
                <nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
            </div>
            <a class="navbar-brand" href="#">
                <center>
                    <div class="logo-section">
                        <img src="/assets/img/logo.jpeg" style="width:100px;">
                    </div>
                </center>
            </a>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="/#overview">Overview</a>
                    </li>
                    <li>
                        <a href="/#schedule">Agenda</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     <li>
                        <a href="/#venue">Venue</a>
                    </li>
                    <li>
                        <a href="/#speakers">Speakers</a>
                    </li>
                    <li>
                        <a href="/#sponsors">Sponsors</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
        
                        
                
        </div>
        <div class="main-container"><a id="home" class="in-page-link"></a>
            
            <section class="hero-slider">
                <ul class="slides">
                   @foreach($slide As $value) 
                    <li class="hero-slide">
                        <div class="background-image-holder parallax-background">
                            <img class="background-image" alt="Background Image" src="/picha/{{$value->picha}}">
                        </div>
                    
                       <!--  <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
    
                                </div>
                                
                            </div><!-end of row-->
                        <!-- </div> -->
                    </li>
                    @endforeach
                    
                   <!--  <li class="hero-slide">
                        <div class="background-image-holder parallax-background">
                            <img class="background-image" alt="Background Image" src="/assets/img/slide.jpeg">
                        </div>
                    
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
    
                                </div>
                                
                            </div><!end of row-->
                       <!--  </div>end of container
                    </li>  -->
                </ul>
            </section>
            
            <a id="overview" class="in-page-link"></a>
            <section class="inline-video">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Welcome to Rwanda Leaders Fellowship&nbsp;</h1>
                        </div>
                    </div><!--end of row-->
                
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.
                        
                            </p><p>
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non.
                            </p>
                            <!-- <a href="#" class="btn btn-primary">Register Today</a> -->
                        </div>
                    
                        <div class="col-md-6">
                            <div class="embedded-video-holder">
                                <iframe src="https://www.youtube.com/embed/_SWYtyf0Hss" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!--end of row-->
                </div><!--end of container-->
            </section>
            
            
            <a id="schedule" class="in-page-link"></a>
            <section class="schedule schedule-with-text">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1>Agenda</h1>
                        </div>
                    </div><!--end of row-->
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <h1>Rwanda Leaders Fellowship is set over two days of ground-breaking speeches for web enthusiasts</h1>
                            
                            <p>
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                            </p>
                            
                            <!-- <a href="#" class="btn">Register Today</a> -->
                            
                        </div>
                        
                        <div class="col-md-7 col-sm-6">
                        <table>
                        <tbody> 

                             <ul class="schedule-overview">
                                @foreach($agenda as $value)
                                <li>
                                    <div class="schedule-title">
                                        <span class="time">{{$value->start_date}} To {{$value->end_date}}</span>
                                        <span class="title">{{$value->title}}</span>
                                    </div>
                                    
                                    <div class="schedule-text">
                                        <p>
                                            {{$value->address}}
                                        </p>
                                        <div class="schedule-text">
                                        <p>
                                            {{$value->description}}
                                    </div>
                                    
                                    <div class="marker-pin">
                                        <div class="top"></div>
                                        <div class="middle"></div>
                                        <div class="bottom"></div>
                                    </div>
                                </li>
                                 @endforeach
                                <!--end of individual schedule item-->
                               
   
   
                              
                                
                            </ul>
                        </tbody>
                        </table>
                           
                        </div>
                        
                    </div><!--end of row-->
                </div><!--end of container-->
            </section>

            <a id="venue" class="in-page-link"></a>
            <div class="row" style="margin-left: 0px;margin-right: 0px;background:#fff">
                <div class="col-sm-12 text-center">
                    <h1>Location Venue</h1>
                </div>
            </div><!--end of row-->
            <section class="contact-tweets" style="padding-bottom: 0px;padding-top:0px;background:#fff;">
                
                <div class="col-md-6" style="padding-left: 0px;padding-right: 0px;">
                    <img src="assets/img/serena.jpg" class="image-responsive">
                </div>
                <div class="map-holder col-md-6 col-sm-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15949.973688827215!2d30.0625956!3d-1.9560688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89ecc5103116a521!2sKigali+Serena+Hotel!5e0!3m2!1sen!2srw!4v1480932838027" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </section>

            <a id="speakers" class="in-page-link"></a>
            <!-- <section class="speakers duplicatable-content">
            
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1>Speakers</h1>
                     </div>
                    </div><!end of row-->
                    
                    <!-- <div class="row"> -->
                        
                        <!--end of individual speaker with bio-->
                          <!-- </div> -->
                                <!-- @foreach($speaker as $value) -->
<!--                         <div class="col-md-6 col-sm-12">
                            <div class="speaker-with-bio">
                                <div class="speaker"> -->
                                   <!--  <div class="image-holder">
                                        <img class="background-image" alt="Speaker" src="/picha/{{$value->picha}}">
                                        <div class="hover-state text-center preserve3d">
                                            <div class="social-links vertical-align">
                                                <a href="index.html#"><i class="icon social_twitter"></i></a>
                                                <a href="index.html#"><i class="icon social_linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div> -->
                              
                                <!-- <div class="speaker-description">
                                    <h2>{{$value->first_name}} {{$value->last_name}}</h2>
                                    <span class="sub">{{$value->title}} {{$value->company_name}}</span>
                                    <p>
                                       {{$value->bio}}
                                    </p>
                                </div> -->
                               <!--  @endforeach
                            </div>
                        </div>
                         -->
                      
                    
                    
                <!-- </div>end of container -->
            
            <!-- </section> --> 
            <section class="speakers duplicatable-content">
             
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1>Speakers</h1>
                        </div>
                    </div><!--end of row-->
                    @foreach($speaker as $value)
                    <div class="row">
                        
                        <!--end of individual speaker with bio-->
                        <div class="col-md-6 col-sm-4">
                            <div class="speaker-with-bio">
                                <div class="speaker">
                                    <div class="image-holder">
                                        <img class="background-image" alt="Speaker" src="/picha/{{$value->picha}}">
                                        <div class="hover-state text-center preserve3d">
                                            <div class="social-links vertical-align">
                                                <a href="index.html#"><i class="icon social_twitter"></i></a>
                                                <a href="index.html#"><i class="icon social_linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="speaker-description">
                                    <h2>{{$value->first_name}} {{$value->last_name}}</h2>
                                    <span class="sub">{{$value->title}} {{$value->company_name}}</span>
                                    <p>
                                        <!-- Eugene Haguma Grew up in the exile in kampala. he joined the Rwanda Patriotic Army lead by president Paul Kagame that Liberated Rwanda, Which later Become the Rwanda Defense force. -->
                                        {{$value->bio}}
                                    </p>
                                </div>
                            </div>
                        </div><!--end of individual speaker with bio-->
                      @endforeach
                        <!--end of individual speaker with bio-->
                       <!--  <div class="col-md-6 col-sm-12">
                            <div class="speaker-with-bio">
                                <div class="speaker">
                                    <div class="image-holder">
                                        <img class="background-image" alt="Speaker" src="assets/img/eugene.jpg">
                                        <div class="hover-state text-center preserve3d">
                                            <div class="social-links vertical-align">
                                                <a href="index.html#"><i class="icon social_twitter"></i></a>
                                                <a href="index.html#"><i class="icon social_linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="speaker-description">
                                    <h2>Eugene Haguma</h2>
                                    <span class="sub">CEO of Horizon Group</span>
                                    <p>
                                        Eugene Haguma Grew up in the exile in kampala. he joined the Rwanda Patriotic Army lead by president Paul Kagame that Liberated Rwanda, Which later Become the Rwanda Defense force.
                                    </p>
                                </div>
                            </div>
                        </div><!end of individual speaker with bio--> 
                        
                        <!--end of individual speaker with bio-->
                        
                       <!--  <div class="col-md-6 col-sm-12">
                            <div class="speaker-with-bio">
                                <div class="speaker">
                                    <div class="image-holder">
                                        <img class="background-image" alt="Speaker" src="assets/img/eugene.jpg">
                                        <div class="hover-state text-center preserve3d">
                                            <div class="social-links vertical-align">
                                                <a href="index.html#"><i class="icon social_twitter"></i></a>
                                                <a href="index.html#"><i class="icon social_linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="speaker-description">
                                    <h2>Eugene Haguma</h2>
                                    <span class="sub">CEO of Horizon Group</span>
                                    <p>
                                        Eugene Haguma Grew up in the exile in kampala. he joined the Rwanda Patriotic Army lead by president Paul Kagame that Liberated Rwanda, Which later Become the Rwanda Defense force.
                                    </p>
                                </div>
                            </div>
                        </div><!end of individual speaker with bio--> 
                        
                        <!--end of individual speaker with bio-->

                       <!--  <div class="col-md-6 col-sm-12">
                            <div class="speaker-with-bio">
                                <div class="speaker">
                                    <div class="image-holder">
                                        <img class="background-image" alt="Speaker" src="assets/img/eugene.jpg">
                                        <div class="hover-state text-center preserve3d">
                                            <div class="social-links vertical-align">
                                                <a href="index.html#"><i class="icon social_twitter"></i></a>
                                                <a href="index.html#"><i class="icon social_linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="speaker-description">
                                    <h2>Eugene Haguma</h2>
                                    <span class="sub">CEO of Horizon Group</span>
                                    <p>
                                        Eugene Haguma Grew up in the exile in kampala. he joined the Rwanda Patriotic Army lead by president Paul Kagame that Liberated Rwanda, Which later Become the Rwanda Defense force.
                                    </p>
                                </div>
                            </div>
                        </div><!-end of individual speaker with bio--> 
                        
                        <!--end of individual speaker with bio-->
                    
                    
                </div><!--end of container-->
            
            </section>

            <a id="sponsors" class="in-page-link"></a>
            <section class="sponsors">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1>Proudly sponsored by</h1>
                        </div>
                    </div><!--end of row-->
                
                
                    <div class="row">

                        <div class="col-sm-10 col-sm-offset-1">
                        @foreach($sponsor as $value)
                            <div class="col-md-4 col-sm-6 sponsor-column">
                                <div class="sponsor text-center">
                                    <a href="#">
                                        <img alt="Sponsor" src="/picha/{{$value->logo}}">
                                    </a>
                                </div>
                            </div>

                     @endforeach
                           <!--  <div class="col-md-4 col-sm-6 sponsor-column">
                                <div class="sponsor text-center">
                                    <a href="home-2.html#speakers">
                                        <img alt="Sponsor" src="assets/img/sponsor2.png">
                                    </a>
                                </div>
                            </div> -->
                    
                            <!-- <div class="col-md-4 col-sm-6 sponsor-column">
                                <div class="sponsor text-center">
                                    <a href="home-2.html#speakers">
                                        <img alt="Sponsor" src="assets/img/sponsor3.png">
                                    </a>
                                </div>
                            </div> -->
                        
                            <!-- <div class="col-md-4 col-sm-6 sponsor-column">
                                <div class="sponsor text-center">
                                    <a href="home-2.html#speakers">
                                        <img alt="Sponsor" src="assets/img/sponsor4.png">
                                    </a>
                                </div>
                            </div>
                         -->
                            <!-- <div class="col-md-4 col-sm-6 sponsor-column">
                                <div class="sponsor text-center">
                                    <a href="home-2.html#speakers">
                                        <img alt="Sponsor" src="assets/img/sponsor5.png">
                                    </a>
                                </div>
                            </div> -->
                        
                          <!--   <div class="col-md-4 col-sm-6 sponsor-column">
                                <div class="sponsor text-center">
                                    <a href="home-2.html#speakers">
                                        <img alt="Sponsor" src="assets/img/sponsor6.png">
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div><!--end of row-->
                   
                </div><!--end of container-->
            </section>
        </div>
        <div class="footer-container">          
            <footer class="classic">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <form method="POST" action="/subscribe" class="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <center style="padding-top: 20px;padding-bottom: 20px;">
                                    <h4>subscribe with your email</h4>
                                </center>
                                <div class="form-group">
                                    <input  type="email" name="email" placeholder="enter your email" class="form-control">
                                </div>
                                    <center>
                                        <button type="submit" class="btn btn-primary">subscribe</button>
                                    </center>
                            </form>
                        </div>
                        
                        <div class="col-sm-12 text-center">
                            <ul class="social-profiles">
                                <li><a href="home-3.html#"><i class="icon social_twitter"></i></a></li>
                                <li><a href="home-3.html#"><i class="icon social_facebook"></i></a></li>
                                <li><a href="home-3.html#"><i class="icon social_googleplus"></i></a></li>
                            </ul>   
                            <p class="text-center">Copyright &copy; Rwanda Leaders Fellowship 2016</p>
                        </div>

                    </div><!--end of row-->
                </div><!--end of container-->
            </footer>
        </div>
                
                
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/skrollr.min.js"></script>
        <script src="/assets/js/spectragram.min.js"></script>
        <script src="/assets/js/flexslider.min.js"></script>
        <script src="/assets/js/jquery.plugin.min.js "></script>
        <script src="/assets/js/jquery.countdown.min.js"></script>
        <script src="/assets/js/lightbox.min.js"></script>
        <script src="/assets/js/smooth-scroll.min.js"></script>
        <script src="/assets/js/twitterfetcher.min.js"></script>
        <script src="/assets/js/scripts.js"></script>
    </body>
</html>
                