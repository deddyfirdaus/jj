<?php
  include('./models/m_user.php');

  class c_user {
    private $config;

    function __construct($config){
      $this->config = $config;
      $this->routing();
      $route = new route();
    }

    function index(){
      include_once('./views/index.php');
    }

    function loginPage(){
      include_once('./views/login.php');
    }


    function registerPage(){
      include_once('./views/register.php');
    }

    function editPengeprint(){
      $id_user = $_POST['id_users'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $model = new m_user();
      $model->updateUsers($id_user, $username, $password);
    }




    function registerPengeprint(){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $nama = $_POST['nama'];
      $nomor_hp = $_POST['nohp'];
      $jeniskelamin = $_POST['jeniskelamin'];
      $model = new m_user();
      $model->registerPengeprint($username, $password, $nama, $nomor_hp, $jeniskelamin);
      $this->config['route']->redirect('c_user','loginPage');
    }

    function registerTempat(){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $nomor_hp = $_POST['nohp'];
      $model = new m_user();
      $model->registerTempat($username, $password, $nama, $alamat, $nomor_hp);
      $this->config['route']->redirect('c_user','loginPage');
    }

    function login(){
      if (!isset($_POST['username']) || !isset($_POST['password'])) {
          loginPage();
      } else {
        $model = new m_user();
        $result = $model->autentikasi($_POST['username'],$_POST['password']);
        if (count($result) > 0) {
          $_SESSION['id_users'] = $result[0]['id_users'];
          $_SESSION['username'] = $result[0]['username'];
          $_SESSION['level'] = $result[0]['level'];
          if (isset($_SESSION['level'])) {
            if ($_SESSION['level'] == 1) {
              $this->config['route']->redirect('c_user','homePengeprint');
            } else if ($_SESSION['level'] == 2) {
              $this->config['route']->redirect('c_user','homeTempatPrint');
            }
          } else {
            $_SESSION['message'] = 'akun tidak ada';
            $this->config['route']->redirect('c_user','loginPage');
          }
        } else {
          $_SESSION['message'] = 'username atau password anda salah';
          $this->config['route']->redirect('c_user','loginPage');
        }
      }
    }

    function routing(){
      $sessionRoute = array('homePengeprint', 'homeTempatPrint');
      if(!isset($_SESSION['id_users']) && (isset($_GET['f']) && in_array($_GET['f'],$sessionRoute))){
        $this->config['route']->redirect('c_user','index');
      }
    }


    function homePengeprint(){
      include('./views/adminPengeprint/index.php');
    }

    function homeTempatPrint(){
      include('./views/adminTempat/index.php');
    }

    function statusPengeprint(){
      include('./views/adminPengeprint/status.php');
    }

    function sudahDiprint(){
      include('./views/adminTempat/sudahdiprint.php');
    }
    function daftarTranksaksi(){
      include('./views/adminTempat/daftartranksaksi.php');
    }
    function daftarHarga(){
      include('./views/adminTempat/daftarharga.php');
    }

    function inputHarga(){
      include('./views/adminTempat/inputharga.php');
    }



    function logout(){
      session_destroy();
      $this->config['route']->redirect('c_user','index');
    }
  }
 ?>
