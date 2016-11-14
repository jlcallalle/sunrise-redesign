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

    $post_per_page = 6;
    $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
    $rows = 0;
    $total = count($allNoticias->posts);
    $pages = ceil($total / $post_per_page);
    $min = (($paged * $post_per_page) - $post_per_page) + 1;
    $max = ( $min + $post_per_page ) - 1;
    //End Datos de Paginación
?>
<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">						 
						<div class="clearfix main_content_inner">							
							<div class="content_main clearfix">
								<div class="content_left_inner">
									<?php if($allNoticias): ?>
					                    <div class="main_consejos">
					                      <h2 class="noticia_rugrats">Noticias</h2>
					                      <div class="contenido_inner">
					                      	<?php foreach($allNoticias as $key => $noticias): ?>				                      	
						                        <div class="box-noticia">
						                          <div class="content_noticias"><a href="<?php echo get_permalink($noticias->ID); ?>" class="title_second"><?php echo get_the_title($noticias->ID); ?></a>
						                            <p><a href="<?php echo get_field('imagen_consejo_noticia',$noticias->ID); ?>"><img src="<?php echo get_field('imagen_consejo_noticia',$noticias->ID); ?>" alt="collage-modificado" width="391" height="288" class="alignnone wp-image-286"></a></p>
						                          </div>
						                          <div class="content_noticias">
						                            <?php echo $noticias->post_content; ?>
						                          </div><a href="<?php echo get_permalink($noticias->ID); ?>" class="link">Ver más</a>
						                        </div>								
											<?php endforeach; ?>
					                      </div>
					                    </div>
					                    <a class="verpost" href="<?php echo get_permalink(348); ?>" >Ver Consejos</a>
				                    <?php endif; ?>

									<?php if($allConsejos): ?>
					                    <div class="main_consejos">
					                      <h2 class="noticia_rugrats">Consejos</h2>
					                      <div class="contenido_inner">
					                      	<?php foreach($allConsejos as $key => $consejo): ?>				                      	
						                        <div class="box-noticia">
						                          <div class="content_noticias"><a href="<?php echo get_permalink($consejo->ID); ?>" class="title_second"><?php echo get_the_title($consejo->ID); ?></a>
						                            <p><a href="<?php echo get_field('imagen_consejo_noticia',$consejo->ID); ?>"><img src="<?php echo get_field('imagen_consejo_noticia',$consejo->ID); ?>" alt="collage-modificado" width="391" height="288" class="alignnone wp-image-286"></a></p>
						                          </div>
						                          <div class="content_noticias">
						                            <?php echo $consejo->post_content; ?>
						                          </div><a href="<?php echo get_permalink($consejo->ID); ?>" class="link">Ver más</a>
						                        </div>								
											<?php endforeach; ?>
					                      </div>
					                    </div>
					                    <a class="verpost" href="<?php echo get_permalink(350); ?>" >Ver Noticias</a>
				                    <?php endif; ?>				                    
								</div>
							</div>
							<?php //get_sidebar(); ?>							
						</div> 				
					</div>
				</div><!--End content_inner -->
		</div><!--End content -->

        <?php       
        $link_page = paginate_links( array(   
          'format' => '?pagina=%#%',
          'current' => $paged,
          'total' => $pages,
          'type' => 'plain'
        ) );
        ?>
        <div class="pagination">
          <?php echo $link_page; ?>
        </div>

</div>

<?php get_footer(); ?>