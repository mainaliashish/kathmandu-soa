<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ku_admin extends CI_Model {


public function get_slider_imgs(){
	$this->db->select('*');
	$this->db->from('slider');
	$this->db->order_by('inserted_time', 'DESC');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function upload_image_for_slider($file_name){
	$now = date('Y-m-d H:i:s');
	$data = array('image_name'=>$file_name,
					'flag'=>1,
				'inserted_time'=>$now);
	$this->db->insert('slider',$data);
	return 1;
}
public function delete_slider_image($id){
	$this->db->select("*");
	$this->db->where('s_id',$id);
	$this->db->delete("slider");
	//unlink(FCPATH.'assets/img/news_image/'.$path);
	return 1;
}
public function update_slider_status($s_id,$flag){
	$data =array('flag' =>$flag
				);
	$this->db->select('*');
	$this->db->from('slider');
	$this->db->where('s_id', $s_id);
	$this->db->update('slider',$data);
	return 1;
}
public function bachelorPrograms(){
	$this->db->select('*');
	$this->db->from('programs_with_detail');
	$this->db->where('level', 'Bachelor');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function masterPrograms(){
	$this->db->select('*');
	$this->db->from('programs_with_detail');
	$this->db->where('level', 'Master');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_all_ku_programs(){
	$this->db->select('full_program_name,id');
	$this->db->from('programs_with_detail');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_id_program($id){
	$this->db->select('*');
	$this->db->from('programs_with_detail');
	$this->db->where('id', $id);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function get_last_updated_program(){
	$this->db->select('*');
	$this->db->from('programs_with_detail');
	$this->db->order_by('last_updated', 'DESC');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;	
}


public function update_undr_programs($id,$file_name){
$now = date('Y-m-d H:i:s');
// 'program_banner'=>$banner,


if(!empty($file_name)){

$data = array('overview'=>$this->input->post('overview'),
			   'program_at_KU' =>$this->input->post('ProgramAtKU') ,
			   'program_goals' =>$this->input->post('ProgramGoals') ,
			   'fees_and_funding' =>$this->input->post('feesAndFunding') ,
			   'how_to_apply' =>$this->input->post('applyForBach'),
				'program'=>$this->input->post('proName'),
				'full_program_name'=>$this->input->post('fullproName'),
				'program_duration'=>$this->input->post('duration'),
				'level'=>$this->input->post('level'),
				'program_total_cost'=>$this->input->post('tcost'),
				'teaching_language'=>$this->input->post('language'),
				'course_brochure' =>$file_name,
				'last_updated'=>$now
					);
}else{
$data = array('overview'=>$this->input->post('overview'),
		   'program_at_KU' =>$this->input->post('ProgramAtKU') ,
		   'program_goals' =>$this->input->post('ProgramGoals') ,
		   'fees_and_funding' =>$this->input->post('feesAndFunding') ,
		   'how_to_apply' =>$this->input->post('applyForBach'),
				'program'=>$this->input->post('proName'),
				'full_program_name'=>$this->input->post('fullproName'),
				'program_duration'=>$this->input->post('duration'),
				'level'=>$this->input->post('level'),
				'program_total_cost'=>$this->input->post('tcost'),
				'teaching_language'=>$this->input->post('language'),
				'last_updated'=>$now
					);
}

	$this->db->where('id',$id);
   	$this->db->update('programs_with_detail', $data);
   	return 1;
	
}

// announcement section
public function get_all_announcement($limit,$start){
	$this->db->select('*');
	$this->db->from('announcement');
	$this->db->order_by('posted_date', 'DESC');
    $this->db->limit($limit,$start);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
function announcement_count() {
        return $this->db->count_all("announcement");
    }

function insert_announcement($file){
$now = date('Y-m-d H:i:s');
	$data = array('a_title'=>$this->input->post('tann'),
					'a_description'=>$this->input->post('descrption'),
					'a_pdf'=>$file,
					'posted_date'=>$now);
		$this->db->insert('announcement', $data);
		return 1;
}

// register and messaging
function unseenmessage_count(){
 return $this->db->where('seen',1)->from("program_interested_visitors")->count_all_results();
    }

public function unseen_msg(){
	$this->db->select('*');
	$this->db->from('program_interested_visitors');
	$this->db->order_by('date', 'desc');
    $this->db->where('seen', '1');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function all_msg(){
	$this->db->select('*');
	$this->db->from('program_interested_visitors');
	$this->db->order_by('v_id', 'DESC');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function id_msg($mid){
	$this->db->select('*');
	$this->db->from('program_interested_visitors');
	$this->db->where('v_id', $mid);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function checked_mail($mid){
	$data = array('seen'=>'0');
	$this->db->where('v_id', $mid);
   	$this->db->update('program_interested_visitors', $data);
   	return 1;
}
public function sentmail($key){
$now = date('Y-m-d H:i:s');
	if(!empty($key)){
	$data = array('email_sent'=>'1',
					'email_sent_date'=>$now);
	$this->db->where('v_id', $key);
   	$this->db->update('program_interested_visitors',$data);
   	return 1;
	}
}


public function remove_data($nid,$tb){
	$this->db->select("*");
	$this->db->where('a_id', $nid);
   	$this->db->delete($tb);
   	return 1;
}

public function get_dean(){
	$this->db->select('*');
	$this->db->from('dean');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
public function update_dean($file_name){
$now = date('Y-m-d H:i:s');
$id = $this->input->post('id');
	if(!empty($file_name)){
	$data = array('full_name'=>$this->input->post('fullName'),
						'message_title'=>$this->input->post('mtitle'),
						'message'=>$this->input->post('message'),
						'cover_photo'=>$file_name,
						'update_date'=>$now
					);
	}else{
		$data = array('full_name'=>$this->input->post('fullName'),
						'message_title'=>$this->input->post('mtitle'),
						'message'=>$this->input->post('message'),
						'update_date'=>$now
					);
	}
if(!empty($id)){
		$this->db->where('id',$id);
		$this->db->update('dean', $data);	
	}else{
		$this->db->insert('dean', $data);
	}
	
	return 1;
}

public function get_aboutus(){
	$this->db->select('*');
	$this->db->from('aboutus');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function update_aboutus($file_name){
$now = date('Y-m-d H:i:s');
$id = $this->input->post('id');
	if(!empty($file_name)){
	$data = array('about_us_title'=>$this->input->post('abttitle'),
						'description'=>$this->input->post('description'),
						'fb_page_link'=>$this->input->post('fblink'),
						'twit_page_link'=>$this->input->post('twilink'),
						'cover_photo'=>$file_name,
						'update_date'=>$now
					);
	}else{
		$data = array('about_us_title'=>$this->input->post('abttitle'),
						'description'=>$this->input->post('description'),
						'fb_page_link'=>$this->input->post('fblink'),
						'twit_page_link'=>$this->input->post('twilink'),
						'update_date'=>$now
					);
	}
	if(!empty($id)){
		$this->db->where('id',$id);
		$this->db->update('aboutus', $data);	
	}else{
		$this->db->insert('aboutus', $data);
	}
	
	return 1;

}

// event

// event section
public function get_all_event($limit,$start){
	$this->db->select('*');
	$this->db->from('events');
	$this->db->order_by('posted_date', 'DESC');
    $this->db->limit($limit,$start);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
function event_count() {
        return $this->db->count_all("events");
    }

function insert_event($file){
$now = date('Y-m-d H:i:s');
	
	if(!empty($file)){
		$data = array('event_title'=>$this->input->post('etitle'),
		'cover_photo'=>$file,
					'start_time'=>$this->input->post('sdate'),
					'end_time'=>$this->input->post('edate'),
					'description'=>$this->input->post('descrption'),
					'posted_date'=>$now);
	}else{
		$data = array('event_title'=>$this->input->post('etitle'),
					'start_time'=>$this->input->post('sdate'),
					'end_time'=>$this->input->post('edate'),
					'description'=>$this->input->post('descrption'),
					'posted_date'=>$now);
	}
	$this->db->insert('events', $data);
		return 1;
}

// news section
public function get_all_news($limit,$start){
	$this->db->select('*');
	$this->db->from('news');
	$this->db->order_by('posted_date', 'DESC');
    $this->db->limit($limit,$start);
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}
function news_count() {
        return $this->db->count_all("events");
    }

function insert_news($file){
$now = date('Y-m-d H:i:s');
	
	if(!empty($file)){
		$data = array('news_title'=>$this->input->post('ntitle'),
		'cover_photo'=>$file,
					'description'=>$this->input->post('descrption'),
					'posted_date'=>$now);
	}else{
		$data = array('news_title'=>$this->input->post('ntitle'),
					'description'=>$this->input->post('descrption'),
					'posted_date'=>$now);
	}
	$this->db->insert('news', $data);
		return 1;
}

public function get_faculty_members(){
	$this->db->select('*');
	$this->db->from('faculty_members');
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
public function update_faculty($file_name){
$now = date('Y-m-d H:i:s');

	if(!empty($file_name)){
		$data =  array('full_name'=>$this->input->post('fname'), 
			'position ' =>$this->input->post('pos'),
			'department' =>$this->input->post('dpt'),
			'phone_num' =>$this->input->post('cnum'),
			'email' =>$this->input->post('email'),
			'location' =>$this->input->post('loc'),
			'website' =>$this->input->post('web'),
			'latitude' =>$this->input->post('lat'),
			'longitude' =>$this->input->post('lon'),
			'cover_photo' =>$file_name,
			'description' =>$this->input->post('description'),
			'Academic_qualification'=>$this->input->post('qual'),
			'trainings'=>$this->input->post('train'),
			'updated_date'=>$now

			);
	}else{
		$data =  array('full_name'=>$this->input->post('fname'), 
			'position ' =>$this->input->post('pos'),
			'department' =>$this->input->post('dpt'),
			'phone_num' =>$this->input->post('cnum'),
			'email' =>$this->input->post('email'),
			'location' =>$this->input->post('loc'),
			'website' =>$this->input->post('web'),
			'latitude' =>$this->input->post('lat'),
			'longitude' =>$this->input->post('lon'),
			'description' =>$this->input->post('description'),
			'Academic_qualification'=>$this->input->post('qual'),
			'trainings'=>$this->input->post('train'),
			'updated_date'=>$now
		);

	}
	if($this->input->post('mid')){
			$this->db->where('a_id',$this->input->post('mid'));
			$this->db->update('faculty_members', $data);
	}else{
		$this->db->insert('faculty_members', $data);
	}
	return 1;
}


public function update_banner($file_name){
$now = date('Y-m-d H:i:s');
	if(!empty($file_name)){
		$data = array('banner_name'=>$file_name,
			'updated_date'=>$file_name
			);
	}
	if($this->input->post('banner')){
		$this->db->where('id',$this->input->post('banner'));
		$this->db->update('banner',$data);
	}
	return 1;
}

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

public function update_stdslife($file_name){
	$now = date('Y-m-d H:i:s');

	if(!empty($file_name)){
		$data =  array('title'=>$this->input->post('title'),
			'description' =>$this->input->post('description'),
			'cover_photo' =>$file_name,
			'updated_date'=>$now

			);
	}else{
		$data =  array('title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'), 
			'updated_date'=>$now
		);
	}
if($this->input->post('int')){
			$this->db->where('id',$this->input->post('int'));
			$this->db->update('stdlife', $data);
	}else{
		$this->db->insert('stdlife', $data);
	}
	return 1;
}

public function get_collaboration(){
	$this->db->select('*');
	$this->db->from('collaborations');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function update_collaboration(){
		$now = date('Y-m-d H:i:s');

$data =  array('description' =>$this->input->post('coll'),
			'collaboration'=>$this->input->post('description'),
			'updated_date'=>$now

	);

if($this->input->post('cid')){
			$this->db->where('id',$this->input->post('cid'));
			$this->db->update('collaborations', $data);
	}else{
		$this->db->insert('collaborations', $data);
	}
	return 1;
}
public function update_cover($file_name){
	if(!empty($file_name)){
		$data = array('program_banner'=>$file_name
			);
	}
	if($this->input->post('banner')){
		$this->db->where('id',$this->input->post('banner'));
		$this->db->update('programs_with_detail',$data);
	}
	return 1;
}

public function get_gallery(){
	$this->db->select('*');
	$this->db->from('gallery');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function upload_gallery($file_doc_1){
$now = date('Y-m-d H:i:s');
	$data = array('gallery_title'=>$this->input->post('gallery'),
		'image'=>$file_doc_1,
		'posted_date'=>$now 
		);
	$this->db->insert('gallery',$data);
	return 1;
}

public function get_tour(){
	$this->db->select('*');
	$this->db->from('college_tour');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function update_tour(){
	$now = date('Y-m-d H:i:s');
	$data = array('title'=>$this->input->post('tour'),
				'link'=>$this->input->post('vlink'),
				'description'=>$this->input->post('description'),
				'updated_date'=>$now
				);

if($this->input->post('id')){
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('college_tour',$data);
	}else{
		$this->db->insert('college_tour', $data);
	}
	return 1;


}


public function get_contactus(){
	$this->db->select('*');
	$this->db->from('contact_info');
	$query = $this->db->get();
	$result = $query->result_array();
	return $result;
}

public function update_info(){
	$now = date('Y-m-d H:i:s');
$data = array('university_name'=>$this->input->post('uni'),
		'full_location'=>$this->input->post('loc'),
		'post_box_num'=>$this->input->post('po'),
		'contact_information1'=>$this->input->post('con1'),
		'contact_information2'=>$this->input->post('con2'),
		'web_site_link'=>$this->input->post('web'),
		'updated_date'=>$now
		);

if($this->input->post('id')){
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('contact_info',$data);
	}else{
		$this->db->insert('contact_info', $data);
	}
	return 1;


}




// end
}