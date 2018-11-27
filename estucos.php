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
                  <li class="active"><a href="estucos">Estucos</a></li>
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
    <div class="bg-blue">
      <div class="container">
        <div class="title-productos">LÍNEA DE ESTUCOS</div>
        <div class="col-md-4 col-sm-4 col-xs-12 column-line">
          <div class="column-title">ESTUCOS TRADICIONALES</div>
          <a href="#estucotrio-rojo" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/estucotrio-rojo.png" class="pegatrio-margin" width="40%">
              <div class="title-pegatrio">BLANCO</div>
              <div class="boxing-2">
                <div class="col-md-12 estucotrio-rojo text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>
          <a href="#estucotrio-verde" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/estucotrio-verde.png" class="pegatrio-margin" width="40%">
              <div class="title-pegatrio">GRIS CONSTRUCTOR</div>
              <div class="boxing-2">
                <div class="col-md-12 estucotrio-verde text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>
          <a href="#estucotrio-naranja" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/estucotrio-naranja.png" class="pegatrio-margin" width="40%">
              <div class="title-pegatrio">REVOQUE</div>
              <div class="boxing-2">
                <div class="col-md-12 estucotrio-naranja text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 column-line">
          <div class="column-title">ESTUCOS PLÁSTICOS EN POLVO</div>
          <a href="#estucotrio-amarillo" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/estucotrio-amarillo.png" class="pegatrio-margin" width="40%">
              <div class="title-pegatrio">EXTERIORES</div>
              <div class="boxing-2">
                <div class="col-md-12 estucotrio-amarillo text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>
          <a href="#estucotrio-amarillo" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/estucotrio-azulclaro.png" class="pegatrio-margin" width="40%">
              <div class="title-pegatrio">INTERIORES</div>
              <div class="boxing-2">
                <div class="col-md-12 estucotrio-azulclaro text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 column-line">
          <div class="column-title">ESTUCOS ACRÍLICOS</div>
          <a href="#estucotrio-azul" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/estucotrio-acrilico-sprite.png" class="pegatrio-margin" width="80%">
              <div class="title-boquillatrio">ACRÍLICO</div>
              <div class="boxing">
                <div class="col-md-12 estucotrio-azul text-center">FICHA TÉCNICA</div>
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
    
    
    <!-- Cierra un dialogo Fancybox -->
    <div id="estucotrio-verde" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-estucotrio-verde.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            Estuco a base de yeso fino de color gris, que al agregarle agua se obtiene una pasta manejable y lista para ser aplicada. Diseñado para el recubrimiento final en interiores y  lograr alta resistencia y excelente acabado.
          </p>
          <p><b>USOS</b>
            <br>
            Estuco trío fabricados con materiales de alta  calidad para aplicarse sobre pañete o revoque, frisos, repellos, superficies lisas de concreto. Para lograr un excelente acabado.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie debe estar total mente fraguada y limpia. La superficie con Pintura retire la pintura, lave la superficie eliminado polvo e impurezas. Ralle la superficie para aumentar la adherencia Bloque la superficie debe estar lo más nivelada posible y libre de polvo. La superficie puede estar húmeda mas no saturada de agua.
            <br>
            <b>Preparación del producto:</b> En un recipiente limpio vierta el producto con agua en proporción necesaria para obtener una pasta homogénea libre de grumos. Si va a aplicar color mezcle vigorosamente Estuco trió con agua de esta mezcla depende en gran parte la uniformidad del color. 
            <br>
            <b>Aplicación:</b> Estuco trió se aplica con llana lisa como el estuco tradicional. Aplique 3 o 4 capas para obtener un excelente acabado.
          </p>
          <p><b>PRECAUCIONES</b>
              - Aplique Estuco trío sobre pañetes que mínimo 8 días de elaborado<br>
              - Evitar la aplicación sobre grietas u otros defectos (evitar hacer rellenos)<br>
              - Evite el exceso de agua a la hora de la preparación<br>
              - Una vez abierto el material debe consumirse totalmente el producto para evitar la formación de grumos y el material pierda las características normales.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            Aproveche de  1 ½ a 2 Kg por m² dependiendo del estado de la superficie y las habilidades del aplicador.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños. Tenga en cuenta todas las precauciones normales usar (guantes, gafas y respiradores para polvos en la manipulación) en caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            El tiempo de almacenamiento para Estuco trió es de 3 meses, en su empaque. Original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Listo para usar, solo hay que mezclarlo con agua<br>
            • Estucado uniforme<br>
            • Control de consumo en obra<br>
            • Menos desperdicio<br>
            • Se puede aplicar sobre bloque a la vista<br>
            • Ahorro de pintura gracias al color claro del estuco trío original<br>
            • No desperdicia la mezcla remanente en el balde, agregue agua hasta obtener una consistencia adecuada para la aplicación<br>
            • Alta capacidad de relleno
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
                <td class="table-text">Color</td>
                <td class="table-text">Gris</td>
              </tr>
              <tr>
                <td class="table-text">Rendimiento</td>
                <td class="table-text">0.8 – 1 M2/Kg</td>
              </tr>
              <tr>
                <td class="table-text">Relación de la mezcla</td>
                <td class="table-text">1 Parte estuco trió con 0.6–0.8 parte de agua</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de secado en el recipiente</td>
                <td class="table-text">10 - 15 minutos</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/estucotrio-verde.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    
    <div id="estucotrio-rojo" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-estucotrio-rojo.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            Estuco a base de yeso fino de color Blanco, que al agregarle agua se obtiene una pasta manejable y lista para ser aplicada. Diseñado para el recubrimiento final en interiores y  lograr alta resistencia y excelente acabado
          </p>
          <p><b>USOS</b>
            <br>
            Estuco Trío Blanco fabricados con materiales de alta calidad para aplicarse sobre pañete o revoque, frisos, repellos, superficies lisas de concreto. Para lograr un excelente acabado.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie debe estar total mente fraguada y limpia. La superficie con Pintura retire la pintura, lave la superficie eliminado polvo e impurezas. Ralle la superficie para aumentar la adherencia. Bloque la superficie debe estar lo más nivelada posible y libre de polvo. La superficie puede estar húmeda mas no saturada de agua.
            <br>
            <b>Preparación de la mezcla:</b> En un recipiente limpio vierta el producto con agua en proporción. Necesaria para obtener una pasta homogénea libre de grumos. Si va a aplicar color mezcle vigorosamente Estuco trió Blanco con agua de esta mezcla depende en gran parte la uniformidad del color. 
            <br>
            <b>Aplicación:</b> Se aplica con llana lisa como el estuco tradicional. Aplique 3 o 4 capas para obtener un excelente acabado
          </p>
          <p><b>PRECAUCIONES</b>
              -Aplique Estuco trío Blanco sobre pañetes que mínimo 8 días de elaborado.<br> 
              -Evitar la aplicación sobre grietas u otros defectos (evitar hacer rellenos).<br>
              -Evite el exceso de agua a la hora de la preparación.<br>
              -Una vez abierto el material debe consumirse totalmente el producto para evitar la formación de grumos y el material pierda las características normales.
          </p>
          <p><b>RENDIMIENTO</b>
            <br>
            Aproveche de  1 ½ a 2 Kg por m² dependiendo del estado de la superficie y las habilidades del aplicador.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños. Tenga en cuenta todas las precauciones normales usar (guantes, gafas y respiradores para polvos en la manipulación) en caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            El tiempo de almacenamiento para Estuco trío blanco es de 3 meses, en su empaque. Original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Listo para usar, solo hay que mezclarlo con agua<br>
            • Estucado uniforme<br>
            • Control de consumo en obra<br>
            • Se puede aplicar sobre bloque a la vista<br>
            • Ahorro de pintura gracias al color claro del estuco trió original<br>
            • No desperdicia la mezcla remanente en el balde, agregue agua hasta obtener una consistencia adecuada para la aplicación alta capacidad de relleno 
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
                <td class="table-text">25 - 40 kg</td>
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
                <td class="table-text">Relación de la mezcla</td>
                <td class="table-text">1 Parte estuco trió con 0.6–0.8 parte de agua</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo fraguado inicial en el recipiente</td>
                <td class="table-text">10 - 15 minutos</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/estucotrio-rojo.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    
    <div id="estucotrio-naranja" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-estucotrio-naranja.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            ESTUCO TRÍO REVOQUE, es un estuco listo de color Extra Blanco, que se presenta como polvo fino modificado con polímeros que le confieren gran plasticidad y excelente dureza para dar terminado liso y uniforme a interiores y exteriores.
          </p>
          <p><b>USOS</b>
            <br>
            Como revestimiento para acabado sobre pañetes, concreto y láminas de fibrocemento, y superficies niveladas en general. Después de aplicado recibe fácilmente pintura.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> Limpie la superficie por medios mecánicos, y déjela completamente libre (de moho, aceite, productos bituminosos, polvo, o cualquier otro elemento extraño). Las superficies con pinturas, deben ser raspadas, lijadas y lavadas para eliminar las impurezas.
            <br>
            <b>Preparación de la mezcla:</b> En un recipiente limpio vierta tres partes de ESTUCO TRÍO REVOQUE con una parte de agua para obtener una consistencia adecuada para la aplicación. Mezcle bien para obtener una pasta homogénea libre de grumos.
          </p>
          <p><b>APLICACIÓN</b>
            <br>
            1. Aplique una primera capa de ESTUCO TRIO REVOQUE en consistencia semifluida, para que sirva de imprimante de las demas capas.
            <br>
            2. Cuando la primera capa presente apariencia opaca, inicie la aplicación de la segunda capa de ESTUCO TRÍO REVOQUE en consistencia pastosa y en sentido perpendicular a la aplicación de la primera, de tal forma que corrija las imperfecciones y empareje la colocación. Ejerza poca presión para que el producto se adhiera sobre la superficie y evitar porosidades.
            <br>
            3. Inmediatamente seca la segunda capa, aplique una tercera en consistencia semifluida. De el acabado final según lo requiera.
          </p>
                    <p><b>VENTAJAS</b>
            <br>
            • Estuco listo altamente manejable<br>
            • Fácil preparación, solo tiene que adicionarle agua<br>
            • Acabado uniforme y suave textura<br>
            • Control de consumo en la obra<br>
            • Menos desperdicio por su fácil rehidratación<br>
            • Igual resistencia en interiores y exteriores<br>
            • Debido a su color BLANCO ahorra consumo de pintura<br>
            • Una vez seco tiene alta durezav
            • Si no consume la totalidad del producto cierre bien el empaque con el producto sobrante y úselo cuando lo requiera<br>
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>RECOMENDACIONES</b>
            <br>
            Estuque con ESTUCO TRÍO REVOQUE sobre pañetes o repellos que tengan 10 días mínimo, evitando la aparición de grietas.
            <br>
            Después de la aplicación, evite mojar la superficie o someterla a polvo excesivo durante 36 horas.
            <br>
            Las herramientas utilizadas deben limpiarse con agua inmediatamente después de su uso, antes que el producto haya endurecido.
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lavar con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            El tiempo de almacenamiento para ESTUCO TRIO REVOQUE es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
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
                <td class="table-text">25 kg</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Aspecto</td>
                <td class="table-text">Polvo fino</td>
              </tr>
              <tr>
                <td class="table-text">Densidad aparente</td>
                <td class="table-text">0.90 gr/cc</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">Aprox 12 L por bolsa de 25 kg</td>
              </tr>
              <tr>
                <td class="table-text">Rendimiento</td>
                <td class="table-text">1.5 kg./m2</td>
              </tr>
              <tr>
                <td class="table-text">Vida en el recipiente</td>
                <td class="table-text">45 minutos</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/estucotrio-naranja.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    
    <div id="estucotrio-amarillo" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-estucotrio-amarillo.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            ESTUCO TRIO INTERIOR/EXTERIOR, es un estuco listo que se presenta como polvo fino modificado con polímeros que le confieren gran plasticidad y excelente dureza.
          </p>
          <p><b>USOS</b>
            <br>
            Como revestimiento para acabado sobre pañetes, concreto y laminas de fibrocemento, superficies niveladas en general Después de aplicado recibe fácilmente pintura.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> Limpie la superficie por medios mecánicos, y déjela completamente libre (de moho, aceite, productos bituminosos, polvo, o cualquier otro elemento extraño). Las superficies con pinturas, deben ser raspadas, lijadas y lavadas para eliminar las impurezas.
            <br>
            <b>Preparación del producto:</b> En un recipiente limpio mezcle 2 partes de ESTUCO TRIO EXTERIOR por 1 partes de agua hasta obtener una consistencia adecuada para la aplicación. Mezcle bien para evitar la formación de grumos.
            <br>
            <b>Aplicación:</b> Aplique de dos a tres capas, con llana lisa en forma uniforme (dependiendo del acabado y lo aplomado de la superficie), dejando secar entre capa y capa. 
            La mezcla se puede rehidratar hasta 15 minutos después de preparada para restituirle su consistencia de pasta. El estuco cuando está húmedo presenta entizamiento, después de 24 horas de secado no debe presentar este fenómeno.
            Si se utiliza pintura (vinilo acrílico) como acabado final, puede colocar una primera capa de ésta, 24  horas después de haber terminado la aplicación de ESTUCO TRIO EXTERIOR.<br>
            Para mejores Resultados siga los siguientes pasos:<br>
            1.	Aplique una primera capa de ESTUCO TRIO EXTERIOR en consistencia semifluida, para que sirva de imprimante de las demás capas.<br>
              2.	Cuando la primera capa presente apariencia opaca, inicie la aplicación de la segunda capa de ESTUCO TRIO EXTERIOR en consistencia pastosa y en sentido perpendicular a la aplicación de la primera, de tal forma que corrija imperfecciones y empareje la colocación. Ejerza poca presión para que el producto se adhiera  sobre la superficie y evitar porosidades.<br>
              3.	Inmediatamente seca la segunda capa, aplique una tercera en consistencia semifluida. Dé el acabado final según lo requiera.
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
                Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lavar con abundante agua.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>RECOMENDACIONES</b>
            <br>
            Estuque con ESTUCO TRIO EXTERIOR/INTERIOR sobre pañetes o repellos que tengan 10 días mínimo, evitando la aparición de grietas. Después de la aplicación, evite mojar la superficie o someterla a polvo excesivo durante 36 horas. Las herramientas utilizadas deben limpiarse con agua inmediatamente después de su uso, antes de que el producto haya endurecido.
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            El tiempo de almacenamiento para ESTUCO TRIO EXTERIOR es de 6 meses, en su empaque original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Estuco listo altamente manejable<br>
            • Fácil preparación, solo tiene que adicionarle agua<br>
            • Acabado uniforme y suave textura<br>
            • Control de consumo en la obra<br>
            • Menos desperdicio por su fácil rehidratación<br>
            • Debido a su color BLANCO ahorra consumo de pintura<br>
            • Una vez seco tiene alta dureza<br>
            • Si no consume la totalidad del producto cierre bien el empaque con el producto sobrante y úselo cuando lo requiera<br>
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
                <td class="table-text">Aspecto</td>
                <td class="table-text">Polvo fino</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Densidad</td>
                <td class="table-text">0.85 gr./cc</td>
              </tr>
              <tr>
                <td class="table-text">Agua de Amasado</td>
                <td class="table-text">Aprox 12 lt por bolsa de 25 Kg.</td>
              </tr>
              <tr>
                <td class="table-text">Rendimiento</td>
                <td class="table-text">1.5 Kg./m2</td>
              </tr>
              <tr>
                <td class="table-text">Vida en el Recipiente</td>
                <td class="table-text">120 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tracción a la superficie</td>
                <td class="table-text">1.1 Mpa</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <div class="empaque-sprite">
            <img src="img/catalogo/empaques/estucotrio-amarillo-sprite.png" class="display-empaque pegatrio-naranja-empaque">
          </div>
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    
    <div id="estucotrio-azul" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-estucotrio-azul.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            Estuco preparado, listo para su aplicación, con resinas acrílicas y aditivos que le dan características especiales de adherencia, durabilidad, resistencia a la intemperie y facilidad en aplicación. 
          </p>
          <p><b>USOS</b>
            <br>
            Para aplicarse sobre revoques y pañetes en ambientes interiores o exteriores, Como revestimiento para acabado sobre pañetes, o concreto y laminas de fibrocemento. Después de aplicado recibe fácilmente pintura.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación de la superficie:</b> La superficie debe estar nivelada, en caso de grietas o huecos resane con BLANCO TRIO. debe estar seca y verifique que no haya humedad permanente o filtraciones. Limpie la superficie por medios mecánicos, y déjela completamente libre (de moho, aceite, productos bituminosos, polvo, o cualquier otro elemento extraño). Las superficies con pinturas, deben ser raspadas, lijadas y lavadas para eliminar las impurezas.
            <br>
            <b>Aplicación:</b> Aplique tres capas delgadas y cruzadas, con llana lisa en forma uniforme, dejando secar entre capa y capa. Procure la máxima nivelación entre las capas. Puede dar un acabado liso o texturizado. Si va a utilizar pintura (vinilo acrílico) como acabado final, lije la superficie 36  horas después de haber terminado la aplicación de ESTUCO TRIO ACRILICO. Proceda entonces a aplicar la pintura.
          </p>
          <p><b>RECOMENDACIONES</b>
            <br>
            Estuque con ESTUCO TRIO ACRÍLICO sobre pañetes o repellos que tengan 10 días mínimo, evitando la aparición de grietas. Después de la aplicación, evite mojar la superficie o someterla a polvo excesivo durante 36 horas. Las herramientas utilizadas deben limpiarse con agua inmediatamente después de su uso, antes de que el producto haya endurecido.
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lavar con abundante agua.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>ALMACENAMIENTO</b>
            <br>
            El tiempo de almacenamiento para ESTUCO TRIO ACRILICO es de 1 año, en su recipiente original, cerrado, en lugar fresco, libre de humedad, bajo techo y sobre estibas. Transportar sobre estibas en vehículos cerrados, protegidos de la humedad.
          </p>
          <p><b>DISPOSICIÓN DE LOS RESIDUOS</b>
            <br>
            Con el fin de evitar la contaminación del medio ambiente se recomienda no verter los residuos por el alcantarillado o en fuentes de agua, ríos, etc. estos deben disponerse en rellenos sanitarios controlados. El envase de este producto es reciclable. En caso de ocurrir un derrame al alcantarillado recoja los residuos y termine de limpiar con abundante agua.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Viene listo para su aplicación<br>
            • Acabado uniforme y suave textura<br>
            • Control de consumo en la obra<br>
            • Bajo desperdicio al aplicarse<br>
            • Igual resistencia en interiores y exteriores<br>
            • No se agrieta ni se fisura<br>
            • Debido a su color BLANCO ahorra consumo de pintura<br>
            • Una vez seco tiene alta dureza<br>
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
                <td class="table-text">Galón y cuñete de 5 galones</td>
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
                <td class="table-text">Densidad</td>
                <td class="table-text">2.22 g/cc</td>
              </tr>
              <tr>
                <td class="table-text">Rendimiento</td>
                <td class="table-text">10 a 12 m por cuñete dependiendo del numero</td>
              </tr>
              <tr>
                <td class="table-text"> </td>
                <td class="table-text">de manos y experiencia del aplicador</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <div class="empaque-sprite">
            <img src="img/catalogo/empaques/estucotrio-acrilico-sprite.png" class="display-empaque pegatrio-naranja-empaque">
          </div>
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
      <iframe id="catalogo" style="display:none;" width="1100px" height="700px" src="http://online.fliphtml5.com/xpfn/afoo/#p=1" frameborder="0" allowfullscreen allowtransparency></iframe>

  </body>
</html>