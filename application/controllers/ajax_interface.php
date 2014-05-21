<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
	}
	
	/******************************************** guests interface *******************************************************/
	public function loginIn(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'message'=>'Ошибка при авторизации!<br/>Неверный логин или пароль','path'=>base_url());
		$postdata = $this->input->post();
		if($postdata):
			$user = $this->users->auth_user($postdata['email'],$postdata['password']);
			if($user):
				if($user['active']):
					$this->session->set_userdata(array('logon'=>md5($postdata['email']),'userid'=>$user['id']));
					$json_request['path'] .= ADMIN_START_PAGE;
					$json_request['status'] = TRUE;
				else:
					$json_request['message'] = 'Ошибка при авторизации!<br/>Аккаунт не активирован';
				endif;
			endif;
		endif;
		echo json_encode($json_request);
	}
	
	public function sendFeedBack(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'message'=>'Сообщенеи не отправлено');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user-name','','required|trim|xss_clean');
		$this->form_validation->set_rules('user-email','','required|trim|valid_email|xss_clean');
		$this->form_validation->set_rules('user-content','','required|trim|xss_clean');
		if($this->form_validation->run()):
			ob_start();?>
<p>Здравствуйте, <em>Администратор</em></p>
<p>Вам сообщение от <?=$_POST['user-name']?></p>
<p>Email адрес пользователя: <?=$_POST['user-email']?></p>
<p>Сообщение от пользователя:<br/><?=$_POST['user-content']?></p>
			<?php $mailtext = ob_get_clean();
			$this->send_mail('info@sk-stroikov.ru',$_POST['user-email'],$_POST['user-name'],'Форма обратной связи Solnechny-club.ru',$mailtext);
			$json_request['status'] = TRUE;
			$json_request['message'] = 'Сообщение отправлено';
		else:
			$json_request['message'] = 'Неверно заполнены поля';
		endif;
		echo json_encode($json_request);
	}

	/*********************************************** events **********************************************************/
	
	public function insertEvent(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$insert = $this->input->post();
		if($insert):
			$this->load->model('events');
			$insert['date'] = preg_replace("/(\d+)\.(\w+)\.(\d+)/i","\$3-\$2-\$1",$insert['date']);
			$insert['translit'] = $this->translite(trim($insert['title']));
			$event_id = $this->events->insert_record($insert);
			if($event_id):
				if(isset($_FILES['photo'])):
					if($_FILES['photo']['error'] != 4):
						$photo = file_get_contents($_FILES['photo']['tmp_name']);
						if($photo):
							$this->events->update_field($event_id,'photo',$photo,'events');
						endif;
					endif;
				endif;
				$text = '<img src="'.site_url('images/check.png').'" alt="" /> Мероприятие добавлено<hr/>';
				$text .= '<ul><li><a href="'.site_url(ADMIN_START_PAGE.'/add').'">Добавить мероприятие</a></li>';
				if($event_id):
					$text .= '<li><a href="'.site_url(ADMIN_START_PAGE.'/edit/'.$event_id).'">Редактировать созданное мероприятие</a></li>';
					$text .= '<li><a href="'.site_url('events').'" target="_blank">Просмотреть созданное мероприятие</a></li>';
				endif;
				$text .= '<li><a href="'.site_url(ADMIN_START_PAGE).'">К списку мероприятий</a></li></ul>';
				echo $text;
			endif;
		endif;
	}
	
	public function updateEvent(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$update = $this->input->post();
		if($update && $this->session->userdata('current_item')):
			$this->load->model('events');
			$update['date'] = preg_replace("/(\d+)\.(\w+)\.(\d+)/i","\$3-\$2-\$1",$update['date']);
			$update['translit'] = $this->translite(trim($update['title']));
			$update['id'] = $this->session->userdata('current_item');
			$this->events->update_record($update);
			$this->session->unset_userdata('current_item');
			$text = '<img src="'.site_url('images/check.png').'" alt="" /> Мероприятие сохранено<hr/>';
			$text .= '<ul><li><a href="'.site_url('events').'" target="_blank">Просмотреть мероприятие</a></li>';
			$text .= '<li><a href="'.site_url(ADMIN_START_PAGE).'">К списку меропритий</a></li></ul>';
			echo $text;
		else:
			$text = '<img src="'.site_url('images/no-check.png').'" alt="" /> Ошибка при сохранении<hr/>';
		endif;
	}
	
	public function deleteEvent(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$event = $this->input->post('parameter');
		$json_request = array('status'=>FALSE,'message'=>'');
		if($event):
			$this->load->model('events');
			$this->events->delete_record($event,'events');
			$json_request['status'] = TRUE;
			$json_request['message'] = '<img src="'.site_url('img/check.png').'" alt="" /> Мероприятие удалено';
		else:
			$json_request['message'] = '<img src="'.site_url('img/no-check.png').'" alt="" /> Ошибка при удалении<hr/>';
		endif;
		echo json_encode($json_request);
	}
	
	public function updateEventPhoto(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'responseText'=>'','responsePhotoSrc'=>'');
		if($_FILES['photo']['error'] != 4):
			if($photo = file_get_contents($_FILES['photo']['tmp_name'])):
				$this->load->model('events');
				$event_id = $this->session->userdata('current_item');
				if($event_id):
					$this->events->update_field($event_id,'photo',$photo,'events');
					$this->load->helper('string');
					$json_request['responsePhotoSrc'] = site_url('loadimage/events/'.$event_id.'?'.random_string('alpha',5));
					$json_request['status'] = TRUE;
				endif;
			endif;
		endif;
		if($json_request['status']):
			$json_request['responseText'] = 'Файл загружен';
		else:
			$json_request['responseText'] = 'Ошибка при загрузке';
		endif;
		echo json_encode($json_request);
	}
	
	public function changeEventStatus(){
		
		if(!$this->input->is_ajax_request()):
			show_error('Аccess denied');
		endif;
		$json_request = array('status'=>FALSE);
		$postdata = $this->input->post('postdata');
		if($postdata):
			$this->load->model('events');
			$currentStatus = $this->events->read_field($postdata,'events','arhive');
			if(!$currentStatus):
				$this->events->update_field($postdata,'arhive',1,'events');
				$json_request['status'] = TRUE;
			else:
				$this->events->update_field($postdata,'arhive',0,'events');
				$json_request['status'] = FALSE;
			endif;
		endif;
		echo json_encode($json_request);
	}
	
	/********************************************** sunbeds *******************************************************/
	
	public function setSundebStatuses(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		if(!$this->loginstatus):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE);
		$sunbeds = $this->input->post('sunbeds');
		$metod = $this->input->post('metod');
		$date = preg_replace("/(\d+)\.(\w+)\.(\d+)/i","\$3-\$2-\$1",$this->input->post('date'));
		if($sunbeds != FALSE && $metod != FALSE):
			$sunbeds = json_decode($sunbeds,TRUE);
			array_pop($sunbeds['numbers']);
			$this->load->model('booking');
			if($metod == 'free'):
				$this->booking->deleteFreeSunbeds($sunbeds['numbers'],$date);
			elseif($metod == 'engaged'):
				$this->booking->addEngagedSunbeds($sunbeds['numbers'],$date);
			endif;
			$json_request['status'] = TRUE;
		endif;
		echo json_encode($json_request);
		
		
	}

	public function getSundebStatuses(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		if(!$this->loginstatus):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'sunbeds'=>array());
		if($this->input->post('date') != FALSE):
			$date = preg_replace("/(\d+)\.(\w+)\.(\d+)/i","\$3-\$2-\$1",$this->input->post('date'));
		else:
			$date = date("Y-m-d");
		endif;
		$this->load->model('booking');
		if($json_request['sunbeds'] = $this->booking->getSunbedsOnDate($date)):
			$json_request['status'] = TRUE;
		endif;
		echo json_encode($json_request);
	}
	
}