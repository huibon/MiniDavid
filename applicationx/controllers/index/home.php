<?php

class Home extends CI_Controller {

  public function index(){
    if ( ! file_exists('../applicationx/views/index/home.php')){
      show_404();
    }
    $data['title'] = 'Home'; // Capitalize the first letter
		
    $this->load->view('templates/header', $data);
    $this->load->view('index/home', $data);
    $this->load->view('templates/footer', $data);
  }
}

?>