<?php
include_once('./library/koneksi.php');
class m_harga{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','printkuy','root','');
	}

	function showAll(){
		$result   = $this->db->query("select * from detail_harga");
		return $result;
	}

	function getData($id){
		$result   = $this->db->query("select * from detail_harga where id_user='$id'");
		return $result;
	}
	function isiHarga($username, $hargahpa4, $hargahpf4, $hargaclra4, $hargaclrf4, $diambil, $diantar, $jilid, $staples) {
		 $this->db->executeQuery("insert into detail_harga values ((select id_users from users where username = '$username'), $hargahpa4, $hargahpf4, $hargaclra4, $hargaclrf4, $diambil, $diantar, $jilid, $staples)");
	}
}

?>
