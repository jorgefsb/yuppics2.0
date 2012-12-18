<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class customer extends MY_Controller {
	/**
	 * Evita la validacion (enfocado cuando se usa ajax). Ver mas en privilegios_model
	 * @var unknown_type
	 */
	private $excepcion_privilegio = array('');

	public function _remap($method){
		$this->load->model("customer_model");
		if ($method == 'login' || $method == 'register' || $method == 'login_facebook') {
			$this->{$method}();
		} else if($this->customer_model->checkSession()){
			$this->{$method}();
		}else
			$this->{'intro'}();
	}

	public function index(){

		//$params['info_empleado'] = $this->info_empleado['info']; //info empleado
		$params['seo'] = array(
			'titulo' => 'Panel de Administración'
		);


		$this->load->view('skin/header', $params);
		$this->load->view('skin/general/menu', $params);
		$this->load->view('skin/general/home', $params);
		$this->load->view('skin/footer');
	}



	public function intro(){
		$this->carabiner->css(array(
			array('libs/jquery.pschecker.css', 'screen'),
			array('skin/intro/intro.css', 'screen')
		));

		$this->carabiner->js(array(
			array('libs/jquery.form.js'),
			array('libs/jquery.pschecker.js'),
			array('skin/login.js'),
		));

		$params['seo'] = array(
			'titulo' => 'Intro - Yuppics'
		);

		$this->load->view('skin/header_intro', $params);
		$this->load->view('skin/general/intro', $params);
		$this->load->view('skin/footer');
	}

	/**
	 * carga el login para entrar al panel
	 */
	public function login(){
		$this->load->library('form_validation');
		$rules = array(
			array('field'	=> 'email',
				'label'		  => 'Email',
				'rules'		  => 'required|valid_email'),
			array('field'	=> 'password',
				'label'		  => 'Password',
				'rules'	  	=> 'required|md5')
		);
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == FALSE){
			$params['frm_errors'] = array(
					'title' => 'Error al Iniciar Sesión!',
					'msg' => preg_replace("[\n|\r|\n\r]", '', validation_errors()),
					'ico' => 'error');
		}else{
			$data = "email = '".$this->input->post('email')."' AND password = '".$this->input->post('password')."' AND status = 'on' ";
			$mdl_res = $this->customer_model->setLogin($data);
			if ($mdl_res[0] && $this->customer_model->checkSession()) 
			{
				redirect(base_url('home'));
			}
			else
			{
				$params['frm_errors'] = array(
					'title' => 'Error al Iniciar Sesión!',
					'msg' => 'El usuario y/o contraseña son incorrectos, o no cuenta con los permisos necesarios para loguearse',
					'ico' => 'error');
			}
		}

		echo json_encode($params);
		// $this->load->view('panel/header', $params);
		// $this->load->view('panel/general/login', $params);
		// $this->load->view('panel/footer');
	}

	public function login_facebook()
	{
		// echo 'Pruebillas con la api de facebook.';

		$this->load->library('my_facebook');

		$config = array(
					'redirect_uri' => base_url('customer/login_facebook'),
					'scope' => 'user_about_me, email, user_photos, friends_photos',
					'display' => 'popup'
		);

		$this->my_facebook->initialize($config);
		$access_token = $this->my_facebook->oauth();
		echo $access_token.'<br>';

		$user = $this->my_facebook->get_user_about_me($access_token);
		var_dump('<pre>',$user,'</pre>');
		exit;
	}

	/**
	 * cierra la sesion del usuario
	 */
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('panel/home'));
	}



	/*
 	|	Muestra el Formulario para agregar un customer
 	*/
	public function register()
	{		
		// $this->carabiner->css(array(
		// ));
		
		// $this->carabiner->js(array(
		// ));

		$this->load->library('form_validation');
		if ($this->form_validation->run() === FALSE) 
		{
			$params['frm_errors'] = array(
					'title' => '',
					'msg'   => preg_replace("[\n|\r|\n\r]", '', validation_errors()),
					'ico'   => 'error');
		}
		else
		{
			$mdl_res = $this->customer_model->register_customer();

			$params['frm_errors'] = array(
					'title' => '',
					'msg'   => 'Te has registrado correctamente a yuppics',
					'ico'   => 'success');
		}

		echo json_encode($params);

		// $params['seo'] = array('titulo' => 'Registro Yuppics2.0');
		// $this->load->view('header', $params);
		// $this->load->view('register', $params);
		// $this->load->view('footer', $params);
	}
	
	/*
 	|	Muestra el Formulario para modificar un usuario
 	*/
	public function modificar()
	{		
		if (isset($_GET['id'])) 
		{
			$this->carabiner->css(array(
					array('libs/jquery.treeview.css', 'screen')
			));
			$this->carabiner->js(array(
					array('libs/jquery.treeview.js')
			));
			
			$this->load->model('usuarios_model');
			
			$params['info_empleado'] = $this->info_empleado['info']; //info empleado
			$params['seo'] = array(
				'titulo' => 'Modificar usuario'
			);
			
			$this->config_add_usuario('modificar');
			if ($this->form_validation->run() == FALSE)
			{
				$params['frm_errors'] = $this->showMsgs(2, preg_replace("[\n|\r|\n\r]", '', validation_errors()));
			}
			else
			{
				$res_mdl = $this->usuarios_model->modificar_usuario();
					
				if($res_mdl['error'] == FALSE)
					redirect(base_url('panel/usuarios/modificar/?'.String::getVarsLink(array('msg')).'&msg=4'));
			}
			
			$params['data'] = $this->usuarios_model->get_usuario_info();
			
			if (isset($_GET['msg'])) 
				$params['frm_errors'] = $this->showMsgs($_GET['msg']);
			
			$this->load->view('panel/header', $params);
			$this->load->view('panel/general/menu', $params);
			$this->load->view('panel/usuarios/modificar', $params);
			$this->load->view('panel/footer');
		}
		else 
			redirect(base_url('panel/usuarios/?'.String::getVarsLink(array('msg')).'&msg=1'));
	}

}

?>