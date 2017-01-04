<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'sunrise');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'kGbB`28P~f$bf2L@Tw;3R7W#NdH.bymBvV}?x= 0GlRw?m>$r{:SUPndd.FI_l<7'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '5Euv`-ZIv1mQUtA|9cPUWUu[dC_)8HOb*yJIwl7O1}jSZ6s(Kd>$Hn!?`R*xp@d)'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'LC_{IlH*}B42WuwR-S--F%A.e~323}_V],RIXo>tg$k k@7:3w@^LU!IM<]BFmyO'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '1B1p&]#zaHusI9CFDM8.VU%b!ZPYv>/&eH_hiw5KTSFZtBwr:YE%Z^LxvsJ6#4_i'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'Sw</f%3Or%{p7Q(aRecyK:5Hd^+6 >mDN)rz,ZFr*c&>owL^=I5Xw,SMD@OSM O_'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'AC7T7Mh}7@%%Z,h,=]<^b9>)FSfG{n?c*#}1Z;FS.m#@]xTp%GJVrmD(>U%Xe^:Z'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'Za8}wBTljlT`=.8>!1b#ULMbu(!J5zvo1)>{:?4_[FPNA.SkiAb*}3h8n2*S=a4@'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'fMPQ[NY|T5wmkh|L4cB?2X:pq?&Et}O76YW}#P@;A//9rK^{xA/)<D8B(j2/4IDg'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

