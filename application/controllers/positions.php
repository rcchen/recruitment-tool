<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Positions extends CI_Controller {

	public function index()
	{

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'positions';

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('position/index');
		$this->load->view('footer');

	}

}