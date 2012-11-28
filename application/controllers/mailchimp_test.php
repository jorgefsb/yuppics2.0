<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mailchimp_test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->library('mcapi');
		
		/*$name = 'Furby';
		$last_name = 'Alcantar';
		$mail = 'oscar.alcantars@gmail.com';

		if( $this->mcapi->listSubscribe($this->config->item('mcapi_list_id'), $mail, array('FNAME' => $name, 'LNAME' => $last_name)) === true){
			echo "Se a subscrito correctamente";
		}else{
			echo 'Ocurrio un errro al subcribirse';
		}*/

		$camps = $this->mcapi->campaigns(array('list_id' => $this->config->item('mcapi_list_id')) );
		foreach ($camps['data'] as $key => $value) {
			if (strpos($value['title'], 'Newsletter') !== false) {
				var_dump($this->mcapi->campaignSchedule($value['id'], '2012-11-29 13:00:00'));
				// var_dump($this->mcapi->campaignSendNow($value['id']));
				//var_dump($this->mcapi->campaignSendTest($value['id'], array('oscar.alcantars@gmail.com')));
			}
		}


	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */