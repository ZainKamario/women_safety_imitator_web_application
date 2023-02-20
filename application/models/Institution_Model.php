<?php 

class Institution_Model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
    
    function detail(){
        
        $this->db->select('*');
        $this->db->from('institution', $this->session->userdata('institution_id'));
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        if($query-> num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
        
    }
    
    function del_user($user_id){
        $data = array('is_active' => 1, 'is_delete' => 0);
        $this->db->where('user_id', $user_id);
        $this->db->update('user', $data);
    }
    
    function user_location($user_id){
        
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        if($query-> num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
        
    }
    
    function reports(){
        
        $reports = $this->db->get_where('report' , array('to_id' => $this->session->userdata('institution_id')))->result_array();
        
        if(!empty($reports)){
      foreach ($reports as $key => $value){
          
          
          
      foreach ($value as $key => $val){
          
         
          
      }
              
      $msgs = $this->db->get_where('message' , array('to_id'=>$this->session->userdata('institution_id'),  
     'report_or_not' => 1))->result_array();
    
       
        
        
    //  $users = $this->db->get_where('user' , array('user_id'=>$value['from_id'] 
    //  ))->result_array();

    if(!empty($msgs) ){
        
        return array_merge($msgs);
      
    }else {
         return false;
    }
    
   
          
      }
       
    }else {
          return false;
    }
        

        
        // $this->db->select('*');
        // $this->db->from('report');
        // $this->db->where('report.to_id', $this->session->userdata('institution_id'));
        // $this->db->join('message', 'report.report_id = message.report_id');
        // $this->db->join('user', 'report.from_id = user.user_id');
        
        // $query = $this->db->get();
        // if($query-> num_rows()>0){
        //     return $query->result_array();
        // }else{
        //     return false;
        // }
        
    }
    
    function cancel_alert($user_id){
        
        $data = array('status' => 0);
        $this->db->where('user_id', $user_id);
        $this->db->update('user', $data);
        
    }
    
    function message(){
        
        $this->db->select('*');
        $this->db->from('message');
        $this->db->where('sender', 0);
        $this->db->where('to_id', $this->session->userdata('institution_id'));
        //$this->db->join('message', 'report.report_id = message.report_id');
        //$this->db->join('user', 'report.from_id = user.user_id');
        
        $query = $this->db->get();
        if($query-> num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }
        
    }

    function fetch_cities(){

        $this->db->select('*');
        $this->db->from('city');
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        
        
        
        if($query-> num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }

    }

    function signup($data){

        $this->db->insert('institution', $data);

    }

    function singin($email,$password){

        // $this->db->select('*');
        // $this->db->from('institution');
        // $this->db->where('offical_mail', $email);
        // $this->db->where('password', $password);
        // $this->db->where('is_active', 1);

        $institude = $this->db->get('institution' , array('offical_mail'=>$email, 'password' => $password, 
        'is_active' => 1))->result_array();

        if(!empty($institude)){
            return $institude;
        }else {
            return false;
        }

        // $query = $this->db->get();
        // if($query-> num_rows()>0){
        //     return $query->result_array();
        // }else{
        //     return false;
        // }

    }

    function institution_detail($code){

        $this->db->select('*');
        $this->db->from('institution');
        $this->db->where('code', $code);
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        if($query-> num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }

    }

    function fetch_user(){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        if($query-> num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }


    }

    

    function fetch_safe_location(){

        $this->db->select('*');
        $this->db->from('safe_location');
        $this->db->where('is_active', 1);
        $query = $this->db->get();
        if($query-> num_rows()>0){
            return $query->result_array();
        }else{
            return false;
        }


    }

    function safe_loc_data_insert($lat,$long){
        $safe_location = array('latitude'=>$lat , 'longitude' => $long);
        $this->db->insert('safe_location',  $safe_location);
        $num_inserts = $this->db->affected_rows();
        return $num_inserts;
    }




}

?>