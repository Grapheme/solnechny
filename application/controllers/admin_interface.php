<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
		if(!$this->loginstatus):
			redirect('');
		endif;
	}
	
	/******************************************** cabinet *******************************************************/
	
	public function events(){
		
		$offset = intval($this->uri->segment(3));
		$per_page = 10;
		$this->load->model('events');
		$this->load->helper(array('date','text'));
		$pagevar = array(
			'events' => $this->events->read_limit_records($per_page,$offset,'events','date','DESC'),
			'pagination' => $this->pagination('administrator/events',3,$this->users->count_all_records('events'),$per_page),
		);
		$this->session->set_userdata('backpath',site_url(uri_string()));
		$this->load->view("admin_interface/events/events-list",$pagevar);
	}
	
	public function insertEvent(){
		$this->load->helper('form');
		$this->load->view("admin_interface/events/insert-event");
	}

	public function editEvent(){
		
		$this->load->helper(array('date','form'));
		$this->load->model('events');
		$pagevar = array(
			'event' => $this->events->eventInformation($this->uri->segment(4)),
		);
		$pagevar['event']['date'] = swap_dot_date_without_time($pagevar['event']['date']);
		if(!$pagevar['event']):
			show_error('В доступе отказано');
		endif;
		$this->session->set_userdata('current_item',$this->uri->segment(4));
		$this->load->view("admin_interface/events/update-event",$pagevar);
	}
	
	public function booking(){
		
		$pagevar = array(
			'sunbeds' => array(),
		);
		$this->session->set_userdata('backpath',site_url(uri_string()));
		$this->load->view("admin_interface/sunbeds/sunbeds-list",$pagevar);
	}
}