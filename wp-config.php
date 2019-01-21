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
define('DB_NAME', 'fastfood');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', '(9&nBoXE)QJ|]tytAXE#E8R Y.LT f81?Cmn!T|lqtd4O;DApz3bjk:?*Z}>JH>w');
define('SECURE_AUTH_KEY', 'vd1o^!V  .Ce`UZ[y=yE :;1:9.Lh[A(@uxhvt68K1_z]ph-l P?,7Zi6h1E|P9&');
define('LOGGED_IN_KEY', ']!=54yVY;SH,wr}`9Tm83/J:eawb3Jz5!.fVc@?Xce@[<:.!Jma#LUf!gn:%mv.R');
define('NONCE_KEY', '^-GH}>SyUNrxp#p(;QOB}-8 $cJAI<;z%7M;?_N|{1T4z^a4VvG3>cQbTyzOEJ*W');
define('AUTH_SALT', '0uZ[[HYC)Gb/E^+QG*+t/PxFp={vCa=xyVK-TCK|S7kWzBTBE]GrB.ZJW 9b]^G7');
define('SECURE_AUTH_SALT', '6&8O($*zTA%w}NUyoV a+z Y6u^]A#$gsU!-(6#B<h5qM%H)e{8(7oFmu*7q#CGF');
define('LOGGED_IN_SALT', '5%`;@[w5{v|R8!M/07b!xoAy~&}LxS&>-L<j@Y?RZI|ac=K.Fwwj!.;>3 5*3m;.');
define('NONCE_SALT', ']o^T.TU_%$T5~ktHVhGPCBv9ZUFVo6rDM7eOS:KE_TK9u.+Sv@T@mV jXr:h<t[?');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wpff_';


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

