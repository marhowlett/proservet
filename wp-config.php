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
define('DB_NAME', 'u140369_web');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'u140369_userweb');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'CtdCQ6nB0N');

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
define( 'AUTH_KEY', 's$3,*z;}oGbY]~<D9I=R1Ul0LvC!>^T12FLTy~7,=qZv+`n1lk%VS08b#Lbh;&r)' );
define( 'SECURE_AUTH_KEY', ' (B#;E)NTF<aA2AWN%l}I)vMBR3I2UP%Q&avOQjpQZNqRC+La6v*`SDay#Je;76.' );
define( 'LOGGED_IN_KEY', 'l#r8JKnT1{p)0:-.8{,2fgP4iT.x#v-GH EXVz$Q5n+Qj5F}=Qg809gOwn`_lV~Y' );
define( 'NONCE_KEY', 'reJK>e3AMN|MCpeDw{YzPpky_Z+Dq]]J3ibM%:!~:v}a6.t}I8V-AnJ$$l%(n4J6' );
define( 'AUTH_SALT', 'Z2LnC/mhhq4n@S)]sqS3!(<P<?.XdW{U>0SOYtOMCQpTiFtvFu_?) 1_2D&pAH3Q' );
define( 'SECURE_AUTH_SALT', 'nGYRM8,1H<l34?}%>[:?-+73ni.Op<B?Xm6krS/-a#uDf6W?q;[r$=D2<5EbewKT' );
define( 'LOGGED_IN_SALT', '&]rrX7ThM/8_HcWn=`_+^;fUU,!jB;:})gyif2!^0phSj)^0l%L m2vmk,`;FeAW' );
define( 'NONCE_SALT', 'GS@V{k6k4j%ZF9y~F$x|&@!5(9~jD%L1G=,fcP*ppOZuvoe2mhu-AS5+TI&>soV6' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'vp_';

define( 'DISALLOW_FILE_EDIT', true );

 
define('WP_MEMORY_LIMIT', '128M');
/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define( 'WP_DEBUG', false );

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

