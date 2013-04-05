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
			$photo = file_get_contents($_FILES['photo']['tmp_name']);
			if($photo):
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
	
	/******************************************** security *******************************************************/
	public function securityOperationItem(){
		
		if(!$this->input->is_ajax_request()):
			show_error('В доступе отказано');
		endif;
		$json_request = array('status'=>FALSE,'message'=>'');
		$data = trim($this->input->post('parameters'));
		if($data):
			$data = preg_split("/&/",$data);
			for($i=0;$i<count($data);$i++):
				$dataid = preg_split("/=/",$data[$i]);
				$dataval[$dataid[0]] = $dataid[1];
			endfor;
			if($dataval):
				$password = $this->users->read_field($this->user['uid'],'users','password');
				if($password == md5($dataval['password'])):
				switch($dataval['operation']):
					case 'locked-account':
						$this->users->update_field($dataval['item'],'active',0,'users');
						$this->send_notification(1,$dataval['item']);
						$json_request['status'] = TRUE;
						$json_request['message'] = 'Аккаунт заблокирован';
						break;
					case 'delete-account':
						$this->send_notification(3,$dataval['item']);
						$classID = $this->users->read_field($dataval['item'],'users','class');
						$userID = $this->users->read_field($dataval['item'],'users','user_id');
						$className = $this->manual_users->read_field($classID,'manual_users','table');
						$result = $this->users->delete_record($dataval['item'],'users');
						if($result && ($classID > 1)):
							$this->load->model($className);
							$this->$className->delete_record($userID,$className);
							$this->load->model('teachers_subjects');
							$this->teachers_subjects->setItemDefaultValue('teacher',$userID,'teachers_subjects');
						endif;
						if($result):
							$json_request['status'] = TRUE;
							$json_request['message'] = '<img src="'.site_url('img/check.png').'" alt="" /> Аккаунт удален';
						else:
							$json_request['message'] = '<img src="'.site_url('img/no-check.png').'" alt="" /> Ошибка при удалении';
						endif;
						break;
					case 'delete-subject':
						$this->load->model('university_subjects');
						$subject_university = $this->university_subjects->read_field($dataval['item'],'university_subjects','university');
						$this->load->model('university_keepers');
						$university = $this->university_keepers->read_field($this->user['user_id'],'university_keepers','university');
						if($subject_university == $university):
							$result = $this->university_subjects->delete_record($dataval['item'],'university_subjects');
							if($result):
								//УДАЛЯЕМ ВСЮ ИНФОРМАЦИЮ ЗАКРЕПЛЕННУЮ ЗА ПРЕДМЕТОМ
								$this->load->model('teachers_subjects');
								$this->teachers_subjects->setItemDefaultValue('subject',$dataval['item'],'teachers_subjects');
								$json_request['status'] = TRUE;
								$json_request['message'] = '<img src="'.site_url('img/check.png').'" alt="" /> Предмет удален';
							else:
								$json_request['message'] = '<img src="'.site_url('img/no-check.png').'" alt="" /> Ошибка при удалении';
							endif;
						else:
							$json_request['message'] = "Ошибка доступа";
						endif;
						break;
					case 'delete-news':
						$this->load->model('university_news');
						$news_university = $this->university_news->read_field($dataval['item'],'university_news','university');
						if($news_university == $this->user['uid']):
							$result = $this->university_news->delete_record($dataval['item'],'university_news');
							if($result):
								$json_request['status'] = TRUE;
								$json_request['message'] = '<img src="'.site_url('img/check.png').'" alt="" /> Новость удалена';
							else:
								$json_request['message'] = '<img src="'.site_url('img/no-check.png').'" alt="" /> Ошибка при удалении';
							endif;
						else:
							$json_request['message'] = "Ошибка доступа";
						endif;
						break;
					case 'delete-faculty':
						$this->load->model('university_facults');
						$faculty_university = $this->university_facults->read_field($dataval['item'],'university_facults','university');
						if($faculty_university == $this->user['uid']):
							$result = $this->university_facults->delete_record($dataval['item'],'university_facults');
							if($result):
								//УДАЛЯЕМ ИНФОРМАЦИЮ О ФАКУЛЬТЕТЕ
								$this->load->model('university_chair');
								$this->university_chair->delete_records($dataval['item']);
								$json_request['status'] = TRUE;
								$json_request['message'] = '<img src="'.site_url('img/check.png').'" alt="" /> Факультет удален';
							else:
								$json_request['message'] = '<img src="'.site_url('img/no-check.png').'" alt="" /> Ошибка при удалении';
							endif;
						else:
							$json_request['message'] = "Ошибка доступа";
						endif;
						break;
					case 'delete-chair':
						if($this->session->userdata('current_faculty')):
							$this->load->model('university_facults');
							$faculty_university = $this->university_facults->read_field($this->session->userdata('current_faculty'),'university_facults','university');
							if($faculty_university == $this->user['uid']):
								$this->load->model('university_chair');
								$result = $this->university_chair->delete_record($dataval['item'],'university_chair');
								if($result):
									//УДАЛЯЕМ ИНФОРМАЦИЮ О КАФЕДРЕ
									$json_request['status'] = TRUE;
									$json_request['message'] = '<img src="'.site_url('img/check.png').'" alt="" /> Кафедра удалена';
								else:
									$json_request['message'] = '<img src="'.site_url('img/no-check.png').'" alt="" /> Ошибка при удалении';
								endif;
							else:
								$json_request['message'] = "Ошибка доступа";
							endif;
						endif;
						break;
				endswitch;
				else:
					$json_request['message'] = 'Неверный пароль';
				endif;
			endif;
		endif;
		echo json_encode($json_request);
	}
}