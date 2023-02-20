<?php 

class Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
  



   function insert_alert($user_id,$status){

        // $user = $this->db->get_where('user', array(['user_id' => 2 ]))->row();
        
        $this->db->where('user_id', $user_id);
        $this->db->update('user',  $status);

        return true;
    }
    
    function insert_report($report){

        
        
        $this->db->insert('report',  $report);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
    
    function fetch_msg_with_reports_id($report_id)
{
   
    $msgs = $this->db->order_by('msg_date', 'ASC')->get_where('message' , array('report_id'=>$report_id))->result_array();

    if(!empty($msgs)){
        return $msgs;
    }else {
        return false;
    }

}


                    


function insert_msg($msg){

    
    
    $this->db->insert('message',  $msg);
    

    return true;
}

function check_login($email,$password){

    
    $user = $this->db->get_where('user' , array('email'=>$email, 'password' => $password))->result_array();

    if(!empty($user)){
        return $user;
    }else {
        return false;
    }


    
}

function institutes_fetch(){

    
    $institution = $this->db->get('institution')->result_array();

    if(!empty($institution)){
        return  $institution;
    }else {
        return false;
    }


    
}

function safe_locations_fetch($inst_id){

    
    $safe_locations = $this->db->get_where('safe_location' , array('institution_id' => $inst_id))->result_array();

    if(!empty($safe_locations)){
        return  $safe_locations;
    }else {
        return false;
    }


    
}

function fetch_report($from_id,$to_id){

    
    $reports = $this->db->get_where('report' , array('from_id'=>$from_id, 'to_id' => $to_id))->result_array();

    if(!empty($reports)){
        return $reports;
    }else {
        return false;
    }


    
}

function fetch_msg_for_reports($from_id,$to_id,$report_or_not){

    
    $msgs = $this->db->get_where('message' , array('from_id'=>$from_id, 'to_id' => $to_id , 
    'report_or_not' => $report_or_not))->result_array();

    if(!empty($msgs)){
        return $msgs;
    }else {
        return false;
    }


    
}

function fetch_msgs($from_id,$to_id){

    
    $msgs = $this->db->get_where('message' , array('from_id'=>$from_id, 'to_id' => $to_id  
     ))->result_array();

    if(!empty($msgs)){
        return $msgs;
    }else {
        return false;
    }


    
}



}

?>