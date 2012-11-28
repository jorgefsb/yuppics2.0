<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class paypal_test extends CI_Controller {

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
		
		$this->load->library('my_paypal');

		$this->my_paypal->config_sale(array(
			'maxamt' => '',
			'returnurl' => '',
			'cancelurl' => '',
			'brandname' => '',
			'customerservicenumber' => ''
			));
		$this->my_paypal->config_payment(array(
			'currencycode' => '',
			'desc' => '',
			'shippingamt' => ''
			));

		$products = array(
				array(
					'name' => '',
					'price' => '',
					'qty' => ''
					),
				array(
					'name' => '',
					'price' => '',
					'qty' => ''
					)
			);
		$this->my_paypal->add_products($products);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */