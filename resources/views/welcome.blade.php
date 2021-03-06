<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>WeHustleNG</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Bootstrap core CSS -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/scrolling-nav.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- <script src="{{ asset('/js/jquery.min.js') }}"></script>
 -->
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
    

</head>

<body id="page-top" data-spy="scroll" data-offset="0" data-target="#navigation">

    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}">
                  
                  <img src="{{asset('img/logo.png')}}" alt="wehustleng" height="50" weight="50" class="hidden-xs">
                  <img src="{{asset('img/logo.png')}}" alt="wehustleng" height="45" weight="45" class="visible-xs">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#desc" class="smoothScroll">Groups</a></li>
                    <!-- <li><a href="#showcase" class="smoothScroll">Benefits</a></li> -->
                    <li><a href="#features" class="smoothScroll">Do I Qualify?</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>                    
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <section id="home" name="home"></section>
        <div id="myCarousel" class="carousel slide">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item"><img src="{{asset('img/wehustleng.jpg')}}" alt="picture1" style="width: 100%;">
              <div class="carousel-caption">
                <h3>About Wehustle</h3>
                <p>A IV-only community to connect bright and enterprising youths to successful peers and seniors. <br>
                </p>
              </div>
            </div>
            <div class="item"><img src="{{asset('img/wehustleng.jpg')}}" alt="picture2" style="width: 100%;">
              <div class="carousel-caption">
                <h3>Who is a Hustler?</h3>
                <p> We regard any hard-working person, who is trying to get ahead in life as a hustler.
                </p>
              </div>
            </div>
            <div class="item">
              <img src="{{asset('img/wehustleng.jpg')}}" alt="picture3" style="width: 100%;">
              <div class="carousel-caption">
                <h3>Benefits</h3>
                <p>Based on the assessment of your business need our concierge team would rightly connect you to someone that can help.<br>
                </p>
              </div>
            </div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h2><b>Member Groups</b></h2>
                <br>
                <br>
                <div class="col-lg-4">
                    <!-- <i class="fa fa-users fa-5x" aria-hidden="true"></i> -->
                    <img src="{{asset('img/growing.png')}}" width="100" height="100">
                    <h3>Junior Hustlers</h3>
                    <p>Young entrepreneurs, working towards breaking new grounds in their industry. Usually they have a working product/solution with seed capital/funding and what they need right now is distribution and PR/branding. With mentoring as an icing on the cake.</p>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('img/successful.png')}}" width="100" height="100">
                    <h3>Senior Hustlers</h3>
                    <p>Successful entrepreneurs with measurable experience building businesses. Typically they've either sold a business before or gone public or they could currently be running a business with 10 million naira in revenue.</p>
                </div>
                <div class="col-lg-4">
                    <!-- <i class="fa fa-users fa-5x" aria-hidden="true"></i> -->
                     <img src="{{asset('img/managers.png')}}" width="105" height="105">
                    <h3>Community Managers</h3>
                    <p>As the name implies, they are the people that work behind the scenes to make the connections happen. Once they identify a fit between business needs they make the calls.<br>
                    <a href="mailto:wehustleng@gmail.com" class="btn btn-default">Volunteer now</a>
                    </p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->
    <!-- <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            
                <h2 class="centered"><b>Benefits</b></h2>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                  
                    
                </div>
            
            <br>
            <br>
            <br>
        </div><!-- /container -->
    <!-- </div> -->
    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h2 class="centered"><b>Do I qualify?</b></h2>
                <br>
                
                <div class="col-lg-2 centered">
                    <img src="{{asset('img/unknown.png')}}" width="250" height="250" style="padding-bottom: 10px;">
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
                          Before we can extend an invitation to you must be between ages 15 and 40. <br>
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
                          Else, you would have to convince us on why you should be part of the family. 
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
                            Business Financing
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          Your business should have some level of financing already.<br>
                          Typically, this platform is not set for hungry people who are desperately in need of funding.<br>
                          It can so happen that 2 people in the same community have a need of starting a business and the other investing in a business. <br> Our Community Managers can make that happen to.
                        </div>
                      </div>
                    </div>
                  </div><!--/ accordion -->
                  <br>
                  <h3>Are you qualified? Go ahead to email us.</h3>
                </div><!--/ lg-offset -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </div><!--/ #features -->

<section id="contact" name="contact"></section>
<div id="footerwrap">    
    <a href="mailto:wehustleng@gmail.com">Email us, now!</a>
</div>

<div id="c">
    <div class="container" style="padding-bottom: 10px;">
        
         Copyright &copy; <?php echo date('Y'); ?> | Made with <i class="fa fa-heart-o "></i> by wehustleng 
      
        <a class="pull-right" href="https://twitter.com/wehustleng"> <i class="fa fa-twitter"></i></a>
    </div>
</div>


<!-- JavaScripts -->
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- <script>
        $('.carousel').carousel({
            interval: 3500
        })
    </script> -->
    <!-- Scrolling Nav JavaScript -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/scrolling-nav.js')}}"></script>
</body>
</html>
