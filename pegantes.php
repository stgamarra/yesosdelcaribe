<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Yesos & Caolines del Caribe | Productos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/gif" href="img/favicon.ico">
    <link rel="shortcut icon" href="img/favicon.ico">
    <script type="text/javascript" src="application.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script src="js/javascript.js"></script>
    <!--        Fancyapps-->
    <link rel="stylesheet" href="js/fancyapps/jquery.fancybox.css">
    <script src="js/fancyapps/jquery.fancybox.js"></script>
    <script src="js/fancyapps/jquery.fancybox.pack.js"></script>
    <script>
      $(document).ready(function () {
        $('.fancyapps').fancybox();
      });
    </script>
    <script type="text/javascript">
      $("a.more").click(function () {
        $.fancybox({
          'padding': 0,
          'autoScale': true,
          'transitionIn': 'fade',
          'transitionOut': 'fade',
          'speedIn': 100,
          'title': this.title,
          'width': 680,
          'height': 495,
          'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
          'type': 'swf',
          'swf': {
            'wmode': 'transparent',
            'allowfullscreen': 'true'
          }
        });
      
        return false;
      });
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js"></script>
    <script src="js/gsap-two.js"></script>
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
              <li class="active dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="pinturas">Pinturas</a></li>
                  <li><a href="estucos">Estucos</a></li>
                  <li class="active"><a href="pegantes">Pegantes</a></li>
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
    <div class="bg-blue">
      <div class="container">
        <div class="title-productos">LÍNEA DE PEGANTES</div>
        <div class="col-md-6 col-sm-3 col-xs-12 column-line">
          <div class="column-title">PEGATRÍO</div>
          
          <div class="col-md-12 empaque-block text-center button-pegatrio">
            <a href="#pegatrio-amarillo" class="fancyapps button-pegatrio">
              <img src="img/catalogo/empaques/pegatrio-amarillo.png" class="pegatrio-margin" width="25%" id="pegatrio-amarillo-empaque">
            </a>
            <a href="#pegatrio-amarillo-gris" class="fancyapps button-pegatrio">
              <img src="img/catalogo/empaques/pegatrio-amarillo-2.png" class="pegatrio-margin hidden-xs hidden-sm" width="25%" id="pegatrio-gris-empaque">
            </a>
            <div class="title-pegatrio">PORCELANATO</div>
            <a href="#pegatrio-amarillo" class="fancyapps button-pegatrio">
              <div class="col-md-6 yellow-porcelanato text-center">FICHA TÉCNICA</div>
            </a>
            <a href="#pegatrio-amarillo-gris" class="fancyapps button-pegatrio">
              <div class="col-md-6 green-porcelanato text-center">FICHA TÉCNICA</div>
            </a>
            <div class="clear"></div>
          </div>
          <!-- <a href="#pegatrio-magenta" class="fancyapps button-pegatrio">
            <div class="col-md-6 empaque-block text-center">
              <img src="img/catalogo/empaques/pegatrio-morado.png" class="pegatrio-margin" width="45%">
              <div class="title-pegatrio">MÁRMOL</div>
              <div class="col-md-12 morado-marmol text-center">FICHA TÉCNICA</div>
            </div>
          </a> -->
          
          <div class="col-md-12 empaque-block text-center button-pegatrio">
            <a href="#pegatrio-naranja" class="fancyapps button-pegatrio">
              <img src="img/catalogo/empaques/pegatrio-naranja.png" class="pegatrio-margin" width="25%" id="pegatrio-naranja-empaque">
            </a>
            <a href="#pegatrio-naranja-gris" class="fancyapps button-pegatrio">
            <img src="img/catalogo/empaques/pegatrio-naranja-2.png" class="pegatrio-margin hidden-xs hidden-sm" width="25%">
            </a>
            <div class="title-pegatrio">CERÁMICO</div>
            <a href="#pegatrio-naranja" class="fancyapps button-pegatrio">
              <div class="col-md-6 orange-ceramico text-center">FICHA TÉCNICA</div>
            </a>
            <a href="#pegatrio-naranja-gris" class="fancyapps button-pegatrio">
              <div class="col-md-6 blue-ceramico text-center">FICHA TÉCNICA</div>
            </a>
          </div>
          
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12 column-line">
          <div class="column-title">BOQUILLATRÍO</div>
          <a href="#boquillatrio-amarillo" class="fancyapps button-pegatrio">
          <div class="empaque-block text-center">
            <img src="img/catalogo/empaques/boquillatrio-amarillo.png" class="pegatrio-margin" width="68%">
            <div class="title-boquillatrio">LÁTEX</div>
            <div class="boxing">
              <div class="col-md-12 boquillatrio-amarillo text-center">FICHA TÉCNICA</div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12 column-line">
          <div class="column-title">FIJATRÍO</div>
          <a href="#fijatrio" class="fancyapps button-pegatrio">
          <div class="empaque-block text-center">
            <img src="img/catalogo/empaques/fijatrio-azul.png" class="pegatrio-margin" width="68%">
            <div class="title-boquillatrio">CERÁMICO</div>
            <div class="boxing">
              <div class="col-md-12 fijatrio-azul text-center">FICHA TÉCNICA</div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12 column-line">
          <div class="column-title">PEGOANCLA</div>
          <a href="#pegoancla" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/pegoancla.png" class="pegatrio-margin" width="68%">
              <div class="title-boquillatrio">GRIS</div>
              <div class="boxing">
                <div class="col-md-12 pegoancla-azul text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <?php include 'footer.php';?>
    <div id="proteccion" style="display:none;">
      <iframe src="pdf/ProteccionDeDatosPersonales.pdf" width="1024" height="600"></iframe>
    </div>
    <!-- Dialogos de Productos -->
    <div id="boquillatrio-amarillo" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-boquillatrio-amarillo.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
              BOQUILLA COLORPLUS LÁTEX es una mezcla especial modificada con polímeros para emboquillar o fraguar juntas entre porcelanato, mármol, etc.
          </p>
          <p><b>USOS</b>
            <br>
              Como relleno de juntas entre elementos de baja absorción en pisos y paredes.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie debe estar sana, limpia, libre de grasa polvo, pintura u otras superficies extrañas.
            <br>
            <b>Preparación del producto:</b> En un recipiente vierta la mitad del agua de amasado, agregar BOQUILLA TRIO LÁTEX, mezcle y agregue el agua restante hasta obtener consistencia de pasta. Se recomienda 3 partes de BOQUILLA TRIO LÁTEX con 1 parte de agua, (3:1 Boquilla Trio Látex: agua).
            <br>
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            El rendimiento del producto depende directamente del espesor y separación de los enchapes. (Aprox. 250-350 gr/m2, juntas de 2-5 mm de ancho).
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos, lave con abundante agua.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          
          <p><b>ALMACENAMIENTO</b>
            <br>
            Tiempo de almacenamiento hasta 6 meses, en lugar seco, bajo techo, estibado en su empaque original; dejando siempre el producto a una prudente distancia de la pared.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Producto fácil de mezclar y aplicar<br>
            • Buena adherencia<br>
            • Variedad de colores<br>
            • Alta flexibilidad<br>
            • Repelencia al agua<br>
            • Permite obtener juntas de excelente acabado<br>
            • Mantiene su color.<br>
            • Mayor resistencia a hongos y moho.<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">2 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco y Beige</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.05 gr./cc</td>
              </tr>
              <tr>
                <td class="table-text">Relación a/s</td>
                <td class="table-text">0.3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/boquillatrio-amarillo.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="boquillatrio-naranja" class="col-md-12" style="display:none;">
      <div class="col-md-12 graygradient no-horizontal-padding">
        <img src="img/productos/cuadros/header-boquillatrio-naranja.png" width="100%">
        <div class="col-md-12">
          <div class="col-md-12 spacer-mid"></div>
          <div class="col-md-4 regularfont text-justify">
            <div id="infobox">
              <!-- Informacion del Producto -->
              <p class="boldfont">MEZCLA ESPECIAL PARA EMBOQUILLAR JUNTAS ENTRE FORMATOS DE BAJA ABSORCIÓN COMO EL PORCELANATO</p>
              <br>
              <p><b>DESCRIPCIÓN</b>
                <br> BOQUILLA COLORPLUS LÁTEX es una mezcla especial modificada con polímeros para emboquillar o fraguar juntas entre porcelanato, mármol, etc.
              </p>
              <br>
              <p><b>USOS</b>
                <br> Como relleno de juntas entre elementos de baja absorción en pisos y paredes.
              </p>
              <br>
              <p><b>FORMA DE EMPLEO</b>
                <br>
                <b>Preparación de la superficie:</b> La superficie debe estar sana, limpia, libre de grasa polvo, pintura u otras superficies extrañas.
                <br>
                <b>Preparación del producto:</b> En un recipiente vierta la mitad del agua de amasado, agregar BOQUILLA TRIO LÁTEX, mezcle y agregue el agua restante hasta obtener consistencia de pasta. Se recomienda 3 partes de BOQUILLA TRIO LÁTEX con 1 parte de agua, (3:1 Boquilla Trio Látex: agua).
              </p>
              <p><b>RENDIMIENTO</b>
                <br> El rendimiento del producto depende directamente del espesor y separación de los enchapes. (Aprox. 250-350 gr/m2, juntas de 2-5 mm de ancho).
              </p>
              <br>
              <p><b>NORMAS DE SEGURIDAD</b>
                <br> Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos, lave con abundante agua.
              </p>
              <br>
              <p><b>ALMACENAMIENTO</b>
                <br> Tiempo de almacenamiento hasta 6 meses, en lugar seco, bajo techo, estibado en su empaque original; dejando siempre el producto a una prudente distancia de la pared.
              </p>
              <br>
            </div>
          </div>
          <div class="col-md-4 boldfont" style="font-size: 1.3em;">
            <!-- Ventajas + Informacion Tecnica -->
            <p>• Producto fácil de mezclar y aplicar
              <br> • Buena adherencia
              <br> • Variedad de colores
              <br> • Alta flexibilidad
              <br> • Repelencia al agua
              <br> • Permite obtener juntas de excelente acabado
              <br> • Mantiene su color.
              <br> • Mayor resistencia a hongos y moho.
              <br>
            </p>
            <br>
            <img src="img/productos/cuadros/informacion-boquillatrio-amarillo.png">
          </div>
          <div class="col-md-4 text-center" style="padding-top:30px;">
            <!-- Imagen de Producto -->
            <img src="img/gallery/empaque-boquillatrio.png">
          </div>
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="pegatrio-amarillo" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-pegatrio-amarillo.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            PEGA TRIO es un mortero listo elaborado con base de cemento, arenas de grano selecto, minerales y aditivos.  Disponible en color blanco o gris, y al mezclarlo con agua  forma un pegante de largo tiempo de manejabilidad, gran capacidad de retención de agua y que elimina la necesidad de remojar el revestimiento cerámico.
          </p>
          <p><b>USOS</b>
            <br>
            Para la instalación de enchapes de cerámica, azulejos, baldosines,  en paredes y pisos, sobre soportes de concreto, mortero o revoque, en sitios tales como baño, cocinas, lavanderías, etc.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar sana, de apariencia lisa, limpia, libre de polvo y grasa, pintura, u otras sustancias. Humedezca la superficie antes de realizar la aplicación del adhesivo.
            <br>
            <b>Preparación del producto:</b> En un recipiente adecuado, mezcle 5 volúmenes de PEGATRIO  con 2 volúmenes de agua, (5:2 Polvo: Agua) agitando hasta obtener una pasta uniforme libre de grumos. Deje reposar la mezcla aproximadamente 10 minutos.
            <br>
            <b>Aplicación:</b> PEGA TRIO se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras el PEGA TRIO este húmedo y pegajoso. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire el pegante de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO para emboquillar.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            Los rendimientos establecidos en la siguiente tabla son aproximados dependiendo del tamaño del enchape, del tipo de llana y del espesor de pega requerido.
            <br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">Tamaño de Enchape</th>
                <th class="table-title">Rendimiento</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">cm x cm</th>
                <th class="table-title">Kg/m2</th>
                <th class="table-title">m2/bolsa (Bolsa=25kg)</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">20 x 20</td>
                <td class="table-text">3</td>
                <td class="table-text">8.3</td>
              </tr>
              <tr>
                <td class="table-text">30 x 30</td>
                <td class="table-text">4</td>
                <td class="table-text">6.25</td>
              </tr>
              <tr>
                <td class="table-text">40 x 40</td>
                <td class="table-text">6</td>
                <td class="table-text">4.15</td>
              </tr>
            </tbody>
          </table>
          <p><b>RECOMENDACIONES ESPECIALES</b>
            <br>
            En piscinas o sitios donde el adhesivo esté en contacto permanente con el agua, solicite al distribuidor, PEGA TRIO PISCINA.  Fabricación sobre pedidos. Para la instalación de porcelanato  recomendamos PEGA TRIO PORCELANATO, y. PEGA TRIO MÁRMOL  para la instalación de mármoles, y otras piezas de baja absorción en interiores y exteriores.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO</b>
            <br>
            El tiempo de almacenamiento para PEGA TRIO  es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas.
              Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Para uso interior y exterior<br>
            • Listo para usar, basta mezclarlo con agua<br>
            • No requiere humedecer el revestimiento cerámico<br>
            • Gran adherencia sobre el soporte<br>
            • Permite alistar grandes áreas sin que seque rápidamente el pegante<br>
            • No se desliza en superficies verticales<br>
            • Permite obtener pisos y paredes de excelente acabado<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">25 Kilos</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco y Gris</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.31 g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Alta resistencia apto exteriores</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">10 Litros por bolsa de 25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo Abierto</td>
                <td class="table-text">20 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Corrección</td>
                <td class="table-text">15 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Trabajabilidad</td>
                <td class="table-text">Excelente</td>
              </tr>
              <tr>
                <td class="table-text">Emboquillado</td>
                <td class="table-text">Min 36 Horas</td>
              </tr>
              <tr>
                <td class="table-text">Transitable</td>
                <td class="table-text">12 Horas después de su instalación</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia a la tracción a 28 días</td>
                <td class="table-text">1.2 Mpa</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <div class="empaque-sprite">
            <img src="img/catalogo/pegatrio-porcelanato-empaque-1.png" class="display-empaque" width="100%">
          </div>
        </div>
      </div>
    </div>
    
    <!-- Cierra un dialogo Fancybox -->
    <div id="pegatrio-amarillo-gris" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-pegatrio-amarillo-gris.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            PEGA TRIO es un mortero listo elaborado con base de cemento, arenas de grano selecto, minerales y aditivos.  Disponible en color blanco o gris, y al mezclarlo con agua  forma un pegante de largo tiempo de manejabilidad, gran capacidad de retención de agua y que elimina la necesidad de remojar el revestimiento cerámico.
          </p>
          <p><b>USOS</b>
            <br>
            Para la instalación de enchapes de cerámica, azulejos, baldosines,  en paredes y pisos, sobre soportes de concreto, mortero o revoque, en sitios tales como baño, cocinas, lavanderías, etc.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar sana, de apariencia lisa, limpia, libre de polvo y grasa, pintura, u otras sustancias. Humedezca la superficie antes de realizar la aplicación del adhesivo.
            <br>
            <b>Preparación del producto:</b> En un recipiente adecuado, mezcle 5 volúmenes de PEGATRIO  con 2 volúmenes de agua, (5:2 Polvo: Agua) agitando hasta obtener una pasta uniforme libre de grumos. Deje reposar la mezcla aproximadamente 10 minutos.
            <br>
            <b>Aplicación:</b> PEGA TRIO se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras el PEGA TRIO este húmedo y pegajoso. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire el pegante de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO para emboquillar.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            Los rendimientos establecidos en la siguiente tabla son aproximados dependiendo del tamaño del enchape, del tipo de llana y del espesor de pega requerido.
            <br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">Tamaño de Enchape</th>
                <th class="table-title">Rendimiento</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">cm x cm</th>
                <th class="table-title">Kg/m2</th>
                <th class="table-title">m2/bolsa (Bolsa=25kg)</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">20 x 20</td>
                <td class="table-text">3</td>
                <td class="table-text">8.3</td>
              </tr>
              <tr>
                <td class="table-text">30 x 30</td>
                <td class="table-text">4</td>
                <td class="table-text">6.25</td>
              </tr>
              <tr>
                <td class="table-text">40 x 40</td>
                <td class="table-text">6</td>
                <td class="table-text">4.15</td>
              </tr>
            </tbody>
          </table>
          <p><b>RECOMENDACIONES ESPECIALES</b>
            <br>
            En piscinas o sitios donde el adhesivo esté en contacto permanente con el agua, solicite al distribuidor, PEGA TRIO PISCINA.  Fabricación sobre pedidos. Para la instalación de porcelanato  recomendamos PEGA TRIO PORCELANATO, y. PEGA TRIO MÁRMOL  para la instalación de mármoles, y otras piezas de baja absorción en interiores y exteriores.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO</b>
            <br>
            El tiempo de almacenamiento para PEGA TRIO  es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas.
              Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Para uso interior y exterior<br>
            • Listo para usar, basta mezclarlo con agua<br>
            • No requiere humedecer el revestimiento cerámico<br>
            • Gran adherencia sobre el soporte<br>
            • Permite alistar grandes áreas sin que seque rápidamente el pegante<br>
            • No se desliza en superficies verticales<br>
            • Permite obtener pisos y paredes de excelente acabado<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">25 Kilos</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco y Gris</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.31 g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Alta resistencia apto exteriores</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">10 Litros por bolsa de 25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo Abierto</td>
                <td class="table-text">20 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Corrección</td>
                <td class="table-text">15 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Trabajabilidad</td>
                <td class="table-text">Excelente</td>
              </tr>
              <tr>
                <td class="table-text">Emboquillado</td>
                <td class="table-text">Min 36 Horas</td>
              </tr>
              <tr>
                <td class="table-text">Transitable</td>
                <td class="table-text">12 Horas después de su instalación</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia a la tracción a 28 días</td>
                <td class="table-text">1.2 Mpa</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <div class="empaque-sprite">
            <img src="img/catalogo/pegatrio-porcelanato-empaque-2.png" class="display-empaque" width="100%">
          </div>
        </div>
      </div>
    </div>
    
    <!-- Cierra un dialogo Fancybox -->
    <div id="pegatrio-naranja" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-pegatrio-naranja.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
          PEGA TRIO es un mortero listo elaborado con base de cemento, arenas de grano selecto, minerales y aditivos.  Disponible en color blanco o gris, y al mezclarlo con agua  forma un pegante de largo tiempo de manejabilidad, gran capacidad de retención de agua y que elimina la necesidad de remojar el revestimiento cerámico.
          </p>
          <p><b>USOS</b>
            <br>
          Para la instalación de enchapes de cerámica, azulejos, baldosines,  en paredes y pisos, sobre soportes de concreto, mortero o revoque, en sitios tales como baño, cocinas, lavanderías, etc.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar sana, de apariencia lisa, limpia, libre de polvo y grasa, pintura, u otras sustancias. Humedezca la superficie antes de realizar la aplicación del adhesivo.<br>
            <br>
            <b>Preparación del producto:</b> En un recipiente adecuado, mezcle 5 volúmenes de PEGATRIO  con 2 volúmenes de agua, (5:2 Polvo: Agua) agitando hasta obtener una pasta uniforme libre de grumos. Deje reposar la mezcla aproximadamente 10 minutos.
            <br>
            <b>Aplicación:</b> PEGA TRIO se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras el PEGA TRIO este húmedo y pegajoso. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire el pegante de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO para emboquillar.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
              Los rendimientos establecidos en la siguiente tabla son aproximados dependiendo del tamaño del enchape, del tipo de llana y del espesor de pega requerido.
            <br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">Tamaño de Enchape</th>
                <th class="table-title">Rendimiento</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">cm x cm</th>
                <th class="table-title">Kg/m2</th>
                <th class="table-title">m2/bolsa (Bolsa=25kg)</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">20 x 20</td>
                <td class="table-text">3</td>
                <td class="table-text">8.3</td>
              </tr>
              <tr>
                <td class="table-text">30 x 30</td>
                <td class="table-text">4</td>
                <td class="table-text">6.25</td>
              </tr>
              <tr>
                <td class="table-text">40 x 40</td>
                <td class="table-text">6</td>
                <td class="table-text">4.15</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>RECOMENDACIONES ESPECIALES</b>
            <br>
            En piscinas o sitios donde el adhesivo esté en contacto permanente con el agua, solicite al distribuidor, PEGA TRIO PISCINA.  Fabricación sobre pedidos. Para la instalación de porcelanato  recomendamos PEGA TRIO PORCELANATO, y. PEGA TRIO MÁRMOL  para la instalación de mármoles, y otras piezas de baja absorción en interiores y exteriores.
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO</b>
            <br>
            El tiempo de almacenamiento para PEGA TRIO  es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Para uso interior y exterior<br>
            • Listo para usar, basta mezclarlo con agua<br>
            • No requiere humedecer el revestimiento cerámico<br>
            • Gran adherencia sobre el soporte<br>
            • Permite alistar grandes áreas sin que seque rápidamente el pegante<br>
            • No se desliza en superficies verticales<br>
            • Permite obtener pisos y paredes de excelente acabado<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">25 Kilos</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco y Gris</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.31 g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Alta resistencia apto exteriores</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">10 Litros por bolsa de 25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo Abierto</td>
                <td class="table-text">20 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Corrección</td>
                <td class="table-text">15 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Trabajabilidad</td>
                <td class="table-text">Excelente</td>
              </tr>
              <tr>
                <td class="table-text">Emboquillado</td>
                <td class="table-text">Min 36 Horas</td>
              </tr>
              <tr>
                <td class="table-text">Transitable</td>
                <td class="table-text">12 Horas después de su instalación</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia a la tracción a 28 días</td>
                <td class="table-text">1.2 Mpa</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <div class="empaque-sprite">
            <img src="img/catalogo/pegatrio-ceramico-empaque-1.png" class="display-empaque" width="100%">
          </div>
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="pegatrio-naranja-gris" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-pegatrio-naranja-gris.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
          PEGA TRIO es un mortero listo elaborado con base de cemento, arenas de grano selecto, minerales y aditivos.  Disponible en color blanco o gris, y al mezclarlo con agua  forma un pegante de largo tiempo de manejabilidad, gran capacidad de retención de agua y que elimina la necesidad de remojar el revestimiento cerámico.
          </p>
          <p><b>USOS</b>
            <br>
          Para la instalación de enchapes de cerámica, azulejos, baldosines,  en paredes y pisos, sobre soportes de concreto, mortero o revoque, en sitios tales como baño, cocinas, lavanderías, etc.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar sana, de apariencia lisa, limpia, libre de polvo y grasa, pintura, u otras sustancias. Humedezca la superficie antes de realizar la aplicación del adhesivo.<br>
            <br>
            <b>Preparación del producto:</b> En un recipiente adecuado, mezcle 5 volúmenes de PEGATRIO  con 2 volúmenes de agua, (5:2 Polvo: Agua) agitando hasta obtener una pasta uniforme libre de grumos. Deje reposar la mezcla aproximadamente 10 minutos.
            <br>
            <b>Aplicación:</b> PEGA TRIO se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras el PEGA TRIO este húmedo y pegajoso. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire el pegante de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO para emboquillar.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
              Los rendimientos establecidos en la siguiente tabla son aproximados dependiendo del tamaño del enchape, del tipo de llana y del espesor de pega requerido.
            <br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">Tamaño de Enchape</th>
                <th class="table-title">Rendimiento</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">cm x cm</th>
                <th class="table-title">Kg/m2</th>
                <th class="table-title">m2/bolsa (Bolsa=25kg)</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">20 x 20</td>
                <td class="table-text">3</td>
                <td class="table-text">8.3</td>
              </tr>
              <tr>
                <td class="table-text">30 x 30</td>
                <td class="table-text">4</td>
                <td class="table-text">6.25</td>
              </tr>
              <tr>
                <td class="table-text">40 x 40</td>
                <td class="table-text">6</td>
                <td class="table-text">4.15</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>RECOMENDACIONES ESPECIALES</b>
            <br>
            En piscinas o sitios donde el adhesivo esté en contacto permanente con el agua, solicite al distribuidor, PEGA TRIO PISCINA.  Fabricación sobre pedidos. Para la instalación de porcelanato  recomendamos PEGA TRIO PORCELANATO, y. PEGA TRIO MÁRMOL  para la instalación de mármoles, y otras piezas de baja absorción en interiores y exteriores.
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO</b>
            <br>
            El tiempo de almacenamiento para PEGA TRIO  es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Para uso interior y exterior<br>
            • Listo para usar, basta mezclarlo con agua<br>
            • No requiere humedecer el revestimiento cerámico<br>
            • Gran adherencia sobre el soporte<br>
            • Permite alistar grandes áreas sin que seque rápidamente el pegante<br>
            • No se desliza en superficies verticales<br>
            • Permite obtener pisos y paredes de excelente acabado<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">25 Kilos</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco y Gris</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.31 g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Alta resistencia apto exteriores</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">10 Litros por bolsa de 25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo Abierto</td>
                <td class="table-text">20 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Corrección</td>
                <td class="table-text">15 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Trabajabilidad</td>
                <td class="table-text">Excelente</td>
              </tr>
              <tr>
                <td class="table-text">Emboquillado</td>
                <td class="table-text">Min 36 Horas</td>
              </tr>
              <tr>
                <td class="table-text">Transitable</td>
                <td class="table-text">12 Horas después de su instalación</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia a la tracción a 28 días</td>
                <td class="table-text">1.2 Mpa</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <div class="empaque-sprite">
            <img src="img/catalogo/pegatrio-ceramico-empaque-2.png" class="display-empaque" width="100%">
          </div>
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="pegoancla" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-pegoancla.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
              PEGO ANCLA es un mortero listo elaborado con base de cemento. De color gris o blanco, que mezclado con agua  forma un pegante de largo tiempo de manejabilidad, gran capacidad de retención de agua y que elimina la necesidad de remojar el revestimiento cerámico.
          </p>
          <p><b>USOS</b>
            <br>
              Para la instalación de enchapes de cerámica, azulejos, baldosines,  en paredes y pisos, sobre soportes de concreto, mortero o revoque, en sitios tales como baño, cocinas, lavanderías, etc.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar sana, de apariencia lisa, limpia, libre de polvo y grasa, pintura, u otras sustancias. Humedezca la superficie antes de realizar la aplicación del adhesivo.
            <br>
            <b>Preparación del producto:</b> En un recipiente adecuado, mezcle 5 volúmenes de PEGA ANCLA con 2 volúmenes de agua aprox. (5:2 Polvo: Agua) agitando hasta obtener una pasta uniforme libre de grumos. Deje reposar la mezcla aproximadamente 10 minutos.
            <br>
            <b>Aplicación:</b> PEGO ANCLA se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras el Pegante este húmedo y pegajoso. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire el pegante de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO para emboquillar.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
              Los rendimientos establecidos en la siguiente tabla son aproximados dependiendo del tamaño del enchape, del tipo de llana y del espesor de pega requerido.
            <br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">Tamaño de Enchape</th>
                <th class="table-title">Rendimiento</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">cm x cm</th>
                <th class="table-title">Kg/m2</th>
                <th class="table-title">m2/bolsa (Bolsa=25kg)</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">20 x 20</td>
                <td class="table-text">3</td>
                <td class="table-text">8.3</td>
              </tr>
              <tr>
                <td class="table-text">30 x 30</td>
                <td class="table-text">4</td>
                <td class="table-text">6.25</td>
              </tr>
              <tr>
                <td class="table-text">40 x 40</td>
                <td class="table-text">6</td>
                <td class="table-text">4.15</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO</b>
            <br>
            Tiempo de almacenamiento hasta 6 meses, en lugar seco, bajo techo, estibado en su empaque original; dejando siempre el producto a una prudente distancia de la pared.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Para uso interior<br>
            • Listo para usar, basta mezclarlo con agua.<br>
            • No requiere humedecer el revestimiento cerámico.<br>
            • Alta flexibilidad<br>
            • Gran adherencia sobre el soporte.<br>
            • Permite alistar grandes áreas sin que seque rápidamente el pegante.<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">25 Kilos</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco y Gris</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.33 g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Buena resistencia</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">10 Litros por bolsa de 25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo Abierto</td>
                <td class="table-text">20 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Corrección</td>
                <td class="table-text">15 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Emboquillado</td>
                <td class="table-text">Min 36 Horas</td>
              </tr>
              <tr>
                <td class="table-text">Transitable</td>
                <td class="table-text">12 Horas después de su instalación</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia a la tracción a 28 días</td>
                <td class="table-text">0.8 Mpa</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/pegoancla.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="fijatrio" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-fijatrio.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            FIJA TRIO es un aditivo en polvo de color blanco, que se mezcla con cemento y arena fina, formulado especialmente para aumentar el tiempo de fraguado y mejorar la elasticidad y manejabilidad del mortero.
          </p>
          <p><b>USOS</b>
            <br>
            Especialmente recomendado donde se requiera la instalación de enchapes de cerámica, azulejos, baldosines,  en paredes y pisos, sobre soportes de concreto, mortero o revoque, en sitios tales como baño, cocinas, lavanderías, etc.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie debe estar sana, limpia, libre de grasa polvo, pintura u otras superficies extrañas. Humedezca la superficie antes de realizar la aplicación.
            <br>
            <b>Preparación del producto:</b> Mezcle en seco FIJA TRIO con cemento, hasta homogeneidad. A esta mezcla de FIJA TRIO más cemento adicione arena limpia tamizada, y mezcle hasta obtener un color homogéneo. El uso de arena es opcional pero no debe superar la cantidad recomendada. (Ver tabla de rendimiento)<br>
                A la mezcla anterior adicione agua hasta obtener una pasta consistente, libre de grumos. Deje reposar la mezcla por 10 minutos y mezcle nuevamente antes de aplicar.<br>
                Para la instalación de elementos de baja absorción o ligeramente flexible, la mezcla de FIJAPLUS, debe ser preparada con una dilución de una resina acrílica: agua,  en proporción de volumen (1:3 resina: agua).  Recomendable 3 partes de la mezcla de FIJAPLUS, 0.25 partes de resina y 0.75  partes de agua.<br>
            <b>Aplicación:</b> La mezcla de FIJATRIO se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras la mezcla de FIJA TRIO este húmeda y pegajosa. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire la pega de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO para emboquillar.
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">FIJATRÍO</th>
                <th class="table-title">Rendimiento</th>
                <th class="table-title"></th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">(N. de bolsa)</th>
                <th class="table-title">CEMENTO (Kg.)</th>
                <th class="table-title">ARENA (Kg.)</th>
                <th class="table-title">RENDIMIENTO APROX. (m2)</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">1</td>
                <td class="table-text">25</td>
                <td class="table-text">-</td>
                <td class="table-text">6 - 8</td>
              </tr>
              <tr>
                <td class="table-text">1</td>
                <td class="table-text">25</td>
                <td class="table-text">25</td>
                <td class="table-text">13 - 15</td>
              </tr>
              <tr>
                <td class="table-text">1</td>
                <td class="table-text">50</td>
                <td class="table-text">50-100</td>
                <td class="table-text">24 - 30</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>RECOMENDACIONES ESPECIALES</b>
            <br>
            Para usos en piscinas, sitios donde la pega esté en contacto permanente con el agua, solicite al distribuidor, PEGA TRIO AQUA Y PEGA TRIO PORCELANATO para pega de porcelanato. Para la pega de Mármol y piedras de baja absorcion. Use PEGA TRIO SUPERLATEX
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua. 
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            El tiempo de almacenamiento para FIJA TRIO es de 12 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.</p>
          <p><b>VENTAJAS</b>
            <br>
              • Mejora las propiedades adherentes, tixotropicas y reologicas del mortero<br>
              • Para uso en pisos y paredes<br>
              • No requiere humedecer el revestimiento cerámico<br>
              • Gran adherencia sobre el soporte<br>
              • No se desliza en superficies verticales<br>
              • Permite obtener pisos y paredes de excelente acabado<br>
              • Económico y fácil de usar<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">Bolsa plástica 2 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Aspecto</td>
                <td class="table-text">Polvo fino</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Densidad aparente</td>
                <td class="table-text">1 gr./cc</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/fijatrio-azul.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="pegatrio-magenta" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-pegatrio-magenta.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            PEGA TRIO MÁRMOL es un mortero adhesivo flexible, base cemento, arenas seleccionadas, minerales y aditivos poliméricos que le confieren gran capacidad de retención de agua, ideal para la instalación de piezas de mármol, piedras coralinas, y en general las piedras naturales que se usan como formatos de enchapes de pisos y paredes.
          </p>
          <p><b>USOS</b>
            <br>
            Para la instalación de piezas de mármol, piedras coralinas, y en general las piedras naturales sobre soportes de concreto, mortero o revoque, en pisos y paredes.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar sana, de apariencia lisa, limpia, libre de polvo y grasa, pintura, u otras sustancias. Humedezca la superficie antes de realizar la aplicación del adhesivo.
            <br>
            <b>Preparación del producto:</b> en un recipiente adecuado, mezcle 5 volúmenes de PEGA TRIO MÁRMOL con 2 volúmenes de agua, (5:2 polvo: agua) agitando hasta obtener una pasta uniforme libre de grumos. Deje reposar la mezcla aproximadamente 10 minutos.
            <br>
            <b>Aplicación:</b> PEGA TRIO MÁRMOL se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras el PEGA TRIO MÁRMOL este húmedo y pegajoso. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire el pegante de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO LÁTEX para emboquillar.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            Sobre superficies niveladas aproximadamente de 3 – 6 Kg/m2 dependiendo del tamaño del enchape, del tipo de llana y del espesor de pega requerido.
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            El tiempo de almacenamiento para PEGA TRIO MÁRMOL es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Uso en pisos y paredes.<br>
            • Alta resistencia mecánica.<br>
            • Gran adherencia sobre el soporte.<br>
            • Listo para su empleo con la sola adición de agua.<br>
            • Económico y fácil de usar.<br>
            • Gran resistencia sobre las piezas de gran peso de mármol y piedras en general.
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">25 Kilos</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.26 g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Gran adherencia en interior, pisos y paredes.</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">10 Litros por bolsa de 25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo Abierto</td>
                <td class="table-text">25 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Corrección</td>
                <td class="table-text">15 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Trabajabilidad</td>
                <td class="table-text">Excelente</td>
              </tr>
              <tr>
                <td class="table-text">Emboquillado</td>
                <td class="table-text">36 Horas</td>
              </tr>
              <tr>
                <td class="table-text">Transitable</td>
                <td class="table-text">12 Horas después de su instalación</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia a la tracción a 28 días</td>
                <td class="table-text">20 Mpa</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/pegatrio-morado.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="fijatrio" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-fijatrio-34.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            FIJA TRIO es un aditivo en polvo de color blanco, que se mezcla con cemento y arena fina, formulado especialmente para aumentar el tiempo de fraguado y mejorar la elasticidad y manejabilidad del mortero.
          </p>
          <p><b>USOS</b>
            <br>
            Especialmente recomendado donde se requiera la instalación de enchapes de cerámica, azulejos, baldosines,  en paredes y pisos, sobre soportes de concreto, mortero o revoque, en sitios tales como baño, cocinas, lavanderías, etc.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie debe estar sana, limpia, libre de grasa polvo, pintura u otras superficies extrañas. Humedezca la superficie antes de realizar la aplicación.
            <br>
            <b>Preparación del producto:</b> Mezcle en seco FIJA TRIO con cemento, hasta homogeneidad. A esta mezcla de FIJA TRIO más cemento adicione arena limpia tamizada, y mezcle hasta obtener un color homogéneo. El uso de arena es opcional pero no debe superar la cantidad recomendada. (Ver tabla de rendimiento)<br>
                A la mezcla anterior adicione agua hasta obtener una pasta consistente, libre de grumos. Deje reposar la mezcla por 10 minutos y mezcle nuevamente antes de aplicar.<br>
                Para la instalación de elementos de baja absorción o ligeramente flexible, la mezcla de FIJAPLUS, debe ser preparada con una dilución de una resina acrílica: agua,  en proporción de volumen (1:3 resina: agua).  Recomendable 3 partes de la mezcla de FIJAPLUS, 0.25 partes de resina y 0.75  partes de agua.<br>
            <b>Aplicación:</b> La mezcla de FIJATRIO se aplica con llana dentada, distribuyéndolo uniformemente con el lado liso de la llana, luego aplique otra capa utilizando el lado dentado de la llana. Luego se procede a instalar el enchape mientras la mezcla de FIJA TRIO este húmeda y pegajosa. No se requiere humedecer o saturar las baldosas antes de su aplicación. Retire la pega de las ranuras y limpie la superficie con una esponja húmeda. Después de 24 horas utilice BOQUILLA TRIO para emboquillar.
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">FIJATRÍO</th>
                <th class="table-title">Rendimiento</th>
                <th class="table-title"></th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">(N. de bolsa)</th>
                <th class="table-title">CEMENTO (Kg.)</th>
                <th class="table-title">ARENA (Kg.)</th>
                <th class="table-title">RENDIMIENTO APROX. (m2)</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">1</td>
                <td class="table-text">25</td>
                <td class="table-text">-</td>
                <td class="table-text">6 - 8</td>
              </tr>
              <tr>
                <td class="table-text">1</td>
                <td class="table-text">25</td>
                <td class="table-text">25</td>
                <td class="table-text">13 - 15</td>
              </tr>
              <tr>
                <td class="table-text">1</td>
                <td class="table-text">50</td>
                <td class="table-text">50-100</td>
                <td class="table-text">24 - 30</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>RECOMENDACIONES ESPECIALES</b>
            <br>
            Para usos en piscinas, sitios donde la pega esté en contacto permanente con el agua, solicite al distribuidor, PEGA TRIO AQUA Y PEGA TRIO PORCELANATO para pega de porcelanato. Para la pega de Mármol y piedras de baja absorcion. Use PEGA TRIO SUPERLATEX
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua. 
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            El tiempo de almacenamiento para FIJA TRIO es de 12 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.</p>
          <p><b>VENTAJAS</b>
            <br>
              • Mejora las propiedades adherentes, tixotropicas y reologicas del mortero<br>
              • Para uso en pisos y paredes<br>
              • No requiere humedecer el revestimiento cerámico<br>
              • Gran adherencia sobre el soporte<br>
              • No se desliza en superficies verticales<br>
              • Permite obtener pisos y paredes de excelente acabado<br>
              • Económico y fácil de usar<br>
          </p>
          <table class="table-height table fixed table-hover" style="margin-top:10px;line-height:0.6;">
            <thead>
              <tr class="table-height">
                <th class="table-title">INFORMACIÓN TÉCNICA</th>
                <th class="table-title"></th>
              </tr>
              <tr class="table-height">
                <th class="table-title">Características</th>
                <th class="table-title">Especificaciones</th>
              </tr>
            </thead>
            <tbody class="table-height">
              <tr>
                <td class="table-text">Presentación</td>
                <td class="table-text">Bolsa plástica 2 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Aspecto</td>
                <td class="table-text">Polvo fino</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Densidad aparente</td>
                <td class="table-text">1 gr./cc</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/fijatrio-azul.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
      <iframe id="catalogo" style="display:none;" width="1100px" height="700px" src="http://online.fliphtml5.com/xpfn/afoo/#p=1" frameborder="0" allowfullscreen allowtransparency></iframe>

  </body>
</html>