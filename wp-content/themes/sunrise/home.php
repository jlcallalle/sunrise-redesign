<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Home
*/
?>
<?php get_header(); ?>



	<!-- Start content -->
	<div class="container main clearfix">
		<div class="iconos"></div>
	
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">

									<!-- mostrar contenido de la pagina 45 | home -->
									<?php $recent = new WP_Query('page_id=45');
										 while($recent->have_posts()) : $recent->the_post();?>
								     		<?php the_content(); ?>
									<?php endwhile; ?>

									<!-- 
									<p>Los especialistas del centro pediátrico Sunrise entendemos que su principal preocupación es la salud de los niños. Es por ello que hemos reunido a un grupo de profesionales médicos altamente especializados para cuidarlos, prevenir posibles enfermedades y tratarlos integralmente. </p>

									<p>La experiencia de cada miembro de nuestro staff, los equipos médicos y los consultorios que hemos implementado nos permite garantizarle la tranquilidad que necesita. <a class="link_home" href="<?php //echo get_option('home'); ?>/contactos/" target="_blank"> Comuníquese con nosotros </a> para empezar a ocuparnos juntos por la buena salud de los menores. </p> 
									-->

									<h2 class="noticia_rugrats">Consejos y Noticias</h2>

									<?php $recent = new WP_Query('page_id=54');
										 while($recent->have_posts()) : $recent->the_post();?>
								     		<?php //the_content(); ?>
								     		<?php the_excerpt(); ?>
									<?php endwhile; ?>


									<!--
									<h3 class="title_second">SU MÉDICO LE ACONSEJA: PRECAUCIONES PARA LA PRIMAVERA</h3>
									<h4 class="titulo_consejo">¿CADA ESTACIÓN TRAE SUS PROPIAS TENDENCIAS A CIERTAS ENFERMEDADES?</h4>
									<p>Desde luego. Las enfermedades más frecuentes en invierno –resfríos-, pueden diferir de las producidas en verano –diarreas-. Pero no olvidemos que estas están presentes durante todo el año. Además, por la geografía de nuestro país, los niños que realizan paseos en invierno en zonas de altura pueden tener insolación y resequedad de la piel que vemos típicamente en verano. </p> -->
								
									<a class="link" href="<?php echo get_option('home'); ?>/consejo/" >Ver Consejos</a>

									<div class="contenido_inner">

										<?php $recent = new WP_Query('page_id=56');
										 while($recent->have_posts()) : $recent->the_post();?>
										 	<?php //the_content(); ?>
								     		<?php the_excerpt(); ?> 
									<?php endwhile; ?>
			
									<!-- <h3 class="title_second">LLEGÓ SUNRISE, EL CENTRO MÉDICO ESPECIALIZADO PARA SUS NIÑOS</h3>
										<p>Luego un año y medio de constante trabajo, el centro pediátrico Sunrise está cerca a comenzar sus atenciones médicas especializadas en Surco. </p>
										<p>El martes 4 de noviembre será la inauguración de un local que ha sido pensado desde el plano científico y desde la perspectiva pediátrica. Nos hemos dedicado a que Sunrise sea un lugar accesible para los niños y que cuente con médicos y tecnología para una atención integral. </p>
										<p>Parte de este trabajo también ha contado con el aporte de la artista Diana Aguilar y la arquitecta Olenka Marquina, con quienes hemos logrado ese clima amable y cercano en nuestros consultorios. </p>
										<p>Sunrise aparece como un centro especializado en la neumología pediátrica y con médicos con amplia trayectoria en todas las áreas pediátricas. La mejor atención pediátrica está por llegar.</p> -->
										<a class="link" href="<?php echo get_option('home'); ?>/noticias/" >Ver Noticias</a>

									</div> 
								</div>
							</div>
							<?php get_sidebar(); ?>

						</div> 
					
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->

	</div>

<?php get_footer(); ?>
