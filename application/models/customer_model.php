<?php
session_start();

class customer_model extends privilegios_model{

	function __construct(){
		parent::__construct();
	}

	
	public function register_customer()
	{
		$data = array('username' => $this->input->post('username'),
			'password'   => $this->input->post('password'),
			'first_name' => $this->input->post('firstname'),
			'last_name'  => $this->input->post('lastname'),
			'email'      => $this->input->post('email'),
			'created'    => date('Y-m-d H:i:s'),
			'status'     => 'on',
		);

		$this->db->insert('customers', $data);
		return array('cid' => $this->db->insert_id());
	}

	public function register_customer_social($sdata = array())
	{
		$data              = array();
		$data['email']     = isset($sdata['email']) ? $sdata['email'] : '';
		$data['firstname'] = isset($sdata['firstname']) ? $sdata['firstname'] : '';
		$data['status']    = 'on';

		// posibles valores en $data['social'] (facebook_id o twitter_id)
		$data[$sdata['social']] = $sdata['sid'];

		$this->db->insert('customers', $data);
		return array('cid' => $this->db->insert_id());
	}




	/**
	 * Revisa si la sesion del usuario esta activa
	 */
	public function checkSession(){
		if($this->session->userdata('id_usuario') && $this->session->userdata('nombre') && $this->session->userdata('type') === 'customer') {
			if($this->session->userdata('id_usuario')!='' && $this->session->userdata('nombre')!=''){
				return true;
			}
		}
		return false;
	}

	/*
		|	Logea al usuario y crea la session con los parametros
		| id_usuario, username, email y si marco el campo "no cerra sesion" agrega el parametro "remember" a
		|	la session con 1 año para que expire
		*/
	public function setLogin($user_data)
	{
		$fun_res = $this->exec_GetWhere('customers', $user_data, TRUE);

		if ($fun_res != FALSE)
		{
			$user_data = array(	'id_usuario'=> $fun_res[0]->id_customer,
													'nombre'  => $fun_res[0]->first_name,
													'email'   => $fun_res[0]->email,
													'type'    => 'customer',
													'idunico' => uniqid('l', true));
				$this->crea_session($user_data);
		}
			
			return array($fun_res, 'msg'=>'El correo electrónico y/o contraseña son incorrectos');
		// return array($fun_res);
	}

	/*
		|	Ejecuta un db->get_where() || Select * From <tabla> Where <condicion>
		|	$tabla : tabla de la bdd
		|	$where : condicion
		| $return_data : Indica si regresara el resulta de la consulta, si es False y la consulta obtuvo al menos
		|		un registro entonces regresara TRUE si no FALSE
		*/
	public function exec_GetWhere($tabla, $where, $return_data=FALSE)
	{
		// SELECT * FROM $tabla WHERE id=''
		$sql_res = $this->db->get_where($tabla, $where);

		if ($sql_res->num_rows() > 0)
		{
			if ($return_data)
				return $sql_res->result();
			return TRUE;
		}
		return FALSE;
	}

	/*
		|	Crea la session del usuario que se logueara
		|	$user_data : informacion del usuario que se agregara al array session
		*/
	private function crea_session($user_data)
	{
		if (isset($_POST['remember']))
		{
			$this->session->set_userdata('remember',TRUE);
			$this->session->sess_expiration	= 60*60*24*365;
		}
		else
			$this->session->sess_expiration	= 7200;

		$this->session->set_userdata($user_data);
	}


}