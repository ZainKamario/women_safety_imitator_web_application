<?php 

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->library('Authorization_Token');	
        $this->load->model('Model');
    }

    

   function alert_post_get($user_id){
        $status = array('status' => 1);
        //calling the Model
        $run = $this->Model->insert_alert($user_id,$status);
        if($run){
            $this->data['message'] = 'Okay.';
        }else{
            $this->data['message'] = 'Error.';
        }
        // $this->response($this->data, 200);
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }

    function disable_alert_post_get($user_id){
        $status = array('status' => 0);
        //calling the Model
       $run = $this->Model->insert_alert($user_id,$status);
        if($run){
            $this->data['message'] = 'Okay.';
        }else{
            $this->data['message'] = 'Error.';
        }
        // $this->response($this->data, 200);
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }

 function user_location_update_get($user_id,$lat,$long){
        $lat_long = array('latitude' => $lat ,'longitude' => $long);
        //calling the Model
        $run = $this->Model->insert_alert($user_id,$lat_long);
        if($run){
            $this->data['message'] = 'Okay.';
        }else{
            $this->data['message'] = 'Error.';
        }
        // $this->response($this->data, 200);
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }



    function create_report_get($msg_subject,$msg_content,$from_id,$to_id,$report_or_not,$sender,$date){
        
        $report = array('from_id' =>
        $from_id , 'to_id' => $to_id,'sender' => $sender);

        $report_id = $this->Model->insert_report($report);


        
        //calling the Model
        
        if($report_id){

             $msg = array('report_id' => $report_id ,'msg_subject' => str_replace('%20', ' ', $msg_subject) ,'msg_content' => str_replace('%20', ' ', $msg_content),'from_id' =>
             $from_id , 'to_id' => $to_id, 'report_or_not' => $report_or_not , 'sender' => $sender,'msg_date' => $date);
             $run = $this->Model->insert_msg($msg);
             
             if($run){
                $this->data['message'] = 'Okay.';
             }else{

                $this->data['message'] = 'Error.';

             }

           
        }else{
            $this->data['message'] = 'Error.';
        }
        // $this->response($this->data, 200);
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }
    
    function msgs_fetch_get($report_id){

    $msgs_list = $this->Model->fetch_msg_with_reports_id($report_id);

    if($msgs_list){

        
        $this->data['msgs'] = array_merge($msgs_list);
        $this->data['message'] = 'Okay.';

        }

        else{
            $this->data['message'] = 'Error.';
        }
        
         echo json_encode($this->data, JSON_UNESCAPED_UNICODE);


}
    
    
    
    function user_login_get($email,$password){
        
        //calling the Model
        $user = $this->Model->check_login($email,md5($password));
        
        if($user){
            $this->data = array_merge($user[0]);
            $this->data['message'] = 'Okay.';
        }else{
            $this->data['message'] = 'Error.';
        }
        // $this->response($this->data, 200);
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }

   
    function institutes_get($key){

        
        if($key == 'Lixer.123'){
        //calling the Model
        $institutes = $this->Model->institutes_fetch();
        
        if($institutes){
            $this->data = array_merge($institutes);
            $this->data['message'] = 'Okay.';
        }else{
            $this->data['message'] = 'Error.';
        }
        // $this->response($this->data, 200);
    }else{
        $this->data['message'] = 'Error.';
    }
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }



    function safe_locations_get($institude_id){

        
       
        //calling the Model
        $safe_locations = $this->Model->safe_locations_fetch($institude_id);
        
        if($safe_locations){
            $this->data['safe_location'] = array_merge($safe_locations);
            $this->data['message'] = 'Okay.';
        }else{
            $this->data['message'] = 'Error.';
        }
        // $this->response($this->data, 200);
    
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }







function recent_reports_get($from_id,$to_id){

    $reports_list = $this->Model->fetch_report($from_id,$to_id);

    if($reports_list){

        $msgs_list = $this->Model->fetch_msg_for_reports($from_id,$to_id,1);

        if($reports_list){

        $this->data['reports'] = array_merge($reports_list);
        $this->data['msgs'] = array_merge($msgs_list);
        $this->data['message'] = 'Okay.';

        }

        else{
            $this->data['message'] = 'Error.';
        }
        
    }
    else{
        $this->data['message'] = 'Error.';
    } 
       
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }
    
    function send_msg_get($report_id,$msg_content,$from_id,$to_id,$report_or_not,$sender,$date){

    $msg = array('report_id' => $report_id ,'msg_content' => str_replace('%20', ' ', $msg_content),'from_id' =>
             $from_id , 'to_id' => $to_id, 'report_or_not' => $report_or_not , 'sender' => $sender,'msg_date' => $date);
             $run = $this->Model->insert_msg($msg);

             if($run){
                $this->data['message'] = 'Okay.';
             }else{

                $this->data['message'] = 'Error.';

             }

           
        
      
        echo json_encode($this->data, JSON_UNESCAPED_UNICODE);

}


    





}

?>