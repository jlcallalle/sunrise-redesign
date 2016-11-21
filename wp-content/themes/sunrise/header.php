<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
<!--[if IE ]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->

<title>
<?php wp_title('&laquo;', true, 'right'); ?>
<?php bloginfo('name'); ?>
</title>

<meta name="description" content="Sunrise es un centro médico especializado en atender a los más pequeños. Brindamos atención de primer nivel en una larga lista de especialidades, sobre todo en el área de Neumología Pediátrica." />

<meta name="keywords" content="sunrise, Medicina, salud, Medicina Pediátrica, Especialidades, Neumologia , Pediatria General, Gastroenterología Pediátrica, Nefrología Pediátrica, Endocrinologia Pediatrica, Terapia Respiratoria, Pruebas de función pulmonar, Psicología Infantil, Dermatologia, centro de especialidad, neumologo pediatrico, sunrise medicinal, medicina para niños, sunriseperu, sunrise peru, sunrise hospital, sunrise clinica, Neumologia, Pediatrica" />

<meta name="author" content="Sunrise" />
<meta name="distribution" content="Global" />
<meta name="robots" content="FOLLOW,INDEX" />
<meta property="og:title" content="Sunrise Medicina" />
<meta property="og:description" content="Medicina Pediátrica y Especialidades" />


<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" />

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="keywords" content="<?php bloginfo('description'); ?>" />
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!-- <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/base.css" type="text/css" media="screen" /> -->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/main.css" type="text/css" media="screen" />
<!-- <link rel="stylesheet" href="<?php // bloginfo( 'template_url' ); ?>/js/flexslider/flexslider.css" type="text/css" media="screen" /> -->

<!-- <link rel="stylesheet" href="<?php //bloginfo('template_directory'); ?>/js/selectbox/css/sexy-combo.css" rel="stylesheet" type="text/css" /> -->
<!-- <link rel="stylesheet" href="<?php //bloginfo( 'template_url' ); ?>/js/fancybox2/jquery.fancybox.css?v=2.1.5" media="screen" /> -->

<!-- <link rel="stylesheet" href="<?php //bloginfo( 'template_url' ); ?>/css/layout.css" type="text/css" media="screen" /> -->


<?php if ( is_single() ) { ?>

  <meta property="og:url" content="<?php the_permalink() ?>"/>
  <meta property="og:title" content="<?php single_post_title(''); ?>" />
  <meta property="og:description" content='<?php echo get_excerpt_by_id($post_id); ?>' />
  <meta property="og:type" content="article" />

	<?php
		$images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . $post->ID );
		if ($images) {
		  $keys = array_keys($images);
		  $num = $keys[0];
		  $firstImageSrc = wp_get_attachment_thumb_url($num);
		?>

			<?php if(has_post_thumbnail()) { ?>


				<?php
				global $wp_query;
				$thePostID = $wp_query->post->ID;
				if( has_post_thumbnail( $thePostID )){

          $thumb_id = get_post_thumbnail_id($thePostID);
          $thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);

          ?>


          <meta property="og:image" content="<?php echo $thumb_url[0] ?>" />

        <?php } ?>

			<?php } else { ?>

          <meta property="og:image" content="<?php echo $firstImageSrc ?>" />

			<?php } ?>


	<?php } else { ?>

    <meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/logo-facebook-icon.jpg" />

	<?php } ?>


<?php } else { ?>

	<meta property="og:url" content="<?php echo get_option('home'); ?>/"/>
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:description" content="<?php bloginfo('description'); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/logo-facebook-icon.jpg" />

<?php } ?>

<?php wp_head(); ?>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.0.min.js"></script>

<script type="text/javascript">
if (typeof jQuery == 'undefined')
{
    document.write(unescape("%3Cscript src='<?php bloginfo( 'template_url' ); ?>/js/jquery-1.8.2.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>


<!--[if lt IE 9]>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie-only.css" type="text/css" media="screen" />
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/selectivizr.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/css3-mediaqueries.js"></script>

<![endif]-->

<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/normalize.js"></script>

<style>



</style>
</head>
<body <?php body_class(); ?>>

	<!-- Start wrapper -->
	<div class="wrapper <?php echo $post->post_name; ?>

	<?php if ( is_single() ) { ?>
		<?php ?><?php
		$category = get_the_category();
		echo $category[0]->category_nicename;
		?><?php  ?>

		<?php
		foreach((get_the_category()) as $category) {
		    echo $category->category_nicename.' ';
		}
		?>

		<?php }  ?>">

		<header class="header container">
			<div class="clearfix header_inner">

				<div class="content_menu clearfix">
					<div class="main_menu">
						<a class="vertical_text navi0" href="<?php echo get_option('home'); ?>/quienes-somos/">Quiénes Somos</a>
						<a class="vertical_text navi1" href="<?php echo get_option('home'); ?>/neumologia-pediatrica/">Neumología Pediátrica</a>
						<a class="vertical_text navi2" href="<?php echo get_option('home'); ?>/especialidades/">Especialidades</a>
						<a class="vertical_text navi3" href="<?php echo get_option('home'); ?>/infraestructuras">Infraestructura</a>
						<a class="vertical_text navi4" href="<?php echo get_option('home'); ?>/consejos-y-noticias/">Consejos y Noticias</a>
						<a class="vertical_text navi5" href="<?php echo get_option('home'); ?>/citas-en-linea/">Citas en Línea</a>
					</div>
				</div>

				<div class="content_clound clearfix">


					<a class="inicio" href="<?php echo get_option('home'); ?>/"></a>
					<a title="<?php echo get_option('home'); ?>"  href="<?php echo get_option('home'); ?>/">
					<img id="casita" src="<?php bloginfo('template_directory');?>/images/casita.png" /></a>


					<div class="cloud"></div>

					<div class="pajarito">

						<img id="notamusical" src="<?php bloginfo('template_directory');?>/images/notamusical.png" />
					</div>



						<div class="red-social">

						<a href="https://twitter.com/Sunrise_CP" target="_blank">
							<img id="icotwitter" src="<?php bloginfo('template_directory');?>/images/icotwitter.png" />
						</a>


						<a href="https://www.facebook.com/SunriseCentroPediatrico" target="_blank">
							<img id="icofacebook" src="<?php bloginfo('template_directory');?>/images/icofacebook.png" />
						</a>





					</div>



					<h1 class="logo_image ">
						<a title="<?php echo get_option('home'); ?>"  href="<?php echo get_option('home'); ?>/">
							<img id="logo" class="image_no_margin fadeInDown animated" alt="" src="<?php bloginfo('template_directory');?>/images/logo.png" />
						</a>
					</h1>
				</div>

			</div>
		</header>

		<div class="content_slider">

			<?php
			if ( is_home() ) {

				echo '
			    <div class="flexslider">
			    <ul class="slides">
			    	<li>
			    		<img src="http://sunrise.pe/wp-content/themes/sunrise/images/home1.jpg" />
			    	</li>
			    	<li>
			    		<img src="http://sunrise.pe/wp-content/themes/sunrise/images/home2.jpg" />
			    	</li>
			    	<li>
			    		<img src="http://sunrise.pe/wp-content/themes/sunrise/images/home3.jpg" />
			    	</li>
			    </ul>
			  </div>';



			} elseif (is_page('26') or (is_page('29'))) {
				echo '<iframe width="1600" height="385" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.pe/maps/ms?msa=0&amp;msid=201076096626471681580.000505d3ac7c63376a3f4&amp;hl=es&amp;ie=UTF8&amp;t=m&amp;ll=-12.127693,-76.986206&amp;spn=0.002019,0.008578&amp;z=18&amp;output=embed"></iframe><br />';


			} else{

			}
			?>



		</div>
