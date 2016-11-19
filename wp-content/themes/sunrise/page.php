<?php ob_start();?>
<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php /*?> Quienes Somos <?php */?>
<?php wp_reset_query(); ?>
<?php if ( is_page('18') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">
									
									<div class="main_quienes_somos">
										<h2 class="title_rugrats"><?php the_title()?> </h2>

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


<?php /*? >Neumologia  <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('20') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						<div class="clearfix main_content_inner">
							<div class="content_left clearfix">
								<div class="content_left_inner">

									<div class="main_neumologia">
										<!-- <h2 class="title_rugrats"><?php // the_title()?> </h2> -->

										<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	                                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
	                                    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

										
									</div>
									<?php endwhile; else: ?>
				                    <p>Sorry, no posts matched your criteria.</p>
				                    <?php endif; ?>

										<!-- <h2 class="title_rugrats"><?php //the_title()?> </h2> -->
				
								</div>
							</div>
							<?php get_sidebar(); ?> 
						</div> 
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->
</div>



<?php /*? >Especialidades  <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('22') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						<div class="clearfix main_content_inner">
							<div class="content_left clearfix">
								<div class="content_left_inner">
									<div class="main_especialidades">
										<h2 class="title_rugrats">Especialidades</h2>
										<p>Desde la atención pediátrica más general hasta la terapia respiratoria, Sunrise cuenta con las especialidades clave para que su niño pueda ser atendido con precisión.</p>

										<div class="contenido_especialidades clearfix">

													<ul id="lista_especialidad" class="lista_especialidad list_reset clearfix">
													      <?php
													      wp_reset_query();
													      $temp = $wp_query;
													      $wp_query= null;
													      $wp_query = new WP_Query();
													      ?>
													      <?php
													         query_posts(array(
													         'order' => 'ASC',
													         'post_type' => 'page',
													         'post_parent' => '22',
													         'posts_per_page' => -1,
													            ));
													         $i = 1;
													      ?>
													     
													      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

													         <li id="post-<?php the_ID(); ?>"  class="box  clearfix"> 
													          
													              <!-- imagen destacada -->
													              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
																	<?php the_post_thumbnail( $size, $attr ); ?> 
																	 <h4><?php the_title() ?></h4>
																  </a>


													        </li> 

													      <?php $i++; endwhile; endif; ?>
													      <?php $wp_query = null; $wp_query = $temp;?>
													      <?php rewind_posts(); ?>
													      <?php wp_reset_query(); ?>
													</ul> 

										</div>

									</div>
								
								
				
								</div>
							</div>
							<?php get_sidebar(); ?> 
						</div> 
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->
</div>

<?php /*?>INFRAESTRUCTURA<?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('infraestructuras') ) { ?>
<?php// wp_redirect(get_option('siteurl') . '/link-redirect/'); ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">
									<div class="main_infraestructura">
										<h2 class="title_rugrats"><?php the_title(); ?></h2>
										<p>En Sunrise queremos que los padres tengan confianza en nuestra experiencia profesional y que los niños vean a los médicos como sus aliados. Por eso hemos adecuado nuestras instalaciones para ellos, nuestra principal preocupación. Con motivos lúdicos y un ambiente amigable especialmente diseñado para los niños. Contamos con equipos de última generación para que nuestro centro le ofrezca el mejor de los servicios.</p>

										<div class="galeria-consutorio">
									
											<ul id="lista_especialidad" class="lista_especialidad list_reset clearfix">
													      <?php
													      wp_reset_query();
													      $temp = $wp_query;
													      $wp_query= null;
													      $wp_query = new WP_Query();
													      ?>
													      <?php
													         query_posts(array(
													         'order' => 'ASC',
													         'post_type' => 'page',
													         'post_parent' => '24',
													         'posts_per_page' => -1,
													            ));
													         $i = 1;
													      ?>
													     
													      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

													         <li id="post-<?php the_ID(); ?>"  class="box  clearfix"> 
														            <!-- Apply Custon Files-->
																	
																	<a class="fancybox" href="<?php echo get_post_meta($post->ID, "imagen_zoom", true); ?>"  title="<?php the_title_attribute(); ?> " 
																	data-fancybox-group="gallery">
																	
																	<?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "img-infraestructura")); ?></a>
																  </a>

													        </li> 

													      <?php $i++; endwhile; endif; ?>
													      <?php $wp_query = null; $wp_query = $temp;?>
													      <?php rewind_posts(); ?>
													      <?php wp_reset_query(); ?>
													</ul> 


										<!-- 	<a class="fancybox" href="<?php bloginfo( 'template_directory' ); ?>/images/consultorios/sunrise-counter2.jpg" data-fancybox-group="gallery" title="">
												<img class="img-consultorio" src="<?php bloginfo('template_directory')?>/images/consultorios/sunrise-counter2-thu.jpg">
											<a/>

											<a class="fancybox" href="<?php bloginfo( 'template_directory' ); ?>/images/consultorios/sunrise-area-recreativa-de-ninos.jpg" data-fancybox-group="gallery" title="">
												<img class="img-consultorio" src="<?php bloginfo('template_directory')?>/images/consultorios/sunrise-area-recreativa-de-ninos-thu.jpg">
											<a/>

											<a class="fancybox" href="<?php bloginfo( 'template_directory' ); ?>/images/consultorios/sunrise-consultorio-principal.jpg" data-fancybox-group="gallery" title="">
												<img class="img-consultorio" src="<?php bloginfo('template_directory')?>/images/consultorios/sunrise-consultorio-principal-thu.jpg">
											<a/>

											<a class="fancybox" href="<?php bloginfo( 'template_directory' ); ?>/images/consultorios/sunrise-topico.jpg" data-fancybox-group="gallery" title="">
												<img class="img-consultorio" src="<?php bloginfo('template_directory')?>/images/consultorios/sunrise-topico-thu.jpg">
											<a/>

											<a class="fancybox" href="<?php bloginfo( 'template_directory' ); ?>/images/consultorios/sunrise-consultorio-de-especialidades.jpg" data-fancybox-group="gallery" title="">
												<img class="img-consultorio" src="<?php bloginfo('template_directory')?>/images/consultorios/sunrise-consultorio-de-especialidades-thu.jpg"> 
											<a/>-->
										</div>
									</div>
								</div>
							</div>
							<?php get_sidebar(); ?>
							
						</div> 
					
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->

</div>

<?php /*?> Consejos  y Noticias <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('31') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">						 
						<div class="clearfix main_content_inner">
							<div class="content_main clearfix">
								<div class="content_left_inner">																												
									<?php 
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
									$allNoticias = get_posts( $args02 ); //obtengo las publicaciones del slug que indico 	
									?>																																													
				                    <div class="main_consejos">
				                      <h2 class="noticia_rugrats">Consejos</h2>
				                      <a class="link" href="<?php echo get_permalink(331); ?>" >Ver Todos</a>	
				                      <div class="contenido_inner">
				                      	<?php foreach($allConsejos as $key => $consejo): ?>
									     	<?php //$postPage = get_field('programa_data_pagina', 'consejo'); ?>					                      	
					                        <div class="box-noticia">
					                          <div class="content_noticias"><a href="<?php echo get_permalink($consejo->ID); ?>" class="title_second"><?php echo get_the_title($consejo->ID); ?></a>
					                            <p><a href="<?php echo get_field('imagen_consejo_noticia',$consejo->ID); ?>"><img src="<?php echo get_field('imagen_consejo_noticia',$consejo->ID); ?>" alt="collage-modificado" width="391" height="288" class="alignnone wp-image-286"></a></p>
					                          </div>
					                          <div class="number"><em><strong><?php echo $consejo->post_content; ?></strong></em></div> 
					                          <a href="<?php echo get_permalink($consejo->ID); ?>" class="link">Ver más</a>
					                        </div>
					                        <?php if ($key == 1) break; ?>									
										<?php endforeach; ?>
				                      </div>
				                    </div>
				                    <div class="main_consejos">
				                      <h2 class="noticia_rugrats">Noticias</h2>
				                      <a class="link" href="<?php echo get_permalink(333); ?>" >Ver Todos</a>	
				                      <div class="contenido_inner">
				                      	<?php foreach($allNoticias as $key => $noticia): ?>					                      	
					                        <div class="box-noticia">
					                          <div class="content_noticias"><a href="<?php echo get_permalink($noticia->ID); ?>" class="title_second"><?php echo get_the_title($noticia->ID); ?></a>
					                            <p><a href="<?php echo get_field('imagen_consejo_noticia',$noticia->ID); ?>"><img src="<?php echo get_field('imagen_consejo_noticia',$noticia->ID); ?>" alt="collage-modificado" width="391" height="288" class="alignnone wp-image-286"></a></p>
					                          </div>
					                          <div class="number"><em><strong><?php echo $noticia->post_content; ?></strong></em></div> 
					                          <a href="<?php echo get_permalink($noticia->ID); ?>" class="link">Ver más</a>
					                        </div>
					                        <?php if ($key == 1) break; ?>									
										<?php endforeach; ?>
				                      </div>
				                    </div>					                    
								</div>
							</div>
							<?php //get_sidebar(); ?>							
						</div> 					
					</div>
				</div><!--End content_inner -->
		</div><!--End content -->
</div>


<?php /*?> Consejos   <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('54') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">
									<h2 class="title_rugrats"><?php the_title(); ?></h2>


									<a class="verpost" href="<?php echo get_option('home'); ?>/noticias/" >Ver Noticias</a>

									<div class="main_consejo">
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


<?php /*?> Noticias   <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('56') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">
									<h2 class="title_rugrats"><?php the_title();?></h2>

									<a class="verpost" href="<?php echo get_option('home'); ?>/consejos/" >Ver Consejos</a>


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






<?php /*?> Contactos  <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('26') ) { ?>
<?php// wp_redirect(get_option('siteurl') . '/link-redirect/'); ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">
									<h2 class="title_rugrats">Contactenos</h2>
									<p>En Sunrise queremos tener el mejor servicio. Cuéntenos cómo se siente en nuestro centro pediátrico o alguna sugerencia para mejorar su experiencia. La tendremos en cuenta para que en su próxima visita lo sigamos recibiendo con los mejores estándares de atención. </p>

								<h3 class="title_second">FORMULARIO DE SUGERENCIAS</h3>
									<div class="contentido_formulario">
										<div class="contentido_formulario_inner">

											<form id="contact_form" action="<?php bloginfo('template_url'); ?>/bin/contact.php" method="post" class="quick_contact clearfix">
											<!-- <form id="contact_form" action="#" method="post" class="contact_form clearfix"> -->
												<fieldset class="form_content_1" id="form_content_1">
													<p class="clearfix content_label">
														<label class="label" for="name">NOMBRE</label>
														<input id="name" class="text text_hide required" type="text" name="name" value="" />
													</p>

													<p class="clearfix content_label">
														<label class="label" for="email">CORREO</label>
														<input id="email" class="text text_hide required email" type="text" name="email" value="" />
													</p>

													
													 <p class="clearfix content_label">
														<label class="label" for="phone">TELEFONO</label>
														<input id="phone" class="text text_hide required" type="text" name="phone" number="true" value="" />

													 <p class="clearfix content_label">
														<label class="label" for="comments">COMENTARIOS</label>
														<textarea id="comments" class="text_hide required" name="comments" rows="6" cols="30"></textarea>
													</p> 

													<p class="clearfix line_enviar">
														<strong id="messageBox" class="float_left"></strong>
														<button class="submit btn_aceptar" type="submit">ENVIAR</button>
													</p>

												</fieldset>
											</form>

											
										</div>
									</div>
								</div>
							</div>
							<?php get_sidebar(); ?> 
							
						</div> 
					
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->

</div>



<?php /*?>Citas en Linea<?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('29') ) { ?>
<?php// wp_redirect(get_option('siteurl') . '/link-redirect/'); ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						 
						<div class="clearfix main_content_inner">
							
							<div class="content_left clearfix">
								<div class="content_left_inner">
									<h2 class="title_rugrats">Citas en linea</h2>
									<p>Sabemos que la prontitud en la atención de sus consultas es importante. Es por eso que le damos variedad de alternativas para que pueda contactarse con nuestro staff de profesionales. Ya sea por nuestro teléfono fijo 2751124 o completando el requerimiento de atención que encontrará debajo. Cuéntenos sus dudas y háganos saber su pedido de cita de lunes a sábado desde las 3 p.m. hasta las 7 p.m.</p>
									<p>Recuerde que si una emergencia sucediera fuera del horario de oficina, siempre puede comunicarse con nosotros al 945395469.</p>
	
									<h3 class="title_second">FORMULARIO DE RESERVA DE CITAS</h3>
									<div class="contentido_formulario">
										<div class="contentido_formulario_inner">

											<form id="contact_form" action="<?php bloginfo('template_url'); ?>/bin/citas.php" method="post" class="quick_contact clearfix">
											<!-- <form id="contact_form" action="#" method="post" class="contact_form clearfix"> -->
												<fieldset class="form_content_1" id="form_content_1">
													<p class="clearfix content_label">
														<label class="label" for="name">NOMBRES Y APELLIDOS</label>
														<input id="name" class="text text_hide required" type="text" name="name" value="" />
													</p>

													<p class="clearfix content_label">
														<label class="label" for="phone">TELEFONO</label>
														<input id="phone" class="text text_hide required" type="text" name="phone" number="true" value="" />
													

													<p class="clearfix content_label">
														<label class="label" for="email">CORREO</label>
														<input id="email" class="text text_hide required email" type="text" name="email" value="" />
													

													
													<p class="clearfix content_label">
														<label class="label" for="especialidad">ESPECIALIDAD</label>
														<span class="espe"> 
															<select id="select" class="select" name="select">
															  <option value="" selected>Seleccione su servicio</option>
															  <option value="Neumología Pediátrica">Neumología Pediátrica</option> 
															  <option value="Pediatría General">Pediatría General</option>
															  <option value="Gastroenterología Pediátrica">Gastroenterología Pediátrica</option>
															  <option value="Nefrología Pediátrica">Nefrología Pediátrica</option>
															  <option value="Endocrinología Pediátrica">Endocrinología Pediátrica</option>
															  <option value="Terapia Respiratoria">Terapia Respiratoria </option>
															  <option value="Pruebas de función pulmonar">Pruebas de función pulmonar</option>
															  <option value="Psicología Infantil">Psicología Infantil</option>
															   <option value="Dermatología Niños">Dermatología Niños</option>
															</select>
														</span> 
													</p>

													<p class="clearfix content_label">
														<label class="label" for="comments">COMENTARIOS</label>
														<textarea id="comments" class="text_hide required" name="comments" rows="6" cols="30"></textarea>
													</p>

													<p class="clearfix line_enviar">
														<strong id="messageBox" class="float_left"></strong>
														<button class="submit btn_aceptar" type="submit">ENVIAR</button>
													</p>

												</fieldset>
											</form>

											
										</div>
									</div>
								</div>
							</div>
							<?php get_sidebar(); ?>
							
						</div> 
					
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->

</div>

<!-- PAGINAS ESPECIALIDADES -->


<?php /*? >ESPECIALIDADES : Todas <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( $post->post_parent == 22 ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content<?php if ( is_page('your page') ) { ?>my-page<?php }  ?>">
				
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						<div class="clearfix main_content_inner">
							<div class="content_left clearfix">

								<div class="content_left_inner">

													
									<div class="main_especial">
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



<?php /*? >INICIO  <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('home') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content">
				
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						<div class="clearfix main_content_inner">
							<div class="content_left clearfix">

								<div class="content_left_inner">
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	                                    <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
	                                    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
								</div>
									 <?php endwhile; else: ?>
				                     <p>Sorry, no posts matched your criteria.</p>
				                     <?php endif; ?>
							</div>


							<?php get_sidebar(); ?> 
						</div> 
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->
</div>

<?php /*? >GRACIOS  <?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('113') ) { ?>

<div class="container main clearfix">
		<div class="iconos"></div>
		<div class="clearfix  content">
				
				<div class="clearfix content_inner">
					<div class="hfeed main_content">
						<div class="clearfix main_content_inner">
							<div class="content_left clearfix">

								<div class="content_left_inner">
								<h2 class="title_rugrats">Formurario enviado</h2>
									<p>Hemos recibido tu mensaje en breves momentos te responderemos.</p>
									<p class="nombre-doctor">Gracias por Escribirnos</p>
									<a class="volver-atras" href="<?php echo get_option('home'); ?>/"> Volver al Inicio</a>
								</div>
								
							</div>


							<?php get_sidebar(); ?> 
						</div> 
					</div>

				</div><!--End content_inner -->
		</div><!--End content -->
</div>



<?php /*?>Page 3<?php */?>
<?php wp_reset_query(); ?>
<?php } elseif ( is_page('page-2') || $post->post_parent == '1' ) { ?>

<?php wp_reset_query(); ?>
<?php } else { ?>
<div class="hfeed main_content">
	<div class="main_content_inner">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">

			<h3>Data from meta box</h3>
			<p>
			Mi nombre es:
			<?php
			echo get_post_meta($post->ID, $prefix.'text', true);
			?>
			</p>

			<h2 class="title_page"><?php the_title(); ?></h2>
			<div class="entry clearfix">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
		
		<div>
			<?php 
				$url= get_permalink();
				$tokens = explode('/', $url);
				$tag = $tokens[sizeof($tokens)-2];
				$temp = $wp_query;
				$wp_query= null;
				$wp_query = new WP_Query();
				$wp_query->query('showposts=5'.'&paged='.$paged.'&category_name='.$tag);
				$i = 1;
			?>
			<ul class="list_reset">
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<li class="clearfix <?php echo ($i==1)? 'no_margin': ''?>">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<div><?php the_excerpt() ?></div>
				</li>
			<?php $i++; endwhile; ?>
			</ul>
			<div class="navigation">
			  <div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
			  <div class="alignright"><?php next_posts_link('More &raquo;') ?></div>
			</div>
			
			<div class="navigation">
				<div class="custom_nav">
					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				</div>
			</div>
			<?php rewind_posts(); ?>			
			<?php $wp_query = null; $wp_query = $temp;?>
		
		</div>

	</div>
</div>
<?php } ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
<?php ob_end_flush();?>