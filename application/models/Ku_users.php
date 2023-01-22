<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ku_users extends CI_Model {

		public function varify_user(){
        	$this->db->select('*');
        	$this->db->from('admin');
        	$psw = $this->input->post('password');
        	$psw = md5($psw);
        	$auth_data = array(	'username' =>$this->input->post('username'),
        						'password' =>$psw
        					);
        	$this->db->where($auth_data);
        	$query = $this->db->get();
        	$result = $query->num_rows();
        	return $result;
         }

public function get_slider_imgs(){
	$this->db->select('*');
	$this->db->from('slider');
	$this->db->where('flag', '1');
	// $this->db->order_by('update_date', 'DESC');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function get_progrms_full_title(){
	$this->db->select('*');
	$this->db->from('programs_with_detail');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_programs_title(){
	$this->db->select('id,full_program_name');
	$this->db->from('programs_with_detail');
	$this->db->where('level', 'Bachelor');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_programs_title_1(){
	$this->db->select('id,full_program_name');
	$this->db->from('programs_with_detail');
	$this->db->where('level', 'Master');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_program_one(){
	$this->db->select('*');
	$this->db->from('programs_with_detail');
	$this->db->where('program', 'Economics');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_programs($id){
	$this->db->select('*');
	$this->db->from('programs_with_detail');
	$this->db->where('id', $id);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

function post_interested_visitors_info(){
$now = date('Y-m-d H:i:s');
if(!empty($this->input->post('choosedProgram'))){
	$data = array('full_name'=>$this->input->post('Vname'),
					'email'=>$this->input->post('Vemail'),
					'phone_no'=>$this->input->post('Vphone'),
					'message'=>$this->input->post('Vmessage'),
				'program'=>$this->input->post('choosedProgram'),
				'date'=>$now,
				'seen'=>'1'
				);
}else{
	$data = array('full_name'=>$this->input->post('Vname'),
					'email'=>$this->input->post('Vemail'),
					'phone_no'=>$this->input->post('Vphone'),
					'message'=>$this->input->post('Vmessage'),
					'date'=>$now,
					'seen'=>'1'
				);
}
	

	$this->db->insert('program_interested_visitors',$data);
	return 1;

}


public function get_contact_info(){
	$this->db->select('*');
	$this->db->from('contact_info');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}


// announcement section
public function get_all_announcement($limit,$start){
	$this->db->select('*');
	$this->db->from('announcement');
	$this->db->order_by('posted_date', 'desc');
    $this->db->limit($limit,$start);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_announcements(){
	$this->db->select('*');
	$this->db->from('announcement');
	$this->db->order_by('posted_date', 'desc');
	$this->db->limit('4');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
function announcement_count() {
        return $this->db->count_all("announcement");
    }

public function get_id_announcement($a_id){
	$this->db->select('*');
	$this->db->from('announcement');
	$this->db->where('a_id',$a_id);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
// dean msg
public function get_dean(){
	$this->db->select('*');
	$this->db->from('dean');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

// about us
public function get_aboutus(){
	$this->db->select('*');
	$this->db->from('aboutus');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

// event section
public function get_three_event(){
	$this->db->select('*');
	$this->db->from('events');
	$this->db->order_by('posted_date', 'DESC');
	$this->db->limit('3');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_all_events($limit,$start){
	$this->db->select('*');
	$this->db->from('events');
	$this->db->order_by('posted_date', 'DESC');
    $this->db->limit($limit,$start);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
function events_count() {
        return $this->db->count_all("events");
    }
public function get_id_event($a_id){
	$this->db->select('*');
	$this->db->from('events');
	$this->db->where('a_id',$a_id);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_all_active_news(){
	$this->db->select('*');
	$this->db->from('news');
	$this->db->order_by('posted_date', 'DESC');
	$this->db->limit('1');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_all_latest_news(){
	$this->db->select('*');
	$this->db->from('news');
	$this->db->order_by('posted_date', 'DESC');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
// public function get_all_news($limit,$start){
// 	$this->db->select('*');
// 	$this->db->from('news');
// 	$this->db->order_by('posted_date', 'DESC');
//     $this->db->limit($limit,$start);
// 	$query = $this->db->get();
// 	$result = $query->result_array();
// 	return $result;
// }
public function get_id_news($a_id){
	$this->db->select('*');
	$this->db->from('news');
	$this->db->where('a_id',$a_id);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function get_faculty_members(){
	$this->db->select('*');
	$this->db->from('faculty_members');
	$this->db->order_by('updated_date', 'DESC');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
function get_id_faculty_member($mid){
	$this->db->select('*');
	$this->db->from('faculty_members');
	$this->db->where('a_id',$mid);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
// get banner image
public function get_banner(){
	$this->db->select('*');
	$this->db->from('banner');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function get_sdtlife(){
	$this->db->select('*');
	$this->db->from('stdlife');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function get_collaboration(){
	$this->db->select('*');
	$this->db->from('collaborations');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_gallery(){
	$this->db->select('*');
	$this->db->from('gallery');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_id_gallery($mid){
	$this->db->select('*');
	$this->db->from('gallery');
	$this->db->where('a_id',$mid);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}


public function get_all_news($limit,$start){
	$this->db->select('*');
	$this->db->from('news');
	$this->db->order_by('posted_date', 'desc');
    $this->db->limit($limit,$start);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
function news_count() {
        return $this->db->count_all("announcement");
    }
public function get_tour(){
	$this->db->select('*');
	$this->db->from('college_tour');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
// end
}