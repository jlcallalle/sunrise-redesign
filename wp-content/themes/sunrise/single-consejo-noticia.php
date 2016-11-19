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
							<div class="content_main clearfix">
								<div class="content_left_inner">
									<h2 class="title_rugrats">Consejo</h2><a href="<?php echo get_option('home'); ?>/consejos-y-noticias/" class="verpost">Regresar</a>								
									<div class="contenido_noticia">
					                      <div class="content_noticias">
					                        <h3 class="title_second"><?php the_title();?></h3>
					                        <div class="contenido-image">
					                          <p><a href="<?php echo get_field('imagen_consejo_noticia'); ?>"><img src="<?php echo get_field('imagen_consejo_noticia',$post->ID); ?>" alt="collage-modificado" height="288" width="391" class="alignnone wp-image-286"></a></p>
					                        </div>
					                      </div>
										  <div class="number"><em><strong><?php the_content(); ?></strong></em></div>	
										  <br>				                      
					                      <div class="content_noticias">
					                        <?php echo get_field('descripcion_completa'); ?>				                        
					                        <style>#bwg_container1_0 #bwg_container2_0 .bwg_standart_thumbnails_0 * {        -moz-box-sizing: border-box;        box-sizing: border-box;      }      #bwg_container1_0 #bwg_container2_0 .bwg_standart_thumb_spun1_0 {        -moz-box-sizing: content-box;        box-sizing: content-box;        background-color: #FFFFFF;        display: inline-block;        height: 90px;        margin: 4px;        padding: 0px;        opacity: 1.00;        filter: Alpha(opacity=100);        text-align: center;        vertical-align: middle;        transition: all 0.3s ease 0s;-webkit-transition: all 0.3s ease 0s;        width: 180px;        z-index: 100;      }      #bwg_container1_0 #bwg_container2_0 .bwg_standart_thumb_spun1_0:hover {        -ms-transform: scale(1.1);        -webkit-transform: scale(1.1);        backface-visibility: hidden;        -webkit-backface-visibility: hidden;        -moz-backface-visibility: hidden;        -ms-backface-visibility: hidden;        opacity: 1;        filter: Alpha(opacity=100);        transform: scale(1.1);        z-index: 102;        position: relative;      }      #bwg_container1_0 #bwg_container2_0 .bwg_standart_thumb_spun2_0 {        border: 0px none #CCCCCC;        border-radius: 0;        box-shadow: 0px 0px 0px #888888;        display: inline-block;        height: 90px;        overflow: hidden;        width: 180px;      }      #bwg_container1_0 #bwg_container2_0 .bwg_standart_thumbnails_0 {        background-color: rgba(255, 255, 255, 0.00);        display: inline-block;        font-size: 0;        max-width: 960px;        text-align: center;      }      #bwg_container1_0 #bwg_container2_0 .bwg_standart_thumbnails_0 a {        border: none;        cursor: pointer;        text-decoration: none;      }      #bwg_container1_0 #bwg_container2_0 .bwg_standart_thumb_0 {        display: inline-block;        text-align: center;      }            #bwg_container1_0 #bwg_container2_0 .bwg_standart_thumb_spun1_0:hover .bwg_title_spun1_0 {        left: 0px;        top: 0px;        opacity: 1;        filter: Alpha(opacity=100);      }      #bwg_container1_0 #bwg_container2_0 .bwg_title_spun2_0 {        color: #CCCCCC;        display: table-cell;        font-family: segoe ui;        font-size: 16px;        font-weight: bold;        height: inherit;        padding: 2px;        text-shadow: 0px 0px 0px #888888;        vertical-align: middle;        width: inherit;        word-wrap: break-word;      }      /*pagination styles*/      #bwg_container1_0 #bwg_container2_0 .tablenav-pages_0 {        text-align: center;        font-size: 12px;        font-family: segoe ui;        font-weight: bold;        color: #666666;        margin: 6px 0 4px;        display: block;        height: 30px;        line-height: 30px;      }      @media only screen and (max-width : 320px) {        #bwg_container1_0 #bwg_container2_0 .displaying-num_0 {          display: none;        }      }      #bwg_container1_0 #bwg_container2_0 .displaying-num_0 {        font-size: 12px;        font-family: segoe ui;        font-weight: bold;        color: #666666;        margin-right: 10px;        vertical-align: middle;      }      #bwg_container1_0 #bwg_container2_0 .paging-input_0 {        font-size: 12px;        font-family: segoe ui;        font-weight: bold;        color: #666666;        vertical-align: middle;      }      #bwg_container1_0 #bwg_container2_0 .tablenav-pages_0 a.disabled,      #bwg_container1_0 #bwg_container2_0 .tablenav-pages_0 a.disabled:hover,      #bwg_container1_0 #bwg_container2_0 .tablenav-pages_0 a.disabled:focus {        cursor: default;        color: rgba(102, 102, 102, 0.5);      }      #bwg_container1_0 #bwg_container2_0 .tablenav-pages_0 a {        cursor: pointer;        font-size: 12px;        font-family: segoe ui;        font-weight: bold;        color: #666666;        text-decoration: none;        padding: 3px 6px;        margin: 0;        border-radius: 0;        border-style: solid;        border-width: 1px;        border-color: #E3E3E3;        background-color: #FFFFFF;        opacity: 1.00;        filter: Alpha(opacity=100);        box-shadow: 0;        transition: all 0.3s ease 0s;-webkit-transition: all 0.3s ease 0s;      }      #bwg_container1_0 #bwg_container2_0 .bwg_back_0 {        background-color: rgba(0, 0, 0, 0);        color: #000000 !important;        cursor: pointer;        display: block;        font-family: segoe ui;        font-size: 16px;        font-weight: bold;        text-decoration: none;        padding: 0;      }      #bwg_container1_0 #bwg_container2_0 #spider_popup_overlay_0 {        background-color: #000000;        opacity: 0.70;        filter: Alpha(opacity=70);      }     .bwg_play_icon_spun_0	 {        width: inherit;        height: inherit;        display: table;        position: absolute;      }	      .bwg_play_icon_0 {        color: #CCCCCC;        font-size: 32px;        vertical-align: middle;        display: table-cell !important;        z-index: 1;        text-align: center;        margin: 0 auto;      }</style>
					                        <div id="bwg_container1_0">
					                          <div id="bwg_container2_0">
					                            <form id="gal_front_form_0" method="post" action="#">
					                              <div class="bwg_back_0"></div>
					                              <div style="background-color:rgba(0, 0, 0, 0); text-align: center; width:100%; position: relative;">
					                                <div id="ajax_loading_0" style="position:absolute;width: 100%; z-index: 115; text-align: center; height: 100%; vertical-align: middle; display:none;">
					                                  <div style="display: table; vertical-align: middle; width: 100%; height: 100%; background-color: #FFFFFF; opacity: 0.7; filter: Alpha(opacity=70);">
					                                    <div style="display: table-cell; text-align: center; position: relative; vertical-align: middle;">
					                                      <div id="loading_div_0" style="display: inline-block; text-align:center; position:relative; vertical-align: middle;"><img src="http://sunrise.pe/wp-content/plugins/photo-gallery/images/ajax_loader.png" style="float: none; width:50px;" class="spider_ajax_loading"></div>
					                                    </div>
					                                  </div>
					                                </div>
					                                <div id="bwg_standart_thumbnails_0" class="bwg_standart_thumbnails_0"><a style="font-size: 0;" href="<?php echo get_field('imagen_inferior_consejo_noticia',$post->ID); ?>" onclick="spider_createpopup('http://sunrise.pe/wp-admin/admin-ajax.php?tag_id=0&amp;action=GalleryBox&amp;current_view=0&amp;image_id=6&amp;gallery_id=1&amp;theme_id=1&amp;thumb_width=180&amp;thumb_height=90&amp;open_with_fullscreen=0&amp;open_with_autoplay=0&amp;image_width=800&amp;image_height=500&amp;image_effect=fade&amp;wd_sor=order&amp;wd_ord= asc &amp;enable_image_filmstrip=1&amp;image_filmstrip_height=70&amp;enable_image_ctrl_btn=1&amp;enable_image_fullscreen=1&amp;popup_enable_info=1&amp;popup_info_always_show=0&amp;popup_info_full_width=1&amp;popup_hit_counter=0&amp;popup_enable_rate=0&amp;slideshow_interval=5&amp;enable_comment_social=1&amp;enable_image_facebook=1&amp;enable_image_twitter=1&amp;enable_image_google=1&amp;enable_image_pinterest=0&amp;enable_image_tumblr=0&amp;watermark_type=none&amp;current_url=pagename=noticias', 0, 800, 500, 1, 'testpopup', 5); return false;"><span class="bwg_standart_thumb_0"><span class="bwg_standart_thumb_spun1_0"><span class="bwg_standart_thumb_spun2_0"><img id="6" style="max-height: none !important;  max-width: none !important; padding: 0 !important; width:180px; height:132px; margin-left: 0px; margin-top: -21px;" src="<?php echo get_field('imagen_inferior_consejo_noticia',$post->ID); ?>" alt="collage-modificado" class="bwg_standart_thumb_img_0"></span></span></span></a></div>
					                                <div class="tablenav-pages_0">
					                                  <input id="page_number_0" name="page_number_0" value="1" type="hidden">
					                                </div>
					                              </div>
					                            </form>
					                            <div id="spider_popup_loading_0" class="spider_popup_loading"></div>
					                            <div id="spider_popup_overlay_0" onclick="spider_destroypopup(1000)" class="spider_popup_overlay"></div>
					                          </div>
					                        </div>
					                      </div>
								</div>
							</div>							
						</div> 					
					</div>
				</div><!--End content_inner -->
		</div><!--End content -->
</div>

<?php get_footer(); ?>