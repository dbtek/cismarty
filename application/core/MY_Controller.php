<?php

class MY_Controller extends CI_Controller {

	/**
	 * 
	 * @var Smarty_lib
	 */
	var $smarty;
	
	/**
	 * 
	 * @var CI_Loader
	 */
	var $load;
	
	/**
	 * 
	 * @var CI_Session
	 */
	var $session;
	
	/**
	 * 
	 * @var CI_Input
	 */
	var $input;
	
	public function __construct($profiler = TRUE) {
	
		parent::__construct();
		
		$this->smarty =& $this->smarty_lib;
	}
}
