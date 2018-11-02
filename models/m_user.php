<?php
  include_once('./library/koneksi.php');
  class m_user{
    private $db;
    function __construct(){
      $this->db = new Database('localhost','3306','printkuy','root','');
    }

    function autentikasi($username,$password){
      $result   = $this->db->query("select * from users where username='$username' and password='$password'");
      return $result;
    }

    function registerPengeprint($username, $password, $nama, $nomorHP, $jeniskelamin){
       $this->db->executeQuery("insert into users values(NULL, '$username', '$password',1);insert into detail_pengeprint values(NULL, '$nama', '$nomorHP','$jeniskelamin')");
    }

    function updateUsers($id_user, $username, $password){
     $this->db->executeQuery("update users set username='$username', password = '$password' where id_user=$id_user)'");
    }

    function registerTempat($username, $password, $nama, $alamat, $nomorHP){
       $this->db->executeQuery("insert into users values(NULL, '$username', '$password',2);insert into detail_tempat values(NULL, '$nama', '$alamat','$nomorHP')");
    }

    function showAll(){
      $result   = $this->db->query("select * from users");
      return $result;
    }


  }
?>
