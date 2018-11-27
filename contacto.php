<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Yesos & Caolines del Caribe | La Empresa</title>
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
              <li><a href="index">Inicio</a></li>
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
              <li class="active"><a href="contacto">Contacto</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="navbar-red"></div>
    </header>
    <!--      Contenido de la página    -->       
    <section class="bg-yesos no-horizontal-padding">
      <div class="header-contacto" style="margin-bottom: 40px;">
        <div class="container title-fade-in">
          <p class="titular-empresa">Contáctenos</p>
        </div>
      </div>
      <section class="container">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="contact-form">
            <h3 style="color:#ED1C24;font-size:1.2em;"><?php echo $_GET[msg];?></h3>
            <form name="enq" method="post" action="email/index.php" onsubmit="return validation();">
              <input type="text" name="name" id="name" value=""  class="input-block-level height-form" placeholder="Nombre" /><br>
              <input type="text" name="email" id="email" value="" class="input-block-level height-form" placeholder="Email" /><br>
              <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comentario"></textarea>
              <br>
              <div class="actions">
                <input type="submit" value="Enviar Mensaje" name="submit" id="submitButton" class="btn btn-submit pull-right xs-btn-submit" title="Click here to submit your message!" />
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <p class="contact-mail-font"><a href="mailto:pedidos@yesosdelcaribe.com.co">pedidos@yesosdelcaribe.com.co</a></p>
          <br>
        </div>
      </section>
    </section>
    <footer class="no-horizontal-padding" style="margin-top: 0px;">
      <div class="container">
        
        <div class="text-left logofooter navbar-left"  id="footerlogo">
          <img src="img/yesos_bluelogo.png">
          <div class="politicas-btn-contacto hidden-xs" style="margin-top:5px;">
            <a href="#proteccion" class="fancyapps">Politicas de Protección de Datos</a>
            <br>
            <a href="#privacidad" class="fancyapps">Aviso de Privacidad</a>
          </div>
        </div>
        
        <div class="info navbar-right" style="color:#252a45;">
          <div class="col-xs-6 col-md-6 text-right logofooter">
            <b>Planta de Producción:</b><br>
            Calle 3 No. 51-107<br>
            Barrio Barranquillita<br>
            Teléfonos: (575) 385 3988 - Pedidos: (575) 311 418 8937<br>
            Barranquilla, Colombia
          </div>
          <div class="col-xs-6 col-md-6 text-left logofooter">
            <b>Oficina administrativa:</b><br>
            Cra. 55 # 100 -51 Oficina 709<br>
            Edificio Bluegarden<br>
            Teléfonos: (575) 385 40 07 - (575) 385 39 42
            Barranquilla - Colombia
          </div>
        </div>
      </div>
      <div class="footerazul desarrollado-por">
          <div class="container">
            <div class="navbar-left">
              Desarrollado por <a href="http://gamacreativos.com" target="new">G-Interactivo / GAMA Comunicaciones</a> 
            </div>
            <div class="navbar-right visible-xs">
              <a href="#proteccion" class="fancyapps">Politicas de Protección de Datos</a>
              <br>
              <a href="#privacidad" class="fancyapps">Aviso de Privacidad</a>
            </div>
            
          </div>
        </div>
    </footer>
    <div id="proteccion" style="display:none;">
      <iframe src="pdf/ProteccionDeDatosPersonales.pdf" width="1024" height="600"></iframe>
    </div>
    <div id="privacidad" style="display:none;">
      <iframe src="pdf/AvisoDePrivacidad.pdf" width="1024" height="600"></iframe>
    </div>
      <iframe id="catalogo" style="display:none;" width="1100px" height="700px" src="http://online.fliphtml5.com/xpfn/afoo/#p=1" frameborder="0" allowfullscreen allowtransparency></iframe>

    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/javascript.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js"></script>
    <script src="js/gsap.js"></script>
    <script src="email/validation.js"></script>
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
    <script src="js/prefixfree.js"></script>
  </body>
</html>