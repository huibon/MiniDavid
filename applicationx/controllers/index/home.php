<?php

class Home extends Koolyte_Controller {

  public function index(){
    if ( ! file_exists('../applicationx/views/index/home.php')){
      show_404();
    }
    $data['title'] = 'Home'; // Capitalize the first letter
	$this->_load_css(CSS."style.css");
    $this->load->view('templates/header', $data);
    $this->load->view('index/home', $data);
    $this->load->view('templates/footer', $data);
  }
}

?>