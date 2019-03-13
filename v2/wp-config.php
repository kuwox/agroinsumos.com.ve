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
define('DB_NAME', 'agroinsumosdivi');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'linuxjournal');

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
define('AUTH_KEY', 'Ly/`7jRTN!R4!6E<[as4xL;_+%V-bk_qdrR`Q,g_RkTf{4M8MnL>:W7J`]M2NnQO');
define('SECURE_AUTH_KEY', 'kQ>>Y:?w)[dz4||ySZJX$LYi{#P^}Ff=BE%8i(;6h[qH<YZsq&~ySc,iO)ulqY.@');
define('LOGGED_IN_KEY', 'OSc=.GQ hS{m. Bu7_/QuvaX0SpkGo0(Q@Xk}%n#Qb}5Ui(/B8j4iWXP],dspG@h');
define('NONCE_KEY', '%#5$^qY%aA;BsPp^gxiczTKI4s}j.c,0@>8F:d^R}mK=9sk2 ;A?Ue)c%y<1Nnrd');
define('AUTH_SALT', 't5y!v#eZJ Ydm^vU6U#n ?;oKh#nEMCw~La+` rfZ*fV9wI,cm1x;b:CmUvCLXO6');
define('SECURE_AUTH_SALT', 'ArR8owAI$$woJ:V4~l+%_e3kP(3>6W!6d AgHCP?XqWjVW?zQkLLFq!se/&;G<>!');
define('LOGGED_IN_SALT', 'qy}YOm<9=tdXVAJa5TP+KihXlMa[afZrOe0Dx(r~!/!CHhT[DoH*5v2s5r1bW_ i');
define('NONCE_SALT', 'szrH>bCkYSg5l_GKkB$79R<?+:gJFM8m5D+bia7%])fMwnChce/,BbG#s|=2a3(h');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'da_';


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

