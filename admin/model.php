<?php
namespace wpplex\WP_MVC\Admin;

/**
 * Admin Model 
 *
 * @class Model 
 * @package app/core
 * @author Abid Omar
 */
abstract class Model {
	protected $data = array();

	public function __construct() {

	}

	public function get_data() {
		return $this->data;
	}
}
