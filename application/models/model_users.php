<?php

class Model_users extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
        $this->load->helper('custom');
        $this->load->library('session');
    }
    function ManValidation($post, $edit = NULL)
    {      
       $flag           = 'true';
       $errormail      = '';
       $errorpass      = '';
       $errorcpass     = '';
       $errorfname     = '';
       $errorlname     = '';
       $errorregion    = '';
       $errorbdate     = '';
       $errorismaried  = '';
       $errorbodytype  = '';
            
            if($edit === NULL)
            { 
                $this->db->like('email', $post['email']);
                $this->db->from('users');
            }
            
        if($post['email'] == NULL)
            {$flag = 'false';$errormail = 'Please enter email'; }
        if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL) && $post['email'] != NULL)
            {$flag = 'false';$errormail = 'Please Check Your Email';}
        if($edit === NULL)
        { 
            if($this->db->count_all_results() && $post['email'] != NULL)
                {$flag = 'false';$errormail = 'Email address already exists';}
        }
        if($post['password'] == NULL)
            {$flag = 'false';$errorpass = 'Please enter password';}
            
        if($post['cpassword'] == NULL)
            {$flag = 'false';$errorcpass = 'Please enter confirm password';}
        if(($post['cpassword'] != NULL AND $post['password'] != NULL) 
                AND $post['password'] !== $post['cpassword'])
            {
                $flag = 'false';
                $errorpass = 'Passwords doesn’t match';
                $errorcpass = 'Passwords doesn’t match';
            }
        if($post['firstname'] == NULL)
            {$flag = 'false';$errorfname    = 'You don’t enter the First Name';}
        if($post['lastname']  == NULL)
            {$flag = 'false';$errorlname    = 'You don’t enter the Last Name';}
        if($post['region']    == NULL)
            {$flag = 'false';$errorregion   = 'You don’t enter Region';}
        if($post['bdate']     == NULL)
            {$flag = 'false';$errorbdate    = 'Enter the birth date';}
        if($post['ismaried']  == NULL)
            {$flag = 'false';$errorismaried = 'Choose the marital status';}
        if($post['bodytype']  == NULL)
            {$flag = 'false';$errorbodytype = 'Choose the body type';}
            
        $dataArray = array('flag'=>$flag,
                    'errormail'     =>$errormail,
                    'errorpass'     =>$errorpass,
                    'errorcpass'    =>$errorcpass,
                    'errorfname'    =>$errorfname,
                    'errorlname'    =>$errorlname,
                    'errorregion'   =>$errorregion,
                    'errorbdate'    =>$errorbdate,
                    'errorismaried' =>$errorismaried,
                    'errorbodytype' =>$errorbodytype,
                );
     
       echo json_encode($dataArray);
    }
    function addMemberMan($post)
    {
       $dateToArr = explode('/', $post['datepicker']);
       $bdate = $dateToArr[2]."-".$dateToArr[0]."-".$dateToArr[1];

       $data = array(
           'first_name' => $post['first_name'],
           'last_name'  => $post['last_name'],
            'email'     => $post['register_email'],
            'password'  => hash_pass($post['register_password']),
            'user_id'   => user_id_generate(),
            'region'    => $post['region'],
            'birthdate' => $bdate,
            'gender'    => 'm',
            'marital'   => $post['ismaried'],
            'body_type' => $post['bodytype'],
         );

        $this->db->insert('users', $data); 
        $this->authorization($post['register_email'], 
                             $post['register_password']);
        
            return TRUE;
    }
    function addMemberWomen($post)
    {
       $dateToArr = explode('/', $post['datepicker']);
       $bdate = $dateToArr[2]."-".$dateToArr[0]."-".$dateToArr[1];

       $data = array(
           'first_name' => $post['first_name'],
           'last_name'  => $post['last_name'],
            'email'     => $post['register_email'],
            'password'  => hash_pass($post['register_password']),
            'user_id'   => user_id_generate(),
            'region'    => $post['region'],
            'birthdate' => $bdate,
            'gender'    => 'w',
            'marital'   => $post['ismaried'],
            'breast'    => $post['breast'],
            'waist'     => $post['waist'],
            'hips'      => $post['hips'],
         );

        $this->db->insert('users', $data); 
        $this->authorization($post['register_email'], 
                             $post['register_password']);
        
            return TRUE;
    }
    function WomenValidation($post, $edit = NULL)
    {
       $flag           = 'true';
       $errormail      = '';
       $errorpass      = '';
       $errorcpass     = '';
       $errorfname     = '';
       $errorlname     = '';
       $errorregion    = '';
       $errorbdate     = '';
       $errorismaried  = '';
       $errorbreast    = '';  
       $errorwaist     = '';  
       $errorhips      = '';  
       
            if($edit === NULL)
            { 
                $this->db->like('email', $post['email']);
                $this->db->from('users');
            }
            
        if($post['email'] == NULL)
            {$flag = 'false';$errormail = 'Please enter email'; }
        if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL) && $post['email'] != NULL)
            {$flag = 'false';$errormail = 'Please Check Your Email';}
        if($edit === NULL)
        {    
                if($this->db->count_all_results() && $post['email'] != NULL)
                    {$flag = 'false';$errormail = 'Email address already exists';}
        }    
        if($post['password'] == NULL)
            {$flag = 'false';$errorpass = 'Please enter password';}
            
        if($post['cpassword'] == NULL)
            {$flag = 'false';$errorcpass = 'Please enter confirm password';}
        if(($post['cpassword'] != NULL AND $post['password'] != NULL) 
                AND $post['password'] !== $post['cpassword'])
            {
                $flag = 'false';
                $errorpass = 'Passwords doesn’t match';
                $errorcpass = 'Passwords doesn’t match';
            }
        if($post['firstname'] == NULL)
            {$flag = 'false';$errorfname    = 'You don’t enter the First Name';}
        if($post['lastname']  == NULL)
            {$flag = 'false';$errorlname    = 'You don’t enter the Last Name';}
        if($post['region']    == NULL)
            {$flag = 'false';$errorregion   = 'You don’t enter Region';}
        if($post['bdate']     == NULL)
            {$flag = 'false';$errorbdate    = 'Enter the birth date';}
        if($post['ismaried']  == NULL)
            {$flag = 'false';$errorismaried = 'Choose the marital status';}
        if($post['breast']     == NULL)
            {$flag = 'false';$errorbreast   = 'Not all body parameters are entered';}
        if($post['waist']     == NULL)
            {$flag = 'false';$errorwaist    = 'Not all body parameters are entered';}
        if($post['hips']     == NULL)
            {$flag = 'false';$errorhips     = 'Not all body parameters are entered';}
            
            
        $dataArray = array('flag'=>$flag,
                    'errormail'     =>$errormail,
                    'errorpass'     =>$errorpass,
                    'errorcpass'    =>$errorcpass,
                    'errorfname'    =>$errorfname,
                    'errorlname'    =>$errorlname,
                    'errorregion'   =>$errorregion,
                    'errorbdate'    =>$errorbdate,
                    'errorismaried' =>$errorismaried,
                    'errorbreast'   =>$errorbreast,
                    'errorwaist'    =>$errorwaist,
                    'errorhips'     =>$errorhips,
                );
     
       echo json_encode($dataArray);
    }
    function loginValidation($post)
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
            $this->db->from('users');
            
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
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', hash_pass($pass));
        $query = $this->db->get();
        
        if($this->db->count_all_results())
        {
            $userArray = $query->result_array();
            $userdata  = array(
                   'id'         => $userArray[0]['id'],
                   'email'      => $userArray[0]['email'],
                   'logged_in'  => TRUE,
                   'first_name' => $userArray[0]['first_name'],
                   'last_name'  => $userArray[0]['last_name'],
                   'user_id'    => $userArray[0]['user_id'],
               );

            $this->session->set_userdata($userdata);
            
                return TRUE;
        }
        else
        {
                return FALSE;
        }
            
    }
    function isAuth($redirect = NULL)
    {
        if($redirect === NULL)
        {
            if($this->session->userdata('logged_in'))
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
            if($this->session->userdata('logged_in'))
            {
                redirect("/".$this->session->userdata('user_id'));
            }
            else{}
        }    
    }
    function getUserInformation($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $id);
        $query = $this->db->get();

        if(!empty($query->result_array()))
        {
             $userInfo = $query->result_array();
             
             $marital  = ($userInfo[0]['marital'] == 'n') ? 'Not married' : 'Married';
             $dateToArr = explode('-', $userInfo[0]['birthdate']);
             $bdate = $dateToArr[1]."/".$dateToArr[2]."/".$dateToArr[0];
              return  $userDataArray = array(
                        'email'    =>$userInfo[0]['email'],
                        'region'   =>$userInfo[0]['region'],
                        'bdate'    =>$userInfo[0]['birthdate'],
                        'bdatemod' =>$bdate,
                        'gender'   =>$userInfo[0]['gender'],
                        'marital'  =>$marital,
                        'bodytype' =>ucfirst($userInfo[0]['body_type']),
                        'firstname'=>ucfirst($userInfo[0]['first_name']),
                        'lastname' =>ucfirst($userInfo[0]['last_name']),
                        'breast'   =>$userInfo[0]['breast'],
                        'waist'    =>$userInfo[0]['waist'],
                        'hips'     =>$userInfo[0]['hips'],
                        'photo'    =>$userInfo[0]['photo'],
                     );
        }
        else
        {
            return FALSE;
        }
        
    }
    function updateUserData($post)
    {

        $dateToArr = explode('/', $post['datepicker']);
        $bdate = $dateToArr[2]."-".$dateToArr[0]."-".$dateToArr[1];

        if($post['gender'] == 'woman')
        {
            $data = array(
               'first_name' => $post['first_name'],
               'last_name'  => $post['last_name'],
               'email'      => $post['register_email'],
               'password'   => hash_pass($post['register_password']),
               'region'     => $post['region'],
               'birthdate'  => $bdate,
               'marital'    => $post['ismaried'],
               'breast'     => $post['breast'],
               'waist'      => $post['waist'],
               'hips'       => $post['hips'],
            );

            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->update('users', $data); 
            
            return TRUE;
        }
        elseif($post['gender'] == 'man')
        {
            $data = array(
               'first_name' => $post['first_name'],
               'last_name'  => $post['last_name'],
               'email'      => $post['register_email'],
               'password'   => hash_pass($post['register_password']),
               'region'     => $post['region'],
               'birthdate'  => $bdate,
               'marital'    => $post['ismaried'],
               'body_type'  => $post['bodytype'],
            );
            
            $this->db->where('user_id', $this->session->userdata('user_id'));
            $this->db->update('users', $data); 
            
            return TRUE;
        }
    }
    function updateUserImage($id, $url)
    {
        $data = array(
               'photo' => $url,
            );

        $this->db->where('user_id', $id);
        $this->db->update('users', $data); 
    }
}