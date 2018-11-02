<?php 

include_once('./models/m_print.php');
class c_print {
	private $config;
	
  function __construct($config){
    $this->config = $config;
    $route = new route();
  }

  function hapusPengeprint(){
   $id = $_GET['id'];
   $model = new m_print();
   $model->delete($id);
   $this->config['route']->redirect('c_user','homePengeprint');
 }

 function hapusTempat(){
   $id = $_GET['id'];
   $model = new m_print();
   $model->delete($id);
   $this->config['route']->redirect('c_user','homeTempatPrint');
 }

 function tambah(){
  $nama_customer = $_SESSION['username'];
  $penerima = $_SESSION['username'];
  $tempat = $_POST['tempat_print'];
  if (isset($_POST['alamat'])) {
    $alamat = $_POST['alamat'];
  } else {
    $alamat = "Diambil Sendiri";
  }
  //function file
  $file = $_FILES['file']['name'];
  $tmp = $_FILES['file']['tmp_name'];
  $filebaru = date('dmYHis').$file;
  $path = "./file/".$filebaru;
  if (move_uploaded_file($tmp, $path)) {
    $model = new m_print();
    $model->tambahPrint($filebaru, $tempat, $alamat, $nama_customer, $penerima);
    $this->config['route']->redirect('c_user','statusPengeprint');
  }
}

 function updatePrint(){
   $id = $_GET['id'];
   $model = new m_print();
   $model->updatePrint($id);
   $this->config['route']->redirect('c_user','homeTempatPrint');
 }

 function updateDiterima(){
   $id = $_GET['id'];
   $model = new m_print();
   $model->updateDiterima($id);
   $this->config['route']->redirect('c_user','sudahDiprint');
 }


}
?>