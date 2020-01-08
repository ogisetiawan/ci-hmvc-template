<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('bcrypt');
		$this->load->database();
		$this->load->model('loginmodels');
	}
	private function template($page, $data = NULL)
	{
		$data['header']     = $this->parser->parse('partials/_header', $data, TRUE);
		$data['content']    = $this->parser->parse($page, $data, TRUE);
		$data['javascript'] = $this->parser->parse('partials/_javascript', $data, TRUE);
		$this->parser->parse('partials/master', $data);
	}
	public function index()
	{
		$meta = array(
			'title'       => 'Codeigniter - Login Page',
			'keyword'     => 'HMVC, Codeigniter 3, Template',
			'description' => 'Temaplate HMVC Codeigniter 3'
		);
		$this->template('login', $meta);
	}
	public function check_login()
	{
		$mail        = $this->security->xss_clean($this->input->post('mail'));
		$pass        = $this->security->xss_clean($this->input->post('pass'));
		$result      = $this->loginmodels->cek_login($mail, $pass);
		$set_session = $this->loginmodels->cek_user($mail, $pass);
		foreach ($set_session as $value) {
			$session = array(
				'username'   => $value->username,
				'status'     => 1,
				'logged_rnd' => TRUE,
			);
		}
		$this->session->set_userdata($session);
		echo json_encode($result);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url(''));
    }
	public function insert_login()
	{
		$email      = 'user@user2.com';
		$pass       = $this->bcrypt->hash_password('1td3v');
		$username   = 'User 2';
		$created_at = '2019-03-26 14:13:13';
		$updated_at = '2019-03-26 14:13:13';
		$userData   = array(
			'email'      => $email,
			'password'   => $pass,
			'username'   => $username,
			'status'     => 1,
			'created_at' => $created_at,
			'updated_at' => $updated_at,
		);
		$this->db->insert('user', $userData);
	}
}
