<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('admin_nav'))
{
	function admin_nav($isAuth, $gender = NULL)
	{
            $women = '';
            $man   = '';
            
            if($gender == 'women'){ $women = "class=\"active\""; }
            elseif($gender == 'man')  {  $man   = "class=\"active\""; }

            if($isAuth == TRUE):
                        return <<<NAV
                            <ul style="visibility: visible">
                             <li $man><a href="/admin/man/">Man</a></li>
                             <li $women><a href="/admin/women/">Women</a></li>
                             <li style="margin-left: 100px;"><a href="/admin/logout">Logout</a></li>
                           </ul>
NAV;
            else:
                         return <<<NAV
                            <ul style="visibility: hidden">
                             <li><a href="/admin/man/">Man</a></li>
                             <li><a href="/admin/women/">Women</a></li>
                             <li style="margin-left: 100px;"><a href="/admin/logout">Logout</a></li>
                           </ul>
NAV;
            endif;
	}
}
if ( ! function_exists('hash_pass'))
{
	function hash_pass($pass)
	{
            return hash('sha384', $pass."tYr~PoAn");
	}
}
if ( ! function_exists('user_id_generate'))
{
	function user_id_generate()
	{
            return 'id_'.hash('adler32',  microtime().  mt_rand(100, 1000));
	}
}

