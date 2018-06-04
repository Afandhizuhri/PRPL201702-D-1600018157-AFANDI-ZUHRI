<?php
	$db =  new mysqli("localhost","root","","hotel");
	$sql = "create table kamar (id_kamar varchar(11) not null primary key,nama_kamar varchar(20) not null, harga_kamar varchar(20) not null)";

	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Tabel berhasil dibuat</h1></center>";
	}else{
		echo "<center><h1>Tabel gagal dibuat</h1></center>".$db->error;
	}
	echo "<center><h3><a href='/prpl/'> Kembali Ke Tampilan Menu</a></center>";
?>