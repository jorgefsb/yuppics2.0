<?php ${"\x47\x4c\x4f\x42\x41L\x53"}["i\x6e\x6e\x76\x69k\x70\x77\x6b\x78"]="\x70\x61\x72\x61m\x73";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x73\x74ft\x63bw\x62"]="\x61cc\x65s\x73\x5ft\x6f\x6be\x6e";${"\x47\x4c\x4f\x42\x41LS"}["\x76\x6dm\x78o\x73\x72d\x71"]="\x61\x6c\x62\x75\x6d\x5f\x70ho\x74\x6f\x73";class facebook_test extends MY_Controller{public function index(){$this->load->library("\x6dy\x5ff\x61\x63\x65\x62o\x6fk");$wnlgaedklbf="co\x6e\x66\x69\x67";${$wnlgaedklbf}=array("\x72\x65\x64\x69r\x65\x63t_\x75\x72\x69"=>base_url("f\x61\x63\x65\x62\x6fo\x6b_t\x65\x73\x74/"),"sc\x6fpe"=>"us\x65\x72\x5fa\x62\x6f\x75t_\x6d\x65,\x20\x65\x6d\x61\x69\x6c,\x20user\x5f\x70\x68\x6f\x74os, f\x72\x69\x65nd\x73_\x70h\x6f\x74os","\x64\x69s\x70la\x79"=>"\x70\x6fpu\x70");${"G\x4c\x4f\x42A\x4cS"}["n\x73pqd\x63k\x76\x75w"]="\x63\x6f\x6ef\x69\x67";${"G\x4c\x4f\x42\x41\x4cS"}["qw\x64\x70k\x62k\x6c"]="a\x63c\x65\x73\x73\x5ft\x6fken";$this->my_facebook->initialize(${${"\x47\x4cO\x42\x41\x4c\x53"}["n\x73\x70\x71d\x63\x6b\x76\x75\x77"]});${${"G\x4c\x4f\x42AL\x53"}["\x71\x77\x64p\x6b\x62\x6b\x6c"]}=$this->my_facebook->oauth();$this->get_user_about_me(${${"\x47\x4cO\x42\x41\x4cS"}["s\x74ftc\x62\x77b"]});}public function get_user_about_me($access_token){${"G\x4c\x4f\x42A\x4c\x53"}["\x70j\x71n\x71s\x7ag\x72\x6c"]="us\x65r";$njoitbpgyixh="\x75\x73e\x72";$this->load->library("\x6dy\x5ff\x61c\x65b\x6fok");${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x70\x6a\x71\x6eq\x73z\x67\x72\x6c"]}=$this->my_facebook->get_user_about_me(${${"\x47LOBA\x4cS"}["\x73\x74\x66t\x63\x62\x77\x62"]});var_dump("<\x70re\x3e",${$njoitbpgyixh},"</\x70\x72\x65>");}public function get_user_photos($access_token){${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6f\x68\x6d\x6c\x63\x6a"]="\x70\x61r\x61m\x73";$xcpqmpni="p\x68\x6f\x74\x6fs";$this->load->library("\x6d\x79\x5f\x66\x61\x63e\x62\x6f\x6fk");${"GL\x4f\x42A\x4c\x53"}["\x62\x74\x72y\x6f\x69\x76w"]="p\x61r\x61ms";${$xcpqmpni}=$this->my_facebook->get_user_photos(${${"G\x4c\x4fBA\x4c\x53"}["s\x74\x66\x74\x63\x62w\x62"]});${${"\x47\x4cOB\x41L\x53"}["\x62\x74\x72\x79\x6f\x69\x76\x77"]}["d\x61ta_p\x68\x6f\x74\x6fs"]=$photos->data;$this->load->view("\x66\x61\x63\x65b\x6f\x6f\x6b\x5fp\x68\x6fto\x73",${${"\x47L\x4f\x42A\x4c\x53"}["\x6f\x68\x6d\x6c\x63j"]});}public function get_user_albums($access_token){${"G\x4c\x4fB\x41\x4cS"}["\x79\x68\x6b\x72\x68\x74n\x61f"]="al\x62um\x73";${"\x47LOB\x41L\x53"}["s\x73\x6bt\x74\x6f"]="a\x63ce\x73s_\x74\x6f\x6b\x65\x6e";$ffjgskr="\x61cc\x65s\x73\x5fto\x6b\x65\x6e";$this->load->library("\x6dy\x5ff\x61\x63e\x62oo\x6b");${${"\x47\x4cO\x42A\x4c\x53"}["\x79h\x6brh\x74\x6e\x61\x66"]}=$this->my_facebook->get_user_albums(${${"\x47\x4c\x4f\x42A\x4c\x53"}["\x73\x73k\x74\x74o"]});${${"\x47\x4c\x4fB\x41\x4cS"}["\x69\x6envi\x6b\x70w\x6b\x78"]}["\x61c\x63\x65s\x73_t\x6fke\x6e"]=${$ffjgskr};${${"\x47LO\x42\x41L\x53"}["inn\x76\x69k\x70wkx"]}["d\x61t\x61_\x61\x6c\x62\x75\x6ds"]=$albums->data;$this->load->view("\x66\x61\x63eb\x6fo\x6b\x5fp\x68oto\x73",${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x69\x6e\x6evi\x6b\x70wkx"]});}public function get_user_album_photos(){$this->load->library("\x6d\x79\x5f\x66\x61\x63\x65b\x6f\x6f\x6b");${"\x47\x4c\x4f\x42AL\x53"}["\x67h\x76o\x6c\x61x"]="\x70\x61\x72\x61m\x73";${${"G\x4c\x4f\x42\x41LS"}["vm\x6d\x78\x6f\x73r\x64\x71"]}=$this->my_facebook->get_user_album_photos($_GET["a\x63\x63ess_\x74\x6fk\x65n"],$_GET["\x69da"]);${${"\x47\x4c\x4f\x42\x41LS"}["\x69\x6e\x6e\x76\x69\x6bp\x77\x6b\x78"]}["\x64a\x74a_ph\x6f\x74\x6f\x73"]=$album_photos->data;$this->load->view("f\x61\x63\x65bo\x6f\x6b_\x70\x68otos",${${"\x47L\x4f\x42\x41\x4c\x53"}["\x67\x68\x76\x6f\x6c\x61x"]});}public function dialog_request(){$this->load->view("d\x69\x61l\x6f\x67_\x72\x65\x71uest");}public function dialog_send(){$this->load->view("\x64\x69al\x6fg\x5f\x73\x65nd");}}if(!defined("\x42\x41SE\x50ATH"))exit("\x4eo\x20di\x72\x65\x63\x74 \x73\x63\x72\x69pt\x20acces\x73\x20a\x6clo\x77ed");
?>



































































































=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class facebook_test extends MY_Controller {

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

// 		$w = stream_get_wrappers();
// echo 'openssl: ', extension_loaded ('openssl') ? 'yes':'no', "\n";
// echo 'http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
// echo 'https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";
// echo 'wrappers: ', var_dump($w);

// exit;
		// echo 'Pruebillas con la api de facebook.';

		$this->load->library('my_facebook');

		$config = array(
					'redirect_uri' => base_url('facebook_test/'),
					'scope' => 'user_about_me, email, user_photos, friends_photos',
					'display' => 'popup'
		);

		$this->my_facebook->initialize($config);
		$access_token = $this->my_facebook->oauth();
		// echo $access_token.'<br>';

		$this->get_user_about_me($access_token);
		// $this->get_user_photos($access_token);
		// $this->get_user_albums($access_token);

	}

	public function get_user_about_me($access_token)
	{
		$this->load->library('my_facebook');
		$user = $this->my_facebook->get_user_about_me($access_token);
		var_dump('<pre>',$user,'</pre>');
	}

	public function get_user_photos($access_token)
	{
		$this->load->library('my_facebook');
		$photos = $this->my_facebook->get_user_photos($access_token);
		// var_dump('<pre>',$photos,'</pre>');

		$params['data_photos'] = $photos->data;
		$this->load->view('facebook_photos', $params);
	}

	public function get_user_albums($access_token)
	{
		$this->load->library('my_facebook');
		$albums = $this->my_facebook->get_user_albums($access_token);
		// var_dump('<pre>', $albums, '</pre>');

		$params['access_token'] = $access_token;
		$params['data_albums'] = $albums->data;
		$this->load->view('facebook_photos', $params);
	}

	public function get_user_album_photos()
	{
		$this->load->library('my_facebook');
		$album_photos = $this->my_facebook->get_user_album_photos($_GET['access_token'], $_GET['ida']);
		// var_dump('<pre>', $album_photos->data, '</pre>');
		// $album_photos->data[0]->images[0]->source
		$params['data_photos'] = $album_photos->data;
		$this->load->view('facebook_photos', $params);

	}

	public function dialog_request()
	{
		$this->load->view('dialog_request');
	}

	public function dialog_send()
	{
		$this->load->view('dialog_send');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
>>>>>>> .theirs