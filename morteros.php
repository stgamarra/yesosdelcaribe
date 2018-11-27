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
                  <li><a href="pegantes">Pegantes</a></li>
                  <li class="active"><a href="morteros">Mortero</a></li>
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
        <div class="title-productos">LÍNEA DE MORTEROS</div>
        <!-- <div class="col-md-6 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXIPAÑETE MANUAL</div>
          <a href="#maxipanete" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/morteros-maxipanete.png" class="pegatrio-margin" width="50%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 maxipanete-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>  
        </div> -->
     <!--   <div class="col-md-6 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXIFINO</div>
          <a href="#maxifino" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/morteros-maxifino.png" class="pegatrio-margin" width="50%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 maxifino-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>  
        </div> -->
        <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXITRÍO<p style="font-size:0.6em;">Pega y Pañete Estructural<br>Tipo M</p></div>
          <a href="#maxitrio-naranja" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/maxitrio-naranja.png" class="pegatrio-margin" width="80%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 maxitrio-naranja-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXITRÍO<p style="font-size:0.6em;">Pega y Pañete Estructural<br>Tipo S</p></div>
          <a href="#maxitrio-azul" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/maxitrio-azul.png" class="pegatrio-margin" width="80%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 maxitrio-azul-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXITRÍO<p style="font-size:0.6em;">Pega y Pañete No Estructural<br>Tipo N</p></div>
          <a href="#maxitrio-rojo" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/maxitrio-rojo.png" class="pegatrio-margin" width="80%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 maxitrio-rojo-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXITRÍO<p style="font-size:0.6em;">Nivelación de Pisos<br>Tipo Pisos</p></div>
          <a href="#maxitrio-cyan" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/maxitrio-cyan.png" class="pegatrio-margin" width="80%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 maxitrio-cyan-linea text-center">FICHA TÉCNICA</div>
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
    <div id="maxipanete" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxipanete.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            MAXI PAÑETE Es un mortero listo para pañete que está  compuesto por  Sulfato de calcio, cargas, áridos y aditivos que le transfieren una mayor plasticidad, manejabilidad y tiempo extendido de fraguado, facilitando su aplicación . Por sus altas resistencias y propiedades mecánicas reemplaza al mortero tradicional de cemento.
          </p>
          <p><b>USOS</b>
            <br>
              Como revestimiento sobre Bloque, ladrillo, concreto, fibrocemento, a modo de pañete o revoque.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar limpia, libre de polvo y grasa, pintura, u otras sustancias que impidan la correcta adherencia. Deben tomarse los puntos de nivelación preferiblemente con regla para optimizar el grosor de aplicación.
            <br>
            <b>Preparación del producto:</b> Se mezcla en proporción 1 / 0.23 es decir por cada kilo de producto se agregan 230 ml de agua.  Se añade el agua hasta obtener una consistencia de pasta apropiada para su aplicación.
            <br>
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            Entre los 2 a 2.5 m2 por bulto de 25 kilos a un grosor promedio de 9 mm.
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
            El tiempo de almacenamiento para MAXIPAÑETE  es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Mayor plasticidad y facilidad de aplicación, secado uniforme. <br>
            • Mortero listo para pintar o darle el acabado final en 24 horas.<br>
            • Mayor aislamiento térmico y Blancura para ahorro de pintura,<br>
            • Excelente resistencia y propiedades mecánicas.<br>
            • Mayor rendimiento de la mano de obra en la aplicación.<br>
            • Acabado semifino.<br>
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
                <td class="table-text">25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.26g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Gran adherencia y resistencia</td>
              </tr>
              <tr>
                <td class="table-text">Agua de amasado</td>
                <td class="table-text">230ml por kilo</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de trabajabilidad</td>
                <td class="table-text">30 Minutos</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/morteros-maxipanete.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Dialogos de Productos -->
    <div id="maxipanete-proyectable" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxipanete.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
MAXIPAÑETE PROYECTABLE Es un mortero listo para pañete que está
compuesto por Sulfato de calcio, cargas, áridos y aditivos que le transfieren una
mayor plasticidad, manejabilidad y tiempo extendido de fraguado, facilitando su
aplicación mecánica o máquina de proyección. Por sus altas resistencias y
propiedades mecánicas reemplaza al mortero tradicional de cemento.
          </p>
          <p><b>USOS</b>
            <br>
Como revestimiento sobre Bloque, ladrillo, concreto, fibrocemento, espuma de
poliuretano con malla a modo de pañete o revoque.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie de aplicación debe estar limpia, libre
de polvo y grasa, pintura, u otras sustancias que impidan la correcta adherencia.
Las superficies pintadas deben rasparse y picarse buscando el suficiente anclaje
del producto 
            <br>
            <b>Preparación del producto:</b> El caudal de inyección de agua de la máquina de proyección debe ajustarse entre
650 y 700 ml/kg. Vaciar los bultos en la tolva y operar normalmente. Debe
hacerse líneas maestras en la pared previamente para tomar los niveles de grosor
al cual se debe hacer la aplicación.
            <br>
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
             Entre los 1.5 a 1.7 por bulto de 25 kilos a un grosor promedio de
9 mm.
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
El tiempo de almacenamiento para MAXIPAÑETE PROYECTABLE es de 6
meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo
techo y sobre estibas.
Transportar sobre estibas en vehículos cerrados, protegidos de la humedad          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Reemplaza al pañete tradicional de cemento y al estuco en un solo paso.<br>
            • Mayor plasticidad y facilidad de aplicación, secado uniforme.<br>
            • Mortero listo para pintar o darle el acabado final en 24 horas.<br>
            • Mayor aislamiento térmico y Blancura para ahorro de pintura.<br>
            • Excelente resistencia y propiedades mecánicas.<br>
            • Mayor rendimiento de la mano de obra en la aplicación.<br>
            • El yeso de proyectar está clasificado como Euroclase A1 (No contribución
            al fuego). Según la directiva 89/106/CEE relativa a productos de
            construcción.<br>
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
                <td class="table-text">25 Kg</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">1.26g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Propiedades</td>
                <td class="table-text">Gran adherencia y resistencia</td>
              </tr>
              <tr>
                <td class="table-text">Agua de amasado</td>
                <td class="table-text">650ml por kilo</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de trabajabilidad</td>
                <td class="table-text">80 Minutos</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/morteros-maxipanete.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="maxifino" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxifino.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            MAXI FINO es una mezcla de yeso de granulometría fina, ideal para pulir y dar acabado a diferentes superficies en interiores. Posee una formulación con ingredientes especiales que le confieren excelentes propiedades de blancura, adherencia, cubrimiento, cremosidad, manejabilidad y de fraguado lento.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación:</b> Según la cantidad a preparar (de acuerdo a la relación A/Y) vierta el agua en un recipiente plástico limpio.<br>
              Al adicionar el Maxi Fino, háganlo espolvoreándolo poco a poco sobre el agua dentro del recipiente, con el fin de obtener una mayor superficie de contacto.<br>
              Revuelva o amase hasta formar una pasta homogénea. Puede usar un agitador de madera siendo preferible la agitación mecánica.
            <br>
            <b>Aplicación:</b>Limpie y seque bien la superficie donde se va a realizar la aplicación. La última capa de la superficie (mortero, yeso, etc.) debe tener preferiblemente entre 4 y 20 horas de aplicado.<br>
              Aplique una primera capa (normalmente de 1 ó 2mm) con llana metálica o espátuila, según requierimiento.<br>
              Deje secar y aplique una segunda capa suave y lisa.<br>
              Se puede aplicar la pintura después de 72 horas.
            <br>
          </p>
          <p><b>RECOMENDACIONES</b>
            <br>
            Antes de utilizar este producto, lea completamente la etiqueta.<br>
            Use solo agua potable para su preparación y en la cantidad indicada en la etiqueta.<br>
            No mezcle Maxi Fino con otras sustancias o productos; podrían alterarse sus propiedades cambiando el resultado del acabado y el tiempo de fraguado.<br>
            Aplique con buena ventilación.<br>
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          
          <p><b>ALMACENAMIENTO</b>
            <br>
            Se recomienda guardar en bolsa cerrada, bajo techo, en lugar fresco seco y ventilado, aislándose del piso con tarimas, protegiendo del sol, la humedad y la lluvia.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Extemada blancura<br>
            • Mortero listo para pintar o darle el acabado final en 24 horas.<br>
            • Alta resistencia superficial<br>
            • Genera acabados limpios y lisos<br>
            • Promociona ahorro de pintura<br>
            • Mayor rendimiento<br>
            • Garantiza una excelente adherencia a cualquier superficie<br>
            • Bajo desperdicio<br>
            • Mayor cubrimiento<br>
            • Excelente manejabilidad<br>                                
            • Resistente al fuego<br>
            • Posee absorción acústica<br>                                
            • Bajo coeficiente de conductividad térmica<br>
            • Ecológico y respetuoso con el medio ambiente<br>
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
                <td class="table-text">Aspecto</td>
                <td class="table-text">Polvo fino</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado</td>
                <td class="table-text">45 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Shelf Life</td>
                <td class="table-text">6 meses de almacenado en condiciones recomendadas</td>
              </tr>
              <tr>
                <td class="table-text">Reacción</td>
                <td class="table-text">Quimicamente con el agua para endurecerse</td>
              </tr>
              <tr>
                <td class="table-text">Relación Agua/Yeso</td>
                <td class="table-text">0,8 lt/kg de producto</td>
              </tr>
              <tr>
                <td class="table-text">Granulometría</td>
                <td class="table-text">0,01-0,2 mm</td>
              </tr>
              <tr>
                <td class="table-text">PH</td>
                <td class="table-text">Mayor de 6.0</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de empleo</td>
                <td class="table-text">60 Minutos</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/morteros-maxifino.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="maxitrio-naranja" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxitrio-naranja.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>USOS Y APLICACIONES</b>
            <br>
            El mortero seco Maxitrio Tipo M, en una mezcla lista para usar de Cemento, Arena y Aditivos de excelente calidad, rendimiento y resistencia, utilizando en la pega y pañete de mampostería estructural y en exteriores.
          </p>
          <p><b>BENEFICIOS</b>
            <br>
            • Disminuye la fisuración
            • Producto listo para usar
            • Mejor Calidad del mortero por uniformidad de la mezcla
            • Menor desperdicio de materiales por su mayor adherencia
            • Ahorro en mano de obra por mezclado y transporte de obra
            • Mejor control de inventario y costos de la obra
            • Disminución de impactos ambientales en obra
            • Incremento en la velocidad de ejecución de las obras
            <br>
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            • Un saco de 40 kg equivale a 0,025m³ de mezcla húmeda.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->  
          <p><b>MANUAL DE USO</b>
            <br>
            • Vierta 6 litros de agua en un recipiente no absorbente. Agregue el contenido del saco y mezcle uniformemente hasta obtener un mortero homogéneo sin grumos o material seco.
            • Humedezca con agua la placa de concreto, unidades de mampostería o superficie donde se aplicará el producto.
            • Realice la curación del mortero con agua para obtener un mejor desempeño.
          </p>
          <p><b>INSTRUCCIONES DE ALMACENAMIENTO Y MANIPULACIÓN</b>
            <br>
            • Manténgase en lugar cubierto, seco y sin humedad.
            • Almacene sobre estibas a 30cm alejado de las paredes.
            • No apile más de 10 sacos en altura.
            • Consumirlo en su totalidad una vez abierto.
          </p>
          <p><b>PRECAUCIONES</b>
            <br>
            • Evite el contacto con los ojos. En caso de ser necesario lávese con agua abundante.
            • Use guantes de látex, mascarilla y gafas durante su uso y manipulación
          </p>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/maxitrio-naranja.png" class="display-empaque">
        </div>
      </div>
    </div>
    <div id="maxitrio-azul" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxitrio-azul.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>USOS Y APLICACIONES</b>
            <br>
            El mortero seco Maxitrio Tipo S, en una mezcla lista para usar de Cemento, Arena y Aditivos de excelente calidad, rendimiento y resistencia, utilizando en la pega y pañete de mampostería estructural y en exteriores.
          </p>
          <p><b>BENEFICIOS</b>
            <br>
            • Disminuye la fisuración
            • Producto listo para usar
            • Mejor Calidad del mortero por uniformidad de la mezcla
            • Menor desperdicio de materiales por su mayor adherencia
            • Ahorro en mano de obra por mezclado y transporte de obra
            • Mejor control de inventario y costos de la obra
            • Disminución de impactos ambientales en obra
            • Incremento en la velocidad de ejecución de las obras
            <br>
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            • Un saco de 40 kg equivale a 0,025m³ de mezcla húmeda.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->  
          <p><b>MANUAL DE USO</b>
            <br>
            • Vierta 6 litros de agua en un recipiente no absorbente. Agregue el contenido del saco y mezcle uniformemente hasta obtener un mortero homogéneo sin grumos o material seco.
            • Humedezca con agua la placa de concreto, unidades de mampostería o superficie donde se aplicará el producto.
            • Realice la curación del mortero con agua para obtener un mejor desempeño.
          </p>
          <p><b>INSTRUCCIONES DE ALMACENAMIENTO Y MANIPULACIÓN</b>
            <br>
            • Manténgase en lugar cubierto, seco y sin humedad.
            • Almacene sobre estibas a 30cm alejado de las paredes.
            • No apile más de 10 sacos en altura.
            • Consumirlo en su totalidad una vez abierto.
          </p>
          <p><b>PRECAUCIONES</b>
            <br>
            • Evite el contacto con los ojos. En caso de ser necesario lávese con agua abundante.
            • Use guantes de látex, mascarilla y gafas durante su uso y manipulación
          </p>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/maxitrio-azul.png" class="display-empaque">
        </div>
      </div>
    </div>
    <div id="maxitrio-rojo" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxitrio-rojo.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>USOS Y APLICACIONES</b>
            <br>
            El mortero seco Maxitrio Tipo N, en una mezcla lista para usar de Cemento, Arena y Aditivos de excelente calidad, rendimiento y resistencia, utilizado en la pega y pañete de muros interiores no estructurales.
          </p>
          <p><b>BENEFICIOS</b>
            <br>
            • Disminuye la fisuración
            • Producto listo para usar
            • Mejor Calidad del mortero por uniformidad de la mezcla
            • Menor desperdicio de materiales por su mayor adherencia
            • Ahorro en mano de obra por mezclado y transporte de obra
            • Mejor control de inventario y costos de la obra
            • Disminución de impactos ambientales en obra
            • Incremento en la velocidad de ejecución de las obras
            <br>
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            • Un saco de 40 kg equivale a 0,025m³ de mezcla húmeda.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->  
          <p><b>MANUAL DE USO</b>
            <br>
            • Vierta 6 litros de agua en un recipiente no absorbente. Agregue el contenido del saco y mezcle uniformemente hasta obtener un mortero homogéneo sin grumos o material seco.
            • Humedezca con agua la placa de concreto, unidades de mampostería o superficie donde se aplicará el producto.
            • Realice la curación del mortero con agua para obtener un mejor desempeño.
          </p>
          <p><b>INSTRUCCIONES DE ALMACENAMIENTO Y MANIPULACIÓN</b>
            <br>
            • Manténgase en lugar cubierto, seco y sin humedad.
            • Almacene sobre estibas a 30cm alejado de las paredes.
            • No apile más de 10 sacos en altura.
            • Consumirlo en su totalidad una vez abierto.
          </p>
          <p><b>PRECAUCIONES</b>
            <br>
            • Evite el contacto con los ojos. En caso de ser necesario lávese con agua abundante.
            • Use guantes de látex, mascarilla y gafas durante su uso y manipulación
          </p>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/maxitrio-rojo.png" class="display-empaque">
        </div>
      </div>
    </div>
    <div id="maxitrio-cyan" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxitrio-cyan.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>USOS Y APLICACIONES</b>
            <br>
            El mortero seco para pisos Maxitrío, en una mezcla lista para usar de Cemento, Arena y Aditivos de excelente calidad, rendimiento y resistencia, utilizado de la nivelación de placas o alistamiento de pisos.
          </p>
          <p><b>BENEFICIOS</b>
            <br>
            • Disminuye la fisuración
            • Producto listo para usar
            • Mejor Calidad del mortero por uniformidad de la mezcla
            • Menor desperdicio de materiales por su mayor adherencia
            • Ahorro en mano de obra por mezclado y transporte de obra
            • Mejor control de inventario y costos de la obra
            • Disminución de impactos ambientales en obra
            • Incremento en la velocidad de ejecución de las obras
            <br>
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            • Un saco de 40 kg equivale a 0,025m³ de mezcla húmeda.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->  
          <p><b>MANUAL DE USO</b>
            <br>
            • Vierta 6 litros de agua en un recipiente no absorbente. Agregue el contenido del saco y mezcle uniformemente hasta obtener un mortero homogéneo sin grumos o material seco.
            • Humedezca con agua la placa de concreto, unidades de mampostería o superficie donde se aplicará el producto.
            • Realice la curación del mortero con agua para obtener un mejor desempeño.
          </p>
          <p><b>INSTRUCCIONES DE ALMACENAMIENTO Y MANIPULACIÓN</b>
            <br>
            • Manténgase en lugar cubierto, seco y sin humedad.
            • Almacene sobre estibas a 30cm alejado de las paredes.
            • No apile más de 10 sacos en altura.
            • Consumirlo en su totalidad una vez abierto.
          </p>
          <p><b>PRECAUCIONES</b>
            <br>
            • Evite el contacto con los ojos. En caso de ser necesario lávese con agua abundante.
            • Use guantes de látex, mascarilla y gafas durante su uso y manipulación
          </p>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/maxitrio-cyan.png" class="display-empaque">
        </div>
      </div>
    </div>
      <iframe id="catalogo" style="display:none;" width="1100px" height="700px" src="http://online.fliphtml5.com/xpfn/afoo/#p=1" frameborder="0" allowfullscreen allowtransparency></iframe>

  </body>
</html>