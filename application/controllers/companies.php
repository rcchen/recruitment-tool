<?php

class Companies extends CI_Controller {

	public function index() {

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'companies';

		// Get all the companies
		$c = new Company();
		$c->get();
		$data['companies'] = $c;

		// Load the corresponding views
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('company/index', $data);
		$this->load->view('footer');

	}

	public function add() {

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'users';

		// Load the corresponding views
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('company/add', $data);
		$this->load->view('footer');

	}

	public function action_create() {

		// Create the new company
		$c = new Company();
		$c->name = $this->input->post('name');
		$c->url = $this->input->post('url');

		// Save to the database (validation applies)
		if ($c->save()) {

			// Redirect to the main company list
			redirect('/companies');

		}

		// If validation fails, get errors
		else {
			foreach ($c->error->all as $error) {
				echo $error;
			}
		}

	}

}