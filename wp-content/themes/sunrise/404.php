<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content">
				
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						<div class="clearfix main_content_inner">
							<div class="content_left clearfix">

								<div class="content_left_inner">
									<h2>Página No Encontrada</h2>
									<a href="<?php echo get_option('home'); ?>">Ir a la página principal</a>
								</div>
								
							</div>


							<?php get_sidebar(); ?> 
						</div> 
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->
</div>
<?php get_footer(); ?>
