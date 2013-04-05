<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Events extends MY_Model{

	var $id = 0; var $booking = 0; var $arhive = 0;
	var $title = ''; var $announce = ''; var $content = '';
	var $date_begin = ''; var $photo = ''; var $date = ''; var $translit = '';

	function __construct(){
		parent::__construct();
	}
	
	function insert_record($data){

		$this->translit = $data['translit'];
		$this->booking = $data['booking'];
		$this->title = htmlspecialchars($data['title']);
		$this->announce = $data['announce'];
		$this->content = $data['content'];
		$this->date_begin = htmlspecialchars($data['date_begin']);
		$this->date = $data['date'];
		$this->db->insert('events',$this);
		return $this->db->insert_id();
	}
	
	function update_record($data){
		
		$this->db->set('translit',$data['translit']);
		$this->db->set('booking',$data['booking']);
		$this->db->set('title',$data['title']);
		$this->db->set('announce',$data['announce']);
		$this->db->set('content',$data['content']);
		$this->db->set('date_begin',$data['date_begin']);
		$this->db->set('date',$data['date']);
		$this->db->where('id',$data['id']);
		$this->db->update('events');
		return $this->db->affected_rows();
	}
	
	function read_records($arhive = FALSE){
		
		$this->db->select('id,translit,title,announce,date');
		$this->db->order_by('date','DESC');
		$query = $this->db->get_where('events',array('arhive'=>$arhive));
		$data = $query->result_array();
		if($data) return $data;
		return NULL;
	}
	
	function eventInformation($event){
		
		$this->db->select('id,booking,title,announce,content,date_begin,date');
		$query = $this->db->get_where('events',array('id'=>$event),1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return FALSE;
	}
	
}