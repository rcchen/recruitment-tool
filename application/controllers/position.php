<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Position extends CI_Controller {

	public function index()
	{

		

		$this->load->view('header');
		$this->load->view('position/index');
		$this->load->view('footer');

	}

}