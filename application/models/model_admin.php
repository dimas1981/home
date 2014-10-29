<?php

class Model_admin extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
        $this->load->helper('custom');
        $this->load->library('session');
    }

    function adminloginValidation($post)
    {
       $flag           = 'true';
       $errormail      = '';
       $errorpass      = '';
       $errormatch     = '';

        
        if($post['email'] == NULL)
            {$flag = 'false';$errormail = 'Please enter email'; }
        if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL) && $post['email'] != NULL)
            {$flag = 'false';$errormail = 'Please Check Your Email';}
        if($post['pass'] == NULL)
            {$flag = 'false';$errorpass = 'Please enter password';}    

        if(filter_var($post['email'], FILTER_VALIDATE_EMAIL) && $post['pass'] != NULL)
        {
            $this->db->like('email', $post['email']);
            $this->db->like('password', hash_pass($post['pass']));
            $this->db->from('admin');

            if($this->db->count_all_results() == 0)
                {$flag = 'false';$errormatch = 'The username or 
                                            password you have entered is
                                        incorrect. Please try again';}
        }
 

        $dataArray = array('flag'=>$flag,
                     'errormail'     =>$errormail,
                     'errorpass'     =>$errorpass,
                     'errormatch'    =>$errormatch,
                 );

        echo json_encode($dataArray);
    }
    function authorization($email, $pass)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $this->db->where('password', hash_pass($pass));
        $query = $this->db->get();
        

            $userArray = $query->result_array();
            $userdata  = array(
                   'admin_logged_in'  => TRUE,
               );

            $this->session->set_userdata($userdata);
            
                return TRUE;
    }
    function isAuth($redirect = NULL)
    {
        if($redirect === NULL)
        {
            if($this->session->userdata('admin_logged_in'))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
        elseif($redirect === TRUE)
        {
            if($this->session->userdata('admin_logged_in'))
            {
                redirect("/admin/man");
            }
            else{}
        }    
    }
}