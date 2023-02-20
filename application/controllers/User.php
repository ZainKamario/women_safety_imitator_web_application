<?php 

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Institution_Model', 'Institution_Model');
    }

    function register($code){

        $response['detail'] = $this->Institution_Model->institution_detail($code);
        $this->load->view('user/register');
        if(isset($_POST['btn'])){

            $data = array(

                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),

            );

        }

    }

}

?>