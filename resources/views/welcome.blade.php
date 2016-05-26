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
                    <li><a href="#desc" class="smoothScroll">Groups</a></li>
                    <li><a href="#showcase" class="smoothScroll">Benefits</a></li>
                    <li><a href="#features" class="smoothScroll">Do I Qualify?</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    
                    
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>

    <section id="home" name="home"></section>
        <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item"><img src="{{asset('img/wehustleng_plain.jpg')}}" alt="Chania" style="width: 100%;"></div>
            <div class="item"><img src="{{asset('img/wehustleng_wit_def.jpg')}}" alt="Chania" style="width: 100%;"></div>
            <div class="item"><img src="{{asset('img/wehustleng_wit_handle.jpg')}}" alt="Chania" style="width: 100%;"></div>
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
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                    <h3>Junior Hustlers</h3>
                    <p>Young entrepreneurs, working towards breaking new grounds in their industry. Usually they have a working product/solution with seed capital/funding and what they need right now is distribution and PR/branding. With mentoring as an icing on the cake.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                    <h3>Senior Hustlers</h3>
                    <p>Successful entrepreneurs with measurable experience building businesses. Typically they've either sold a business before or gone public or they could currently be running a business with 10 million naira in revenue.</p>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                    <h3>Community Managers</h3>
                    <p>As the name implies, they are the people that work behind the scenes to make the connections happen. Once they identify a fit between business needs they make the calls.<br>
                    <a href="#" class="btn btn-default">Volunteer now</a>
                    </p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->
    <section id="showcase" name="showcase"></section>
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
    </div>
    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h2 class="centered"><b>Do I qualify?</b></h2>
                <br>
                
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
        <p >
         Copyright &copy; <?php echo date('Y'); ?> | Made with <a href="#"><i class="fa fa-heart-o "></i></a> by wehustleng 
        </p>
        <p> <a href="https://twitter.com/wehustleng"> <i class="fa fa-twitter"></i> &nbsp;Tweet at us! </a></p>
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
