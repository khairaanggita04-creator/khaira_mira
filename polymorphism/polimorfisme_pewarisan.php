<?php
class Pegawai{
    protected $nama_pegawai;
    protected $gaji_pegawai;

    public function __construct($nama_pegawai, $gaji_pegawai) {
        $this->nama_pegawai = $nama_pegawai;
        $this->gaji_pegawai = $gaji_pegawai;
    }

    public function getNama(){
        return $this->nama_pegawai;
    }

    public function hitungGaji(){
        return $this->gaji_pegawai;
    }
}

class freelancer extends Pegawai{
    private $projectRate;
    private $jumlahProject;

    public function __construct($nama_pegawai, $projectRate, $jumlahProject){
        parent :: __construct($nama_pegawai, 0);
        $this->projectRate = $projectRate;
        $this->jumlahProject = $jumlahProject;
    }

    public function hitungGaji()
    {
        return $this->projectRate * $this->jumlahProject;
    }
}
    class KaryawanTetap extends Pegawai{
        private $tunjangan;

        public function __construct($nama_pegawai, $gaji_pegawai, $tunjangan)
        {
            parent::__construct($nama_pegawai, $gaji_pegawai);
            $this->tunjangan = $tunjangan;
        }

        public function hitungGaji()
        {
            return parent::hitungGaji() + $this->tunjangan;
        }
    }
    
    function cetakGaji(Pegawai $pegawai){
        echo "Gaji " . $pegawai->getNama(). ": Rp. " .
         number_format($pegawai->hitungGaji(),0, ',', '.'). "<br>";
    }

    $pegawaiBiasa = new Pegawai("Mira", 3000000);
    $pegawaiFreelancer = new Freelancer("khaira", 2000000, 4);
    $pegawaiTetap = new KaryawanTetap("Putri", 4000000, 2000000);

    cetakGaji($pegawaiBiasa);
    cetakGaji($pegawaiFreelancer);
    cetakGaji($pegawaiTetap);

?>