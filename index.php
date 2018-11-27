<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Yesos & Caolines del Caribe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/gif" href="img/favicon.ico">
    <link rel="shortcut icon" href="img/favicon.ico">
    <script type="text/javascript" src="application.js"></script>
  </head>
  <body>
      <header class="text-center" style="position:relative; z-index:8000;">
      <nav class="navbar navbar-default" role="navigation" id="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="clearfix navbar-header">
            <div class="logo-navbar-vertical-padding nav-float-left">
              <a href="index"><img src="img/logo-navbar-yesos-03.png" id="logoheader" class="nav-float-left" width="190">
              </a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsed-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse nav-float-right" id="collapsed-menu">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index">Inicio</a></li>
              <li><a href="empresa">La Empresa</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="pinturas">Pinturas</a></li>
                  <li><a href="estucos">Estucos</a></li>
                  <li><a href="pegantes">Pegantes</a></li>
                  <li><a href="morteros">Mortero</a></li>
                  <li><a href="masillas">Masillas</a></li>
                  <li><a href="yesos">Yesos</a></li>
                </ul>
              </li>
              <li><a href="#catalogo" class="fancyapps">Catálogo</a></li>
              <li><a href="contacto">Contacto</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="navbar-red"></div>
    </header>
      <div class="pattern-xs hidden-sm hidden-md hidden-lg">
        <div class="background-xs hidden-sm hidden-md hidden-lg"></div>
      </div>
      <!--      Contenido de la página    --> 
      <section id="slideshow" class="no-horizontal-padding row bg-pattern">
        
        <ul class="cb-slideshow hidden-xs">
    <li><span>Image 01</span></li>
    <li><span>Image 02</span></li>
    <li><span>Image 03</span></li>
    <li><span>Image 04</span></li>
    <li><span>Image 05</span></li>
    <li><span>Image 06</span></li>
  </ul>
      </section>
      <section class="intro">
        <div class="container">
          <div class="intro-container" id="intro">
            <div class="intro-title">Múltiples acabados de calidad para la construcción</div>
            <div class="intro-productos-title">LÍNEAS DE PRODUCTOS</div>
            <div class="text-center margin-buttons">
              <a href="pinturas">
                <button class="btn btn-red btn-lg">Pinturas</button>
              </a>
              <a href="estucos">
                <button class="btn btn-red btn-lg">Estucos</button>
              </a>
              <a href="pegantes">
                <button class="btn btn-red btn-lg">Pegantes</button>
              </a>
              <a href="morteros">
                <button class="btn btn-red btn-lg">Morteros</button>
              </a>
              <a href="masillas">
                <button class="btn btn-red btn-lg">Masillas</button>
              </a>
              <a href="yesos">
                <button class="btn btn-red btn-lg">Yesos</button>
              </a>
            </div>
          </div>
        </div>
      </section>
      <?php include 'footer.php';?>
    <div id="proteccion" style="display:none;">
      <iframe src="pdf/ProteccionDeDatosPersonales.pdf" width="1024" height="600"></iframe>
    </div>
    
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js"></script>
    <script src="js/gsap.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/javascript.js"></script>
    
    <!--        Fancyapps-->
    <link rel="stylesheet" href="js/fancyapps/jquery.fancybox.css">
    <script src="js/fancyapps/jquery.fancybox.js"></script>
    <script src="js/fancyapps/jquery.fancybox.pack.js"></script>
    <script>
      $(document).ready(function(){
          $('.fancyapps').fancybox();
          });
    </script>
    <script type="text/javascript">
    //$("document").ready(function() {
    //setTimeout(function() {
    //    $("#encuesta-btn").trigger('click');
    //},2000);
});
  </script>
    <script type="text/javascript">
      $("a.more").click(function() {
      $.fancybox({
          'padding'       : 0,
          'autoScale'     : false,
          'transitionIn'  : 'none',
          'transitionOut' : 'none',
          'title'         : this.title,
          'width'     : 680,
          'height'        : 495,
          'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
          'type'          : 'swf',
          'swf'           : {
               'wmode'        : 'transparent',
              'allowfullscreen'   : 'true'
          }
      });
      
      return false;
      });
    </script>
  </body>
  <iframe id="catalogo" style="display:none;" width="1100px" height="700px" src="http://online.fliphtml5.com/xpfn/afoo/#p=1" frameborder="0" allowfullscreen allowtransparency></iframe>
  
</html>