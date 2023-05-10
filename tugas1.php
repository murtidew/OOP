<?php
class Sekolah{
    public    $nama,
              $alamat;
    private   $jumlahSiswa,
                $jumlahGuru;
    protected    $jumlahKelas;

    public function setnama($nama){
        $this->nama=$nama;
    }
    public function setalamat($alamat){
        $this->alamat=$alamat;
    }
    public function setjumlahSiswa($jumlahSiswa){
        $this->jumlahSiswa=$jumlahSiswa;
    }
    public function setjumlahGuru($jumlahGuru){
        $this->jumlahGuru=$jumlahGuru;
    }
    public function setjumlahKelas($jumlahKelas){
        $this->jumlahKelas=$jumlahKelas;
    }
    public function __construct($nama, $alamat, $jumlahSiswa, $jumlahGuru, $jumlahKelas){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jumlahSiswa = $jumlahSiswa;
        $this->jumlahGuru = $jumlahGuru;
        $this->jumlahKelas = $jumlahKelas;
        
    }
    public function getCetak(){
        echo "Nama : ". $this->nama;
        echo "<br>";
        echo "Alamat : ".$this->alamat;
        echo "<br>";
        echo "Jumlah siswa : ".$this->jumlahSiswa;
        echo "<br>";
        echo "Jumlah guru : ".$this->jumlahGuru;
        echo "<br>";
        echo "Jumlah kelas : ".$this->jumlahKelas;
        echo "<br>";
    }
}
$sekolah1 = new Sekolah("SMAN 3", "Ciheuleut", "300", "60 guru", "27 kelas <br>");
$sekolah1->getCetak();



?>
