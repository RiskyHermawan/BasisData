<?php
//panggil file koneksi.php yang sudah anda buat
include "connect.php";
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>RENTAL KOMIK</title>
</head>
<body>
<h1 align="center"> Daftar Anggota</h1>
    <table border="1" width="1000" align="center">
       <thead>
       <tr>
           <th>ID_ANGGOTA</th>
           <th>NAMA</th>
           <th>JENIS_IDENTITAS</th>
           <th>NO_IDENTITAS</th>
           <th>ALAMAT</th>
           <th>TTL</th>
           <th>GENDER</th>
           <th>STATUS</th>
		   <th>TELEPON</th>
       </tr>
       </thead>

       <tbody>
<?php
//ambil data dari tb_produk dan tb_kategori  di database
$sql = 'SELECT *FROM ANGGOTA';
$stid = oci_parse($conn, $sql);
oci_execute($stid);

while(oci_fetch($stid)){
    ?>
       <tr>
			<td><?php echo oci_result($stid, 'ID_ANGGOTA');?></td>
			<td><?php echo oci_result($stid, 'NAMA');?></td>
			<td><?php echo oci_result($stid, 'JENIS_IDENTITAS');?></td>
			<td><?php echo oci_result($stid, 'NO_IDENTITAS');?></td>
			<td><?php echo oci_result($stid, 'ALAMAT');?></td>
			<td><?php echo oci_result($stid, 'TTL'); ?></td>
			<td><?php echo oci_result($stid, 'GENDER');?></td>
			<td><?php echo oci_result($stid, 'STATUS');?></td>
			<td><?php echo oci_result($stid, 'TELEPON');?></td>
       </tr>
<?php
}
?>
</tbody>

</table>
<p align="center">Menampilkan Daftar Anggota dari database
</body>
</html>