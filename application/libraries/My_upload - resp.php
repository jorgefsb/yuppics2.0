<?php ${"G\x4cO\x42A\x4cS"}["hd\x73\x6b\x78\x6cqq"]="n\x65w\x5fp\x61\x74\x68";${"G\x4cOBA\x4c\x53"}["w\x68\x75\x71h\x78\x79\x63"]="i\x6d\x61\x67\x65\x77idth";${"\x47LO\x42\x41\x4cS"}["d\x6d\x77k\x72\x79\x6bss\x72\x62"]="\x66\x69l\x65";${"\x47LO\x42A\x4c\x53"}["\x68\x71h\x67tlx\x65\x72\x65\x75"]="po\x73\x74\x5f\x66\x69\x65\x6c\x64_ar\x72\x61\x79";${"\x47\x4c\x4f\x42\x41LS"}["g\x6a\x66y\x6e\x72\x74\x70\x77\x6dg"]="\x6b\x65\x79";${"\x47\x4cO\x42A\x4c\x53"}["v\x65\x61\x67\x72\x69\x70k\x65\x76e"]="pat\x68_\x69m\x67";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x68\x79w\x69\x62\x73"]="i\x6d\x61\x67\x65\x68e\x69\x67\x68\x74";${"\x47\x4cOB\x41\x4c\x53"}["j\x78kg\x69\x68\x63\x69"]="re\x73\x75\x6ct\x5fre\x73\x69\x7ae";${"G\x4c\x4fB\x41\x4c\x53"}["\x6eg\x65b\x6f\x76q"]="s\x6fu\x72\x63\x65";${"G\x4c\x4fB\x41L\x53"}["l\x63\x61\x79\x73\x67\x6f"]="c\x6f\x6e\x66";${"\x47\x4c\x4f\x42\x41LS"}["\x67u\x69\x77\x66ds"]="d\x65\x73\x5fh\x65i\x67\x68t";${"\x47LOBAL\x53"}["\x67qm\x6b\x77e\x64\x6a\x6e\x74"]="d\x65s_\x77\x69d\x74\x68";${"GL\x4fBA\x4c\x53"}["rd\x66uk\x65\x74\x79\x67l"]="\x6e\x65w\x49\x6d\x61\x67e\x57\x69\x64t\x68";${"\x47\x4cO\x42A\x4c\x53"}["\x66\x6a\x66\x6e\x66\x64\x6a"]="\x66\x69le\x73\x5f\x64\x61\x74\x61";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["t\x68x\x6cv\x61"]="\x74\x68\x75\x6d\x62\x5f\x69\x6da\x67e\x5fn\x61\x6de";${"GL\x4f\x42\x41\x4c\x53"}["x\x72db\x6fdc"]="\x66\x69\x6c\x65\x5fd\x61t\x61";${"\x47LO\x42\x41L\x53"}["\x75\x71\x67mr\x75x\x62\x74\x78u"]="\x69m\x61g\x65\x54y\x70\x65";${"\x47L\x4f\x42\x41\x4cS"}["g\x6a\x76\x6f\x61g\x70q\x68"]="n\x65\x77\x49\x6da\x67\x65\x48\x65\x69gh\x74";${"G\x4cO\x42\x41\x4cS"}["\x63\x74\x6f\x62\x69dn\x77z"]="d\x65\x73\x5f\x79";${"\x47L\x4f\x42A\x4c\x53"}["k\x63q\x73\x75\x66k"]="\x6e\x65\x77\x49\x6da\x67\x65";${"\x47LO\x42A\x4c\x53"}["cqnq\x62\x72i"]="\x63\x6fn\x66ig";${"\x47\x4cO\x42A\x4cS"}["a\x77w\x66\x72\x65\x73"]="\x64\x65\x73_x";${"\x47L\x4fB\x41\x4c\x53"}["ehq\x70\x71zye"]="\x69m\x61g\x65";class My_upload{var$do_resize=FALSE;var$do_crop=FALSE;var$config;var$config_resize;var$new_image_path='';private$CI;public function __construct($config=array()){$this->CI=&get_instance();$rnoocukdu="\x63\x6f\x6ef\x69\x67";if(!isset($this->CI->upload))$this->CI->load->library("\x75p\x6coad");if(count(${${"\x47L\x4fBAL\x53"}["\x63\x71\x6eq\x62r\x69"]})>0)$this->initialize(${$rnoocukdu});log_message("\x64e\x62\x75g","m\x79u\x70l\x6f\x61d C\x6c\x61\x73s I\x6e\x69tia\x6cized");}public function initialize($config=array()){$this->config=${${"\x47\x4c\x4f\x42A\x4cS"}["cq\x6eqb\x72\x69"]};$this->CI->upload->initialize(${${"\x47L\x4fB\x41\x4cS"}["cqnqbr\x69"]});}public function change_upload_path($new_path){$this->config["up\x6c\x6fa\x64_p\x61th"]=$this->CI->upload->upload_path=${${"\x47LO\x42\x41\x4cS"}["\x68d\x73\x6b\x78lq\x71"]};}public function do_upload($post_field='archivo'){$ariupsowcsq="\x70o\x73t_f\x69\x65\x6cd";${"\x47\x4c\x4f\x42\x41L\x53"}["\x69\x6b\x6d\x74\x6f\x70\x71\x64"]="\x66il\x65\x5f\x64\x61t\x61";if(!$this->CI->upload->do_upload(${$ariupsowcsq})){return array(FALSE,"m\x73\x67"=>"E\x72ror:\x20".$this->CI->upload->display_errors());}${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x69kmt\x6f\x70\x71\x64"]}=$this->CI->upload->data();if($this->do_resize){if(${${"GL\x4f\x42\x41L\x53"}["\x78rd\x62\x6f\x64\x63"]}["\x69s_\x69\x6da\x67e"]){${"\x47\x4cO\x42\x41L\x53"}["\x61\x73\x62\x69\x78\x74\x6a"]="\x66i\x6c\x65\x5f\x64\x61\x74\x61";$muegbrug="\x72\x65s\x75\x6c\x74\x5f\x72esi\x7ae";${$muegbrug}=$this->resize_image($this->config["\x75\x70loa\x64\x5f\x70ath"]."/".${${"G\x4cO\x42AL\x53"}["\x61\x73\x62\x69xt\x6a"]}["\x66\x69\x6ce_n\x61m\x65"]);if(!${${"\x47L\x4f\x42\x41\x4c\x53"}["\x6ax\x6b\x67\x69\x68c\x69"]})return array(FALSE,"\x6d\x73g"=>"E\x72r\x6fr: ".$this->CI->image_lib->display_errors());}}return${${"G\x4c\x4fBALS"}["\x78\x72\x64b\x6fd\x63"]};}public function do_multiple_array_upload($post_field_array='archivo'){$nyqlqt="po\x73\x74\x5f\x66\x69el\x64\x5fa\x72\x72ay";${${"G\x4c\x4fBA\x4cS"}["f\x6af\x6ef\x64j"]}=array();${"\x47\x4c\x4fB\x41\x4cS"}["\x79\x76\x6bf\x69cc\x67"]="\x66\x69\x6c\x65s\x5fd\x61\x74\x61";foreach($_FILES[${$nyqlqt}]["n\x61\x6de"]as${${"GL\x4fB\x41\x4cS"}["g\x6afyn\x72\x74p\x77\x6dg"]}=>${${"\x47\x4c\x4f\x42A\x4c\x53"}["d\x6d\x77\x6br\x79\x6bss\x72\x62"]}){$_FILES["\x61\x75\x78_up\x6c\x6f\x61d"]=array();$_FILES["au\x78\x5fu\x70l\x6f\x61d"]["\x6ea\x6d\x65"]=${${"G\x4cO\x42\x41\x4c\x53"}["d\x6d\x77\x6b\x72ykss\x72\x62"]};$vtbfyumisdpb="\x70\x6f\x73t\x5f\x66\x69\x65\x6cd\x5f\x61\x72\x72\x61\x79";${"GL\x4fBA\x4cS"}["\x70\x73e\x70d\x71\x63n\x75\x73"]="\x6b\x65y";$_FILES["\x61ux_u\x70l\x6fad"]["ty\x70\x65"]=$_FILES[${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x68\x71h\x67\x74\x6c\x78\x65\x72\x65\x75"]}]["ty\x70e"][${${"G\x4c\x4f\x42\x41L\x53"}["\x67jfynrt\x70wm\x67"]}];$_FILES["a\x75\x78_\x75plo\x61\x64"]["t\x6d\x70\x5fn\x61\x6de"]=$_FILES[${${"\x47\x4cO\x42A\x4c\x53"}["h\x71\x68\x67\x74\x6cx\x65\x72\x65\x75"]}]["\x74\x6d\x70_na\x6de"][${${"\x47L\x4f\x42\x41L\x53"}["\x67\x6af\x79\x6e\x72\x74\x70\x77\x6dg"]}];${"\x47\x4c\x4fBA\x4cS"}["\x6d\x65\x6fd\x6e\x6d\x75\x7a\x6a"]="\x70ost_\x66\x69eld\x5f\x61r\x72a\x79";$_FILES["\x61\x75x\x5fupl\x6fad"]["\x65r\x72\x6f\x72"]=$_FILES[${${"G\x4c\x4fB\x41LS"}["m\x65o\x64n\x6d\x75\x7a\x6a"]}]["\x65r\x72o\x72"][${${"\x47\x4c\x4fB\x41L\x53"}["\x70sepdqc\x6e\x75\x73"]}];$_FILES["\x61ux_upl\x6f\x61\x64"]["s\x69z\x65"]=$_FILES[${$vtbfyumisdpb}]["siz\x65"][${${"\x47LO\x42A\x4c\x53"}["g\x6a\x66\x79\x6e\x72\x74\x70\x77\x6d\x67"]}];${${"G\x4cOB\x41\x4c\x53"}["fj\x66\x6e\x66\x64\x6a"]}[]=$this->do_upload("\x61\x75\x78_\x75\x70l\x6fa\x64");unset($_FILES["\x61ux_upl\x6f\x61\x64"]);}return${${"\x47LOB\x41LS"}["y\x76k\x66\x69\x63\x63\x67"]};}public function resize_image($path_img){if(!isset($this->CI->image_lib))$this->CI->load->library("\x69m\x61g\x65_li\x62");$this->config_resize["\x73o\x75\x72ce\x5f\x69\x6dage"]=${${"\x47\x4c\x4fB\x41L\x53"}["\x76\x65\x61g\x72\x69p\x6beve"]};if($this->new_image_path!==""){$itlurlqakn="\x62";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x70\x6f\x72o\x6aj\x6fx"]="\x61";$vcxfyx="\x70\x61\x74h\x5f\x69\x6d\x67";$ofcrhgd="\x61";$edmzgpgxv="\x62";$this->config_resize["\x6ee\x77\x5f\x69\x6dag\x65"]="";${"\x47\x4cOB\x41L\x53"}["\x79\x74\x68\x71\x61v\x66"]="\x62";${"\x47\x4cOB\x41\x4cS"}["\x78\x64\x79\x71\x68\x78\x72\x62"]="a";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["p\x6f\x72\x6fj\x6a\x6f\x78"]}=explode("/",${$vcxfyx});${$itlurlqakn}=explode(".",${$ofcrhgd}[count(${${"\x47\x4cO\x42\x41LS"}["\x78\x64y\x71\x68\x78\x72b"]})-1]);$this->config_resize["n\x65\x77\x5f\x69m\x61g\x65"]=$this->new_image_path.${$edmzgpgxv}[0]."_\x74hu\x6d\x62\x2e".${${"\x47\x4c\x4f\x42\x41L\x53"}["y\x74\x68\x71av\x66"]}[1];}$this->CI->image_lib->initialize($this->config_resize);if(!$this->CI->image_lib->resize()){$this->CI->image_lib->clear();return FALSE;}$this->CI->image_lib->clear();return TRUE;}public function crop_image($thumb_image_name,$image,$newImageWidth=50,$newImageHeight=50,$conf=null){${"\x47\x4cO\x42A\x4c\x53"}["\x70rws\x6ay"]="\x64e\x73_\x79";${"\x47\x4c\x4f\x42\x41\x4cS"}["nlgwc\x7ar"]="i\x6d\x61\x67\x65h\x65\x69\x67\x68t";${"\x47L\x4f\x42\x41L\x53"}["\x65\x6dz\x7a\x69\x7a\x6fr\x6f\x64"]="\x63o\x6e\x66";${"GL\x4f\x42\x41\x4c\x53"}["\x74t\x61\x6do\x66\x71\x6e"]="n\x65\x77\x49mag\x65\x57\x69\x64th";$craskiwxux="\x69\x6d\x61gew\x69\x64\x74\x68";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["z\x72\x63\x71um\x6b\x72u\x6bh"]="\x6e\x65\x77\x49\x6dag\x65";list(${$craskiwxux},${${"\x47\x4c\x4fB\x41LS"}["\x6elg\x77\x63\x7a\x72"]},${${"\x47LOB\x41\x4cS"}["\x75\x71\x67\x6dr\x75\x78\x62\x74x\x75"]})=getimagesize(${${"\x47\x4c\x4fBAL\x53"}["\x65\x68q\x70q\x7a\x79e"]});${"G\x4c\x4f\x42\x41\x4c\x53"}["\x75\x6dl\x6a\x6biq"]="\x6e\x65w\x49m\x61g\x65";${${"G\x4cOB\x41\x4cS"}["\x75\x71\x67\x6d\x72\x75x\x62\x74x\x75"]}=image_type_to_mime_type(${${"\x47\x4c\x4fB\x41\x4cS"}["\x75\x71g\x6d\x72\x75\x78b\x74\x78\x75"]});$myhoiw="\x73o\x75r\x63\x65";${"GLO\x42A\x4cS"}["\x62\x79\x6d\x79\x68t\x75"]="im\x61\x67\x65";$briikohik="i\x6da\x67\x65";${"G\x4c\x4f\x42\x41L\x53"}["j\x78u\x6bfq\x6e\x78\x6a\x69\x78\x62"]="\x69\x6dage\x77idth";${"GL\x4f\x42\x41\x4cS"}["\x68\x75lj\x68\x6f\x73\x6ef"]="\x6ee\x77\x49m\x61\x67e\x48\x65ig\x68t";if(${${"\x47LOBA\x4c\x53"}["\x65\x6dzz\x69\x7aoro\x64"]}==null){if(${${"\x47L\x4fB\x41\x4c\x53"}["w\x68uq\x68\x78\x79\x63"]}>=${${"\x47\x4cOB\x41\x4c\x53"}["h\x79\x77\x69b\x73"]}){$jivnwlqnymqy="d\x65\x73_\x78";$opmffclxq="\x64\x65\x73\x5f\x77i\x64\x74\x68";${"\x47\x4cOBA\x4c\x53"}["xe\x79\x6adu\x68\x68\x78"]="\x6e\x65w\x49\x6da\x67eW\x69\x64\x74\x68";$ehpimfbco="\x64\x65\x73_w\x69\x64th";${$opmffclxq}=ceil(${${"G\x4c\x4f\x42\x41\x4cS"}["w\x68\x75q\x68\x78\x79c"]}*${${"\x47\x4cO\x42\x41\x4c\x53"}["r\x64fu\x6b\x65\x74\x79\x67\x6c"]}/${${"GLO\x42\x41\x4cS"}["\x68\x79\x77\x69b\x73"]});$yxshpwdgl="\x64\x65s_\x77\x69\x64t\x68";$caoujwsrkoz="d\x65\x73_\x68\x65\x69ght";${$caoujwsrkoz}=${${"G\x4cO\x42\x41L\x53"}["\x78e\x79\x6ad\x75\x68\x68\x78"]};${$jivnwlqnymqy}=ceil(((${$yxshpwdgl}-${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x67\x75i\x77\x66\x64s"]})/2)*${${"G\x4c\x4f\x42\x41LS"}["\x77\x68\x75\x71\x68\x78y\x63"]}/${$ehpimfbco});${${"GL\x4f\x42A\x4cS"}["\x63tobid\x6ew\x7a"]}=0;}else{${"\x47L\x4fBA\x4c\x53"}["m\x79jftw\x6f\x6b\x6fpf"]="d\x65\x73\x5f\x68\x65\x69\x67\x68\x74";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x73\x76h\x73\x70\x64"]="\x64e\x73\x5f\x68e\x69gh\x74";${"\x47\x4c\x4f\x42\x41\x4cS"}["\x7a\x73\x62oe\x62u\x74\x72\x74\x6e"]="\x64\x65\x73\x5f\x79";$qlrqhjpqevo="\x64\x65s\x5f\x78";$tybuqvge="d\x65\x73_\x77i\x64th";${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["g\x71\x6dk\x77edj\x6e\x74"]}=${${"\x47\x4cO\x42\x41\x4c\x53"}["\x67\x6a\x76\x6f\x61\x67\x70qh"]};${"GL\x4f\x42\x41\x4c\x53"}["n\x70r\x66\x6d\x69\x6e\x6cx\x6d"]="i\x6d\x61\x67\x65\x68\x65i\x67\x68\x74";${${"\x47L\x4f\x42\x41\x4cS"}["\x6d\x79j\x66tw\x6fk\x6fp\x66"]}=ceil(${${"GLOBAL\x53"}["h\x79\x77\x69bs"]}*${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x67\x6a\x76\x6f\x61\x67\x70qh"]}/${${"G\x4c\x4fB\x41\x4c\x53"}["\x77h\x75\x71\x68xy\x63"]});${$qlrqhjpqevo}=0;${${"\x47LOBA\x4cS"}["z\x73\x62oe\x62\x75\x74\x72\x74n"]}=ceil(((${${"\x47L\x4f\x42\x41\x4c\x53"}["g\x75\x69\x77\x66d\x73"]}-${$tybuqvge})/2)*${${"GL\x4f\x42\x41\x4c\x53"}["n\x70\x72\x66\x6di\x6e\x6c\x78\x6d"]}/${${"\x47L\x4f\x42\x41L\x53"}["\x73v\x68\x73pd"]});}}else{${"G\x4cO\x42\x41\x4c\x53"}["\x64\x71\x6eu\x6d\x64\x6e"]="\x63\x6fn\x66";$qyafwb="i\x6d\x61geh\x65\x69gh\x74";$kwgabvrgpfhv="imag\x65\x77\x69\x64t\x68";${${"GL\x4f\x42\x41\x4c\x53"}["\x67\x71\x6dkwed\x6an\x74"]}=${$kwgabvrgpfhv}=${${"\x47LO\x42\x41\x4c\x53"}["d\x71\x6e\x75m\x64\x6e"]}["w\x69dth"];${${"\x47L\x4f\x42\x41\x4c\x53"}["\x67\x75\x69\x77\x66\x64\x73"]}=${$qyafwb}=${${"GLO\x42\x41L\x53"}["lc\x61\x79\x73\x67o"]}["\x68\x65i\x67h\x74"];${${"\x47L\x4f\x42\x41\x4c\x53"}["\x61\x77\x77f\x72\x65\x73"]}=${${"G\x4c\x4f\x42\x41L\x53"}["\x6c\x63\x61\x79\x73g\x6f"]}["x"];${"\x47L\x4f\x42\x41\x4cS"}["\x77o\x79\x77\x6f\x79\x6fa\x78b\x70\x69"]="\x64\x65\x73\x5fy";${${"\x47\x4cO\x42A\x4c\x53"}["w\x6fy\x77oyo\x61\x78\x62\x70\x69"]}=${${"\x47LO\x42\x41\x4c\x53"}["\x6c\x63a\x79s\x67\x6f"]}["\x79"];}${${"\x47\x4c\x4fBA\x4cS"}["z\x72c\x71\x75m\x6b\x72\x75k\x68"]}=imagecreatetruecolor(${${"G\x4cOB\x41L\x53"}["\x74\x74a\x6d\x6f\x66\x71\x6e"]},${${"GL\x4f\x42\x41\x4c\x53"}["\x68\x75\x6c\x6a\x68os\x6e\x66"]});${"\x47\x4cO\x42A\x4c\x53"}["j\x65\x75\x74e\x71\x6c\x6d"]="\x69\x6d\x61\x67ehe\x69g\x68\x74";${"GL\x4f\x42A\x4c\x53"}["\x75k\x74fsr\x73\x62m"]="t\x68um\x62\x5fi\x6d\x61g\x65\x5f\x6e\x61\x6d\x65";${"\x47\x4c\x4f\x42\x41L\x53"}["\x79w\x65t\x62h\x68\x6es\x6bj"]="t\x68\x75\x6d\x62\x5f\x69m\x61g\x65\x5fn\x61\x6de";$jmsbbjfyb="\x6e\x65\x77\x49ma\x67\x65";switch(${${"\x47L\x4f\x42\x41LS"}["\x75\x71\x67\x6d\x72\x75\x78\x62\x74xu"]}){case"\x69\x6d\x61ge/\x67i\x66":${${"\x47LO\x42A\x4c\x53"}["nge\x62\x6f\x76\x71"]}=imagecreatefromgif(${${"G\x4c\x4fB\x41\x4c\x53"}["\x62y\x6dyh\x74\x75"]});break;case"ima\x67\x65/\x70\x6a\x70\x65g":case"i\x6d\x61ge/\x6ap\x65\x67":case"\x69mag\x65/jp\x67":${$myhoiw}=imagecreatefromjpeg(${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x65\x68\x71\x70\x71\x7aye"]});break;case"\x69m\x61g\x65/\x70\x6eg":case"ima\x67\x65/x-pn\x67":${${"\x47\x4cOBA\x4c\x53"}["\x6eg\x65bo\x76q"]}=imagecreatefrompng(${$briikohik});break;}imagecopyresampled(${${"\x47L\x4f\x42\x41\x4c\x53"}["\x75\x6dljk\x69\x71"]},${${"\x47\x4cOBAL\x53"}["ng\x65\x62\x6f\x76q"]},0,0,${${"\x47LOBA\x4c\x53"}["\x61w\x77\x66\x72\x65\x73"]},${${"\x47L\x4f\x42A\x4c\x53"}["p\x72w\x73\x6a\x79"]},${${"\x47\x4c\x4fB\x41\x4c\x53"}["\x67\x71\x6d\x6bw\x65\x64j\x6et"]},${${"\x47LO\x42A\x4c\x53"}["\x67\x75\x69\x77\x66\x64\x73"]},${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x6axu\x6b\x66\x71n\x78j\x69\x78b"]},${${"\x47\x4c\x4fBA\x4c\x53"}["j\x65\x75\x74e\x71\x6c\x6d"]});switch(${${"G\x4c\x4f\x42\x41L\x53"}["\x75\x71g\x6drux\x62\x74\x78\x75"]}){case"image/gif":imagegif(${${"\x47\x4c\x4f\x42AL\x53"}["\x6b\x63\x71su\x66k"]},${${"\x47\x4c\x4f\x42A\x4c\x53"}["t\x68xlv\x61"]});break;case"im\x61\x67\x65/pj\x70eg":case"im\x61g\x65/j\x70\x65g":case"\x69m\x61\x67\x65/\x6ap\x67":imagejpeg(${${"\x47L\x4f\x42A\x4c\x53"}["\x6b\x63qsu\x66k"]},${${"G\x4c\x4f\x42A\x4c\x53"}["\x74\x68\x78l\x76a"]},90);break;case"i\x6d\x61ge/png":case"im\x61ge/\x78-p\x6eg":imagepng(${$jmsbbjfyb},${${"G\x4c\x4fB\x41\x4c\x53"}["\x75k\x74\x66\x73r\x73\x62\x6d"]});break;}chmod(${${"\x47LOBAL\x53"}["\x74h\x78\x6cv\x61"]},0777);return${${"\x47LO\x42\x41L\x53"}["y\x77etbhh\x6e\x73\x6bj"]};}}if(!defined("\x42A\x53E\x50\x41TH"))exit("\x4eo d\x69\x72e\x63\x74\x20sc\x72\x69pt\x20a\x63ces\x73 \x61\x6c\x6c\x6fw\x65d");
?>