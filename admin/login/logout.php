<?php
//function start lagi
session_start();

//cek apakah session terdaftar
if($_SESSION['user']!= ""){

//session terdaftar, saatnya logout
$_SESSION['user'] = "";
session_destroy();
header( "Location: https://arp-cv.website/admin/" );
}
else{

//variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
header( "Location: https://arp-cv.website/admin/login/" );
}
?>