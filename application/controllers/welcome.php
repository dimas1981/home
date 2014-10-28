<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Main {
    
    protected $layout      = "layout_template";
    
    protected $title       = "Dating portal";
    protected $description = "Curabitur ullamcorper vestibulum sollicitudin.";


        public function __construct(){
            parent::__construct();
            
            $this->model_users->isAuth(TRUE);
        }
	public function index()
	{
            
            $this->showPage('login_template',array());
	}
	public function register()
	{
            $this->title = "Registration - ".$this->title;
            
            $this->showPage('register_template',array());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */