<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View {
	
	public function show_view($template_name, $vars=null)
	{
                $CI =& get_instance();
		$CI->load->view('templates/header', $vars);
		$CI->load->view($template_name, $vars);
		$CI->load->view('templates/footer', $vars);
	}
}
