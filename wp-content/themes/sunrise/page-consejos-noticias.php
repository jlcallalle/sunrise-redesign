<?php
/*
Template Name: Lista Consejos Noticias
*/
get_header(); ?>

<?php
	if($post->ID==331) $terms = 'consejo'; else $terms = 'noticia';

	$args = array(
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
	      'terms' => $terms // Where term_id of Term 1 is "1". //$term
	    )
	  )
	);
	$allConsejos = new WP_Query( $args ); //obtengo las publicaciones del slug que indico

    $post_per_page = 4;
    $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
    $rows = 0;
    $total = count($allConsejos->posts);
    $pages = ceil($total / $post_per_page);
    $min = (($paged * $post_per_page) - $post_per_page) + 1;
    $max = ( $min + $post_per_page ) - 1;
    //End Datos de Paginación
?> <!-- push -->
<div class="listado-noticia" id="idConsejosNoticias" data-postperpage="<?php echo $post_per_page;?>">
	<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						<div class="clearfix main_content_inner">
							<div class="content_main clearfix">
								<div class="content_left_inner">
									<?php if($allConsejos->posts): ?>
			                    <div class="main_consejos">
			                      <h2 class="noticia_rugrats"><?php if($post->ID == 333) echo "Noticias"; else echo "Consejos"; ?></h2>
			                      <div class="contenido_inner clearfix">
			                      	<?php foreach($allConsejos->posts as $key => $consejo): ?>
			                      		<?php $rows++; if($rows < $min) { continue; }  if($rows > $max) { break; }  ?>
				                        <div class="box-noticia">
				                          <div class="content_noticias">
																		<a href="<?php echo get_permalink($consejo->ID); ?>" class="title_second"><?php echo get_the_title($consejo->ID); ?></a>
				                            <img src="<?php echo get_field('imagen_consejo_noticia',$consejo->ID); ?>" alt="collage-modificado" width="391" height="288" class="alignnone wp-image-286">
				                            <!-- <p><a href="<?php //echo get_field('imagen_consejo_noticia',$consejo->ID); ?>"><img src="<?php //echo get_field('imagen_consejo_noticia',$consejo->ID); ?>" alt="collage-modificado" width="391" height="288" class="alignnone wp-image-286"></a></p> -->
				                          </div>
																	<div class="desc_noticias">
																		<p><?php echo $consejo->post_content; ?></p>
																	</div>
				                          <a href="<?php echo get_permalink($consejo->ID); ?>" class="link">Ver más</a>
				                        </div>
															<?php endforeach; ?>
			                      </div>
														<?php
															$link_page = paginate_links( array(
																'format' => '?paged=%#%',
																'current' => $paged,
																'total' => $pages,
																'type' => 'plain'
															) );
														?>
														<div class="pagination">
															<?php echo $link_page; ?>
														</div>
			                    </div>
			                    <?php ($post->ID == 331) ? $id=333 : $id=331; ?>
			                    <a class="verpost" href="<?php echo get_permalink($id); ?>" >Ver <?php if($post->ID == 331) echo "Noticias"; else echo "Consejo"; ?></a>
		                    <?php endif; ?>
								</div>
							</div>
							<?php //get_sidebar(); ?>
						</div>
					</div>
				</div><!--End content_inner -->
		</div><!--End content -->


	</div>

</div>
<input type="hidden" name="idlista" id="idlista" value="<?php echo $post->ID; ?>">
<?php get_footer(); ?>
