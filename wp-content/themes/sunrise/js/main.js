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
	            section+='<section class="vPadding-20 vMarginTop-35 vMarginBottom-35">'
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