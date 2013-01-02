<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config = array();

$config['user/login'] = array(
							array('field' => 'email',
								  'label' => 'Email',
							  	  'rules' => 'required|valid_email|xss_clean'),
							array('field' => 'password',
								  'label' => 'Password',
								  'rules' => 'required|md5|xss_clean'));

$config['customer/register'] = array(
							array('field' => 'firstname',
								  'label' => 'Nombre',
								  'rules' => 'required|max_length[30]'),
							array('field' => 'lastname',
<<<<<<< HEAD
								  'label' => 'Apellido Paterno',
								  'rules' => 'max_length[40]|xss_clean'),
=======
								  'label' => 'Apellido',
								  'rules' => 'max_length[40]'),
>>>>>>> f6b87af8f1b9ac14df920351be1a8b6f22a5e780
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
<<<<<<< HEAD
								  'rules' => 'required|min_length[8]|md5|xss_clean')
						  );
=======
								  'rules' => 'required|min_length[6]|md5'));
>>>>>>> f6b87af8f1b9ac14df920351be1a8b6f22a5e780
