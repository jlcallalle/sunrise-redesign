// Detecciones de ie 9 e ie8 (si no se usaran eliminar)

//conditionizr.add('ie9', function () {
//    return (Function('/*@cc_on return (/^9/.test(@_jscript_version) && /MSIE 9\.0(?!.*IEMobile)/i.test(navigator.userAgent)); @*/')());
//});

// Que hacer cuando sean positivas las detecciones (eliminar si no se usaran)

/*conditionizr.config({
    assets: 'js/',
    tests: {
        'ie8': ['class']
    }
});*/

//conditionizr.polyfill('js/min/placeholders.min.js', ['ie9','ie8']); (ejemplo de polyfill)

// Main

var MyApp;

var MyApp = {

    seccion : {
        modulo : function() {
        }
    },
    navegacionPrincipal : {
        desplegar : function() {

            $('main').click(function(e) {
                $('.boton-menu-principal').removeClass('activado');
            });

            $('footer').click(function(e) {
                $('.boton-menu-principal').removeClass('activado');
            });

            $('.cerrar-sesion').click(function(e) {
                $('.perfil').removeClass('activado');
            });

            $('.boton-menu-principal').click(function(event) {
                //alert('hola');
                    event.stopPropagation();
                    event.preventDefault();
                    if (!$(this).hasClass('activado')) {
                        $(this).addClass('activado');
                    } else {
                        $(this).removeClass('activado');
                    };
                    $('.perfil').removeClass('activado');
            });

        }
    }

}

$(document).ready(function(){

    if($('.clase').length){
        MyApp.seccion.modulo();
    }

    MyApp.navegacionPrincipal.desplegar();

    $('.flexslider').flexslider({
    });

    $("#contact_form").validate();

});


