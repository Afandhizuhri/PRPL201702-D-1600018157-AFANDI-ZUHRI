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
	$sql = "SELECT * FROM keuangan";
	$data = $db->query($sql);
	echo "<h1><center><br><br> Data keuangan<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>bulan</center></td><td><center>tahun</center></td><td><center>pemasukkan</center></td><td><center>pengeluaran</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['bulan']."</td>";
			echo "<td>".$row['tahun']."</td>";
			echo "<td>".$row['pemasukkan']."</td>";
			echo "<td>".$row['pengeluaran']."</td>";
			echo "<td><a href='pilihinput3.php?bulan=".$row['bulan']."'> Input </a></td>";
			echo "<td><a href='hapus3.php?bulan=".$row['bulan']."'> Hapus </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "Belum ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> Kembali Ke Tampilan Menu</a></h2>";
	$db->close();
?>