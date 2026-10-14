<?php
 
 namespace App\Controllers;
 use App\Models\Siswa;

 class SiswaController{
    public function prosesData(): void{
        $siswa1 = new Siswa("23456", "Mira Khaira", "XI", "Rekayasa Perangkat Lunak");
        $siswa2 = new Siswa("34567", "Khaira Anggita", "XI", "Rekayasa Perangkat Lunak");
        $siswa3 = new Siswa("45678", "Mira Novia", "XI", "Rekayasa Perangkat Lunak");

    echo "<div style='border: 2px solid #007bff;
    padding: 15px; border-radius: 8px; font-family: sans-serif;
    background: #f8f9fa;
    margin-bottom:10px;'>";

    echo "<h3 style='color: #007bff; margin-top: 0;'> Data Profil Siswa (Via Controller)</h3>";

    echo "<b>NIS:</b> {$siswa1->getNis()} <br>";
    echo "<b>Nama:</b> {$siswa1->getNama()} <br>";
    echo "<b>Kelas:</b> {$siswa1->getKelas()} <br>";
    echo "<b>Jurusan:</b> {$siswa1->getJurusan()} <br>";
    echo "</div>";

    echo "<div style='border: 2px solid #007bff;
    padding: 15px; border-radius: 8px; font-family: sans-serif;
    background: #f8f9fa;
    margin-bottom:10px;'>";

    echo "<h3 style='color: #007bff; margin-top: 0;'> Data Profil Siswa (Via Controller)</h3>";

    echo "<b>NIS:</b> {$siswa2->getNis()} <br>";
    echo "<b>Nama:</b> {$siswa2->getNama()} <br>";
    echo "<b>Kelas:</b> {$siswa2->getKelas()} <br>";
    echo "<b>Jurusan:</b> {$siswa2->getJurusan()} <br>";
    echo "</div>";

    echo "<div style='border: 2px solid #007bff;
    padding: 15px; border-radius: 8px; font-family: sans-serif;
    background: #f8f9fa;
    margin-bottom:10px;'>";

    echo "<h3 style='color: #007bff; margin-top: 0;'> Data Profil Siswa (Via Controller)</h3>";

    echo "<b>NIS:</b> {$siswa3->getNis()} <br>";
    echo "<b>Nama:</b> {$siswa3->getNama()} <br>";
    echo "<b>Kelas:</b> {$siswa3->getKelas()} <br>";
    echo "<b>Jurusan:</b> {$siswa3->getJurusan()} <br>";
    echo "</div>";
    }
 }
