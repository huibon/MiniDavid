<?php

class Home extends Koolyte_Controller {
  
  //public $data = array();
  
  public function __construct () {
	parent::__construct();
	//$this->data = $this->_get_data();
  }

  public function index(){
    if ( ! file_exists('../applicationx/views/index/home.php')){
      show_404();
    }
    $this->data['template']['title'] .= 'Home'; // Capitalize the first letter
	$this->_load_css(CSS."style.css");
    //$this->load->view('templates/header', $data);
    $this->_render("index/home", $this->data);
    //$this->load->view('templates/footer', $data);
  }
}

?>