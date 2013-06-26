<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends MY_Model{

	var $id = 0; var $sunbed = 0; var $date = '';
	
	function __construct(){
		parent::__construct();
	}
	
	function getSunbedsOnDate($date){
		
		$this->db->select('sunbeds.number');
		$this->db->from('booking');
		$this->db->join('sunbeds','booking.sunbed = sunbeds.number');
		$this->db->where('booking.date',$date);
		$this->db->where('sunbeds.status',0);
		$this->db->order_by('number');
		$query = $this->db->get();
		$data = $query->result_array();
		if(!empty($data)):
			$numbers = '';
			for($i=0;$i<count($data);$i++):
				$numbers .= '#sunbed-'.(string)$data[$i]['number'];
				if(isset($data[$i+1])):
					$numbers .= ',';
				endif;
			endfor;
			return $numbers;
		endif;
		return NULL;
	}

	function deleteFreeSunbeds($numbers,$date){
		
		$this->db->where_in('sunbed',$numbers);
		$this->db->where('date',$date);
		$this->db->delete('booking');
		return $this->db->affected_rows();
	}
	
	function addEngagedSunbeds($numbers,$date){
		
		$this->deleteFreeSunbeds($numbers,$date);
		
		for($i=0;$i<count($numbers);$i++):
			$data[] = array(
				'sunbed' => $numbers[$i],
				'date' => $date
			);
		endfor;
		$this->db->insert_batch('booking',$data);
		return TRUE;
	}
}