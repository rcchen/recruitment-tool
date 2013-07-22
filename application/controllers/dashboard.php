<?php

class Dashboard extends CI_Controller {

	private function dashboard_defaults() {
		
	}

	public function index() {

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'dashboard';

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('dashboard/index');
		$this->load->view('footer');

	}

}