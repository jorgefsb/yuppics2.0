<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config = array();

$config['user/login'] = array(
							array('field' => 'email',
								  'label' => 'Email',
							  	  'rules' => 'required|valid_email|xss_clean'),
							array('field' => 'password',
								  'label' => 'Password',
								  'rules' => 'required|md5|xss_clean'));

$config['user/register'] = array(
							array('field' => 'firstname',
								  'label' => 'Nombre',
								  'rules' => 'required|max_length[30]|xss_clean'),
							array('field' => 'lastname',
								  'label' => 'Apellido Paterno',
								  'rules' => 'max_length[40]|xss_clean'),
							array('field' => 'email',
								  'label' => 'E-mail',
								  'rules' => 'required|max_length[60]|valid_email|xss_clean'), // |is_unique[customers.email]
							array('field' => 'username',
								  'label' => 'Usuario',
								  'rules' => 'required|max_length[15]|xss_clean'), // |is_unique[customers.username]
							array('field' => 'password',
								  'label' => 'Password',
								  'rules' => 'required|min_length[8]|matches[repassword]|md5|xss_clean'),
							array('field' => 'repassword',
								  'label' => 'Re-password',
								  'rules' => 'required|min_length[8]|md5|xss_clean')
						  );
