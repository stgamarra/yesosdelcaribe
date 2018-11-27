$( document ).ready(function() {
    console.log( "GSAP JS" );

    // class: .section-empaque
    var empaque = $(".section-empaque"),
        title = $(".section-title"),
        text = $(".section-text"),
        tl = new TimelineLite();

    var pegatrio_title = $(".pegatrio-title"),
        pegatrio_line = $(".pegatrio-line");
        pegatrio_sprite = $(".pegatrio-empaque");
        //
        estucotrio_sprite = $(".estucotrio-empaque");
        //
        morteros_title = $(".mortero-title"),
        morteros_sprite = $(".morteros-empaque");
        //
        panelmax_title = $(".panelmax-title"),
        panelmax_sprite = $(".panelmax-empaque");
        //
        maxiyeso_title = $(".maxiyeso-title"),
        maxiyeso_sprite = $ (".maxiyeso-empaque");
    
    
  
  //Timelines
  
    tl.from(empaque, 0.8, {left:"500px", opacity:0})
      .from(title, 0.4, {bottom:"100px", opacity:0})
      .from(text, 0.6, {top:"100px", opacity:0});
    
    var tl_pegatrioNaranjaEmpaque = new TimelineMax({repeat:-1, repeatDelay:6, yoyo:false});
    tl_pegatrioNaranjaEmpaque.to(pegatrio_sprite, 0.5, {right:"0px", ease:Strong.easeOut, delay:0})
                             .to(pegatrio_sprite, 0.5, {right:"285px", ease:Strong.easeOut, delay:2});
  
    var tl_pegatrioAmarilloEmpaque = new TimelineMax({repeat:-1, repeatDelay:6, yoyo:false});
    tl_pegatrioAmarilloEmpaque.to(pegatrio_sprite, 0.5, {right:"571px", ease:Strong.easeOut, delay:0})
                             .to(pegatrio_sprite, 0.5, {right:"858px", ease:Strong.easeOut, delay:2});
  
    var tl_pegatrioMoradoEmpaque = new TimelineMax({repeat:0, repeatDelay:0, yoyo:false});
    tl_pegatrioMoradoEmpaque.to(pegatrio_sprite, 0.5, {right:"1148px", ease:Strong.easeOut, delay:0});
  
    tl_pegatrioAmarilloEmpaque.stop();
    tl_pegatrioMoradoEmpaque.stop();
  
    tl_pegatrioMoradoLinea = new TimelineMax();
    tl_pegatrioMoradoLinea.to(pegatrio_title, 0.5, {right:"526px", ease:Strong.easeOut})
                       .to(pegatrio_line, 0.5, {backgroundColor:"#ED008C"});
    
    tl_pegatrioAmarilloLinea = new TimelineMax();
    tl_pegatrioAmarilloLinea.to(pegatrio_title, 0.5, {right:"263px", ease:Strong.easeOut})
                       .to(pegatrio_line, 0.5, {backgroundColor:"#F7CF00"});
  
    tl_pegatrioNaranjaLinea = new TimelineMax();
    tl_pegatrioNaranjaLinea.to(pegatrio_title, 0.5, {right:"0px", ease:Strong.easeOut})
                       .to(pegatrio_line, 0.5, {backgroundColor:"#DF471C"});
  
    tl_pegatrioMoradoLinea.stop();
    tl_pegatrioAmarilloLinea.stop();
    tl_pegatrioNaranjaLinea.stop();
  
    var tl_estucotrioRojoEmpaque = new TimelineMax();
    tl_estucotrioRojoEmpaque.to(estucotrio_sprite, 0.5, {right:"0px", ease:Strong.easeOut, delay:0});
  
    var tl_estucotrioAmarilloEmpaque = new TimelineMax();
    tl_estucotrioAmarilloEmpaque.to(estucotrio_sprite, 0.5, {right:"295px", ease:Strong.easeOut, delay:0});
  
    var tl_estucotrioVerdeEmpaque = new TimelineMax();
    tl_estucotrioVerdeEmpaque.to(estucotrio_sprite, 0.5, {right:"580px", ease:Strong.easeOut, delay:0});
  
    tl_estucotrioRojoEmpaque.stop();
    tl_estucotrioAmarilloEmpaque.stop();
    tl_estucotrioVerdeEmpaque.stop();
  
    var tl_morterosVerdeEmpaque = new TimelineMax();
    tl_morterosVerdeEmpaque.to(morteros_sprite, 0.5, {right:"0px", ease:Strong.easeOut, delay:0})
                           .to(morteros_title, 0.5, {right:"0px", ease:Strong.easeOut, delay:0});
  
    var tl_morterosRojoEmpaque = new TimelineMax();
    tl_morterosRojoEmpaque.to(morteros_sprite, 0.5, {right:"333px", ease:Strong.easeOut, delay:0})
                          .to(morteros_title, 0.5, {right:"270px", ease:Strong.easeOut, delay:0});
  
    tl_morterosRojoEmpaque.stop();
    tl_morterosVerdeEmpaque.stop();
  
    var tl_panelmaxVerdeEmpaque = new TimelineMax();
    tl_panelmaxVerdeEmpaque.to(panelmax_sprite, 0.5, {right:"0px", ease:Strong.easeOut, delay:0})
                           .to(panelmax_title, 0.5, {right:"0px", ease:Strong.easeOut, delay:0});
  
    var tl_panelmaxNaranjaEmpaque = new TimelineMax();
    tl_panelmaxNaranjaEmpaque.to(panelmax_sprite, 0.5, {right:"333px", ease:Strong.easeOut, delay:0})
                             .to(panelmax_title, 0.5, {right:"241px", ease:Strong.easeOut, delay:0});
  
    tl_panelmaxNaranjaEmpaque.stop();
    tl_panelmaxVerdeEmpaque.stop();
  
    var tl_maxiyesoAzulEmpaque = new TimelineMax();
    tl_maxiyesoAzulEmpaque.to(maxiyeso_sprite, 0.5, {right:"0px", ease:Strong.easeOut, delay:0})
                           .to(maxiyeso_title, 0.5, {right:"0px", ease:Strong.easeOut, delay:0});
  
    var tl_maxiyesoRojoEmpaque = new TimelineMax();
    tl_maxiyesoRojoEmpaque.to(maxiyeso_sprite, 0.5, {right:"355px", ease:Strong.easeOut, delay:0})
                           .to(maxiyeso_title, 0.5, {right:"196px", ease:Strong.easeOut, delay:0});

    tl_maxiyesoRojoEmpaque.stop();
    tl_maxiyesoAzulEmpaque.stop();


  // Events
  
  $(".top-navbar-button, .fp-controlArrow").on( "click", function() {
    tl.restart();
  });
  
  $(".pegatrio-ceramico-circle").on("click", function() {
    tl_pegatrioMoradoEmpaque.stop();
    tl_pegatrioAmarilloEmpaque.stop();
    tl_pegatrioNaranjaEmpaque.restart();
    
    tl_pegatrioNaranjaLinea.restart();
    tl_pegatrioMoradoLinea.stop();
    tl_pegatrioAmarilloLinea.stop();
    
    $("#pegatrio-class").text("CERÁMICO");
    $("#pegatrio-info").attr("href", "#pegatrio-naranja");
  });
  
  $(".pegatrio-porcelanato-circle").on("click", function() {
    tl_pegatrioNaranjaEmpaque.stop();
    tl_pegatrioMoradoEmpaque.stop();
    tl_pegatrioAmarilloEmpaque.restart();

    tl_pegatrioAmarilloLinea.restart();
    tl_pegatrioMoradoLinea.stop();
    tl_pegatrioNaranjaLinea.stop();
    
    $("#pegatrio-class").text("PORCELANATO");
    $("#pegatrio-info").attr("href", "#pegatrio-amarillo");
  });
  
  $(".pegatrio-marmol-circle").on("click", function() {
    tl_pegatrioNaranjaEmpaque.stop();
    tl_pegatrioAmarilloEmpaque.stop();
    tl_pegatrioMoradoEmpaque.restart();
    
    tl_pegatrioMoradoLinea.restart();
    tl_pegatrioAmarilloLinea.stop();
    tl_pegatrioNaranjaLinea.stop();
    
    $("#pegatrio-class").text("MÁRMOL");
    $("#pegatrio-info").attr("href", "#pegatrio-magenta");
  });
  
  $(".estucotrio-rojo-circle").on("click", function() {
    tl_estucotrioRojoEmpaque.restart();
    
    $("#estucotrio-class").text("BLANCO");
    $("#estucotrio-text").text("Estuco a base de yeso fino de color Blanco, que al agregarle agua se obtiene una pasta manejable y lista para ser aplicada. Diseñado para el recubrimiento final en interiores y lograr alta resistencia y excelente acabado.");
    $("#estucotrio-info").attr("href", "#estucotrio-rojo");
  });
  
   $(".estucotrio-amarillo-circle").on("click", function() {
    tl_estucotrioAmarilloEmpaque.restart();
    
    $("#estucotrio-class").text("EXTERIORES");
    $("#estucotrio-text").text("ESTUCO TRIO EXTERIOR, es un estuco listo que se presenta como polvo fino modificado con polímeros que le confieren gran plasticidad y excelente dureza. Listo para enlucir paredes de gran plasticidad y alta resistencia.");
    $("#estucotrio-info").attr("href", "#estucotrio-amarillo");
  });
  
   $(".estucotrio-verde-circle").on("click", function() {
    tl_estucotrioVerdeEmpaque.restart();
    
    $("#estucotrio-class").text("CONSTRUCTOR");
    $("#estucotrio-text").text("Estuco a base de yeso fino de color gris, que al agregarle agua se obtiene una pasta manejable y lista para ser aplicada. Diseñado para el recubrimiento final en interiores y lograr alta resistencia y excelente acabado.");
    $("#estucotrio-info").attr("href", "#estucotrio-verde");
  });
  
  $(".morteros-verde-circle").on("click", function() {
    tl_morterosVerdeEmpaque.restart();
    
    $("#morteros-class").text("MORTERO LISTO PARA PAÑETE");
    $("#morteros-text").text("Es un mortero listo para pañete que está compuesto por Sulfato de calcio, cargas, áridos y aditivos que le transfieren una mayor plasticidad, manejabilidad y tiempo extendido de fraguado, facilitando su aplicación . Por sus altas resistencias y propiedades mecánicas reemplaza al mortero tradicional de cemento.");
    $("#morteros-info").attr("href", "#maxipanete");
  });
  
  $(".morteros-rojo-circle").on("click", function() {
    tl_morterosRojoEmpaque.restart();
    
    $("#morteros-class").text("YESO ESPECIAL PARA ACABADO FINAL");
    $("#morteros-text").text("Es una mezcla de yeso de granulometría fina, ideal para pulir y dar acabado a diferentes superficies en interiores. Posee una formulación con ingredientes especiales que le confieren excelentes propiedades de blancura, adherencia, cubrimiento, cremosidad, manejabilidad y de fraguado lento.");
    $("#morteros-info").attr("href", "#maxifino");
  });
  
  $(".panelmax-verde-circle").on("click", function() {
    tl_panelmaxVerdeEmpaque.restart();
    
    $("#panelmax-text").text("Masilla lista para su uso, para las juntas de los paneles de yeso cartón, cabezas de tornillos, y cualquier detalle de instalación. Se pueden estucar los paneles con esta masilla. Altamente lijable y de color blanco.");
    $("#panelmax-info").attr("href", "#panelmax90");
  });
  
  $(".panelmax-naranja-circle").on("click", function() {
    tl_panelmaxNaranjaEmpaque.restart();
    
    $("#panelmax-text").text("Masilla en polvo para las juntas de los paneles de yeso cartón, cabezas de tornillos, y cualquier detalle de instalación. Se puede usar para la técnica de revoque seco, como pegante para fijar el panel de yeso cartón al muro. Solo agregue agua.");
    $("#panelmax-info").attr("href", "#panelmax100");
  });
  
  $(".maxiyeso-azul-circle").on("click", function() {
    tl_maxiyesoAzulEmpaque.restart();
    
    $("#maxiyeso-class").text("MAXIYESO ESCAYOLA AZUL");
    $("#maxiyeso-text").text("Para la fabricación de elementos prefabricados que requieran de un fraguado lento que permita un mayor tiempo de utilización en estado líquido. Para fabricación de estucos de excelente blancura. Mezcla de Yeso, Caolín y Cemento.");
    $("#maxiyeso-info").attr("href", "#maxiyeso-escayola");
  });
  
  $(".maxiyeso-rojo-circle").on("click", function() {
    tl_maxiyesoRojoEmpaque.restart();
    
    $("#maxiyeso-class").text("MAXIYESO SUPERESCAYOLA ROJO");
    $("#maxiyeso-text").text("Yeso para fabricar molduras, cielos rasos, cornisas, rosetas, frisos. Para fabricar figuras y muñecos decorativos. Para fabricación de estuco de alta calidad y resistencia. En general para la fabricación de elementos que requieran de un tiempo de fraguado rápido para incrementar la productividad del operario.");
    $("#maxiyeso-info").attr("href", "#maxiyeso-superescayola");
  });
  
});
