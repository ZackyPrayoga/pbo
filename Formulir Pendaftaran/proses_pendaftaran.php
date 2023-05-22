<?php
class pendaftaran{
    public $nama;
    public $email;
    public $password;

    function __construct($nama,$email,$password){
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    function tampil_biodata(){
        echo $this->nama, "<br>";
        echo $this->email, "<br>";
        echo $this->password;
    }

   function validasi(){
    if($this->nama == ""){
    echo "isi nama kamu <br>";
  }
    if($this->email == ""){
    echo "isi email kamu <br>";
  }
    if($this->password == ""){
    echo "isi password kamu";
}
if($this->nama == "" OR $this->email == "" OR $this-> password == ""){
return false;
}else{
    return true;
}
   }
}

  {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];



$tampil = new pendaftaran($nama,$email,$password);
if($tampil->validasi()){
    $tampil->tampil_biodata();
}
}
?>