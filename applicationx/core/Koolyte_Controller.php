<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/***
	Customized Master Controller.
	data['template'] array is used within template files only (header, footer, imported CSS and Js)
***/
class Koolyte_Controller extends CI_Controller {
	
	var $data;
	
	public function __construct () {
		parent::__construct();
		$this->load->database();		//load mysql database
		$this->data['template']['css'] = array(); //CSS files
		$this->data['template']['libraries'] = array(); //Js libraries file
		$this->data['template']['title'] = "Koolyte - ";	 // Universal title	
	}
	
	/***
		View render function, read header and footer template and put page views between
		@para: an array of views needed to be display and data (optional)
	***/
	public function _render ($views = array(), $data = NULL) {
		if ($data == NULL) $data = $this->data;
		if (!is_array($views)) $views = array($views);	
		$this->load->view($prefix."layout/html_start", $data);
		$this->load->view($prefix."layout/header", $data);
		
		foreach ($views as $view) {
			$this->load->view($prefix.$view, $data);
		}
		
		$this->load->view($prefix."layout/footer", $data);
		$this->load->view($prefix."layout/html_end", $data);
	}
	
	/***
		Load Css function
		@params: an array of css files needs to be imported
	***/
	public function _load_css($css) {
		$css = (array)$css;
		foreach ($css as $c) {
			$this->data['template']['css'][] = $c;
		}
	}
	
	
	/***
		Libaray Css function
		@params: an array of libaray files(js etc...) needs to be imported
	***/
	public function _load_lib($lib) {		
		$lib = (array)$lib;
		foreach ($lib as $l) {
			$this->data['template']['libraries'][] = $this->lib->get($l);
		}
	}
}

