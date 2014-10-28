<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Posthandler extends CI_Controller {

        public function __construct(){
            parent::__construct();
            
            $this->load->library('session');
            $this->load->database();
            $this->load->model('model_users');
            $this->load->helper('url');
            $this->load->helper('custom');
            
                if(!$_POST) die(redirect('/', 'refresh'));
                
        }
	public function index()
	{
            if($userId = $this->input->post('addimage'))
            {
                $mime = $_FILES['uploadimage']['type'];
                $type =  str_replace('jpeg', 'jpg',
                        ".".substr($mime, strpos($mime, '/') + 1));
                $name     = hash('md2', microtime().rand(1, 100));
                
                $fileName = $name.$type;
                
                $config['upload_path']   =  getcwd().'/assets/upload/';
                $config['allowed_types'] = 'gif|jpg|png|bmp|jpeg';
                $config['max_size']      = '10000';
                $config['file_name']     = $name;

                $this->load->library('upload', $config);

                $this->upload->do_upload("uploadimage");
                
                $this->model_users->updateUserImage($userId, 
                                    '../../assets/upload/'.$fileName);

                    redirect($_SERVER['HTTP_REFERER']);
            }
            if($this->input->post('gender') == 'man' AND !$this->input->post('edit'))
            {
                if($this->model_users->addMemberMan($this->input->post()))
                {
                        redirect("/".$this->session->userdata('user_id'));
                }
            }
            if($this->input->post('gender') == 'woman' AND !$this->input->post('edit'))
            {
                if($this->model_users->addMemberWomen($this->input->post()))
                {
                        redirect("/".$this->session->userdata('user_id'));
                }
            }
            
            // Update user profile
            if($this->input->post('edit'))
            {
                if($this->model_users->updateUserData($this->input->post()))
                {
                       redirect("/".$this->session->userdata('user_id'));
                }
            }
            if($this->input->post('login') == 'login')
            {
                if($this->model_users->authorization(
                                $this->input->post('email'), 
                                $this->input->post('password')))
                {
                    $this->model_users->isAuth(TRUE);
                }
                else
                {
                    redirect('/');
                }
                
            }
	}
}

/* End of file posthanler.php */
/* Location: ./application/controllers/posthanler.php */