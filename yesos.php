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
                  <li><a href="masillas">Masillas</a></li>
                  <li class="active"><a href="yesos">Yesos</a></li>
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
    <div class="bg-blue" style="padding-bottom:20px;">
      <div class="container">
        <div class="title-productos">LÍNEA DE YESOS</div>
        <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXIYESO ESCAYOLA</div>
          <a href="#maxiyeso-escayola" class="fancyapps button-pegatrio">
          <div class="empaque-block text-center">
            <img src="img/catalogo/empaques/yesos-maxiyesoescayola.png" class="pegatrio-margin" width="50%">
            <div class="title-pegatrio"></div>
            <div class="boxing-2">
              <div class="col-md-12 maxiyeso-escayola-linea text-center">FICHA TÉCNICA</div>
            </div>
          </div>
          </a> 
        </div> 
        <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MAXIYESO SUPERESCAYOLA</div>
          <a href="#maxiyeso-superescayola" class="fancyapps button-pegatrio">
          <div class="empaque-block text-center">
            <img src="img/catalogo/empaques/yesos-maxiyesosuperescayola.png" class="pegatrio-margin" width="50%">
            <div class="title-pegatrio"></div>
            <div class="boxing-2">
              <div class="col-md-12 maxiyeso-superescayola-linea text-center">FICHA TÉCNICA</div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">MEGAYESO</div>
          <a href="#megayeso" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/yesos-megayeso.png" class="pegatrio-margin" width="50%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 megayeso-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>
        </div>
      <div class="col-md-3 col-sm-6 col-xs-12 column-line">
          <div class="column-title">ECOYESO</div>
          <a href="#ecoyeso" class="fancyapps button-pegatrio">
            <div class="empaque-block text-center">
              <img src="img/catalogo/empaques/yesos-ecoyeso.png" class="pegatrio-margin" width="50%">
              <div class="title-boquillatrio"></div>
              <div class="boxing">
                <div class="col-md-12 ecoyeso-linea text-center">FICHA TÉCNICA</div>
              </div>
            </div>
          </a>
        </div>
        <div class="clear"></div>
      </div>
      <div class="container">
        <div class="title-recomendaciones">RECOMENDACIONES Y USOS PARA YESOS</div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="text-recomendaciones">
          Los productos que tienen como base el yeso, no son adecuados para ubicarse en exteriores, como tampoco para estar sujetos a la acción de los elementos atmosféricos o sometidos a humedad excesiva.
          Cuando el saco de yeso se almacena en ambiente seco (bajo estibas y no directamente en el suelo), este producto tendrá una vida media de uso seis meses desde la fecha de fabricación que se indica en cada saco.
          La absorción de humedad puede producir cambios en las propiedades físicas, tales como reducción en la resistencia de los yesos o prolongación del tiempo de fraguado. Para salvaguardar la calidad del producto durante su empleo, los sacos abiertos o parcialmente usados deben ser doblados y cerrados cuidadosamente.<br><br>

          Para la preparación de la mezcla se recomienda:<br>
          1) Pese el yeso y el agua para cada mezcla.  La proporción agua – yeso es un factor crítico.<br>
          2) Use agua potable a temperaturas entre 21ºC y 38ºC.  Las variaciones en la temperatura de la mezcla (agua y yeso) pueden producir cambios en el tiempo de fraguado.<br>
          3) Es importante mantener el agua y el yeso en un ambiente con temperatura dentro del rango mencionado antes de usarlo.  A más alta temperatura del agua, más corto será el tiempo de fraguado;<br>
          4) Vacíe o espolvoree despacio y suavemente el yeso en el agua, sin que queden montones o grumos.  Permítale remojarse o humedecerse por un minuto.  El yeso debe estar totalmente esparcido en el agua antes de mezclarlo.  Es importante mantener la proporción de agua y yeso; si la masa queda clara es decir, que tiene más agua de la necesaria, el yeso fraguara con lentitud y no tendrá resistencia; si tiene poca agua endurecerá pronto y será difícil su manejo.<br><br>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="text-recomendaciones">
          NOTA: Las proporciones citadas de yeso y agua son las utilizadas en los métodos estándar de prueba de laboratorio, y no son necesariamente las que se utilizan en la práctica. La fluidez precisa de empleo se ajustará según las necesidades de cada aplicación individual.
          Para el mezclado del yeso y el agua, se recomienda:<br>
          1) Mezclar manualmente, mecánicamente o con equipo de mezclado continuo.<br>
          2) El mezclado manual generalmente es aceptable para cuando se preparan cantidades menores a 25 kg de yeso.<br>
          3) Tiempos largos de mezcla, aumentan la resistencia del vaciado y acortan el tiempo de fraguado.<br>
          4) El amasado manual se puede realizar con las propias manos protegidas con guantes, con la paleta o con otro utensilio, removiéndolo enérgicamente hasta que la pasta tome un aspecto homogéneo y sin grumos;<br>
          5) Antes de un nuevo amasado hay que eliminar del recipiente, así como de todas las herramientas, los restos de yeso endurecido sobrantes del proceso anterior, puesto que el yeso ya fraguado actúa como acelerante sobre el fraguado de la nueva pasta que se va a preparar.<br>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php';?>
    <div id="proteccion" style="display:none;">
      <iframe src="pdf/ProteccionDeDatosPersonales.pdf" width="1024" height="600"></iframe>
    </div>
    <!-- Dialogos de Productos -->
    
    
    <!-- Cierra un dialogo Fancybox -->
    <div id="maxiyeso-escayola" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxiyeso-escayola.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            MAXIYESO ESCAYOLA, es un producto constituido por Sulfato de Calcio Semihidrato de excelente pureza, obtenido a partir de minerales de origen natural, los cuales son sometidos a procesos especializados de calcinación y molienda fina. El producto resultante una vez mezclado con agua en determinadas proporciones es capaz de fraguar y obtener elementos y superficies de excelentes resistencias de color blanco.              
          </p>
          <p><b>USOS</b>
            <br>
            - Para la fabricación de elementos prefabricados que requieran de un fraguado lento que permita un mayor tiempo de utilización en estado liquido.<br>
            - Para fabricación de estuco de excelente blancura. Mezcla de Yeso, Caolín y Cemento.<br>
            *Proporciones recomendadas: 3 CAOLIN : 1 YESO : 1/4 CEMENTO (PARTES)
          </p>
          <p><b>PRESENTACIÓN Y EMPAQUE</b>
            <br>
             Bolsa de polipropileno plastificada en presentaciones de 25 Kg y 12.5 Kg<br>
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños. Tenga en cuenta todas las precauciones normales usar (guantes, gafas y respiradores para polvos en la manipulación) en caso de contacto con los ojos lave con abundante agua.
          </p>
          
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>VENTAJAS</b>
            <br>
            • Fraguado más lento, que permite la elaboración de piezas y molduras cuyo proceso de producción requiere de un mayor tiempo de maniobra en su aplicación.<br>
            • Para la fabricación de piezas prefabricadas con un mayor número de moldes que requieren de mezclas con un fraguado más lento en los baldes de mezclado.<br>
            • Máximo rendimiento por bolsa, mediante la fabricación de un mayor número de elementos prefabricados por bolsa al presentar una mayor finura.<br>
            • Permite lograr niveles máximos de resistencia y durabilidad en la fabricación de molduras y elementos prefabricados por la pureza de sus materias primas.<br>
            • Mayor blancura y dureza al rayado en la fabricación de estucos.
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
                <td class="table-text">Relación Agua/Yeso</td>
                <td class="table-text">0.8</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Inicial</td>
                <td class="table-text">6 - 12 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Final</td>
                <td class="table-text">Menos a 20 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Humedad Combinada (%)</td>
                <td class="table-text">5.0 - 5.5</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia Mecánica a Flexión (psi)</td>
                <td class="table-text">680 - 720</td>
              </tr>
              <tr>
                <td class="table-text">Granulometría en malla N°200 (% Sulfato de calcio)</td>
                <td class="table-text">1.0 - 2.5</td>
              </tr>
              <tr>
                <td class="table-text">Pureza (% Sulfato de calcio)</td>
                <td class="table-text">96</td>
              </tr>
              <tr>
                <td class="table-text">Densidad aparente polvo (gr/ml)</td>
                <td class="table-text">0.59 - 0.63</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/yesos-maxiyesoescayola.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    
    <div id="maxiyeso-superescayola" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-maxiyeso-superescayola.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            MAXIYESO SUPERESCAYOLA, es un producto constituido por Sulfato de Calcio Semihidrato de excelente pureza, obtenido a partir de minerales de origen natural, los cuales son sometidos a procesos especializados de calcinación y molienda fina. El producto resultante una vez mezclado con agua en determinadas proporciones es capaz de fraguar y obtener elementos y superficies de excelentes resistencias de color blanco.
          </p>
          <p><b>USOS</b>
            <br>
            - Para fabricar molduras, cielos rasos, cornisas, rosetas, frisos y  mensulas.<br>
                - Para fabricar figuras y muñecos decorativos.<br>
                - Para fabricación de estuco de alta calidad y resistencia.<br>
                - En general para la fabricación de elementos que requieran de un tiempo de fraguado rápido para incrementar la productividad del operario.
          </p>
          <p><b>PRESENTACIÓN Y EMPAQUE</b>
            <br>
            Bolsa de polipropileno plastificada en presentación de 25 Kg.<br>
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños. Tenga en cuenta todas las precauciones normales usar (guantes, gafas y respiradores para polvos en la manipulación) en caso de contacto con los ojos lave con abundante agua.
          </p>
          
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>VENTAJAS</b>
            <br>
            • Máximo rendimiento por bolsa, mediante la fabricación de un mayor número de elementos prefabricados por bolsa al presentar una mayor finura.<br>
            • Permite lograr niveles máximos de resistencia y durabilidad en la fabricación de molduras y elementos prefabricados por la pureza de sus materias primas.<br>
            • Mayor blancura y dureza al rayado en la fabricación de estucos.<br>
            • Por su óptimo fraguado permite la elaboración de un mayor número de piezas en cada molde por turno, aumentando la productividad del operario y de los moldes.
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
                <td class="table-text">Relación Agua/Yeso</td>
                <td class="table-text">0.8</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Inicial</td>
                <td class="table-text">4.0 - 6.0 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Final</td>
                <td class="table-text">Menos a 20 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Humedad Combinada (%)</td>
                <td class="table-text">5.5 - 6.0</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia Mecánica a Flexión (psi)</td>
                <td class="table-text">680 - 720</td>
              </tr>
              <tr>
                <td class="table-text">Granulometría en malla N°200 (% Sulfato de calcio)</td>
                <td class="table-text">1.0 - 2.5</td>
              </tr>
              <tr>
                <td class="table-text">Pureza (% Sulfato de calcio)</td>
                <td class="table-text">96</td>
              </tr>
              <tr>
                <td class="table-text">Densidad aparente polvo (gr/ml)</td>
                <td class="table-text">0.58 - 0.62</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/yesos-maxiyesosuperescayola.png" class="display-empaque">
        </div>
      </div>
    </div>
    <!-- Cierra un dialogo Fancybox -->
    
    <div id="megayeso" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-megayeso.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            YESO “MEGAYESO” SUPERESCAYOLA ESPECIAL, es un producto ideal para la fabricación de toda clase de prefabricados, posee una blancura incomparable y un nivel de resistencia optimo, que asegura la calidad final de sus trabajos. Este producto se caracteriza por tener un Tiempo de fraguado Extra-rápido y una Alta Finura.
          </p>
          <p><b>USOS</b>
            <br>
            Recomendado en la elaboración de toda clase de prefabricados, que requieran un tiempo de fraguado muy rápido, con excelente blancura, resistencia y dureza.<br>
          </p>
          <p><b>PRESENTACIÓN Y EMPAQUE</b>
            <br>
            Bolsa de polipropileno plastificada en presentación de 25 Kg.<br>
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños. Tenga en cuenta todas las precauciones normales usar (guantes, gafas y respiradores para polvos en la manipulación) en caso de contacto con los ojos lave con abundante agua.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>VENTAJAS</b>
            <br>
            • Yeso Tipo Español<br>
            • Fraguado Extra Rápido<br>
            • Máxima Blancura<br>
            • Mayor Densidad y Dureza<br>
            • Máxima Resistencia<br>
            • YESO “MEGAYESO” SUPERESCAYOLA ESPECIAL permite:<br>
            1. Mejorar los indicadores de producción: MAYOR NUMERO DE PREFABRICADOS POR UNIDAD DE TIEMPO.<br>
            2. Un nivel de resistencia alto que garantiza la durabilidad y calidad del trabajo en el tiempo.
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
                <td class="table-text">Relación Agua/Yeso</td>
                <td class="table-text">0.8</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Inicial</td>
                <td class="table-text">4 - 5.5 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Final</td>
                <td class="table-text">Menos a 20 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Humedad Combinada (%)</td>
                <td class="table-text">5.5 - 6.0</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia Mecánica a Flexión (psi)</td>
                <td class="table-text">680 - 750</td>
              </tr>
              <tr>
                <td class="table-text">Granulometría en malla N°200 (% Sulfato de calcio)</td>
                <td class="table-text">1.5 - 2.0</td>
              </tr>
              <tr>
                <td class="table-text">Pureza (% Sulfato de calcio)</td>
                <td class="table-text">96</td>
              </tr>
              <tr>
                <td class="table-text">Densidad aparente polvo (gr/ml)</td>
                <td class="table-text">0.59 - 0.62</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/yesos-megayeso.png" class="display-empaque">
        </div>
      </div>
    </div>
    
    <!-- Cierra un dialogo Fancybox -->
    
    <div id="ecoyeso" class="graygradient col-md-12 no-horizontal-padding" style="display:none;">
      <div class="">
        <img src="img/productos/cuadros/header-ecoyeso.png" width="100%">
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 1 -->
          <!-- Informacion del Producto -->
          <p><b>DESCRIPCIÓN</b>
            <br>
            YESO ECOYESO, es un producto constituido por Sulfato de Calcio Semihidrato, obtenido a partir de minerales de origen natural, los cuales son sometidos a procesos especializados de calcinación y molienda fina. El producto resultante una vez mezclado con agua, caolín y cemento en determinadas proporciones permite obtener estucos blancos y económicos con buenas resistencias al rayado.
          </p>
          <p><b>USOS</b>
            <br>
            Para fabricación de estucos económicos, Mezcla de Yeso, Caolín y Cemento.<br>Proporciones recomendadas: 3 CAOLIN: 1 YESO: 1/4 CEMENTO. (PARTES)
          </p>
          <p><b>PRESENTACIÓN</b>
            <br>
            Bolsa de polipopileno plastificada en presentación de 25 Kg.
          </p>
          <p><b>NORMAS DE SEGURIDAD</b>
            <br>
            Manténgase fuera del alcance de los niños. Tenga en cuenta todas las precauciones normales usar (guantes, gafas y respiradores para polvos en la manipulación) en caso de contacto con los ojos lave con abundante agua.
          </p>
        </div>
        <div class="col-md-4 regularfont text-justify">
          <!-- Info 2 -->
          <p><b>VENTAJAS</b>
            <br>
            • Ofrece una excelente relación precio – rendimiento, que proporciona menor costo por metro cuadrado de estucado, dejando un acabado blanco, liso y sin grietas.<br>
              • Los estucos elaborados con Ecoyeso permiten cubrir una mayor cantidad de área gracias a su mayor finura del producto.<br>
              • La blancura del producto permite una mayor economía en la aplicación posterior de la pintura al obtener estucos más claros.
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
                <td class="table-text">Relación Agua/Yeso</td>
                <td class="table-text">0.8</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Inicial</td>
                <td class="table-text">5 - 15 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Tiempo de Fraguado Final</td>
                <td class="table-text">Menos a 30 minutos</td>
              </tr>
              <tr>
                <td class="table-text">Humedad Combinada (%)</td>
                <td class="table-text">4.5 - 5</td>
              </tr>
              <tr>
                <td class="table-text">Resistencia Mecánica a Flexión (psi)</td>
                <td class="table-text">400 - 450</td>
              </tr>
              <tr>
                <td class="table-text">Granulometría en malla N°200 (% Sulfato de calcio)</td>
                <td class="table-text">1.5 - 2.5</td>
              </tr>
              <tr>
                <td class="table-text">Pureza (% Sulfato de calcio)</td>
                <td class="table-text">88</td>
              </tr>
              <tr>
                <td class="table-text">Densidad aparente polvo (gr/ml)</td>
                <td class="table-text">0.57 - 0.62</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-4 text-center">
          <!-- Empaque -->
          <img src="img/catalogo/empaques/yesos-ecoyeso.png" class="display-empaque">
        </div>
      </div>
    </div>
      <iframe id="catalogo" style="display:none;" width="1100px" height="700px" src="http://online.fliphtml5.com/xpfn/afoo/#p=1" frameborder="0" allowfullscreen allowtransparency></iframe>

  </body>
</html>