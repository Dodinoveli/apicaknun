<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Master extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
	}
   
    public function index(){
    	echo "string";
    	echo "dodi";
    }

	public function api_kategory(){
		$sql  = "SELECT * FROM master_katrgory";
		$data = $this->db->query($sql)->result();
		$res = null;
		if ($data) {
			$res = array(
				"result" =>"true",
				"pesan"  =>$data);
			echo json_encode($res);
		}else{
		   $res = array(
		   	    "result" =>"true",
				"pesan"  =>$data);
		   echo json_encode($data);
		}
		
	}

	public function subKateGori()
	{
		$id   = $this->input->get('kat_id');
		$sql  = "SELECT
				master_katrgory.kat_id,
				master_katrgory.kategori,
				master_katrgory.image,
				master_katrgory.tgl,
				m_kategory.kata_id,
				m_kategory.judul,
				m_kategory.isi 
				FROM master_katrgory INNER JOIN m_kategory ON master_katrgory.kat_id=m_kategory.kat_id 
				WHERE master_katrgory.kat_id='".$id."'";
		$data = $this->db->query($sql)->result();
		$res = null;
		if ($data) {
			$res = array(
				"result" =>"true",
				"pesan"  =>$data);
			echo json_encode($res);
		}else{
		   $res = array(
		   	    "result" =>"true",
				"pesan"  =>$data);
		   echo json_encode($data);
		}
	}

	public function detail()
	{
		$id   = $this->input->get('kata_id');
		$sql  = "SELECT * FROM `m_kategory` WHERE kata_id='".$id."'";
		$data = $this->db->query($sql)->result();
		$res = null;
		if ($data) {
			$res = array(
				"result" =>"true",
				"pesan"  =>$data);
			echo json_encode($res);
		}else{
		   $res = array(
		   	    "result" =>"true",
				"pesan"  =>$data);
		   echo json_encode($data);
		}
	}
}
?>
