<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Language Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/language_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Lang
 *
 * Fetches a language variable and optionally outputs a form label
 *
 * @access	public
 * @param	string	the language line
 * @param	string	the id of the form element
 * @return	string
 */
/*if ( ! function_exists('lang'))
{
	function lang($line, $id = '')
	{
		$CI =& get_instance();
		$line = $CI->lang->line($line);

		if ($id != '')
		{
			$line = '<label for="'.$id.'">'.$line."</label>";
		}

		return $line;
	}
}*/

if ( ! function_exists('lang'))
{
	function lang($line, $id = '',$find = array(),$replace = array())
	{
		$CI =& get_instance();
		$oldLine = $line;
		$line = $CI->lang->line($line);

		if ($id != '')
		{
			$line = '<label for="'.$id.'">'.$line."</label>";
		}
		if($line == '') {
			$line = ucfirst(str_replace('_',' ',$oldLine));
			// update database
			require_once( BASEPATH .'database/DB'. EXT );
			$db =& DB();
			$db->select("*");
			$db->from("static_translations");
			$db->where("key_index",$oldLine);
			$query = $db->get();
			$res = $query->row_array();
			if(empty($res)) {
				$insert['created_date'] = date("Y-m-d H:i:s");
				$insert['key_index'] = $oldLine;
				$insert['title'] = $line;
				$insert['title_ar'] = $line;
				$insert['title_fr'] = $line;
				$db->insert("static_translations",$insert);
			}
			$line = str_replace($find,$replace,$line);
			return $line;
		}
		else {
			$line = str_replace($find,$replace,$line);
			return $line;
		}
	}
}


// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./system/helpers/language_helper.php */