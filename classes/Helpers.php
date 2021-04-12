<?php


namespace Migrator;


class Helpers {

	/**
	 * Load a view.
	 *
	 * @param string $view Name of file to load.
	 * @param array $params Optional. Array of variables to send to the view.
	 */
	public static function load_view( string $view, array $params = [] ) {
		$view = str_replace( '../', '', $view );
		$view = MIGRATOR_PATH . 'views/' . $view . '.php';
		if ( file_exists( $view ) ) {
			include $view;
		} else {
			include MIGRATOR_PATH . 'views/Error.php';
		}
	}
}
