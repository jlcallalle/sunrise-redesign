<?php global $id, $paged; ?>

<?php
  if($id==331) $terms = 'consejo'; else $terms = 'noticia';

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
    $allNoticias = new WP_Query( $args ); //obtengo las publicaciones del slug que indico 

    //Start Datos de Paginación
    $post_per_page = 4;
    //$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
    $rows = 0;
    $total = count($allNoticias->posts);
    $pages = ceil($total / $post_per_page);
    $min = (($paged * $post_per_page) - $post_per_page) + 1;
    $max = ( $min + $post_per_page ) - 1;
    //End Datos de Paginación 
?>

<?php if ($allNoticias->posts): ?>      
  <div class="container main clearfix">
    <div class="iconos"></div>
    <div class="clearfix  content">     
      <div class="clearfix content_inner">
        <div class="hfeed main_content">             
          <div class="clearfix main_content_inner">             
            <div class="content_main clearfix">
              <div class="content_left_inner">                
                <?php if($allNoticias->posts): ?>
                  <div class="main_consejos">
                    <h2 class="noticia_rugrats"><?php if($id == 333) echo "Noticias"; else echo "Consejos"; ?></h2>
                    <div class="contenido_inner">
                      <?php foreach($allNoticias->posts as $key => $valor): ?>
                        <?php $rows++; if($rows < $min) { continue; }  if($rows > $max) { break; }  ?>                                
                        <div class="box-noticia">
                          <div class="content_noticias"><a href="<?php echo get_permalink($valor->ID); ?>" class="title_second"><?php echo get_the_title($valor->ID); ?></a>
                            <p><a href="<?php echo get_field('imagen_consejo_noticia',$valor->ID); ?>"><img src="<?php echo get_field('imagen_consejo_noticia',$valor->ID); ?>" alt="collage-modificado" width="391" height="288" class="alignnone wp-image-286"></a></p>
                          </div>
                          <div class="number"><em><strong><?php echo $valor->post_content; ?></strong></em></div>
                          <a href="<?php echo get_permalink($valor->ID); ?>" class="link">Ver más</a>
                        </div>            
                      <?php endforeach; ?>
                    </div>
                  </div>
                  <?php ($id == 331) ? $idCambio=333 : $idCambio=331; ?>
                  <a class="verpost" href="<?php echo get_permalink($idCambio); ?>" >Ver <?php if($id == 331) echo "Noticias"; else echo "Consejo"; ?></a>
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
        ?>
  </div>
  <div class="pagination">
    <?php echo $link_page; ?>
  </div>
<?php else: ?> 
    <p>No se encontraron resultados</p>
<?php endif ?> 
