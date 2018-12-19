<?php
include_once('./library/koneksi.php');
class m_print{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','printkuy','root','');
	}

	function showAll(){
		$result   = $this->db->query("select * from print");
		return $result;
	}
	function donePrint(){
		$result   = $this->db->query("select * from print where status_print = 'sudah diprint'");
		return $result;
	}

	function getData($id_print){
		$result   = $this->db->query("select * from print where id_print='$id_print'");
		return $result;
	}

	function delete($id){
		$this->db->query("delete from print where id_print='$id'");
	}

	function tambahPrint($nama_file, $tempat_print , $kertas_print, $alamat, $nama_customer, $penerima){
		$this->db->executeQuery("insert into print values(NULL, now(), '$tempat_print',  '$kertas_print', '$nama_file', '$nama_customer', '$alamat', 'Belum Diprint', 'Belum Diterima','$penerima')");
	}

	function updatePrint($id){
		$this->db->query("update print set status_print='Sudah Diprint' where id_print=$id");
	}

	function updateDiterima($id){
		$this->db->query("update print set status_diterima='Diterima' where id_print=$id");
	}
}
?>
