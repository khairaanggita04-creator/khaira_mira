<?php

use App\Models\Siswa;
use App\Controllers\SiswaController;


require_once 'App/Models/Siswa.php';
require_once 'App/Controllers/SiswaController.php';

echo "<h2>Sistem Informasi Sekolah - SMK Texmaco Semarang </h2>";
echo "<hr>";

$controller = new SiswaController();
$controller->prosesData();

echo "<br> <hr>";

$Siswa1 = new Siswa ("34561", "Mira Khaira", "Rekayasa Perangkat Lunak", "X1");
echo "NIS:" .$Siswa1->getNis(). "<br>";
echo "NAMA:" .$Siswa1->getNama(). "<br>";
echo "JURUSAN:" .$Siswa1->getJurusan(). "<br>";
echo "KELAS:" .$Siswa1->getKelas();