<html>
<head><title></title></head>
<style type="text/css">
body{
background-image:url("2.jpg");
background-size:cover;
}
h1{
color:white;
font-family:algerian;
font-size:30;
}
</style>
<body></body>
</html>
<?php
	$db =  new mysqli("localhost","root","","hotel");
	$sql = "SELECT * FROM karyawan";
	$data = $db->query($sql);
	echo "<h1><center><br><br> Data karyawan<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>id_karyawan</center></td><td><center>nama_karyawan</center></td><td><center>jabatan</center></td><td><center>jenis_kelamin</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['id_karyawan']."</td>";
			echo "<td>".$row['nama_karyawan']."</td>";
			echo "<td>".$row['jabatan']."</td>";
			echo "<td>".$row['jenis_kelamin']."</td>";
			echo "<td><a href='pilihinput1.php?id_karyawan=".$row['id_karyawan']."'> Input </a></td>";
			echo "<td><a href='hapus1.php?id_karyawan=".$row['id_karyawan']."'> Hapus </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "Belum ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> Kembali Ke Tampilan Menu</a></h2>";
	$db->close();
?>
