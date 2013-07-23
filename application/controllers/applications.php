<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Applications extends CI_Controller {

	public function index()
	{

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Get a list of existing positions
		$a = new Application();
		$data['applications'] = $a->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'applications';

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('application/index');
		$this->load->view('footer');

	}

	public function add()
	{

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'applications';

		// Get a list of existing positions
		$p = new Position();
		$data['positions'] = $p->get();

		// Get a list of all the users
		$users = new User();
		$data['users'] = $users->get();

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('application/add', $data);
		$this->load->view('footer');

	}

	public function action_create()
	{

		// Create the new position
		$a = new Application();
		$a->user_id = $this->input->post('user_id');
		$a->position_id = $this->input->post('position_id');

		// Save to the database
		if ($a->save()) {

			redirect('/applications');

		}

		else {

			foreach ($p->error->all as $error) {
				echo $error;
			}

		}

	}

}