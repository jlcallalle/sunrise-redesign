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



	<div class="container main clearfix">
		<div class="iconos"></div>
	
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
			<div class="clearfix content_inner">
				<div class="main_content main-home">

					<div class="clearfix main_content_inner">
						<div class="content_left clearfix">
							<div class="content_left_inner">
								<div class="box-bienvenida">

									<!--<h2 class="title_rugrats">Bienvenidos</h2>-->

									<!-- mostrar contenido de la pagina 45 | home -->
									<?php $recent = new WP_Query('page_id=45');
										 while($recent->have_posts()) : $recent->the_post();?>
								     		<?php the_content(); ?>
									<?php endwhile; ?>



									
									<div class="box-consejos-noticias" style="display:none;">
										<div class="box-consejos">
									
											<h2 class="noticia_rugrats">Consejos y Noticias</h2>
											<a class="link" href="<?php echo get_option('home'); ?>/consejo/" >Ver Consejos</a>
											<?php $recent = new WP_Query('page_id=54');
												 while($recent->have_posts()) : $recent->the_post();?>
										     		<?php //the_content(); ?>
										     		<?php the_excerpt(); ?>
											<?php endwhile; ?>


										
											

										</div>

										<div class="box-noticias">
											<a class="link" href="<?php echo get_option('home'); ?>/noticias/" >Ver Noticias</a>

											<?php $recent = new WP_Query('page_id=56');
											 while($recent->have_posts()) : $recent->the_post();?>
											 	<?php //the_content(); ?>
									     		<?php the_excerpt(); ?> 
											<?php endwhile; ?>
				

										</div>
									</div> 
								</div>
								<div class="box-video">
									<iframe width="400" height="225" src="https://www.youtube.com/embed/IZ-35LtDLjA?rel=0" frameborder="0" allowfullscreen></iframe>
                    			</div>
							</div>

						</div>
						<?php get_sidebar(); ?>
					</div> 

				</div>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
