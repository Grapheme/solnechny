<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Union extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	/********************************************* users lists ********************************************************/
	
	function studentsListByPages($class,$count,$offset){
		
		$query = "SELECT users.id,users.user_id,users.email,users.signdate,users.active,learning.name,learning.surname,learning.time_zone,learning.contacts,learning.note,learning.teacher,languages.name AS language FROM users INNER JOIN learning ON users.user_id = learning.id INNER JOIN languages ON users.language = languages.id WHERE users.class = $class ORDER BY users.signdate DESC,users.id LIMIT $offset,$count";
		$query = $this->db->query($query);
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	/*****************************************************************************************************************/
}