<?php

class Resto_main extends CI_Controller {

  public function index(){
    if ( ! file_exists('../applicationx/views/resto/index.php')){
      show_404();
    }
    $data['title'] = 'Restaurant Main'; // Capitalize the first letter
		
    $this->load->view('templates/header', $data);
    $this->load->view('resto/index', $data);
    $this->load->view('templates/footer', $data);
  }
}

?>