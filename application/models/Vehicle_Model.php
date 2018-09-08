<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_Model extends CI_Model {
	public function saveVehicle($data){
		$this->db->insert("vehecle_register",$data);
	}

  public function user_login($username,$password){
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query = $this->db->get('login');

    if($query->num_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }

	public function view_vehicle(){
		$query = $this->db->get('vehecle_register');
		return $query;
	}

}
