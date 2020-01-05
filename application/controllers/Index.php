<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller{
	
    public function __construct() {
        parent::__construct();     
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $logged_info = isset($this->session->userdata['logged_in']) ? $this->session->userdata['logged_in'] : array();
        $this->load->model('event_model');
        $vars['class'] = '';
        $vars['logged_info'] = $logged_info;
        $vars['sympos'] = $this->event_model->get_symposium();
        $this->load->template('home',$vars);
    }

    public function savecontact(){
        $this->load->model('user_model');
        if($this->input->post('email')){
            $contactInfo = array(
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'message' => $this->input->post('message'),
                'status' => '30'
            );
            $table = 'contact_us';
            $contactId = $this->user_model->savecontact($table,$contactInfo);  
            if($contactId){
                $response = array("status" => true, "data" => $contactId );
            }else{
                $response = array("status" => false, "data" => "" );
            }
        }else{
            $response = array("status" => false, "data" => "" );
        }
        echo json_encode($response);
    }
   
    public function newevent(){        
        $vars['class'] = '';
        $this->load->template('create_account',$vars);
    }

  
}
