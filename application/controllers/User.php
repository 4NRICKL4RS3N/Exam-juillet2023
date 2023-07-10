<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');	
	}

	public function login()
	{

		$this->load->model('model_user');
		echo $mail = $this->input->post('email');
		echo $mdp = $this->input->post('mdp');

		$user = $this->model_user->getUserByMail($mail);
		if ($user != null) {
			if ($this->model_user->checkAdmin($user)) {
				if ($this->model_user->checkMdp($user, $mdp)) {
					$this->session->set_userdata('user', $user);
					redirect('user/login_admin');
				} else {
					redirect('user/login_error');
				}
			} else {
				if ($this->model_user->checkMdp($user, $mdp)) {
					$this->session->set_userdata('user', $user);
					redirect('user/login_success');
				} else {
					redirect('user/login_error');
				}
			}
		} else {
			redirect('user/login_error_account');
		}

	}

	public function login_error_account() {
		$data = array(
			'error' => 'Compte non existant'
		);
		$this->load->view('login', $data);
	}

	public function login_error() {
		$data = array(
			'error' => 'Mot de passe incorect'
		);
		$this->load->view('login', $data);
	}

	public function login_admin() {
		$this->load->view('back-office/index');
	}

	public function login_success() {
		$this->load->view('accueil');
	}
}