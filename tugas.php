<?php
 class Sekolah {
    public $nama,
         $alamat;
    private $jumlahsiswa,
         $jumlahguru;
    protected $jumlahkelas;

    public function setnama($nama){
        $this ->nama =$nama ;
    }
    public function setalamat($alamat){
        $this ->alamat =$alamat ;
    }
    public function setjumlahsiswa($jumlahsiswa){
        $this ->jumlahsiswa =$jumlahsiswa ;
    }
    public function setjumlahguru($jumlahguru){
        $this ->jumlahsiswa =$jumlahsiswa ;
    }
    public function setjumlahkelas($jumlahkelas){
        $this ->jumlahkelas =$jumlahkelas ;
    }
    public function cetak(){
        return "Nama : " . $this->nama.
                 "Alamat : " . $this->alamat.
                 "Jumlah Siswa : ". $this->jumlahsiswa.
                 "Jumlah Guru : "  . $this->jumlahguru.
                 "Jumlah Kelas : " . $this->jumlahkelas;
    }
        

$uti = new Sekolah ;
$uti->setnama ("Wikrama <br>") ;
$uti->setalamat ("Jln Raya Wangun <br>");
$uti->setjumlahsiswa ("34 siswa <br>");
$uti->setjumlahguru ("150 guru <br>");
$uti->setjumlahkelas ("17 kelas <br>");

echo $->cetak() ;
 }