<?
class User extends Koolyte_Controller {
	function login(){
		$this->load->model("account");
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->_username = $this->input->post('username');                                //用户名
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('index/user/login');
		} else {
			$this->account->login($this->_username);
			//$data['message'] = $this->session->userdata('username').' You are logged in! Now take a look at the '.anchor('account/dashboard', 'Dashboard');
			$data['message']= "You've loged in.";
			//print_r($this->session->all_userdata()); die();
			$this->load->view('index/user/note', $data);
		}
	}
	
	function username_check($username) {
		$this->load->model("account");
		if ($this->account->get_by_username($username)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('username_check', '用户名不存在');
			return FALSE;
		}
	}
	/**
	* check password
	*/
	function password_check($password) {
		//$password = md5($this->salt.$password);
		if ($this->account->password_check($this->_username, $password)) {
			return TRUE;
		} else {
			$this->form_validation->set_message('password_check', '用户名或密码不正确');
			return FALSE;
		}
	}
	
	
	
	

/**
* Register
*/
	function register() {
		$this->load->model("account");
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		if ($this->form_validation->run() == FALSE) {
		//if ($this->input->post('submit')== NULL) {
			$this->load->view('index/user/register');
		} else {
			$username = $this->input->post('username');
			//$password = md5($this->salt.$this->input->post('password'));
			$password = $this->input->post("password");
			$email = $this->input->post('email');
			if ($this->account->add_user($username, $password, $email)) {
				//$data['message'] = "The user account has now been created! You can go ".anchor('account/index', 'here').'.';
				$data['message'] = "create successful";
			} else {
				$data['message'] = "register fail";
			}
			$this->load->view('index/user/note', $data);
		}
	}
	
	
	function username_exists($username) {
		$this->load->model("account");
		if ($this->account->get_by_username($username)) {
		$this->form_validation->set_message('username_exists', '用户名已被占用');
		return FALSE;
		}
		return TRUE;
	}
	
	function email_exists($email) {
		$this->load->model("account");
		if ($this->account->email_exists($email)) {
			$this->form_validation->set_message('email_exists', '邮箱已被占用');
			return FALSE;
		}
		return TRUE;
	}


	/**
	* 用户退出
	* 已经登录则退出，否者转到details
	*/
	function logout() {
		$this->load->model("account");
		if ($this->account->logout() == TRUE) {
			$this->load->view('index/user/logout');
		} else {
			$this->load->view('index/user/details');
		}
	}

}
?>

