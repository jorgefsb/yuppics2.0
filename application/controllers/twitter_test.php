<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class twitter_test extends MY_Controller {

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
		// echo rawurldecode("status=Maybe%20he%27ll%20finally%20find%20his%20keys.%20%23peterfalk")."<br>";
		// echo "status=Maybe%20he%27ll%20finally%20find%20his%20keys.%20%23peterfalk"."<br>";
		// echo "status=".rawurlencode("Maybe he'll finally find his keys. #peterfalk");
		// exit;
		$this->load->library('my_twitter');
		$this->my_twitter->oauth();
	}

	public function signin()
	{
		$this->load->library('my_twitter');
		$this->my_twitter->signin();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */