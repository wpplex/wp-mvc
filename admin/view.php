<?php
namespace omarabid\admin;

/**
 * Admin View 
 *
 * @class View 
 * @package app/core
 * @author Abid Omar
 */
abstract class View {
	/**
	 * Template filename
	 *
	 * @var string
	 */
	protected $template_id;

	/**
	 * Templating Engine
	 *
	 * @var object 
	 */
	protected $engine;

	/**
	 * Templating File Loader
	 *
	 * @var object
	 */
	protected $loader;

	/**
	 * Initialized template object
	 * 
	 * @var object
	 */
	protected $template;

	/**
	 *
	 * @param string $template_id
	 * @return void
	 */
	public function __construct( $data ) {
		// Add the template extension
		$this->template_id = $this->template_id . '.tpl';

		// Initialize the Twig Engine
		$this->loader = new \Twig_Loader_Filesystem( WPBP_DIR . '/app/templates/admin' );
		$this->engine = new \Twig_Environment( $this->loader );

		// Load the template into the Engine
		$this->template = $this->engine->loadTemplate( $this->template_id );

		$this->data = $data;
	}

	/**
	 * Render the template to HTML
	 *
	 * @return void
	 */
	public function display() {
		echo $this->template->render( $this->data );
	}	
}
