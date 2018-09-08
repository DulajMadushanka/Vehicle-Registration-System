<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehicleShow_Controller extends CI_Controller {

	public function showVehicle(){

		$this->load->model("Vehicle_Model");
		$data["fetch_data"] = $this->Vehicle_Model->view_vehicle();
			$this->load->view('show_vehicle',$data);
	}

}
?>
