<?php
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View {
	
	public function show_view($templte_name)
	{
		$this->view('templates/header', $vars);
		$this->view($template_name, $vars);
		$this->view('templates/footer', $vars);
	}
}
