<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $jurusan;

    function __construct($nim, $nama, $jurusan) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    function tampil_biodata() {
        echo $this->nim, "<br>";
        echo $this->nama, "<br>";
        echo $this->jurusan;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $mahasiswa = new Mahasiswa($nim, $nama, $jurusan);

    $mahasiswa->tampil_biodata();
}
?>