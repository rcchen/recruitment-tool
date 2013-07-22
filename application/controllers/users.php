<?php

class Users extends CI_Controller {

	public function index() {
	
		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'users';

		// Retrieve all the users in the system
		$u = new User();
		$u->get();

		// Save it to data to pass to the view
		$data['users'] = $u;

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('footer');

	}

	public function add() {

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'users';

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('user/add');
		$this->load->view('footer');

	}

	public function action_create() {

		// Create the new user from the POST data
		$u = new User();
		$u->first_name = $this->input->post('first_name');
		$u->last_name = $this->input->post('last_name');
		$u->email = $this->input->post('email');
		$u->password = $this->phpass->hash($this->input->post('password'));

		// Save to the database (validation applies)
		if ($u->save()) {
			
			// Redirect to the main user list
			redirect('/users');

		}

		// If validation fails, get the errors on each property
		else {
			foreach ($u->error->all as $error) {
				echo $error;
			}
		}

	}

}