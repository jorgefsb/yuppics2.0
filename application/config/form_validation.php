<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config = array();


$config['customer/register'] = array(
							array('field' => 'firstname',
								  'label' => 'Nombre',
								  'rules' => 'required|max_length[30]'),
							array('field' => 'lastname',
								  'label' => 'Apellido',
								  'rules' => 'max_length[40]'),
							array('field' => 'email',
								  'label' => 'E-mail',
								  'rules' => 'required|max_length[60]|valid_email|is_unique[customers.email]'),
							array('field' => 'username',
								  'label' => 'Usuario',
								  'rules' => 'required|max_length[15]|is_unique[customers.username]'), 
							array('field' => 'password',
								  'label' => 'Password',
								  'rules' => 'required|min_length[6]|matches[repassword]|md5'),
							array('field' => 'repassword',
								  'label' => 'Re-password',
								  'rules' => 'required|min_length[6]|md5'));