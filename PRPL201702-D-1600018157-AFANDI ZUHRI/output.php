<html>
<head><title></title></head>
<style type="text/css">
body{
background-image:url("assa.jpg");
background-size:cover;
}
h1{
color:white;
font-family:algerian;
font-size:30;
}

</style>

<?php
	$db =  new mysqli("localhost","root","","hotel");
	$sql = "SELECT * FROM pemesanan";
	$data = $db->query($sql);
	echo "<h1><center><br><br> Data pemesanan<br></center></h1>";
	echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>identitas</center></td><td><center>nama</center></td><td><center>alamat</center></td><td><center>jenis_kelamin</center></td><td><center>no_hp</center></td><td><center>jenis_kamar</center></td></td><td><center>Check_in</center></td><td><center>Check_out</center></td><td><center>status_kamar</center></td><td><center>total_biaya</center></td><td><center>info_sisawaktu_sewa</center></td><td colspan=3><center>Aksi</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['identitas']."</td>";
			echo "<td>".$row['nama']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['jenis_kelamin']."</td>";
			echo "<td>".$row['no_hp']."</td>";
			echo "<td>".$row['jenis_kamar']."</td>";
			echo "<td>".$row['Check_in']."</td>";
			echo "<td>".$row['Check_out']."</td>";
			echo "<td>".$row['status_kamar']."</td>";
            echo "<td>".$row['total_biaya']."</td>";
            echo "<td>".$row['info_sisawaktu_sewa']."</td>";
			echo "<td><a href='pilihinput.php?identitas=".$row['identitas']."'> Input </a></td>";
			echo "<td><a href='hapus.php?identitas=".$row['identitas']."'> Hapus </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "Belum ada datanya";
	}
	echo "</table>";
	echo "<h2><a href='/prpl/'><br><br> Kembali Ke Tampilan Menu</a></h2>";
	$db->close();
?>
<body>
<table border="7px">
	<form method="POST" action="output.php">
	<tr>
	<td><br>
	From<input type="date" id="from" name="from">
	</td>
	
	<td><br>
	to<input type="date" id="to" name="to">
	<input type="submit" value="filter">
	</td>
	</tr>
	</form>
	<tbody>
<?php
                require('koneksi.php');
                $from = (isset($_POST['from']) ? $_POST['from'] : '');
                $to = (isset($_POST['to']) ? $_POST['to'] : '');
//echo "<center><table border='4' cellpadding='5' cellspacing='0'></center>";
//	echo "<tr bgcolor='#CCCCCC'><td><center>No.</center></td><td><center>identitas</center></td><td><center>nama</center></td><td><center>alamat</center></td><td><center>jenis_kelamin</center></td><td><center>no_hp</center></td><td><center>jenis_kamar</center></td></td><td><center>Check_in</center></td><td><center>Check_out</center></td><td><center>status_kamar</center></td><td><center>total_biaya</center></td><td><center>info_sisawaktu_sewa</center></td><td colspan=3><center>Aksi</center></td></tr>";
	
                  if(!$from == null && !$to == null){
                    $result = $konek->query("SELECT * FROM pemesanan where Check_in between '".$_POST['from']."' AND  '".$_POST['to']."' ORDER by identitas ASC");
                     echo "<table border='1'>";
                    echo "<tr bgcolor='#CCCCCC'><td><center>identitas</center></td><td><center>nama</center></td><td><center>alamat</center></td><td><center>jenis_kelamin</center></td><td><center>no_hp</center></td><td><center>jenis_kamar</center></td></td><td><center>Check_in</center></td><td><center>Check_out</center></td><td><center>status_kamar</center></td><td><center>total_biaya</center></td><td><center>info_sisawaktu_sewa</center></td></tr>";
					while ($mem = mysqli_fetch_assoc($result)):
					
                    echo '<tr>';
					
                    echo '<td>'.$mem['identitas'].'</td>';
                    echo '<td>'.$mem['nama'].'</td>';
					echo '<td>'.$mem['alamat'].'</td>';
					echo '<td>'.$mem['jenis_kelamin'].'</td>';
					echo '<td>'.$mem['no_hp'].'</td>';
					echo '<td>'.$mem['jenis_kamar'].'</td>';
                    echo '<td>'.$mem['Check_in'].'</td>';
                    echo '<td>'.$mem['Check_out'].'</td>';
					echo '<td>'.$mem['status_kamar'].'</td>';
                    echo '<td>'.$mem['total_biaya'].'</td>';
                    echo '<td>'.$mem['info_sisawaktu_sewa'].'</td>';
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $konek->query("SELECT * FROM pemesanan");

                  while ($mem = mysqli_fetch_assoc($result)):

                  echo '<tr>';
                  echo '<td>'.$mem['identitas'].'</td>';
                  echo '<td>'.$mem['nama'].'</td>';
				  echo '<td>'.$mem['alamat'].'</td>';
				  echo '<td>'.$mem['jenis_kelamin'].'</td>';
				  echo '<td>'.$mem['no_hp'].'</td>';
				  echo '<td>'.$mem['jenis_kamar'].'</td>';
                  echo '<td>'.$mem['Check_in'].'</td>';
                  echo '<td>'.$mem['Check_out'].'</td>';
				  echo '<td>'.$mem['status_kamar'].'</td>';
                  echo '<td>'.$mem['total_biaya'].'</td>';
                  echo '<td>'.$mem['info_sisawaktu_sewa'].'</td>';
                  echo '</tr>';

                endwhile;
              }
                /* free result set */
                $result->close();
?>
</tbody>
	</table>
	</body>
</html>