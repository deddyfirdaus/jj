<?php
include_once('./library/koneksi.php');
class m_kertas{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','printkuy','root','');
	}

	function showAll(){
		$result   = $this->db->query("select * from detail_kertas");
		return $result;
	}

	function getData($id){
		$result   = $this->db->query("select * from detail_kertas where id_kertas='$id'");
		return $result;
	}

	function delete($id){
		$this->db->query("delete from detail_kertas where id_kertas='$id'");
	}
}

?>
