<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends MY_Model{

	var $id = 0; var $number = 0; var $status = 0;
	var $date = '';
	
	function __construct(){
		parent::__construct();
	}
	
	function insert_record($data){

		$this->number = $data['number'];
		$this->date = date("Y-m-d H:i:s");
		$this->db->insert('booking',$this);
		return $this->db->insert_id();
	}
	
	function update_record($data){
		
		$this->db->set('number',$data['number']);
		$this->db->where('id',$data['id']);
		$this->db->update('booking');
		return $this->db->affected_rows();
	}
	
}