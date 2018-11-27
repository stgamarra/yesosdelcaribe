$( document ).ready(function() {
    console.log( "jQuery is in the house, bitches!" );
    
    //Carga imagenes bonitas
    
    $('img').load(function() {
        $(this).fadeIn('slow');
   });


    
    
    $(".appear").css('display', 'none')
                         .fadeIn(3000, 'easeOutQuad');
    
    $(".fade-in").css('display', 'none')
                          .fadeIn(1500, 'easeOutQuad');
    
    $(".title-fade-in").css('display', 'none')
                       .slideDown(800, 'easeOutQuad');
    
    var intro = $("#intro");
    var tl_Intro = new TimelineMax();
    tl_Intro.from(intro, 1, {top:"600px", opacity:"0", delay:0});
    tl_Intro.restart();

    //.append() = dialog box
    //Galeria
    $(".botongaleria").mouseover(function() {
        var botongaleria = $(this);
        cambiarImagen(botongaleria);
        iluminarBoton(botongaleria);
    });
    
    
    $(".botongaleria").click(function() {
        var botongaleria = $(this);
        cambiarImagen(botongaleria);
        iluminarBoton(botongaleria);
    });
    
    $("#logoheader").mouseover(function() {
        $(this).removeClass('logoglowout').addClass('logoglow');
    });
    
    $("#logoheader").mouseout(function() {
        $(this).removeClass('logoglow').addClass('logoglowout');
    });

    
    $(function() {
$('.fadein img:gt(0)').hide();

setInterval(function () {
    $('.fadein :first-child').fadeOut()
                             .next('img')
                             .fadeIn()
                             .end()
                             .appendTo('.fadein');
}, 4000); // 4 seconds
});
    
    
    
    //Termina Galeria
});

var id_contenedorempaque = "#contenedorempaque";

function cambiarImagen(botongaleria){
    var ruta_imagen = botongaleria.data('ruta');
    $(id_contenedorempaque).fadeOut(300, 
        function(){
        $(id_contenedorempaque).html('<img src="'+ruta_imagen+'">').fadeIn(400);
    });
}

function iluminarBoton(botongaleria){
    $('.botongaleria.botonactivo').removeClass('botonactivo');
    botongaleria.addClass('botonactivo');
}