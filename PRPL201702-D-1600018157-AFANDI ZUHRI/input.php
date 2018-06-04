<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("17.jpg");
background-size:cover;
}
</style>
</head>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","hotel");
	
	if(isset($_POST['add'])){
	$identitas = $_POST['identitas'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$no_hp = $_POST['no_hp'];
	$jenis_kamar = $_POST['jenis_kamar'];
	$Check_in = $_POST['Check_in'];
	$Check_out = $_POST['Check_out'];
	$status_kamar = $_POST['status_kamar'];
	$total_biaya = $_POST['total_biaya'];
	$info_sisawaktu_sewa = $_POST['info_sisawaktu_sewa'];
	
	$sql = "INSERT INTO pemesanan VALUES ('$identitas','$nama','$alamat','$jenis_kelamin','$no_hp','$jenis_kamar','$Check_in','$Check_out','$status_kamar','$total_biaya','$info_sisawaktu_sewa')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		echo "<center><br><h3><a href='output.php'>Tampilkan Tabel Data Pemesanan </a></h3><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}	
	}
	echo "<center><h3><a href='/prpl/'> Kembali Ke Tampilan Menu</a> / <a href='pilihinput.php'>Masukkan terlebih dulu datanya</a></h3></center>";
?>