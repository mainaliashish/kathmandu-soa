<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//$this->check_session();
	}

public function index(){

$data['slider'] = $this->Ku_admin->get_slider_imgs();
	$admin_id = $this->session->userdata('user_ID');
	$ip_address = $this->session->userdata('ip_address');

	$data['admin_info']  = array('user_ID' => $admin_id,'ip_address' => $ip_address);
$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	$this->load->view('admin-templates/header',$data);
	$this->load->view('admin/dashboard');
	$this->load->view('admin-templates/footer');
}

function logout(){
	$this->session->unset_userdata('user_ID');
	$this->session->unset_userdata('ip_address');
	session_destroy();
	redirect('Arts/admin');
}
function check_session(){
	$user_ID = $this->session->userdata('user_ID');
	if(!$user_ID){
		redirect('Arts/admin');
	}
}

// all program show
public function bachelorPrograms(){
		$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
$data['programs'] = $this->Ku_admin->bachelorPrograms();	
	$this->load->view('admin-templates/header',$data);
	$this->load->view('admin/all_program_show',$data);
	$this->load->view('admin-templates/footer');
}

public function masterPrograms(){
		$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
$data['programs'] = $this->Ku_admin->masterPrograms();	
	$this->load->view('admin-templates/header',$data);
	$this->load->view('admin/all_program_show',$data);
	$this->load->view('admin-templates/footer');
}

public function SelectedProgram(){
    $data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	$this->load->view('admin-templates/header',$data);

	if($this->input->get('pid')){
		$id = $this->input->get('pid');
		$data['undrgdr_pro'] = $this->Ku_admin->get_id_program($id);
	}else{
		$data['undrgdr_pro'] = $this->Ku_admin->get_last_updated_program();
	}
	$this->load->view('admin/updateProgram',$data);
	$this->load->view('admin-templates/footer');
}


public function UpdatePrograms(){
	$id = $this->input->post('pro_id');
		
		//brochure
	$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload();
				if($this->file_upload==0){
				$this->SelectedProgram();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}

		$proUpdate= $this->Ku_admin->update_undr_programs($id,$file_name);
		if($proUpdate==1){
		$_SESSION['flash'] = 'Program is successfully updated !!';
			redirect('Admin/SelectedProgram');
		}else{
		$_SESSION['flash'] = 'Something is wrong !!';
			redirect('Admin/SelectedProgram');
		}

}

public function programcover(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
$data['cover'] = $this->Ku_admin->get_all_ku_programs();	
	$this->load->view('admin-templates/header',$data);
	$this->load->view('admin/cover',$data);
	$this->load->view('admin-templates/footer');
}
public function coverphoto(){
			$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_11();
				if($this->file_upload==0){
				$this->programcover();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}
	$faculty = $this->Ku_admin->update_cover($file_name);
	if($faculty==1){
			$_SESSION['flash'] = "Program cover image has been updated successfully.";
			redirect('Admin/programcover');
		}else{
			$_SESSION['flash'] = "Something is wrong, Please try again !!";
			redirect('Admin/programcover');
		}
}
// start of slider properties
public function slider(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	$data['slider'] = $this->Ku_admin->get_slider_imgs();
	$this->load->view('admin-templates/header',$data);
	$this->load->view('admin/slider',$data);
	$this->load->view('admin-templates/footer');
}
public function sliderupload(){
		// for brochure
	$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload1();
				if($this->file_upload==0){
				$this->slider();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}
		$result = $this->Ku_admin->upload_image_for_slider($file_name);
		if($result==1){
			$_SESSION['flash'] = "New image is added.";
			redirect('Admin/slider');
		}else{
			$_SESSION['flash'] = "Something is wrong, Try again !!";
			redirect('Admin/slider');
		}
}
public function sliderStatus(){
	$flag = $this->input->post('flag');
	$s_id = $this->input->post('id');
$updateSlider = $this->Ku_admin->update_slider_status($s_id,$flag);
if($updateSlider == 1){
	echo 'changed';
}else{
	echo 'wrong !!';
}
	
}
public function deleteS_image(){
	$id= $this->input->post('id');
$deleteS_image = $this->Ku_admin->delete_slider_image($id);
if($deleteS_image == 1){
	echo 1;
}else{
	echo 0;
}
	
}

// announcement area
public function announcements(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
$this->load->library('pagination');
$config = array();
$config["base_url"] = base_url() ."index.php/Admin/announcements";
$total_row = $this->Ku_admin->announcement_count();
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
$data['anns'] = $this->Ku_admin->get_all_announcement($config["per_page"],$page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
	
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/announcements',$data);
		$this->load->view('admin-templates/footer');
}

public function createannouncement(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/announcemetncreate');
		$this->load->view('admin-templates/footer');
}

public function insert_announcement(){
		$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_4();
				if($this->file_upload==0){
				$this->announcemetncreate();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}

	$notice = $this->Ku_admin->insert_announcement($file_name);
	if($notice ==1){
			$_SESSION['flash'] = "New Announcement is successfully added.";
			redirect('Admin/createannouncement');
		}else{
			$_SESSION['flash'] = "Something is wrong, Try again !!";
			redirect('Admin/createannouncement');
		}
}

public function inbox(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	$data['ms'] =  $this->Ku_admin->all_msg();

		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/inboxMail');
		$this->load->view('admin-templates/footer');
}

public function inboxMail(){

	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
$data['ms'] =  $this->Ku_admin->all_msg();

		$this->load->view('admin-templates/header',$data);
		if($this->input->get('smail')){
			$mid = $this->input->get('smail');
			$data['mess'] =  $this->Ku_admin->id_msg($mid);
			 $this->Ku_admin->checked_mail($mid);
			$this->load->view('admin/inboxMail',$data);
			$this->load->view('admin-templates/footer');
		}else{
			redirect('Admin/inbox');
		}
		
}

public function check_mail(){
		$mid= $this->input->post('id');
		$info = $this->Ku_admin->id_msg($mid);
		$this->Ku_admin->checked_mail($mid);
		$minfo = json_encode($info);
		echo $minfo;
}

public function composemail(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	$data['ms'] =  $this->Ku_admin->all_msg();

		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/reply');
		$this->load->view('admin-templates/footer');
}

public function mailreply(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();

	$this->load->view('admin-templates/header',$data);

	if($this->input->get('mailkey')){
		$mid = $this->input->get('mailkey');
		$data['address'] = $this->Ku_admin->id_msg($mid);
		$this->load->view('admin/reply',$data);
		$this->load->view('admin-templates/footer');
	}else{
		redirect('Admin/composemail');
	}
	
}
public function postmail(){
	$key = $this->input->post('mailkey');
	$rname = $this->input->post('rname');
	$rsubject = $this->input->post('subject');
	$remail = $this->input->post('remail');
	$rmessage = $this->input->post('rmessage');
	$attachment= $_FILES['userfile']["name"];
	$filePath = $_FILES['userfile']['tmp_name'];


require_once(APPPATH."PHPMailer/PHPMailerAutoload.php");

	$mail = new PHPmailer();
	//$mail -> SMTPDebug = 3;
	$mail -> IsSMTP();
	$mail -> SMTPAuth = true;
	$mail ->SMTPSecure = 'ssl';
	$mail ->Host =  "smtp.gmail.com";
	$mail ->Port = 465; //or 586
	$mail->WordWrap = 80;
	$mail -> IsHTML (true);
	$mail->Username = "milanthapait@gmail.com";
	$mail ->Password = "googleme12";
	$mail->CharSet = 'UTF-8';
	$Smessage = '<strong>'.$rsubject.'</strong><br/><br/><strong>TO:&nbsp;'.$rname.'</strong><br/>'.$rmessage.'<br/><strong style="color:#F44336;">KU School of Arts</strong>';

$mail ->SetFrom("milanthapait@gmail.com");//it contains the website email address
$mail ->Subject = ($rsubject);
$mail ->Body = ($Smessage);
$mail ->AddAddress($remail);
$mail->AddAttachment($filePath, $attachment);  
if(!$mail->Send()){
		$_SESSION['flash'] = 'Something is wrong, Please try again !!!';
	redirect('Admin/composemail');
}else{
	$success = $this->Ku_admin->sentmail($key);
	$_SESSION['flash'] = 'Message successfully sent.';
	redirect('Admin/composemail');
}
}

public function delete(){
		$nid= $this->input->post('id');
		$tb= $this->input->post('table');
		$s = $this->Ku_admin->remove_data($nid,$tb);
		echo $s;
}

// dean
public function dean(){

	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	$data['ms'] =  $this->Ku_admin->all_msg();
	$data['dean'] =  $this->Ku_admin->get_dean();
	
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/dean',$data);
		$this->load->view('admin-templates/footer');
}

public function updatedean(){

	$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_5();
				if($this->file_upload==0){
				$this->dean();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
			}
	$dean = $this->Ku_admin->update_dean($file_name);
	if($dean ==1){
			$_SESSION['flash'] = "Dean information has been updated.";
			redirect('Admin/dean');
		}else{
			$_SESSION['flash'] = "Something is wrong, Try again !!";
			redirect('Admin/dean');
		}
}
// about us page upadate
public function abtKUSOA(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	$data['ms'] =  $this->Ku_admin->all_msg();
	$data['aboutus'] =  $this->Ku_admin->get_aboutus();
	
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/aboutus',$data);
		$this->load->view('admin-templates/footer');
}

public function updateaboutus(){
$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_6();
				if($this->file_upload==0){
				$this->abtKUSOA();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
			}
	$dean = $this->Ku_admin->update_aboutus($file_name);
	if($dean ==1){
			$_SESSION['flash'] = "About us page has been updated.";
			redirect('Admin/abtKUSOA');
		}else{
			$_SESSION['flash'] = "Something is wrong, Try again !!";
			redirect('Admin/abtKUSOA');
		}
	}

// event page

// events area
public function events(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();

$this->load->library('pagination');
$config = array();
$config["base_url"] = base_url() ."index.php/Admin/events";
$total_row = $this->Ku_admin->event_count();
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
$data['events'] = $this->Ku_admin->get_all_event($config["per_page"],$page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
	
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/upcomming_events',$data);
		$this->load->view('admin-templates/footer');
}

public function createvent(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/createevet');
		$this->load->view('admin-templates/footer');
}

public function insert_event(){
		$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_7();
				if($this->file_upload==0){
				$this->announcemetncreate();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}

	$event = $this->Ku_admin->insert_event($file_name);
	if($event==1){
			$_SESSION['flash'] = "New event has been successfully published.";
			redirect('Admin/createvent');
		}else{
			$_SESSION['flash'] = "Something is wrong, Try again !!";
			redirect('Admin/createvent');
		}
}
// news area
public function news(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
	
$this->load->library('pagination');
$config = array();
$config["base_url"] = base_url() ."index.php/Admin/news";
$total_row = $this->Ku_admin->news_count();
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
$data['news'] = $this->Ku_admin->get_all_news($config["per_page"],$page);
$str_links = $this->pagination->create_links();
$data["links"] = explode('&nbsp;',$str_links );
	
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/news',$data);
		$this->load->view('admin-templates/footer');
}

public function createnews(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['abbr_mgs'] =  $this->Ku_admin->unseen_msg();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/createnews');
		$this->load->view('admin-templates/footer');
}

public function insert_news(){
		$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_8();
				if($this->file_upload==0){
				$this->announcemetncreate();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}

	$news = $this->Ku_admin->insert_news($file_name);
	if($news==1){
			$_SESSION['flash'] = "New News has been successfully published.";
			redirect('Admin/createnews');
		}else{
			$_SESSION['flash'] = "Something is wrong, Try again !!";
			redirect('Admin/createnews');
		}
}

public function faculty(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['faculty'] =  $this->Ku_admin->get_faculty_members();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/faculty_members');
		$this->load->view('admin-templates/footer');
}
public function member(){
	if($this->input->get('mid')){
		$mid = $this->input->get('mid');
		$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['faculty'] =  $this->Ku_admin->get_id_faculty_member($mid);
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/member');
		$this->load->view('admin-templates/footer');
	}else{
		redirect('Admin/faculty');
	}
}
public function addmember(){
		$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/member');
		$this->load->view('admin-templates/footer');
}
public function updatefaculty(){
		$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_9();
				if($this->file_upload==0){
				$this->member();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}
	$faculty = $this->Ku_admin->update_faculty($file_name);
	if($faculty==1){
			$_SESSION['flash'] = "Updated successfully.";
			redirect('Admin/faculty');
		}else{
			$_SESSION['flash'] = "New member has been added.";
			redirect('Admin/faculty');
		}
}
public function banner(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/banner');
		$this->load->view('admin-templates/footer');
}
public function updatebanner(){
			$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_10();
				if($this->file_upload==0){
				$this->banner();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}
	$faculty = $this->Ku_admin->update_banner($file_name);
	if($faculty==1){
			$_SESSION['flash'] = "Banner pages has been updated successfully.";
			redirect('Admin/banner');
		}else{
			$_SESSION['flash'] = "Something is wrong, Please try again !!";
			redirect('Admin/banner');
		}
}
public function stdslife(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['life'] =  $this->Ku_admin->get_sdtlife();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/stdslife',$data);
		$this->load->view('admin-templates/footer');
}
public function updatelife(){
	$file_name="";
			if(!empty($_FILES["userfile"]['name'])){
			if(strlen($_FILES["userfile"]['name'])>0){
				$this->data['userfile'] = $this->do_upload_6();
				if($this->file_upload==0){
				$this->stdslife();
				return 0;	
				}
				$file_name=$this->data['file_name'];
				}
		}
	$faculty = $this->Ku_admin->update_stdslife($file_name);
	if($faculty==1){
			$_SESSION['flash'] = "Student life page  has been updated successfully.";
			redirect('Admin/stdslife');
		}else{
			$_SESSION['flash'] = "Something is wrong, Please try again !!";
			redirect('Admin/stdslife');
		}
}
public function collaboration(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['col'] =  $this->Ku_admin->get_collaboration();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/collaboration',$data);
		$this->load->view('admin-templates/footer');
}
public function updatecoll(){

	$faculty = $this->Ku_admin->update_collaboration();
	if($faculty==1){
			$_SESSION['flash'] = "Collaboration page has been updated successfully.";
			redirect('Admin/collaboration');
		}else{
			$_SESSION['flash'] = "Something is wrong, Please try again !!";
			redirect('Admin/collaboration');
		}
}
public function gallery(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['gal'] =  $this->Ku_admin->get_gallery();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/gallery',$data);
		$this->load->view('admin-templates/footer');
}
public function upload_gallery(){
	// gallery files
	$file_doc_1='';
	  $data = array();
	  $file_doc_2=$this->upload_multiple_files();

	  if($file_doc_2){
	  	$file_doc_1=json_encode($file_doc_2);
	  }
$gallery = $this->Ku_admin->upload_gallery($file_doc_1);
	if($gallery==1){
			$_SESSION['flash'] = "uploaded successfully.";
			redirect('Admin/gallery');
		}else{
			$_SESSION['flash'] = "Something is wrong, Please try again !!";
			redirect('Admin/gallery');
		}
}

public function collegeTour(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['tour'] =  $this->Ku_admin->get_tour();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/tour',$data);
		$this->load->view('admin-templates/footer');
}
public function updatetour(){
	$tour = $this->Ku_admin->update_tour();
	if($tour==1){
			$_SESSION['flash'] = "College tour section has been updated.";
			redirect('Admin/collegeTour');
		}else{
			$_SESSION['flash'] = "Something is wrong, Please try again !!";
			redirect('Admin/collegeTour');
		}
}

public function contactinfo(){
	$data['count_mgs'] =  $this->Ku_admin->unseenmessage_count();
	$data['contact'] =  $this->Ku_admin->get_contactus();
		$this->load->view('admin-templates/header',$data);
		$this->load->view('admin/contactus',$data);
		$this->load->view('admin-templates/footer');
}
public function updateinfo(){
	$info = $this->Ku_admin->update_info();
	if($info==1){
			$_SESSION['flash'] = "Contact us page has been updated.";
			redirect('Admin/contactinfo');
		}else{
			$_SESSION['flash'] = "Something is wrong, Please try again !!";
			redirect('Admin/contactinfo');
		}
}




// ********file upload section********
public function upload_multiple_files(){
	if($_FILES['upload_doc']['name']){
		$filesCount = count($_FILES['upload_doc']['name']);
           for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['upload_doc']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['upload_doc']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['upload_doc']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['upload_doc']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['upload_doc']['size'][$i];

                $uploadPath = 'uploads/gallery/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] ='gif|jpg|png|JPEG';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['upload_file'] = $fileData['file_name'];
                    // $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    // $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            if(!empty($uploadData)){
                return $uploadData;
            }

}else{
	return 0;
	
}
       
 }
private function do_upload_11()
{
    $config['upload_path'] = './uploads/program-cover';
   $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '30000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}
private function do_upload_10()
{
    $config['upload_path'] = './uploads/banner';
   $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '20000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}
	private function do_upload_9()
{
    $config['upload_path'] = './uploads/members';
   $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}
	private function do_upload_8()
{
    $config['upload_path'] = './uploads/news';
   $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}
	private function do_upload_7()
{
    $config['upload_path'] = './uploads/event';
    $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}

// other image upload
	private function do_upload_6()
{
    $config['upload_path'] = './uploads';
    $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}
// staffs and members 
private function do_upload_5()
{
    $config['upload_path'] = './uploads/university-member';
    $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}


// notice pdf
private function do_upload_4()
{
    $config['upload_path'] = './uploads/notice';
    $config['allowed_types'] = 'pdf|doc|docx';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}



// program-banner
private function do_upload_3()
{
    $config['upload_path'] = './uploads/program-banner';
    $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('banner')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}

// slider upload
private function do_upload1()
{
    $config['upload_path'] = './uploads/slider';
    $config['allowed_types'] = 'gif|png|jpeg|jpg';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}


// pdf upload
private function do_upload()
{
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'pdf|doc|docx';
    $config['max_size'] = '8000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
	$config['encrypt_name'] = TRUE;
	
	

    if( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('userfile')) {
	$this->data['upload_errors'] = $this->upload->display_errors();
	$this->file_upload=0;
    } else {
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$this->file_upload=1;
		$this->data['file_name'] = $upload_data['file_name'];
    }
}
















}
