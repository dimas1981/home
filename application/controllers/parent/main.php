<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
   
    protected $title       = "";
    protected $description = "";
    protected $layout      = "";
    protected $content     = "";
    protected $layoutData  = array();

        public function __construct() {

            parent::__construct();

            $this->load->library('session');
            $this->load->library('parser');
            $this->load->database();
            $this->load->model('model_users');
            $this->load->helper('custom');
            $this->load->helper('url');
        }
        protected function showPage($name = NULL, $data = NULL)
        {
            $this->content = $this->parser->parse($name, $data, TRUE);
            
            $this->layoutData = array(
                           'title'       => $this->title,
                           'description' => $this->description,
                           'content'     => $this->content,
                           );

            $this->load->view($this->layout, $this->layoutData);
        }
    
}

/* End of file parent/main.php */
/* Location: ./application/controllers/parent/main.php */