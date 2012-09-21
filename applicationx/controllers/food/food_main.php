<?php

class Food_main extends Koolyte_Controller {
  
  public function __construct(){
	parent::__construct();
  }
  
  public function index(){
    if ( ! file_exists('../applicationx/views/food/index.php')){
      show_404();
    }
    $this->data['template']['title'] .= 'Food Main Page'; // Capitalize the first letter
		
    $this->_render("food/index", $this->data);
  }
}

?>