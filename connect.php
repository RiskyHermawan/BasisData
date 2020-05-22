<?php
$conn = oci_connect("BASDAT","1234","Localhost/XE");
//oci_connect("username","password","connection string / service oracle")
if(!$conn){
	$e = oci_error();
	echo $e['message'];
}else{
	echo "Berhasil Connect", "<br><br>\n";
}