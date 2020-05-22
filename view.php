<?php
include 'connect.php';
$sql = 'SELECT *FROM ANGGOTA';
$stid = oci_parse($conn, $sql);
oci_execute($stid);

while(oci_fetch($stid)){
	echo oci_result($stid, 'ID_ANGGOTA'), " | ";
	echo oci_result($stid, 'NAMA'), " | ";
	echo oci_result($stid, 'JENIS_IDENTITAS'), " | ";
	echo oci_result($stid, 'NO_IDENTITAS'), " | ";
	echo oci_result($stid, 'ALAMAT'), " | ";
	echo oci_result($stid, 'TTL'), " | ";
	echo oci_result($stid, 'GENDER'), " | ";
	echo oci_result($stid, 'STATUS'), " | ";
	echo oci_result($stid, 'TELEPON'), "<br>\n";
}