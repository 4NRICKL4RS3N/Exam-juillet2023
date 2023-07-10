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
		$mail = $this->input->post('email');
		$mdp = $this->input->post('mdp');
		
		if ($this->model_user->checkLogin($mail, $mdp) === true) {
			$id = $this->model_user->getIdByMail($mail);
			$this->session->set_userdata('mail',$mail);
			$this->session->set_userdata('id',$id['idUser']);
			redirect('accueil/index');
		} else {
			redirect('user/login_error');
		}
	}

	public function login_error() {
		$data = array(
			'error' => 'Email ou mot de passe incorect'
		);
		$this->load->view('login', $data);
	}

	public function login_success() {
		$this->load->view('page');
	}
}