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

$(document).ready(function(){

  //Start llamada a la funcion de busquedad del blog
  $(document).on('click','.pagination a',function(e){
      e.preventDefault();
      //console.log($(this));
      searchConsejosNoticias($(this).attr('href'));
  })
});

function searchConsejosNoticias(target){
    var templateurl = $('#template_url').val();
    var idlista = $('#idlista').val();

    var data = {                 
        'target' : target,
        'id' : idlista
        };

    $("#idConsejosNoticias").html('');
    var accion="searchConsejosNoticiasResult"; 
       $.ajax({
          type: "POST",
          url: $("#ajax_url").val(), 
          data: {action:accion,data:data},
          beforeSend: function() {
            var section='';
                section+='<section class="contenedor-prev">'
                section+='<tr>'
                section+='<td colspan="3" style="width:770px;">'
                section+='<div id="cargandoajax" style="text-align:center;">'
                section+='<p style="padding:0px"><img src="'+templateurl+'/images/cargador.gif" alt="loading"/></p>'
                section+='<p style="padding:0px">CARGANDO...</p>'
                section+='</div>'
                section+='</td>'
                section+='</tr>'
                section+='</section> ';
                $("#idConsejosNoticias").html('');
                $("#idConsejosNoticias").html(section);                    
                },
          error: function(jqXHR, textStatus, errorThrown ) {
           alert(jqXHR+"--"+textStatus+"--"+errorThrown);
                },
          success: function(resp) {
               $("#idConsejosNoticias").html('');
               $("#idConsejosNoticias").html(resp);
       }
    });
}