<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>WeHustleNG</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>

    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
    

</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    WeHustleNG
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#desc" class="smoothScroll">About</a></li>
                    <li><a href="#features" class="smoothScroll">Do I Qualify?</a></li>
                    <li><a href="#showcase" class="smoothScroll">Testimonials</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home"></section>
    <img src="{{asset('img/wehustleng.jpg')}}" class="img-responsive" width="100%">

    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1>Member Groups</h1>
                <br>
                <br>
                <div class="col-lg-4">
                    <i class="fa fa-users fa-5" aria-hidden="true"></i>
                    <h3>Junior Hustlers</h3>
                    <p>Hustlers trying to get ahead in their business pursuits and want to learn from Successful entrepreneurs that are senior hustlers..</p>
                    <p>Usually they are new comers into the entrepreneurial race.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-users fa-5" aria-hidden="true"></i>
                    <h3>Senior Hustlers</h3>
                    <p>Hustlers with experience; they have been successful in their business pursuits and want to give back by mentoring aspiring entrepreneurs.</p>
                    <p>Usually they are the more successful and established entrepreneurs.</p>
                </div>
                <div class="col-lg-4">
                    <<i class="fa fa-users fa-5" aria-hidden="true"></i>
                    <h3>LOC Members</h3>
                    <p>As the name implies, they are the people that work behind the scenes to make the connections happen.</p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->

    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered">Do I qualify?</h1>
                
                <div class="col-lg-2 centered">
                    <i class="fa fa-list-alt fa-5"></i>
                </div>

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Age Bracket
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          Before we can extend an invitation to you must be between 15 and 35. <br>
                          Say no to oldies!!! 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Business Owner
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          For you to qualify as a hustler on our platform you must be either a founder or co-founder of a business.<br>
                          Else, you would have to convince us on why 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Business Revenue
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          Company should have recorded a reasonable amount of sales from start date. <br>
                          If you are not selling, what are you doing?
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Customers
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          Your business should have paying customers.<br>
                          Subscription basis could be a plus. 
                        </div>
                      </div>
                    </div>
                  </div><!--/ accordion -->
                </div><!--/ lg-offset -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </div><!--/ #features -->


<section id="showcase" name="showcase"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered">Testimonials</h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('img/wehustleng_plain.jpg')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('img/wehustleng_plain.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>

<section id="contact" name="contact"></section>
<div id="footerwrap">    
    <a href="https://twitter.com/wehustleng">Tweet at Us!</a>
</div>
</div>
<div id="c">
    <div class="container">
        
         Copyright &copy; <?php echo date('Y'); ?> | Made with <i class="fa fa-heart-o "></i> by wehustleng 
         <div class="pull-right"> <a href="wehustleng@gmail.com"> <i class="fa fa-envelope"></i> Email Us!</a></div>
        
    </div>
</div>


<!-- JavaScripts -->
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 3500
        })
    </script>
</body>
</html>
