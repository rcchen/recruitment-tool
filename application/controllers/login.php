<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');

	}

	public function verify()
	{

		// Get POST variables
		$candidate_email = $this->input->post('email');
		$candidate_password = $this->input->post('password');

		// Find the user
		$u = new User();
		$u->get_by_email($this->input->post('email'));
		
		// Validate the password
		if ($this->phpass->check($candidate_password, $u->password)) {
			$this->session->set_userdata('user_id', $u->id);
			redirect('/dashboard');
		} 

		// Create temporary session data for failure
		else {
			$this->session->set_flashdata('notice', 'Incorrect email or password. Please try again.');
			redirect('/login');
		}

	}

}