



<?php
    session_start();

    if (!isset( $_SESSION['usuario'])) {
        header('Location: login.php');
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Universo</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/fav.png" type="image/png">


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-code"></i> Galaxias</a> </div>
      <p>Conectado como <span style="font-weight: bold;"><?php echo $_SESSION['usuario']; ?></span>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll">Home</a></li>
        <li><a href="#about" class="page-scroll">About Us</a></li>
        <li><a href="#portfolio" class="page-scroll">Descubre</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>El Universo</h1>
          <p>Sistemas Planetarios • Planetas • Nebulosas</p>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Me</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/GSFC_20171208_Archive_e000382_orig.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p>Colabora con nosotros, sacale rentabilidad a tu hobby favorito. Uniéndote a nosotros podrás expandirte en el ámbito laboral, a la vez que ganar cierto prestigio en el mundo de la fotografía astra.</p>
          <p>Empresas asociadas: NASA, NYT, NASA-ESPAÑA, ASTRALWorld, GLXPH.</p>
          <a href="#portfolio" class="btn btn-default btn-lg page-scroll">DESCUBRE EL UNIVERSO</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>El Universo</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">Todo</a></li>
            <li><a href="#" data-filter=".sistemassolares">Sistemas Solares</a></li>
            <li><a href="#" data-filter=".planetas">Planetas</a></li>
            <li><a href="#" data-filter=".nebulas">Nebulas</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 sistemassolares">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/agrupaciones-de-estrellas.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Galaxia Andrómeda</h4>
              </div>
              <img src="img/agrupaciones-de-estrellas.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 sistemassolares">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/f.elconfidencial.com_original_3b5_b0d_b50_3b5b0db502742eb69cbc21376f98f88c.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Galaxia KX-932</h4>
              </div>
              <img src="img/f.elconfidencial.com_original_3b5_b0d_b50_3b5b0db502742eb69cbc21376f98f88c.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 sistemassolares">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/GSFC_20171208_Archive_e000382_orig.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Galaxia VVF-2110</h4>
              </div>
              <img src="img/GSFC_20171208_Archive_e000382_orig.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 planetas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/GSFC_20171208_Archive_e001427_medium.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Planeta Kleber B22</h4>
              </div>
              <img src="img/GSFC_20171208_Archive_e001427_medium.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 nebulas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/GSFC_20171208_Archive_e001518_medium.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Nebula</h4>
              </div>
              <img src="img/GSFC_20171208_Archive_e001518_medium.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 nebulas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/GSFC_20171208_Archive_e002076_medium.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Nebula</h4>
              </div>
              <img src="img/GSFC_20171208_Archive_e002076_medium.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 sistemassolares">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/ilustracion-de-la-via-lactea_5bda8e02_481229372_221202114651_1280x909.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Galaxia DC231</h4>
              </div>
              <img src="img/ilustracion-de-la-via-lactea_5bda8e02_481229372_221202114651_1280x909.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 nebulas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/NASA_3_Biblioteca_audiovisual_astronomia_galaxia_.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Nebula</h4>
              </div>
              <img src="img/NASA_3_Biblioteca_audiovisual_astronomia_galaxia_.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 planetas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/PIA05988_orig.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Planeta</h4>
              </div>
              <img src="img/PIA05988_orig.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 nebulas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/PIA05989_medium.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Nebula</h4>
              </div>
              <img src="img/PIA05989_medium.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 nebulas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/PIA15079_medium.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Nebula</h4>
              </div>
              <img src="img/PIA15079_medium.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 planetas">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/PIA16852_orig.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Planeta CX40</h4>
              </div>
              <img src="img/PIA16852_orig.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Get In Touch</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default btn-lg">Send Message</button>
      </form>
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-codepen"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2018 Hangover. Designed by <a href="https://codelatte.org/" rel="nofollow">Codelatte</a>.</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>