<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		Kepler Gelotte
 * @copyright	Copyright (c) 2007, Neighbor Webmaster, Inc.
 * @license		http://www.codeignitor.com/user_guide/license.html
 * @link		http://www.codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Smarty Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Smarty
 * @author		Kepler Gelotte
 * @link		http://www.codeigniter.com/user_guide/libraries/parser.html
 */
require_once( BASEPATH.'libs/smarty/libs/Smarty.class.php' );
class Smarty_lib extends Smarty {
	
	public function __construct() {
	
		parent::__construct();
		
		$this->error_unassigned = false; 
		
		$this->compile_dir = APPPATH . "cache/templates_c";
		$this->template_dir = APPPATH . "views/templates";
		$this->assign( 'APPPATH', APPPATH );
		$this->assign( 'BASEPATH', BASEPATH );
		
		log_message('debug', 'Smarty Class Initialized');
	}


	/**
	 *  Parse a template using the Smarty engine
	 *
	 * This is a convenience method that combines assign() and
	 * display() into one step. 
	 *
	 * Values to assign are passed in an associative array of
	 * name => value pairs.
	 *
	 * If the output is to be returned as a string to the caller
	 * instead of being output, pass true as the third parameter.
	 *
	 * @access	public
	 * @param	string
	 * @param	array
	 * @param	bool
	 * @return	string
	 */
	public function view($template, $data = array(), $return = FALSE)
	{
		foreach ($data as $key => $val)
		{
			$this->assign($key, $val);
		}
		
		if ($return == FALSE)
		{
			$CI =& get_instance();
			$CI->output->set_output($this->fetch($template));
			return;
		}
		else
		{
			return $this->fetch($template);
		}
	}
}
// END Smarty Class
