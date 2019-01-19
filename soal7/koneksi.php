<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("localhost","root","");

if($host){
	echo "";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("tugas_arkademy");

if($db){
	echo "";
}else{
	echo "koneksi database gagal.";
}
?>