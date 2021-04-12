<?php


namespace Migrator;


use Migrator\Traits\Singleton;

class Settings {
	use Singleton;

	const VIEW = 'Main';

	public function init() {
		add_menu_page( 'Migrator', 'Migrator', 'manage_options', 'migrator', [
			$this,
			'main_page'
		] );
	}

	public function main_page() {
		Helpers::load_view( self::VIEW );
	}

}
