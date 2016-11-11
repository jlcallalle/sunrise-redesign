<?php
/*
Template Name: Lista Consejos Noticias
*/

get_header(); ?>

<?php
	if($post->ID==348) {
		$args01 = array(
		  'offset'           => 0,
		  'orderby'          => 'date',
		  'order'            => 'DESC',
		  'post_type'        => 'consejo-noticia',
		  'post_status'      => 'publish',
		  'suppress_filters' => true,
		  'tax_query' => array(
		    array(
		      'taxonomy' => 'categoria-consejo-noticia',
		      'field' => 'slug',
		      'terms' => 'consejo' // Where term_id of Term 1 is "1". //$term
		    )
		  )
		);
		$allConsejos = get_posts( $args01 ); //obtengo las publicaciones del slug que indico 
	}

	if($post->ID==350) {
		$args02 = array(
		  'offset'           => 0,
		  'orderby'          => 'date',
		  'order'            => 'DESC',
		  'post_type'        => 'consejo-noticia',
		  'post_status'      => 'publish',
		  'suppress_filters' => true,
		  'tax_query' => array(
		    array(
		      'taxonomy' => 'categoria-consejo-noticia',
		      'field' => 'slug',
		      'terms' => 'noticia' // Where term_id of Term 1 is "1". //$term
		    )
		  )
		);
		$allNoticias = get_posts( $args02 );
	}
?>
<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">

								<?php if($allNoticias): ?>
									<h2 class="noticia_rugrats">Noticias</h2>
									<?php foreach($allNoticias as $key => $noticia): ?>
							     	<?php 
									//the_advanced_excerpt('length=50&length_type=words');
									$postPage = get_field('programa_data_pagina', 'consejo');
									?>
										<div class="content_noticias">
										<a><h3 class="title_second"><?php echo get_the_title($noticia->ID); ?></h3></a>
										<p><a href="<?php echo get_permalink($noticia->ID); ?>"><img class="alignnone wp-image-286 " src="<?php echo get_field('imagen_consejo_noticia',$noticia->ID); ?>" alt="collage-modificado" width="391" height="288"></a></p>
										</div>
										<div class="content_noticias">
										<p><?php echo $noticia->post_content; ?></p></div>	
										<a class="link" href="<?php echo get_permalink($noticia->ID); ?>" >Ver Noticias</a>								
									<?php endforeach; ?>
									<br><br><br><br>
									<a class="verpost" href="<?php echo get_permalink(348); ?>" >Ver Consejos</a>
								<?php endif; ?>

								<?php if($allConsejos): ?>
									<h2 class="noticia_rugrats">Consejos</h2>
									<!-- <h2 class="title_rugrats">Consejos</h2> -->
									<?php foreach($allConsejos as $key => $consejos): ?>
							     	<?php 
									//the_advanced_excerpt('length=50&length_type=words');
									$postPage = get_field('programa_data_pagina', 'consejo');
									?>
										<div class="content_noticias">
										<a><h3 class="title_second"><?php echo get_the_title($consejos->ID); ?></h3></a>
										<p><a href="<?php echo get_permalink($consejos->ID); ?>"><img class="alignnone wp-image-286 " src="<?php echo get_field('imagen_consejo_consejos',$consejos->ID); ?>" alt="collage-modificado" width="391" height="288"></a></p>
										</div>
										<div class="content_noticias">
										<p><?php echo $consejos->post_content; ?></p></div>	
										<a class="link" href="<?php echo get_permalink($consejos->ID); ?>" >Ver Consejo</a>								
									<?php endforeach; ?>
									<br><br><br><br>
									<a class="verpost" href="<?php echo get_permalink(350); ?>" >Ver Noticias</a>
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