<html>
<head><title></title></head>
<style type="text/css">
body{
background-image:url("hh.jpg");
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
	$sql = "SELECT * FROM kamar";
	$data = $db->query($sql);
	echo "<h1><center><br><br> Data kamar<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>id_kamar</center></td><td><center>nama_kamar</center></td><td><center>harga_kamar</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['id_kamar']."</td>";
			echo "<td>".$row['nama_kamar']."</td>";
			echo "<td>".$row['harga_kamar']."</td>";
			echo "<td><a href='pilihinput2.php?id_kamar=".$row['id_kamar']."'> Input </a></td>";
			echo "<td><a href='hapus2.php?id_kamar=".$row['id_kamar']."'> Hapus </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "Belum ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> Kembali Ke Tampilan Menu</a></h2>";
	$db->close();
?>