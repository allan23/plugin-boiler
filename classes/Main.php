<?php

namespace Migrator;

use Migrator\Traits\Singleton;

/**
 * Class Main
 * @package Migrator
 */
class Main {
	use Singleton;

	/**
	 * The first method called after instantiation.
	 */
	public function init() {
		$this->hooks();
	}

	/**
	 * Hooks such as actions and filters.
	 */
	public function hooks() {
		add_action( 'admin_menu', [ __NAMESPACE__ . '\Settings', 'get_instance' ] ); // Settings Page.
	}
}
