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
	$id_kamar = $_POST['id_kamar'];
	$nama_kamar = $_POST['nama_kamar'];
	$harga_kamar = $_POST['harga_kamar'];
	
	$sql = "INSERT INTO kamar VALUES ('$id_kamar','$nama_kamar','$harga_kamar')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		echo "<center><br><h3><a href='output2.php'>Tampilkan Tabel Data Kamar </a></h3><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	echo "<center><h3><a href='/prpl/'> Kembali Ke Tampilan Menu</a> / <a href='pilihinput2.php'>Masukkan dulu datanya</a></h3></center>";
?>