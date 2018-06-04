<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("19.jpg");
background-size:cover;
}
</style>
</head>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","hotel");
	
	if(isset($_POST['add'])){
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$pemasukkan = $_POST['pemasukkan'];
	$pengeluaran = $_POST['pengeluaran'];

	$sql = "INSERT INTO keuangan VALUES ('$bulan','$tahun','$pemasukkan','$pengeluaran')";
	$query = $db->query($sql);
	if($query){
		echo "<center><br><br><h1>Data berhasil di masukkan </h1></center>";
		echo "<center><br><h3><a href='output3.php'>Tampilkan Tabel Data Keuangan </a></h3><br><center>";
	}else{
		echo "<center><h1>Data gagal di masukkan</h1></center>".$db->error;
	}
	}
	echo "<center><h3><a href='/prpl/'> Kembali Ke Tampilan Menu</a> / <a href='pilihinput3.php'>Masukkan dulu datanya</a></h3></center>";
?>