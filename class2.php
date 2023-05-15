<?php
class mahasiswa{
    public $nim;
    public $nama;
    public $jurusan;

    function tampil_biodata(){
        echo $this->nim = "001";
        echo $this->nama = "Zacky";
        echo $this->jurusan = "PPLG";
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata("001","Zacky","PPLG")
?>