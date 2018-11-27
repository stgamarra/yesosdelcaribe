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
                  <li><a href="morteros">Mortero</a></li>
                  <li class="active"><a href="masillas">Masillas</a></li>
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
        <div class="title-productos">LÍNEA DE MASILLAS</div>
        <div class="col-md-6 col-sm-6 col-xs-12 column-line">
          <div class="column-title">PANELMAX90</div>
          <a href="#panelmax90" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/masillas-panelmax90.png" class="pegatrio-margin" width="45.2%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 panelmax90-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>  
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 column-line">
          <div class="column-title">PANELMAX100</div>
          <a href="#panelmax100" class="fancyapps button-pegatrio">
            <div class="empaque-block col-xs-12 text-center">
              <img src="img/catalogo/empaques/masillas-panelmax100.png" class="pegatrio-margin" width="50%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 panelmax100-linea text-center">FICHA TÉCNICA</div>
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
    <div id="panelmax90" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-panelmax90.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN Y USOS</b>
            <br>
            La masilla PANEL MAX 90 es una mezcla lista en polvo de sulfato de calcio semihidratado aditivado con ingredientes de alta calidad que le confieren propiedades como cubrimiento, plasticidad, manejabilidad. PANEL MAX 90 brinda mayor economía al servir para reemplazar las masillas acrílicas tradicionales en la utilización sobre yeso cartón, drywall y paneles prefabricados; O para reemplazar estucos tradicionales en terminados de muros y paredes.
          </p>
          <p><b>FORMA DE EMPLEO</b>
            <br>
            <b>Preparación:</b> Vierta agua en un recipiente plástico, que se encuentre limpio de residuos e impurezas.<br>
              Se recomienda antes de utilizar PANEL MAX 90, agitar muy bien el material dentro del saco para evitar aglomeraciones.<br>
              La masilla en polvo PANEL MAX 90. Debe ser espolvereada dentro del recipiente plástico para lograr una mayor superficie de contacto con el agua.<br>
              Agite fuertemente PANEL MAX 90. Hasta formar una pasta homogénea, libre de grumos y lista para usar.
            <br>
            <b>Aplicación:</b> Para aplicar PANEL MAX 90, la superficie debe estar lisa y limpia, retirar elementos que impidan la adherencia del material, tales como: polvo, grasa, cales o material suelto.<br>
              Dependiendo de lo que se requiera, se aplican 2 o 3 capas. Dejando secar entre ellas.<br>
              Con una espátula ancha de acero, aplique una capa continua de PANEL MAX 90 para llenar el canal formado por los bordes rebajados de los paneles. Centre y presione la cinta para juntas, sobre PANEL MAX 90. Haga pasar la espátula sobre la junta con suficiente presión para eliminar los excedentes por encima y por debajo de la cinta, así como en los bordes. Deje suficiente material debajo de la cinta para que se pegue apropiadamente, pero poca bajo los bordes.
            <br>
          </p>
          <p><b>RECOMENDACIONES</b>
            <br>
            • Es importante tener en cuenta que las recomendaciones de instalación que hagan los fabricantes y aplicadores de los paneles, para garantizar un buen comportamiento de PANEL MAX 90.<br>
            • Lea completamente ésta etiqueta.<br>
            • PANEL MAX 90 no debe adicionarse primero que el agua.<br>
            • Tanto el recipiente a utilizar, como la superficie a cubrir, deben estar secos y libre de polvo.<br>
            • Evite el exceso de agua a la hora de la preparación.<br>
            • Una vez abierto el empaque, debe consumirse la totalidad del producto, para evitar la formación de grumos y la perdida de propiedades de PANEL MAX 90.          </p>
          
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños, se recomienda usar guantes de caucho y gafas de protección para su manipulación. En caso de contacto con los ojos lave con abundante agua.
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            Se recomienda guardar la bolsa cerrada, bajo techo, en lugar fresco, seco y ventilado, aislándose del piso con estibas, protegiendo del sol, la humedad y la lluvia.
          </p>
          <p><b>VENTAJAS</b>
            <br>
            • Asegura una excelente adherencia de la cinta al sobre la Placa de Yeso-Cartón<br>
            • Mejor relleno<br>
            • Optimo secado<br>
            • Permite enlucir las Placas de Yeso-Cartón sin riesgo de sopladuras<br>
            • Alta resistencia mecánica<br>
            • De fácil manejo y mayor deslizamiento<br>
            • No requiere aditivos para garantizar la adherencia<br>
            • Menor encogimiento<br>
            • Resistente a las grietas<br>
            • Permite mayor control en obras<br>
            • Máxima blancura<br>
            • Reemplaza los estucos tradicionales<br>
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
                <td class="table-text">Tiempo de secado</td>
                <td class="table-text">90 Minutos</td>
              </tr>
              <tr>
                <td class="table-text">Acabado</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Estabilidad (Saco Abierto)</td>
                <td class="table-text">1 Mes (Bajo techo, sin humedad)</td>
              </tr>
              <tr>
                <td class="table-text">Rendimiento en Juntas</td>
                <td class="table-text">0,35kg/m2 de placa yeso-cartón</td>
              </tr>
              <tr>
                <td class="table-text">Rendimiento en enlucidos</td>
                <td class="table-text">0,55kg/m2 de placa de yeso-cartón</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/masillas-panelmax90.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    <div id="panelmax100" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-panelmax100.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN Y USOS</b>
            <br>
Es una masilla plástica para construcción liviana en interiores, lista para aplicar, especialmente formulada
para el tratamiento de juntas en placas de yeso (Drywall), con acabados más limpios, tersos y rápidos.
          <br>
La MASILLA PANEL MAX 100 – Multiusos está diseñada también para estucar paredes con revoque
tradicional en interiores, para dar acabado en placas de yeso y láminas de fibrocemento en interiores, es
ideal para el tratamiento de grietas y terminaciones en cielo raso. Se emplea para emparejar placas en
construcción liviana, cubrir dilataciones y/o aplicaciones, tornillos y otros elementos de sujeción en paredes
y techos de placa en interiores, antes de proteger o decorar con pinturas decorativas.
          </p>
          <p><b>PRESENTACIÓN</b>
            <br>
De 15Kg - 27Kg galón – 5,6Kg cuñete.</p>
          <p><b>MODO DE EMPLEO Y APLICACIÓN</b>
            <br>
<b>Preparación de la superficie:</b><br>
La superficie debe estar lisa y limpia, retirar todo aquello que impida la adherencia del material tales como (polvo,
grasa, cales, agentes depurantes o material suelto). Repare cualquier avería presente en la superficie.
<br><br>
<b>Preparación del producto y aplicación:</b><br>
Dependiendo de lo que se requiera, se aplica 2 o 3 capas. Dejando secar entre ellas. Con una espátula metálica limpia,
mezcle homogéneamente el producto hasta obtener una pasta consistente.<br>
Aplique una capa de producto en la unión entre las placas y coloque la cinta de papel centrada, presionándola,
asegurándola y retirando el exceso de masilla con la espátula. Deja suficiente material debajo de la cinta para que se
pegue apropiadamente, pero poca bajo los bordes.<br>
Deje secar de 12 a 24 horas dependiendo de las condiciones ambientales antes de proceder con otras capas. Aplique
también la masilla en las áreas de los tornillos de fijación. Aplique de 2 a 3 capas adicionales extendiéndose
aproximadamente 10 a 12 cm desde el centro de la cinta hacia afuera hasta lograr un acabado suave y terso.
            <br>
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>SEGURIDAD Y PRECAUCIONES</b>
            <br>
No ingiera el producto. Evite el contacto con la piel, los ojos y la inhalación de los vapores usando equipos apropiados
de seguridad como guantes, gafas de seguridad y mascarilla. No consuma alimentos mientras manipula el producto.
Aplique en un lugar con buena ventilación, alejado de toda fuente de calor. Mantenga el recipiente bien tapado
mientras no esté utilizando el producto. Almacene el producto en el recipiente original cerrado, lejos de toda fuente
de ignición, bajo techo, a una temperatura inferior a 30ºC. En caso de contacto del producto con fuentes de calor o
fuego, use agentes extintores de polvo químico seco. No vierta el producto en desagües, sobre el suelo o en quebradas
o ríos. En caso de escape o derrame recoja el material en recipientes para evitar la contaminación de las fuentes de
agua o alcantarillados. Para retirar (desprender) el producto (aplicado) que este seco o para pulir con papel de lija,
utilice gafas de seguridad y mascarilla para material particulado (polvos).<br>
Mantenga fuera del alcance de los niños.
          </p>
          <p><b>ALMACENAMIENTO Y TRANSPORTE</b>
            <br>
            Almacenar en un lugar seco y aireado.<br>
            La temperatura del lugar no debe exceder los 40 +/- 2°C.<br>
            Se debe transportar en un vehículo cerrado y protegido de la humedad.          </p>
          <p><b>USOS Y BENEFICIOS</b>
            <br>
            <b>Usos:</b><br>
            • Muro Interior • Cielo Raso • Drywall • Acabados
            <br>
            <b>Beneficios:</b><br>
            • Producto listo para usar, no requiere mezclas previas.
            • Está diseñado para tener alta adherencia con la mayoría de las cintas del mercado.
            • Buena capacidad de relleno
            • Óptimo secado par acabados más limpios
            • De fácil manejo y mayor deslizamiento
            • Más fácil de lijar. Menor encogimiento
            • Reduce riesgo de agrietamiento o fisuración en las juntas
            • Permite mayor control en obras
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
                <td class="table-text">P.H</td>
                <td class="table-text">9.0 ±0.5 mínimo</td>
              </tr>
              <tr>
                <td class="table-text">Consistencia</td>
                <td class="table-text">Cremosa</td>
              </tr>
              <tr>
                <td class="table-text">Color</td>
                <td class="table-text">Blanco</td>
              </tr>
              <tr>
                <td class="table-text">Estabilidad</td>
                <td class="table-text">De 4-6 meses bajo techo</td>
              </tr>
              <tr>
                <td class="table-text">Temperatura de aplicación</td>
                <td class="table-text">De 5° a 35°C</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/masillas-panelmax100.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
      <iframe id="catalogo" style="display:none;" width="1100px" height="700px" src="http://online.fliphtml5.com/xpfn/afoo/#p=1" frameborder="0" allowfullscreen allowtransparency></iframe>

  </body>
</html>