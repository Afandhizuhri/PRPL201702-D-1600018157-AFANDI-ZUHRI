<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("13.jpg");
background-size:cover;
}
</style>
</head>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","hotel");	
	
	if(isset($_POST['add'])){
	$id_karyawan = $_POST['id_karyawan'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$jabatan = $_POST['jabatan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];

	$sql = "INSERT INTO karyawan VALUES ('$id_karyawan','$nama_karyawan','$jabatan','$jenis_kelamin')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		echo "<center><br><h2><a href='output1.php'>Tampilkan Tabel Data Karyawan </a></h2><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	echo "<center><h3><a href='/prpl/'> Kembali Ke Tampilan Menu</a> / <a href='pilihinput1.php'>Masukkan terlebih dulu datanya</a></h3></center>";
?>