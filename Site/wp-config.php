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
define('DB_NAME', 'copiadoracolombia');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'admin-claryicon');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'C14@ry|20@16');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'uIbQQViF~Y^QTu0sSh O2r|,mxaAK9mS6JK2n1;=[ZZTm}]%{8q!BJ<6UZhv[ Cj');
define('SECURE_AUTH_KEY', 'rYX@Ew 1fo ~5< T;-|@;;e+^(|FOu$3W.Flmh6,}E54nVHI=f(cDNJfGQNXYsBS');
define('LOGGED_IN_KEY', 'Sh~!|Go-b/]G$D&u4EEeCpQ0av8-bU<y}ROgJ/9{E586$8NE<<${_HE<7tZPbPy<');
define('NONCE_KEY', '7cNt#c* 6&dmC8r9X.6:1NmVkl$73+K7G.^/D9E+Vc[0.povkC/UzqgJiexd$+w-');
define('AUTH_SALT', 'ybqBS,0(+Py]!9O NeG$wPIE&ux$2AOQd#+m?3|lOFcx~ZhQ{^}2XmDdfN+-/+aF');
define('SECURE_AUTH_SALT', 'j[8}|v5[<AH]G3G(3N/TTdEzNDpd:e-IfiS(+K=MY&:vpI@NLG ,.cG@.j&9VoQa');
define('LOGGED_IN_SALT', 'pfCNqUPQYEMDf4n>CRcfI[DM, U87$[-^O}w5*AOt;/j-!J``xcnin5L$#}b=K(&');
define('NONCE_SALT', '%{z7#c%C+cg7`q2pc4HRd_?f(Pz%>io=lr^H{Q>_8%QFuD=t-5ky-hU{7k]:~A:|');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_copiadorascolombia';


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

