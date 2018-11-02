<?php
include_once('./library/koneksi.php');
class m_tempat{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','printkuy','root','');
	}

	function showAll(){
		$result   = $this->db->query("select * from detail_tempat");
		return $result;
	}

	function getData($id){
		$result   = $this->db->query("select * from detail_tempat where id_tempat='$id'");
		return $result;
	}

	function delete($id){
		$this->db->query("delete from detail_tempat where id_tempat='$id'");
	}
}

?>
