<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="title" content="GreenBubble Algae Solution Providers">
    <meta name="description" content="GreenBubble provides cost effective and green turnkey solutions by using micro algae for nutraceuticals, pharmaceuticals and other mass markets. Currently offering spirulina based turnkey solutions.">
    <meta name="author" content="GreenBubble AlgalWorks Pvt Ltd.">
    <meta name="keywords" content="greenbubble, consulting, turnkey solutions, spirulina turnkey solutions, algae, algae cultivation, algae harvesting">
    <meta name="language" content="en">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} :: GreenBubble</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    {{ HTML::style('css/base.css?t=1389385759'); }}
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 7]><script src="js/font-icon-ie7.js"></script><![endif]-->
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
  </head>

  <body class="mtopsticky">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ URL::to('/') }}}">GreenBubble</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{{ URL::to('/') }}}">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{{ URL::to('/products/overview') }}}">Market Overview</a></li>
                <li><a href="{{{ URL::to('/products/spirulina-turnkey') }}}">Spirulina Turnkey Solutions</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Technology <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{{ URL::to('/technology/overview') }}}">Overview</a></li>
                <li class="divider"></li>
                <li><a href="{{{ URL::to('/technology/algae-strain') }}}">Algae Strain</a></li>
                <li><a href="{{{ URL::to('/technology/algae-cultivation') }}}">Algae Cultivation</a></li>
                <li class="divider"></li>
                <li><a href="{{{ URL::to('/technology/harvesting-agitation') }}}">Harvesting &amp; Agitation</a></li>
                <li><a href="{{{ URL::to('/technology/infrastructure') }}}">Infrastructure</a></li>
              </ul>
            </li>
            <li><a href="{{{ URL::to('/gallery') }}}">Gallery</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{{ URL::to('/team') }}}">Team</a></li>
                <li><a href="{{{ URL::to('/advisors-mentors') }}}">Advisors &amp; Mentors</a></li>
                <li><a href="{{{ URL::to('/contact-us') }}}">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <div class="container">
    {{ $content }}
  </div>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <p class="pull-right"><a href="#">Back to top <span class="glyphicon glyphicon-arrow-up"></span></a></p>
      <p>&copy; 2014 GreenBubble AlgalWorks Pvt Ltd. All Rights Reserved.</p>
    </div>
  </footer>
	
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	{{ HTML::script('js/base.js'); }}
  </body>
</html>