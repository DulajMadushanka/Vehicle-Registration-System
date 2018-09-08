<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehicleReg_Controller extends CI_Controller {
	public function register(){
		$this->load->view('vehicle_register');
	}

  public function form_validation(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules("register_no","Register No",'required|min_length[4]|max_length[10]|alpha_numeric|is_unique[vehecle_register.register_no]');
    //$this->form_validation->set_rules("brand","Brand",'required|alpha');
    $this->form_validation->set_rules("model","Model",'required|alpha_numeric');
    $this->form_validation->set_rules("colour","Colour",'required|alpha');
    $this->form_validation->set_rules("engine_no","Engine No",'required|min_length[4]|max_length[10]|numeric');
    $this->form_validation->set_rules("chasis_no","Chasis No",'required|min_length[4]|max_length[10]|numeric');
		$this->form_validation->set_message('alpha','The %s field must contain Characters');
		$this->form_validation->set_message('alpha_numeric','The %s field must contain Characters or numbers.');
		$this->form_validation->set_message('is_unique','The %s field value already entered.');

		if($this->form_validation->run()){
      $this->load->model("Vehicle_Model");
      $data = array(
          "register_no" =>$this->input->post("register_no"),
          "brand" =>$this->input->post("brand"),
          "model" =>$this->input->post("model"),
          "colour" =>$this->input->post("colour"),
          "engine_no" =>$this->input->post("engine_no"),
          "chasis_no" =>$this->input->post("chasis_no")
      );
			var_dump($data);
      $this->Vehicle_Model->saveVehicle($data);

      redirect(base_url()."index.php/VehicleReg_Controller/inserted");
    }
    else{
      $this->register();
    }



  }

  public function inserted(){
      $this->register();
  }

}
