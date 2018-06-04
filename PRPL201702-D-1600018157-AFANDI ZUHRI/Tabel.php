<?php
	$db =  new mysqli("localhost","root","","hotel");
	$sql = "create table pemesanan (identitas varchar(11) not null primary key,nama varchar(20) not null, alamat varchar(10) not null,jenis_kelamin varchar(10) not null, no_hp varchar(20) not null, jenis_kamar varchar(20) not null, Check_in varchar(20) not null, Check_out varchar(20) not null, status_kamar varchar(20) not null, total_biaya varchar(20) not null, info_sisawaktu_sewa varchar(20) not null )";

	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Tabel berhasil dibuat</h1></center>";
	}else{
		echo "<center><h1>Tabel gagal dibuat</h1></center>".$db->error;
	}
	echo "<center><h3><a href='/prpl/'> Kembali Ke Tampilan Menu</a></center>";
?>