<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * My CodeIgniter Library
 *################################################################
 *
 * @author  Indigo Dev Team
 * @since   Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------
/**
 * @category	Facebook API
 */
class My_upload facebook{

	private $CI; // Instancia de Codeigniter

	// Vars
  private $APP_ID = ''; // FACEBOOK APP ID
	private $APP_SECRET = ''; // FACEBOOK APP SECRET
  
  private $redirect_uri = '';	// URL A LA QUE FACEBOOK RE-DIRECCIONARA
  private $scope = ''	// PERMISOS QUE LA APP PEDIRA AL USUARIO. MAS PERMISOS EN http://developers.facebook.com/docs/concepts/login/permissions-login-dialog/
  
  public $code;
  public $state;

  /**
   * Constructor
   * @param  array $config=array('redirect_uri'=>'http://www.yuppics.com/', 'scode'=> '')
   */
  public function __construct($config=array())
  {
  	// Obtiene la instancia de condeigniter
    $this->CI =& get_instance();

    if (count($config) > 0)
    	$this->initialize($config);

    log_message('debug', "my_facebook Class Initialized");
  }

  /**
   * Inicializa la configuracion de facebook
   * @param  array $config=array('redirect_uri'=>'http://www.yuppics.com/', 'scode'=> '')
   */
  public function initialize($config=array())
  {
  	foreach ($config as $key => $value) {
  		$this->{$key} = $value;
  	}
  }

  public function auth(){
  	session_start();

  	$code = $_REQUEST['code'];
  	if (empty($code)) 
  	{
  		$_SESSION['state'] = md5(uniqid(rand(), TRUE)); // PROTECCION CSRF
  		$dialog_url = "https://www.facebook.com/dialog/oauth?client_id=" . $this->APP_ID . 
  									"&redirect_url=" . urlencode($this->redirect_uri) . 
  									"&state=" . $_SESSION['state'] . 
  									(empty($this->scope))?'':"&scope=" . $this->scope;

  		echo("<script>top.location.href='".$dialog_url."'</script>");
  	}

  	if ($_SESSION['state'] && ($_SESSION['state']===$_REQUEST['state'])) 
  	{
  		$token_url = "https://graph.facebook.com/oauth/access_token?" . 
  									"client_id=" . $this->APP_ID .
  									"&redirect_uri=" . urlencode($this->redirect_uri) .
  									"&client_secret=" . $this->APP_SECRET . 
  									"&code=" . $code;

  		$response = file_get_contents($token_url);
  		$params = null;
  		parse_str($response, $params);

  		// $_SESSION['access_token'] = $params['access_token']; // ALMACENAR EN LA BDD O CREAR SESION CON EL ACCESSO_TOKEN

  		$graph_url = "https://graph.facebook.com/me?access_token=" . $params['access_token'];
  		$user = json_decode(file_get_contents($graph_url));
  		echo "Hola " . $user->name;
  	}
  	else
  	{
  		echo("El parametro state no se encontro. Puedes estar siendo victima de CSRF");
  	}
  	
  }

  public function set_scope($scope='')
  {
  	$this->scope = $scope;
  }

  public function set_redirect_uri($redirect_uri='')
  {
  	$this->redirect_uri = $redirect_uri;
  }

}
/* End of file myupload.php */
/* Location: ./application/libraries/myupload.php */