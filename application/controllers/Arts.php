<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arts extends CI_Controller {
	
	var $data = array();
	public function index()
	{	
		$data['academics'] = $this->Ku_users->get_progrms_full_title();
		$data['s_images'] = $this->Ku_users->get_slider_imgs();
		$data['ann'] = $this->Ku_users->get_announcements();
		$data['aboutus'] =  $this->Ku_users->get_aboutus();
		$data['events'] = $this->Ku_users->get_three_event();
		$data['news'] = $this->Ku_users->get_all_latest_news();
		$data['active'] = $this->Ku_users->get_all_active_news();
		$data['life'] =  $this->Ku_users->get_sdtlife();
		$data['tour'] =  $this->Ku_users->get_tour();
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/body',$data);
		$this->load->view('templates/footer',$data);

	}
public function undergraduate(){
	
	if($this->input->get('u')){
	    $id = $this->input->get('u');
	    $data['academics'] = $this->Ku_users->get_progrms_full_title();
	    $data['landing_program'] = $this->Ku_users->get_programs($id);
		$this->load->view('templates/header',$data);
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('pages/undergraduation',$data);
		$this->load->view('templates/footer',$data);
	}else{
	    redirect();
	}
	
}
public function graduate(){

	if($id =  $this->input->get('g')){
	    $id =  $this->input->get('g');
	    	$data['academics'] = $this->Ku_users->get_progrms_full_title();
	$data['landing_program'] = $this->Ku_users->get_programs($id);
	$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/graduation',$data);
		$this->load->view('templates/footer',$data);
	}else{
	   redirect();  
	}

}
public function Applyundergraduation(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
	$data['landing_program'] = $this->Ku_users->get_program_one();
	$data['programs'] = $this->Ku_users->get_programs_title();
	$data['banner'] =  $this->Ku_users->get_banner();
	$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/apply_for_admission',$data);
		$this->load->view('templates/footer',$data);

}
public function Applygraduation(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
	$data['landing_program'] = $this->Ku_users->get_program_one();
	$data['programs'] = $this->Ku_users->get_programs_title_1();
	$data['banner'] =  $this->Ku_users->get_banner();
	$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/apply_for_admission_1',$data);
		$this->load->view('templates/footer',$data);

}
public function program_with_details(){
	$id = $this->input->post('id');
	$program = $this->Ku_users->get_programs($id);
	$data = json_encode($program);
	echo $data;
}


public function interested_visitors(){
	$IsInfo = $this->Ku_users->post_interested_visitors_info();
	if($IsInfo==1){
		echo 'success';
	}
}






// admin section
public function admin(){
	$validation = array(
			array('field'=> 'username', 'rules'=>'required'),
			array('field' => 'password','rules'=>'required')
			);
	$this->form_validation->set_rules($validation);
	if($this->form_validation->run()== true){
		 $user_post = $this->input->post('username');
		 $pass_post = $this->input->post('password');

	$autheticate_user['data'] =  $this->Ku_users->varify_user();
	
	$user_post = $this->input->post('username');
	if($autheticate_user){

		$user_ID = $this->_get_user_ID_from_username($user_post);
		$ip_address = $this->input->ip_address();
		$create_session = array(
					'user_ID'=>$user_ID,
					'ip_address'=>$ip_address
					);
				$this->session->set_userdata($create_session);
				redirect('Admin');
	}else{
		$_SESSION['flash'] = "Wrong Username and Password Combination !!";
		redirect('Admin');
	}		
		}
		$this->data = array(
			'title'=>'Admin Login | School of Arts, K.U.'
			);
	$this->load->view('access-panel/A_login',$this->data);
}

private function _get_user_ID_from_username($user_post){

	$this->db->select('user_ID');
	$this->db->from('admin');
	$this->db->where('username',$user_post);
	return $this->db->get()->row('user_ID');
}

// notice area
public function announcements(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
	$data['banner'] =  $this->Ku_users->get_banner();
	$data['contact_info'] = $this->Ku_users->get_contact_info();
$this->load->library('pagination');
$config = array();
$config["base_url"] = base_url() ."index.php/Arts/announcements";
$total_row = $this->Ku_users->announcement_count();
$config["total_rows"] = $total_row;
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';
$config['next_link'] = '>';
$config['prev_link'] = '<';
$this->pagination->initialize($config);
if($this->uri->segment(3)){
$page = ($this->uri->segment(3))+4;
}
else{
$page = 0;
}
$data['announcement'] = $this->Ku_users->get_all_announcement($config["per_page"],$page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
	
		$this->load->view('templates/header',$data);
		$this->load->view('pages/announcements',$data);
		$this->load->view('templates/footer',$data);
}
public function singleannoucement(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
$data['contact_info'] = $this->Ku_users->get_contact_info();
	if($this->input->get('aid')){
		$a_id = $this->input->get('aid');
$data['announcement'] = $this->Ku_users->get_id_announcement($a_id);
$data['banner'] =  $this->Ku_users->get_banner();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/singleannouncement',$data);
		$this->load->view('templates/footer',$data);
	}else{
		required('Arts/announcements');
	}
}
// University detail
public function contactus(){
		$data['academics'] = $this->Ku_users->get_progrms_full_title();
		
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		$data['ban'] =  $this->Ku_users->get_banner();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/contactus',$data);
		$this->load->view('templates/footer',$data);
}
// dean msg
public function deanmessage(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
	$data['dean'] =  $this->Ku_users->get_dean();
	$data['banner'] =  $this->Ku_users->get_banner();
	$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/dean',$data);
		$this->load->view('templates/footer',$data);
}
// schoolofarts
public function schoolofarts(){
		$data['academics'] = $this->Ku_users->get_progrms_full_title();
		$data['aboutus'] =  $this->Ku_users->get_aboutus();

		$data['banner'] =  $this->Ku_users->get_banner();
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		
		$this->load->view('templates/header',$data);
		$this->load->view('pages/aboutus',$data);
		$this->load->view('templates/footer',$data);
}



// events area
public function events(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
	$data['contact_info'] = $this->Ku_users->get_contact_info();
$this->load->library('pagination');
$config = array();
$config["base_url"] = base_url() ."index.php/Arts/events";
$total_row = $this->Ku_users->events_count();
$config["total_rows"] = $total_row;
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';
$config['next_link'] = '>';
$config['prev_link'] = '<';
$this->pagination->initialize($config);
if($this->uri->segment(3)){
$page = ($this->uri->segment(3))+4;
}
else{
$page = 0;
}
$data['events'] = $this->Ku_users->get_all_events($config["per_page"],$page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
	
	$this->load->view('templates/header',$data);
		$this->load->view('pages/events',$data);
		$this->load->view('templates/footer',$data);
}


public function singleEvent(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
$data['contact_info'] = $this->Ku_users->get_contact_info();
	if($this->input->get('eid')){
		$a_id = $this->input->get('eid');
$data['event'] = $this->Ku_users->get_id_event($a_id);
		$this->load->view('templates/header',$data);
		$this->load->view('pages/singleEvent',$data);
		$this->load->view('templates/footer',$data);
	}else{
		required('Arts/events');
	}
}

public function singleNews(){
$data['academics'] = $this->Ku_users->get_progrms_full_title();
$data['contact_info'] = $this->Ku_users->get_contact_info();
if($this->input->get('wid')){
		$a_id = $this->input->get('wid');
	$data['news'] = $this->Ku_users->get_id_news($a_id);
		$this->load->view('templates/header',$data);
		$this->load->view('pages/singleNews',$data);
		$this->load->view('templates/footer',$data);
	}else{
		required('Arts');
	}
}

//faculty

public function faculty(){
		$data['academics'] = $this->Ku_users->get_progrms_full_title();
		$data['faculty'] = $this->Ku_users->get_faculty_members();
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/faculty',$data);
		$this->load->view('templates/footer',$data);
}
public function facultyMember(){
	$data['contact_info'] = $this->Ku_users->get_contact_info();
	if($this->input->get('m')){
		$mid = $this->input->get('m');
		$data['academics'] = $this->Ku_users->get_progrms_full_title();
		$data['f_mem'] = $this->Ku_users->get_id_faculty_member($mid);
		$this->load->view('templates/header',$data);
		$this->load->view('pages/facultyMember',$data);
		$this->load->view('templates/footer',$data);
	}else{
		redirect('Arts/faculty');
	}
	
}

public function sdudentlife(){
			$data['academics'] = $this->Ku_users->get_progrms_full_title();
			$data['banner'] =  $this->Ku_users->get_banner();
		$data['kulife'] = $this->Ku_users->get_sdtlife();
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/life',$data);
		$this->load->view('templates/footer',$data);
}
public function collaborations(){
			$data['academics'] = $this->Ku_users->get_progrms_full_title();
			$data['banner'] =  $this->Ku_users->get_banner();
		$data['col'] =  $this->Ku_users->get_collaboration();
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		$this->load->view('templates/header',$data);
		$this->load->view('pages/collaborations',$data);
		$this->load->view('templates/footer',$data);
}

public function gallery(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
		$data['gallery'] = $this->Ku_users->get_gallery();
		$data['contact_info'] = $this->Ku_users->get_contact_info();
		$data['banner'] =  $this->Ku_users->get_banner();

		$this->load->view('templates/header',$data);
		$this->load->view('pages/gallery',$data);
		$this->load->view('templates/footer',$data);
}

public function singleGallery(){

	if($this->input->get('g')){

		$mid = $this->input->get('g');

		$data['academics'] = $this->Ku_users->get_progrms_full_title();

		$data['g'] = $this->Ku_users->get_id_gallery($mid);
		$data['banner'] =  $this->Ku_users->get_banner();

		$data['contact_info'] = $this->Ku_users->get_contact_info();

		$this->load->view('templates/header',$data);
		$this->load->view('pages/singleGallery',$data);
		$this->load->view('templates/footer',$data);
	}else{
		redirect('Arts/gallery');
	}
}

public function news(){
	$data['academics'] = $this->Ku_users->get_progrms_full_title();
	$data['banner'] =  $this->Ku_users->get_banner();
	$data['contact_info'] = $this->Ku_users->get_contact_info();
$this->load->library('pagination');
$config = array();
$config["base_url"] = base_url() ."index.php/Arts/news";
$total_row = $this->Ku_users->news_count();
$config["total_rows"] = $total_row;
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';
$config['next_link'] = '>';
$config['prev_link'] = '<';
$this->pagination->initialize($config);
if($this->uri->segment(3)){
$page = ($this->uri->segment(3))+4;
}
else{
$page = 0;
}
$data['news'] = $this->Ku_users->get_all_news($config["per_page"],$page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
	
		$this->load->view('templates/header',$data);
		$this->load->view('pages/news',$data);
		$this->load->view('templates/footer',$data);
}









//end 	
}
