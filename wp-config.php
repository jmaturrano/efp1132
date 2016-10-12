<?php
$abspath	=	str_replace(array('\efp1132', '/efp1132'),'/wp-config',ABSPATH);
include($abspath.'/server.php');
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
define('DB_NAME', $server['database']['efp1132']);

/** Tu nombre de usuario de MySQL */
define('DB_USER', $server['main']['user']);

/** Tu contraseña de MySQL */
define('DB_PASSWORD', $server['main']['pass']);

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', $server['main']['host']);

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');




/** Lenguaje de wordpress **/
define('WPLANG', 'es_PE');
/** Revisiones de POSTS **/
define('WP_POST_REVISIONS', 5);
/** Auto guardado de POSTS **/
define('WP_POST_REVISIONS', false);
/** Guardar las consultas en una constante **/
define('SAVEQUERIES', true );
/** Desactivar las actualizaciones automáticas **/
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
/** Desactivar el editor de temas y plugins **/
define('DISALLOW_FILE_EDIT', true);
/** Desactivar la instalación de temas y plugins **/
//define('DISALLOW_FILE_MODS', true);
/** No usar las versiones minificadas **/
define('CONCATENATE_SCRIPTS', false);


/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '3X?#cu:hm8yS `+B(;c:-wyrdKg!:./sb},|]Vvz<-S?6Jki0]V0qnX7+495869O');
define('SECURE_AUTH_KEY', 'g-G#/v|k0kI2~z|J>:+6EoHxTf6 YkKf}vOL#|Lg&Sk*jDJsv+|2jl!|:aKF]qg|');
define('LOGGED_IN_KEY', '~g[C|-~UCLzuH|ts)*=rY-[aUu$y~a?~$#w%Atn//x`d5>T:wu8,5!}%F@N}JLM:');
define('NONCE_KEY', '2U?o|<t}*wL6$BS|R0t40w^g[JRWWI#Z~ a_%2:Y]B2Wdr2)#C9<nmgGIkN~[T[~');
define('AUTH_SALT', '<6gR,x{gty_VtB@MV&JC{36`*@MAmMk[y6E/V|H@)O#3pBC~Dx1#dW7500gMy4bW');
define('SECURE_AUTH_SALT', '?y 6F-wpQduG{=!HzO({.Py[<86m_!I^.|/6eyxLF*@h4VV<m -Itk|(;TOhNk^o');
define('LOGGED_IN_SALT', 'P{IGIs/oSl c?`7y8DNqwZeb2dluaYG4S6z)tvH4<JW8>VUm@k,qn VrwM;v~Sg?');
define('NONCE_SALT', 'SnN:F9Ok[T,e);m?42Mm3<2E=~I }{Nz4~g),,GDj1-/1hw?oNY7rBztYzIl :mj');

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

