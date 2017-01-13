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
						<li><a href="<?php echo get_option('home'); ?>/">Neumología Pediátrica</a></li>
						<li><a href="<?php echo get_option('home'); ?>/">Especialidades</a></li>
						<li><a href="<?php echo get_option('home'); ?>/infraestructuras/">Infraestructura</a></li>
						<li><a href="<?php echo get_option('home'); ?>/consejos-y-noticias/">Noticias</a></li>
						<li><a href="<?php echo get_option('home'); ?>/citas-en-linea/">Citas en Línea</a></li>
					</ul>
					<div class="derechos">
						<!--<p>SunRise© 2015 | Todos los Derechos Reservados </p>-->
						<p>SunRise© <?php echo date("Y"); ?> | Todos los Derechos Reservados </p>
					</div>
				</div>
				<div class="tren fadeInDown animated"></div>

				<!-- <div class="tren animated wow fadeInRight" data-wow-delay=".5s"></div> -->

			</footer>
			<!-- </div> -->
</div><!--End wrapper -->




<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/validate/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/validate/messages_es.js"></script>
<?php /*?><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact.js"></script><?php */?>

<script type="text/javascript">

/* Important Delete if contact.js is active */

jQuery(function() {
	jQuery('#contact_form').validate();
});

</script>


<?php  /* ?>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript">
	jQuery(function(){ 
		
		jQuery(".fancybox").fancybox({
			titlePosition	: 'inside',
			transitionIn	: 'elastic',
			transitionOut	: 'none',
			autoDimensions	: false,
			width			: 586,
			height			: 371,
			titleShow		: false,
			margin			: 0,
			padding			: 0,
			showCloseButton	: false,
			onStart	: function() {
				jQuery('#fancybox-outer').css('background-color','transparent');
				jQuery('.fancybox-bg').hide();
			}
		});
		
		jQuery('.close_link').click(function () { 
		  jQuery.fancybox.close();
		  return false;
		});
		
	}); 
</script>
<?php */ ?>


<!-- Add fancyBox 2 main JS and CSS files -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/fancybox2/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/fancybox2/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<!-- <script type="text/javascript" src="<?php // bloginfo( 'template_url' ); ?>/js/modals.js"></script> -->


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
<script type="text/javascript" src="<?php  bloginfo('template_directory'); ?>/js/main.js"></script> 

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