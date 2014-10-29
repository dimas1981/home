<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Main {
    
    protected $layout      = "layout_user_template";
    
    protected $title       = "Dating portal";
    protected $description = "Curabitur ullamcorper vestibulum sollicitudin.";
    private   $userInfo;


        public function __construct(){
            parent::__construct();
        }
	public function index()
	{
            $this->userInfo = $this->model_users->getUserInformation($this->uri->segment(1));
            
            if(!$this->userInfo)
            { 
                show_404();die;
            }

            
            if(!$this->model_users->isAuth() 
                    OR $this->uri->segment(1) != $this->session->userdata('user_id'))
            { 
                $this->layout = "layout_not_authorized"; 
                $this->title  = "User profile - ".$this->title;
                $this->showPage('not_authorized_template', $this->userInfo);
            }
            else
            {
                $this->title = "User profile - ".$this->title;
                $this->showPage('user_template', $this->userInfo);
            }

	}
	public function edit()
	{
            if(!$this->model_users->isAuth() 
                    OR $this->uri->segment(1) != $this->session->userdata('user_id'))
            { 
                redirect('/'); die;
            }

            $this->userInfo = $this->model_users->getUserInformation($this->uri->segment(1));
            //echo "<pre>";
            //print_r($this->userInfo);
            $this->title = "Edit user profile - ".$this->title;
            $this->showPage('edit_user_template',$this->userInfo);
	}
	public function logout()
	{
            $this->session->sess_destroy();
            redirect('/'); die;
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */