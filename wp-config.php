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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', ']wOX.h?EFM;^HIel7+I@ESeZ(M7l*d=N>tlRi-Q d]Wpdr3Z60=s@bk,mPS/a5]m');
define('SECURE_AUTH_KEY', 'l/?yTl-1jpYOzz83+6}P;bHeWoC}q&G&6Deb%1lA T14$,xF$Y|Ul~Z^$[-wqDS4');
define('LOGGED_IN_KEY', 'y3/.Qc36|m^7(@r#yu+8[XV.a4IhB_?L@M!(-58n#L/V`]lr[CCXycfyi,le8x2<');
define('NONCE_KEY', 'k @h.xD>90DR[`,[>pf-LsE5@_(v `a<!pBTm<+XIkP`eoS!/ >r5bD4qe p7`mw');
define('AUTH_SALT', 'eaeVqy;PMzb> 6ugJg3-fxus<w1zyV#Y-|(LC>0_s,mO(Y|q6v<!$l42e9AM.*L{');
define('SECURE_AUTH_SALT', 'k+M(F$~jV9.MKgk1CNm0M8vR}xBz7j_sEmK@^9MNMV@tB.gy::k/RdI2XUSg]1ZO');
define('LOGGED_IN_SALT', '*F:/HdVMy^6;3g5h?Cc/P-HYK2!%!z<xR1PX/@{fEH<hAiDrt=EaaO]RWe`cX,2#');
define('NONCE_SALT', ',cMk_^^*Dk84Tdd_.%Zb/Iz[&G2X<3#BqT58=Eh%lv`93*(  uNIYJ-T7B+@-~n,');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

