<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Master extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
	}
   
    public function index(){
    	echo "string";
    }

	public function api_kategory(){
		$sql  = "SELECT * FROM master_katrgory";
		$data = $this->db->query($sql)->result();
		$res = null;
		if ($data) {
			$res = array(
				"status" =>"true",
				"pesan"  =>$data);
			echo json_encode($res);
		}else{
		   $res = array(
		   	    "status" =>"true",
				"pesan"  =>$data);
		   echo json_encode($data);
		}
		
	}

	/*tes aja*/
}
?>