<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Adminmain {
    
    protected $layout      = "layout_admin_template";
    
    protected $navigation  = "";
    protected $title       = "Administration panel - Dating portal";
    protected $description = "Curabitur ullamcorper vestibulum sollicitudin.";
    
    protected $gender;

        public function __construct(){
        
                 parent::__construct();
                 
                 $this->gender     = $this->uri->segment(2);
                 $this->navigation = admin_nav(TRUE, $this->gender);
        }
        public function index()
	{
            $this->model_admin->isAuth(TRUE);
            
            $this->navigation = admin_nav(FALSE);
            
            $this->showPage('admin_auth_template',array());
	}
        public function members()
        {
            $this->notAuthCheck();
            
            $this->title = $this->title." - ".ucfirst($this->gender);

            /** Paginator **/
            $start      = $this->input->get('start');
            $start      = isset($start) ? intval($start) : 0;
            $pagination = $this->paginator->getLinks( 50, 5, $start, 5, 'start' );
            /** Paginator **/
            
            if($this->gender == 'man'):
                
              elseif($this->gender == 'women'):  
                
            endif;
            
            $this->showPage('admin_show_template',array('pagination'=>$pagination));
        }
        public function editmembers()
        {
            $this->notAuthCheck();
            
            $this->title = $this->title." - ".ucfirst($this->gender);
            
            if($this->gender == 'man'):
                $this->showPage('admin_edit_man_template',array());
              elseif($this->gender == 'women'):  
                $this->showPage('admin_edit_women_template',array());
            endif;
        }
        
        private function notAuthCheck()
        {
            if(!$this->model_admin->isAuth())
            {
                redirect('/admin'); die;
            }
        }
        function logout()
        {
            $this->session->sess_destroy();
            redirect('/admin'); die;
        }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */