<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Guests_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
	}
	
	/*************************************************** Страницы ********************************************************/
	
	public function index(){
		
		$this->load->view("guests_interface/pages/index");
	}
	
	public function page(){
		
		$this->load->view("guests_interface/pages/".$this->uri->segment(1));
	}
	
	public function afisha(){
		
		$this->load->model('events');
		$this->load->helper('date');
		$this->load->helper('text');
		$pagevar = array(
			'events' => $this->events->read_records(),
		);
		$this->load->view("guests_interface/pages/afisha",$pagevar);
	}
	
	public function afishaView(){
		
		$this->load->model('events');
		$this->load->helper('date');
		$this->load->helper('text');
		$event = $this->events->record_exist('events','translit',$this->uri->segment(2));
		$pagevar = array(
			'event' => $this->events->read_record($event,'events'),
		);
		if(!$pagevar['event']):
			show_error('Запись не найдена');
		endif;
		$this->load->view("guests_interface/pages/afisha-view",$pagevar);
	}
	
	/******************************************* Авторизация и регистрация ***********************************************/
	
	public function loginIn(){
		
		$this->load->view("guests_interface/pages/sign-in");
	}
	
	public function logoff(){
		
		$this->session->unset_userdata(array('logon'=>'','userid'=>'','backpath'=>''));
		if(isset($_SERVER['HTTP_REFERER'])):
			redirect($_SERVER['HTTP_REFERER']);
		else:
			redirect('');
		endif;
	}
	
	/********************************************************************************************************************/
}