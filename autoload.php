<?php
/**
 * SPL Autoloader
 * Autoloads PHP classes within the Stayd namespace.
 *
 * @package       Stayd
 */

spl_autoload_register(
	function ( $class ) {
		// project-specific namespace prefix.
		$prefix = 'Migrator\\';

		// base directory for the namespace prefix.
		$base_dir = MIGRATOR_PATH . 'classes/';

		// does the class use the namespace prefix?
		$len = strlen( $prefix );

		if ( strncmp( $prefix, $class, $len ) !== 0 ) {
			return;
		}

		$relative_class = substr( $class, $len );

		$file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';
		// if the file exists, require it.
		if ( file_exists( $file ) ) {
			require $file;
		}
	}
);
