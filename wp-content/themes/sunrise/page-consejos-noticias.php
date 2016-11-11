<?php
/*
Template Name: Lista Consejos Noticias
*/
get_header(); ?>

<?php
	if($post->ID==348) $terms = 'consejo'; else $terms = 'noticia';

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
	$allConsejos = get_posts( $args ); //obtengo las publicaciones del slug que indico 

    $post_per_page = 4;
    $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
    $rows = 0;
    $total = count($allConsejos);
    $pages = ceil($total / $post_per_page);
    $min = (($paged * $post_per_page) - $post_per_page) + 1;
    $max = ( $min + $post_per_page ) - 1;
    //End Datos de Paginación
?>
<div class="listado-noticia" id="idConsejosNoticias" data-postperpage="<?php echo $post_per_page;?>">
	<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content">			
				<div class="clearfix content_inner">
					<div class="hfeed main_content">						 
						<div class="clearfix main_content_inner">							
							<div class="content_main clearfix">
								<div class="content_left_inner">									                    
									<?php if($allConsejos): ?>
					                    <div class="main_consejos">
					                      <h2 class="noticia_rugrats"><?php if($post->ID == 350) echo "Noticias"; else echo "Consejos"; ?></h2>
					                      <div class="contenido_inner">
					                      	<?php foreach($allConsejos as $key => $consejo): ?>	
					                      		<?php $rows++; if($rows < $min) { continue; }  if($rows > $max) { break; }  ?>  			                      	
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
					                    <?php ($post->ID == 348) ? $id=350 : $id=348; ?>
					                    <a class="verpost" href="<?php echo get_permalink($id); ?>" >Ver <?php if($post->ID == 348) echo "Noticias"; else echo "Consejo"; ?></a>
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
            'format' => '?paged=%#%',
            'current' => $paged,
            'total' => $pages,
            'type' => 'plain'
          ) );

        //echo "<pre>";
        //print_r($link_page);
        //echo "</pre>";
        ?>
	</div>
	<div class="pagination">
	  <?php echo $link_page; ?>
	</div>
</div>
<input type="hidden" name="idlista" id="idlista" value="<?php echo $post->ID; ?>">
<?php get_footer(); ?>