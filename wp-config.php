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
define('DB_NAME', 'pruebasdisidentte');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'P4nd45h0w');

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
define('AUTH_KEY', 'lswF>@?@${>5inq3Zh}BnKCmW,?qt`b2Q8MJ pi7?t=DA13Q$czl09HQFT($IchS');
define('SECURE_AUTH_KEY', ':{W<HOP*?R7QTJ~!R=fxOmGz5<StI1AW.`l#[w1u}-Qul*EfY3;23iLqf4/Tt0rK');
define('LOGGED_IN_KEY', '2@zO4WEd,+nBK!hr2Dcl4Q061n?0tQ*zGQa@z78#o1kSKdx*+s|[}mhJWzdcR(Rm');
define('NONCE_KEY', 'wgnKH#n>KOQ ]BYfHL%7/AE*ZBt+W[3c4;Fw(!fyj{7GED(ST]XNwZo1rKJV%?i2');
define('AUTH_SALT', 'w1#-Fz>-iUQ`usQeO~oT^iKwET4)7&5/o@b<ye<xKDq$J`2tt3JV!hR?F Ei!-J@');
define('SECURE_AUTH_SALT', '-k4tueEAV8A(5yM?,icR&}HYXQ+WXtNYI%/+5fVJ2)_dQ{QW;lHT6bDx|6lt]QF:');
define('LOGGED_IN_SALT', '7vdZVXgoJQ&.2*`p$}DOzU3%A)sGINPL=LtxV02piH75$i{hTVnnj7oMfwfbuUyJ');
define('NONCE_SALT', 'PXa$GsX^{0__=H+w%^_iTp]v>@Ls^M=z sJYsn6Mh2/je&GtI3#61jtvG|>~b/.A');

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

