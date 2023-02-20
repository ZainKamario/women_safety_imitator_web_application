<?php 

class Institution extends  CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('Institution_Model', 'Institution_Model');
    }

    

    function signup(){

        $response['city'] = $this->Institution_Model->fetch_cities();
        $this->load->view('institution/signup', $response);

        if(isset($_POST['button'])){

            $data = array(
                'institution_name' => $this->input->post('institiution_name'),
                'institution_number' => $this->input->post('phone_number'),
                'offical_mail' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'city_id' => $this->input->post('city'),
                'code' => uniqid()
            );

            //Calling the Model to Insert the Institution signup
            $run = $this->Institution_Model->signup($data);

            if(!$run){
                echo "<script>alert('Successfully Registered..')</script>";
                echo "<script>window.open('". base_url() ."', '_self')</script>";
            }else{
                echo "<script>alert('Erorr..')</script>";
                echo "<script>window.open('". base_url() ."Institution/signup', '_self')</script>";
            }

        }

    }

    function index(){
        $this->load->view('institution/signin');
    }

    function safe_loc(){
        
        if(isset($_POST['loc_btn'])){
            $latitude = $this->input->post('latitude');
            $longitude =$this->input->post('longitude');

            if(!$latitude == "" && !$longitude == ""){

            $ans = $this->Institution_Model->safe_loc_data_insert($latitude,$longitude);

            if($ans!=0){
                $response['safe_location'] = $this->Institution_Model->fetch_safe_location();
                // $this->load->view('institution/safe_location',$response); 
                redirect(base_url() . 'institution/safe_location', 'refresh');
        }}else{
            echo '<script>alert("Please Enter Latitude & Longitude first");</script>';
            redirect(base_url() . 'institution/safe_location', 'refresh');
        }
            
    }}

    function signin(){

        if(isset($_POST['button'])){
            
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            //Check the User
            $ans = $this->Institution_Model->singin($email,$password);

            if($ans){


                //Session Array
                $data = array('institution_id' => $ans[0]['institution_id']);
                $this->session->set_userdata($data);
                $this->load->view('institution/dashboard');

                // 
             

            }else{
                echo "<script>alert('Incorrect Details.')</script>";
            }
            

        }
        
         if(isset($_POST['signup_btn'])){
             
            //  $this->load->view('institution/signup');
            
            Redirect('Institution/signup', 'refresh');
             
         }

    }

    function dashboard(){
        
        $respose['detail'] = $this->Institution_Model->detail();
        //$this->load->view('institution/header');
        $this->load->view('institution/dashboard', $respose);

    }

    function user(){

        $response['user'] = $this->Institution_Model->fetch_user();
        $this->load->view('institution/user', $response);

    }
    
    function del_user($user_id){
        
        $run = $this->Institution_Model->del_user($user_id);
            
    }
    
    function user_location($user_id){
        
        $response['detail'] = $this->Institution_Model->user_location($user_id);
        $this->load->view('institution/user_location', $response);
        
    }
    
    function del_msg($user_id){
        
        
        
    }

    function safe_location(){

        $response['safe_location'] = $this->Institution_Model->fetch_safe_location();
        $this->load->view('institution/safe_location',$response);

    }

    function report(){
    
        $response['report'] = $this->Institution_Model->reports();
        $this->load->view('institution/report', $response);

    }
    
    function cancel_alert($user_id){
        
        $run = $this->Institution_Model->cancel_alert($user_id);
        redirect(base_url() . 'institution/user', 'refresh');


        
    }

    function message($report_id){

        $response['message'] = $this->Institution_Model->message();
        $this->load->view('institution/message', $response);

    }

}

?>