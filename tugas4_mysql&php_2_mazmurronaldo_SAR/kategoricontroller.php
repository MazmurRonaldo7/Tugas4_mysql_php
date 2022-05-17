<?php
require_once 'koneksi_db.php';
require_once 'models/KategoriRuangan.php';
//1. tangkap request dari form
$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$proses = $_POST['proses'];
//2. masukkan ke data array
$data = [
  $nama, // ? 1
  $ket  // ? 2
];
//3. ciptakan object dari class Fasilitas
$obj = new KategoriRuangan();
switch ($tombol) {
    case 'simpan': $obj->simpan($data); break;
    case 'ubah':
        $data[]=$_POST['idx']; // ? ke 4 where id = ? yg didapat dari hidden field form edit
        $obj->ubah($data);
        break;    
    default:# code...break;
}

//4. landing page
header('location:index.php?hal=kategori_ruangan');