<?php ${"GL\x4f\x42\x41\x4c\x53"}["\x6c\x66\x65\x77\x6a\x68\x69"]="\x70ro\x64\x75\x63\x74\x73";class paypal_test extends MY_Controller{public function index(){$this->load->library("my_\x70a\x79pa\x6c");$nhdiweu="\x70\x72\x6fd\x75\x63\x74\x73";if(isset($_GET["PayerI\x44"])){echo"\x45l \x70a\x67\x6f\x20s\x65 \x72\x65\x61\x6c\x69z\x6f c\x6f\x72\x72\x65\x63ta\x6den\x74\x65 :\x44  \x21\x21\x21!\x20";exit;}$this->my_paypal->config_sale(array("m\x61xa\x6dt"=>"3000\x30.\x30\x30","r\x65\x74\x75\x72\x6e\x75\x72\x6c"=>base_url("paypal\x5fte\x73t/"),"\x63a\x6e\x63elu\x72l"=>base_url("\x70a\x79p\x61\x6c\x5fte\x73t/c\x61n\x63\x65l/"),"b\x72an\x64nam\x65"=>"Yu\x70pics\x32.\x30","c\x75\x73\x74\x6f\x6der\x73e\x72vi\x63e\x6eu\x6d\x62\x65\x72"=>"(\x33\x312)\x20\x3123\x34\x35"));$this->my_paypal->config_payment(array("cu\x72\x72e\x6ec\x79c\x6f\x64\x65"=>"M\x58\x4e","\x64es\x63"=>"yup\x70\x69\x63\x73 \x64es\x63\x72i\x70\x63\x69\x6fn","s\x68ip\x70\x69n\x67am\x74"=>0));${${"\x47LOBA\x4cS"}["l\x66\x65\x77j\x68\x69"]}=array(array("\x6eam\x65"=>"\x70hot\x6f\x62\x6f\x6f\x6b\x31","p\x72i\x63e"=>"\x31\x300","\x71\x74y"=>"\x31"),array("nam\x65"=>"ph\x6fto\x62o\x6fk2","\x70r\x69c\x65"=>"\x38\x30","qt\x79"=>"\x32"));$this->my_paypal->add_products(${$nhdiweu});$this->my_paypal->send_checkout();}public function cancel(){echo"\x43\x61n\x63\x65\x6ca\x73\x74e\x20\x65l\x20p\x61go\x20\x64\x65 lo\x73 pho\x74\x6fb\x6f\x6f\x6bs\x20D: ";}}if(!defined("\x42\x41S\x45P\x41\x54H"))exit("\x4e\x6f \x64\x69\x72\x65\x63t \x73\x63ri\x70\x74 a\x63\x63e\x73\x73 \x61ll\x6f\x77\x65d");
?>