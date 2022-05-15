<?php
$host="localhost";
$kullanici="root";
$parola="";
$veritabani="kullanicimesaj";

$baglanti = mysqli_connect($host,$kullanici,$parola,$veritabani);
mysqli_set_charset($baglanti,"UTF8");
?>