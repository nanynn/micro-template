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
define('DB_NAME', 'micro_base');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'nanynn');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'microcuentos2018');

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
define('AUTH_KEY', '~BaPXU7jKZCgz4Iw5mghGw9Fy~nFH*cw.mrzHDA&0fb_Y! ZDf-Nh:0=Gl%K-$-U');
define('SECURE_AUTH_KEY', 'kvE4k3C1p;lje88[9{8eIL/**wrIs4h=,ZlV}KonB.k`N4WWXT#FK*hW VG$dtl|');
define('LOGGED_IN_KEY', 'r->f6Wmo.1MK}2e$(B@HuQ4W}}<#~VziY<$aTCW)<I.|(b0bHDJ1(KvZ(`aq;/LV');
define('NONCE_KEY', '`}.!*R34B4%..gAJ1=ME!u%qF(8uVw8UNU]]OG<W-.rBub|eaY%SA=g<d(`Pzdcp');
define('AUTH_SALT', '&-wgDlyB]W>`slQWGC;bxZ)1;B(,,>~tHL4J-7.`h(ZZ.bw=V8ospR}+[b0Pll@q');
define('SECURE_AUTH_SALT', 'Ch.4}vD_>clb>C6/-;+Ks.u#g78_7u}b-B`Y.iE|:tH@bFlTVJ6wH&t7%5O3t4w{');
define('LOGGED_IN_SALT', 'Nb(k1j,yj83C;,hVlLzh]c]to`?<g?krh{]=ZO{>Fj3_,Td%U?? ^.io87^rbIrf');
define('NONCE_SALT', 'u*J36~kvH :NYqv+76DC~}N}=fOPaExq!DRe*Jx6}jZKAZ]Fr8Kqtk-bKw3/L`6m');

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

