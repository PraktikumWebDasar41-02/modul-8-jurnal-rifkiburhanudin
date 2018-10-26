<?php 
class oop{
  private $user;
  private $pass;
  private $email;
  private $query;
  private $konekk;

function __construct($user1,$pass1,$repass1,$email1){
include "koneksi.php";
  if (!is_numeric($user1)){
    $this->user = $user1;
  }  
  if($pass1==$repass1 || strlen($pass1)<-6){
    $this->pass = $pass1;
  }else{
    echo"password anda masih salah";
  }
  if (substr($email1,-10)=="@gmail.com") {
    $this->email = $email1;
  }
  if (isset($user)&&isset($pass1)&&isset($email1)) {
    $this->konekk = $konek;
    $this->query = mysqli_query($this->konekk,"INSERT INTO user(id, password, username, email) VALUES ('','$this->user','$this->password','$this->email')");
    if(!$this->query){
      die("tidak bisa");
    }else{
      echo "berhasil";
      header("location:index.php");
    }
  }
  }
}
  if (isset($_POST['submit'])) {
    $con = new ope($_POST['username'],$_POST['password'],$_POST['repassword'],$_POST['email']);
  }
 ?>
 