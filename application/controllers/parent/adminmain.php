<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmain extends CI_Controller {
   
    protected $title       = "";
    protected $description = "";
    protected $layout      = "";
    protected $navigation  = "";
    protected $gender      = "";
    protected $content     = "";
    protected $layoutData  = array();

        public function __construct() {

            parent::__construct();

            $this->load->library('session');
            $this->load->library('parser');
            $this->load->database();
            $this->load->model('model_users');
            $this->load->model('model_admin');
            $this->load->helper('url');
            $this->load->helper('custom');
            $this->load->library('paginator');
            
        }
        protected function showPage($name = NULL, $data = NULL)
        {
            $this->content = $this->parser->parse($name, $data, TRUE);
            
            $this->layoutData = array(
                           'title'       => $this->title,
                           'description' => $this->description,
                           'navigation'  => $this->navigation,
                           'content'     => $this->content,
                           );

            $this->load->view($this->layout, $this->layoutData);
        }
    
}

/* End of file parent/adminmain.php */
/* Location: ./application/controllers/parent/adminmain.php */