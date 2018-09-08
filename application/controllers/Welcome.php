<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	PUBLIC function register(){
		echo "string";
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
