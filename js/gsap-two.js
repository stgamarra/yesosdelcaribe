$( document ).ready(function() {
    console.log( "GSAP JS" );

    // class: .section-empaque
    var empaque = $(".section-empaque"),
        title = $(".section-title"),
        text = $(".section-text"),
        tl = new TimelineLite();

    var pegatrio_title = $(".pegatrio-title"),
        pegatrio_line = $(".pegatrio-line");
        pegatrio_sprite = $(".pegatrio-amarillo-empaque");
        pegatrio_naranja_sprite = $(".pegatrio-naranja-empaque");
        //
    
    
  
  //Timelines
  
    
    var tl_pegatrioNaranjaEmpaque = new TimelineMax({repeat:-1, repeatDelay:6, yoyo:false});
    tl_pegatrioNaranjaEmpaque.to(pegatrio_naranja_sprite, 0.5, {right:"0px", ease:Strong.easeOut, delay:0})
                             .to(pegatrio_naranja_sprite, 0.5, {right:"285px", ease:Strong.easeOut, delay:2});
  
    var tl_pegatrioAmarilloEmpaque = new TimelineMax({repeat:-1, repeatDelay:6, yoyo:false});
    tl_pegatrioAmarilloEmpaque.to(pegatrio_sprite, 0, {right:"571px", ease:Strong.easeOut, delay:0})
                             .from(pegatrio_sprite, 0.5, {right:"858px", ease:Strong.easeOut, delay:1})
                              .to(pegatrio_sprite, 0.5, {right:"571px", ease:Strong.easeOut, delay:6});
});
