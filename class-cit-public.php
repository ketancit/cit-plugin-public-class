<?php

namespace Cit_Public\Frontend;

defined( 'ABSPATH' ) || exit;

/**
 * Class responsible for initiation and handling of all the shortcodes. 
 */
class Cit_Public_Class
{

	private static $_instance = null;

	public static function get_instance() {
		if ( ! isset( self::$_instance ) ) {
			self::$_instance = new self;
		}

		return self::$_instance;
	}

	/**
	 * Constructor of the class
	 */
	private function __construct()
	{
	}
}

Cit_Public_Class::get_instance();