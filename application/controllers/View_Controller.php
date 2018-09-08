<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_Controller extends CI_Controller {
	public function viewVehicle(){
    $this->load->model("Vehicle_Model");
    $data["view_vehicle"] = $this->Vehicle_Model->view_vehicle();
		$this->load->view('show_vehicle',$data);
	}

}
