<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Ajax extends Main {

        public function __construct(){
            parent::__construct();
            
            $this->load->model('model_admin');
            
                if(!$_POST) die(redirect('/', 'refresh'));
        }
	public function index()
	{
            if($this->input->post('registration'))
            {
                if($this->input->post('gender') == 'man')
                {
                    $this->model_users->ManValidation($this->input->post());
                }
                elseif($this->input->post('gender') == 'woman')
                {
                    $this->model_users->WomenValidation($this->input->post());
                }    
            }
            if($this->input->post('auth'))
            {
                $this->model_users->loginValidation($this->input->post());
            }
            if($this->input->post('adminauth'))
            {
                $this->model_admin->adminloginValidation($this->input->post());
            }
            if($this->input->post('edit'))
            {
                if($this->input->post('gender') == 'man')
                {
                    $this->model_users->ManValidation($this->input->post(), TRUE);
                }
                elseif($this->input->post('gender') == 'woman')
                {
                    $this->model_users->WomenValidation($this->input->post(), TRUE);
                }   
            }
           
	}
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */