<?php
	$db =  new mysqli("localhost","root","","hotel");
	$id_kamar = @$_GET['id_kamar'];
	$sql = "DELETE from kamar where id_kamar='$id_kamar' ";

	$query = $db->query($sql);
	if($query){
		echo "<br><br><br><center><h1>delete success </h1></center></br></br></br>";
	}else{
		echo "<center><h1>delete failed </h1></center>".$db->error;
	}
	
	echo "<center><h2><td><a href='output2.php'> Tampilkan Kembali Tabel</a><br></h2></center>";
	echo "<center><h2><a href='/prpl/'> Kembali Ke Tampilan Menu</a></h2></center>";
?>