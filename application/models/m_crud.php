<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function getUser()
	{
		$this->load->view('welcome_message');
	}
}
