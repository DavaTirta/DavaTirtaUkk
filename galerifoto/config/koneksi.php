<?php
$hostname ='localhost';
$userdb = 'root';
$passdb = '';
$namedb = 'foto';

$koneksi = mysqli_connect($hostname,$userdb,$passdb,$namedb);

if($koneksi) {
    echo "Terhubung";
} else{
    echo "Tidak Terhubung";
}
?>