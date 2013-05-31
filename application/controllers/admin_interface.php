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
		$this->load->helper('date');
		$this->load->helper('text');
		$pagevar = array(
			'events' => $this->events->read_limit_records($per_page,$offset,'events','date','DESC'),
			'pagination' => $this->pagination('administrator/events',3,$this->users->count_all_records('events'),$per_page),
		);
		$this->session->set_userdata('backpath',site_url(uri_string()));
		$this->load->view("admin_interface/events/events-list",$pagevar);
	}
	
	public function insertEvent(){
		$this->load->helper('form');
		$this->session->unset_userdata('current_item');
		$this->load->view("admin_interface/events/insert-event");
	}

	public function editEvent(){
		
		$current_item = $this->session->userdata('current_item');
		if(!$current_item && $this->uri->total_segments() == 4):
			$this->session->set_userdata('current_item',$this->uri->segment(4));
			redirect('admin/events/edit');
		elseif(!$current_item && $this->uri->total_segments() == 3):
			redirect('admin/events');
		endif;
		$this->load->helper('date');
		$this->load->model('events');
		$this->load->helper('form');
		$pagevar = array(
			'event' => $this->events->eventInformation($current_item),
		);
		$pagevar['event']['date'] = swap_dot_date_without_time($pagevar['event']['date']);
		if(!$pagevar['event']):
			show_error('В доступе отказано');
		endif;
		$this->load->view("admin_interface/events/update-event",$pagevar);
	}
	
	public function booking(){
		
		$this->load->model('booking');
		$this->load->helper('date');
		$pagevar = array(
			'sunbeds' => $this->booking->read_records('booking'),
		);
		$this->session->set_userdata('backpath',site_url(uri_string()));
		$this->load->view("admin_interface/sunbeds/sunbeds-list",$pagevar);
	}
}