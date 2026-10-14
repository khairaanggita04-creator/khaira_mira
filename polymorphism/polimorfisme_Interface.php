<?php

interface cetakable{
    
    public function tampilkanCetak(): void;
}

  class LaporanSiswa implements cetakable {
    private string $namaSiswa;
    private string $kelas;

    public function __construct(string $nama, string $kelas){
        $this-> namaSiswa = $nama;
        $this-> kelas = $kelas;
    }

    public function tampilkanCetak(): void
    {
        echo "<div style =
        'border : 1px solid green;
        padding: 10px;
        margin-bottom: 10px;'>";

        echo "<h3> cetak Dokumen: Rapor siswa </3>";
        echo "Nama: {$this->namaSiswa} | kelas: {$this->kelas}";
        echo "</div>";
    }
  }

   class LaporanGuru implements cetakable{
    private string $namaGuru;
    private string $mataPelajaran;

    public function __construct(string $nama, string $mapel) 
    {
        $this->namaGuru = $nama;
        $this->mataPelajaran = $mapel;
    }

    public function tampilkanCetak(): void
     {
        echo "<div style ='
        border: 1px solid blue;
        padding: 10px;
        margin-bottom: 10px;
        '>";

        echo "<h3> Cetak Dokumen: jadwal / Data Guru </h3>";
        echo "Nama Guru: {$this->namaGuru} |
              Mata Pelajaran: {$this->mataPelajaran}";
        echo "</div>";
     }
   }

   class CetakManager{
    public static function prosesCetak(Cetakable $dokumen):void
    {
        $dokumen->tampilkanCetak();
    }
   }

   echo "<h2>Daftar Cetak Dokumen Sekolah</h2>";

   $siswa1 = new LaporanSiswa("Mira Novia", "XI RPL 1");
   $siswa2 = new LaporanSiswa("Khaira Anggita", "XI RPL 2");
   $siswa3 = new LaporanSiswa("Putri Cantika", "XI RPL 3");
   $siswa4 = new LaporanSiswa("Intan Azifa", "XI RPL 4");

   $guru1 = new LaporanGuru("Galih Haris, S.Pd", "Produktif");
   $guru2 = new LaporanGuru("Seto Rawon", "Musik Horeg");

   CetakManager::prosesCetak($siswa1);
   CetakManager::prosesCetak($siswa2);
   CetakManager::prosesCetak($siswa3);
   CetakManager::prosesCetak($siswa4);
   CetakManager::prosesCetak($guru1);
   CetakManager::prosesCetak($guru2);
?>