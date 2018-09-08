<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}
	public function login(){
		$this->load->view('login');
	}

	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

		  $this->load->model("Vehicle_Model");
					if($this->Vehicle_Model->user_login($username,$password)){
							$session_data = array(
								'username' =>$username
							);
							$this->session->set_userdata($session_data);

						redirect(base_url().'index.php/Login_Controller/home');
					}
					else{
						$this->session->set_flashdata('error','Invalid Username or Password');
				  redirect(base_url()."index.php/Login_Controller/login");
					}
		}
		else{
			$this->login();
		}
	}

	public function home(){
		$this->load->view('vehicle_home');
	}

	public function enter(){
		if($this->session->userdata('username') != ''){
			echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
			echo '<label><a href="'.base_url().'index.php/Login_Controller/logout">Logout</a></label>';
		}
		else{
			 redirect(base_url()."index.php/Login_Controller/login");
		}
	}
	public function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url()."index.php/Login_Controller/login");
	}



}
