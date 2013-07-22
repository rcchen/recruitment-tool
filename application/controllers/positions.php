<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Positions extends CI_Controller {

	public function index()
	{

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Get a list of existing positions
		$p = new Position();
		$data['positions'] = $p->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'positions';

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('position/index');
		$this->load->view('footer');

	}

	public function add()
	{

		// Check to see if the user is logged in
		$u = new User();
		$u->where('id', $this->session->userdata('user_id'))->get();

		// Add it to data to put into the files
		$data['user'] = $u;
		$data['sidebar_active'] = 'positions';

		// Get a list of existing positions
		$c = new Company();
		$data['companies'] = $c->get();

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('position/add', $data);
		$this->load->view('footer');

	}

	public function action_create()
	{

		// Create the new position
		$p = new Position();
		$p->title = $this->input->post('title');
		$p->location = $this->input->post('location');
		$p->description = $this->input->post('description');
		$p->company_id = $this->input->post('company_id');

		// Save to the database
		if ($p->save()) {

			redirect('/positions');

		}

		else {

			foreach ($p->error->all as $error) {
				echo $error;
			}

		}

	}

}