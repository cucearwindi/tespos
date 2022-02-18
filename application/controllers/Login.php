<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_users');
	}	
	
	public function index()
	{
		$sess_login	= $this->session->userdata('sess_login');
		if ($sess_login == 1) {
			redirect('data_master/master_produk');
		} else {
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('login/v_login.php', $data);
		}
	}

	public function act_login()
	{
		// var post
		$username 	      	= $this->input->post('user_id');
		$password 			= $this->input->post('password');
		// echo $username."<br>".$password;exit();
		
		// $check_login_result = $this->m_users->check_login($user_id);
		$check_login_result = $this->m_users->check_login($username, md5($password));
		if ($check_login_result == TRUE) {

			// set session
			$sess_array = array(
				'sess_login'				=> '1',
				'sess_user_name' 			=> $check_login_result['username'],
				'sess_id_role' 				=> $check_login_result['id_role']
			);
			$this->session->set_userdata($sess_array);
			redirect('data_master/master_produk');
		} else {
			$message = 'swal("Warning!", "Anda belum terdaftar sebagai user POS, silahkan hubungi HD terkait.", "warning");';
			$this->session->set_flashdata('message', $message);
			redirect('login');
		}

		$this->session->set_flashdata('message', $message);
		redirect('login');
	}

	public function logout()
	{
		// session destroy
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
