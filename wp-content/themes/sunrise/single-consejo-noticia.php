<?php ob_start();?>
<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php /*?> Quienes Somos <?php */?>
<?php wp_reset_query(); ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">
									<h2 class="title_rugrats"><?php the_title();?></h2>

									<a class="verpost" href="<?php echo get_option('home'); ?>/lista-consejo/" >Ver Consejos</a>

									<div class="contenido_noticia">
										<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	                                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
	                                    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
									</div>
									 <?php endwhile; else: ?>
				                     <p>Sorry, no posts matched your criteria.</p>
				                     <?php endif; ?>
								</div>
							</div>
							<?php get_sidebar(); ?>
							
						</div> 
					
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->

</div>

<?php get_footer(); ?>