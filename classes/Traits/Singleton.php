<?php
/**
 * Trait for a class to be used as a singleton instance.
 *
 * @package Migrator
 */

namespace Migrator\Traits;

trait Singleton {

	/**
	 * An instance of the object to prevent duplication.
	 *
	 * @var object|null Instance of object.
	 */
	protected static $instance = null;

	/**
	 * Object constructor.
	 * Intentionally empty and protected.
	 */
	protected function __construct() {
	}

	/**
	 * Prevent the object from being cloned.
	 */
	final protected function __clone() {
	}

	/**
	 * Grabs an instance of the Person object.
	 *
	 * @return object
	 */
	final public static function get_instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
			if ( method_exists( self::$instance, 'init' ) ) {
				self::$instance->init();
			}
		}

		return self::$instance;
	}
}

