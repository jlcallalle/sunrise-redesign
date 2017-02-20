<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

		
			<footer class="footer container clearfix" >
				<div class="clearfix footer_inner">
					<ul class="lista_footer list_reset clearfix">
						<li><a href="<?php echo get_option('home'); ?>/quienes-somos/">Quiénes Somos</a></li>
						<li><a href="<?php echo get_option('home'); ?>/neumologia-pediatrica/">Neumología Pediátrica</a></li>
						<li><a href="<?php echo get_option('home'); ?>/especialidades/">Especialidades</a></li>
						<li><a href="<?php echo get_option('home'); ?>/infraestructuras/">Infraestructura</a></li>
						<li><a href="<?php echo get_option('home'); ?>/consejos-y-noticias/">Noticias</a></li>
						<li><a href="<?php echo get_option('home'); ?>/citas-en-linea/">Citas en Línea</a></li>
						<li><a href="<?php echo get_option('home'); ?>/contactenos/">Contáctenos</a></li>
					</ul>
					<div class="derechos">
						<p>SunRise© <?php echo date("Y"); ?>  </p>
					</div>
				</div>
				<div class="tren fadeInDown animated"></div>

			</footer>

			<div class="fixed-fono">
		        <div class="fono"><span class="fono-casa"><i class="icon-phone4"></i>  <a href="tel:012751124">2751124</a></span><span class="fono-cel">
                           <i class="icon-phone"></i> <a href="tel:945395469">945395469</a>  </span><span class="fono-cita">
                           <i class="icon-whatsapp"></i> <a href="tel:995777555">995777555</a>  </span></div>
		    </div>

			<!-- </div> -->
</div><!--End wrapper -->



<!-- Add fancyBox 2 main JS and CSS files -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/fancybox2/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/fancybox2/helpers/jquery.fancybox-media.js?v=1.0.6"></script>


<script type="text/javascript">
	jQuery(document).ready(function() {

		jQuery(".fancybox").fancybox({
	    padding: 0 ,// remove white border
	    beforeShow: function(){
		  jQuery(".fancybox-skin").css("backgroundColor","transparent");
		 }
	});

});
</script>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/screen.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php  bloginfo('template_directory'); ?>/js/flexslider/jquery.flexslider-min.js"></script> 

<script type="text/javascript" src="<?php  bloginfo('template_directory'); ?>/js/min/recursos.min.js"></script> 

<input type="hidden" name="template_url" id="template_url" value="<?php bloginfo('template_url'); ?>">
<input type="hidden" name="site_url" id="site_url" value="<?php echo get_site_url(); ?>">
<input type="hidden" name="ajax_url" id="ajax_url" value="<?php echo admin_url( 'admin-ajax.php' );?>">

<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({

			});
		});
	</script>



<script type="text/javascript">
	jQuery(function() {
		jQuery('input, textarea').placeholder();
	});
</script>


<?php wp_footer(); ?>

</body>

</html>