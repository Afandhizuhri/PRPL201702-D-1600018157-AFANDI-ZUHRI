
<html>
<head><title>transaksi pembayaran</title>
<style type="text/css">
body{
	background-image:url("ada.jpg");
	background-size:cover;
}
h1{
	color:white;
	font-family:times new roman;
	font-size:30px;
}
</style>
</head>
<body>
<center><h1>TRANSAKSI PELANGGAN</h1></center>
<hr>
<center>
<table border="5px">
		<foRm method='POST' action="transaksi1.php">
			<tr>
				<td>
				Check_in :
				<input type="date" id="Check_in" name="Check_in">
				</td>
				<td>
				Check_out :
				<input type="date" id="Check_out" name="Check_out">
				<input type="submit" value="Cari"></td>
			</tr></form></table></center></br></br>
	<tbody>
		<?php
				echo "<center><table border='8' cellpadding='9' cellspacing='0'></center>";
				echo "<tr bgcolor='#CCCCCC'><td><center>identitas</center></td><td><center>nama</center></td><td><center>alamat</center></td>
				<td><center>jenis_kelamin</center></td><td><center>no_hp</center></td>
				<td><center>jenis_kamar</center></td><td><center>Check_in</center></td><td><center>Check_out</center></td><td><center>status_kamar</center></td></tr>";
                require('konek.php');
                $Check_in = (isset($_POST['Check_in']) ? $_POST['Check_in'] : '');
                $Check_out = (isset($_POST['Check_out']) ? $_POST['Check_out'] : '');

                  if(!$Check_in == null && !$Check_out == null){
                    $result = $koneksi->query("SELECT * FROM pemesanan where check_in between '".$_POST['Check_in']."' AND  '".$_POST['Check_out']."' ORDER by identitas ASC");
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
                    echo '</tr>';

                  endwhile;
                }else{
                  $result = $koneksi->query("SELECT * FROM pemesanan");

                  while ($mem = mysqli_fetch_assoc($result)):

                  echo '<tr>';echo '<td>'.$mem['identitas'].'</td>';
                    echo '<td>'.$mem['nama'].'</td>';
					echo '<td>'.$mem['alamat'].'</td>';
					echo '<td>'.$mem['jenis_kelamin'].'</td>';
					echo '<td>'.$mem['no_hp'].'</td>';
					echo '<td>'.$mem['jenis_kamar'].'</td>';
                    echo '<td>'.$mem['Check_in'].'</td>';
                    echo '<td>'.$mem['Check_out'].'</td>';
					echo '<td>'.$mem['status_kamar'].'</td>';
                    echo '</tr>';

                endwhile;
                }
				echo"</table>";
                /* free result set */
                $result->close();           
?>
</tbody>
</table>
<center>
<P><SCRIPT language="JavaScript">
<!--
//window.onload = function(){}
function jumlah_hari(){
	var bil1 = parseFloat(document.pilihinput.Check_in.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.pilihinput.Check_out.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	document.write("<center>TRANSAKSI PEMBAYARAN</center>");
	document.write("<hr>");
	document.write("<center> Totalhari Penginapan : " + hasil +" hari</center>");
	document.write("<center><a href='transaksi1.php'>Lanjutkan Transaksi </a></center>");
}
function harga(){
	var VIP = parseFloat(document.pilihinput.jenis_kamar.value);
	if (isNaN (VIP))
	VIP=0.0;
	var bil1 = parseFloat(document.pilihinput.Check_in.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.pilihinput.Check_out.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	var harga = VIP * hasil;
	document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
	document.write("<hr>");
	document.write("<center>Lamanya Hari Penginapan : " + hasil +" hari</h1></center>");
	document.write("<center>Nominal Harga kamar : " + VIP +" </h1></center>");
	document.write("<center>Total Pembayaran :Rp. "+ harga +"</h1></center>");
	document.write("<center><a href='transaksi1.php'>Kembali Ke Home </a></center>");
}
function denda(){
	var dnd = parseFloat(document.pilihinput.denda.value);
	if (isNaN (dnd))
	VIP=0.0;
	var bil1 = parseFloat(document.pilihinput.Check_in.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.pilihinput.Check_out.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	var harga = dnd * hasil;
	document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
	document.write("<hr>");
	document.write("<center>Total Denda : " + hasil +" hari</center>");
	document.write("<center>Total Nominal Denda :Rp. "+ harga +"</center>");
	document.write("<center><a href='transaksi1.php'>Kembali Ke Home </a></center>");}
function semua(){
	var dnd = parseFloat(document.pilihinput.denda.value);
	if (isNaN (dnd))
	VIP=0.0;
	var bil1 = parseFloat(document.pilihinput.Check_in.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.pilihinput.Check_out.value);
	if (isNaN (bil2))
	bil2=0.0;
	var VIP = parseFloat(document.pilihinput.jenis_kamar.value);
	if (isNaN (VIP))
	VIP=0.0;
	var bil1 = parseFloat(document.pilihinput.Check_in.value);
	if (isNaN (bil1))
	bil1=0.0;
	var bil2 = parseFloat(document.pilihinput.Check_out.value);
	if (isNaN (bil2))
	bil2=0.0;
	var hasil = bil2 - bil1;
	var harga = VIP * hasil;
	
	var hasil = bil2 - bil1;
	var total = dnd * hasil;
	
	var hasil1 = dnd + total;
	document.write("<center>STRUK TRANSAKSI PEMBAYARAN</center>");
	document.write("<hr>");
	document.write("<center><table border='1'cellpadding='5' cellspacing='0'>");
	document.write("<center>Total Inap  : " + hasil +" hari</h1></center>");
	document.write("<center>Total Pembayaran sewa :Rp. " + harga +"</h1></center>");
	document.write("<center>Total Denda : " + hasil +" hari</center>");
	document.write("<center>Total Nominal Denda :Rp. "+ total +"</h1></center>");
	document.write("<center>Total Biaya :Rp. " + hasil1 +" </h1></center>");
	document.write("</td></tr></table></center>");
	document.write("<center><a href='transaksi1.php'>Kembali Ke Home </a></center>");
}
--></SCRIPT></P></center>
<FORM NAME ="pilihinput">
<PRE><br><center><h1>FROM PEMBAYARAN</h1></center>
<font color="#76FF03">Tanggal_Check_in  :<input type="text" size="11" name="Check_in"></font></br>
<font color="#FFC107">Tanggal_Check_out :<input type="text" size="11" name="Check_out"></font></br>
<font color="#76ff03">Harga Kamar	  :<input type="text" size="11" name="jenis_kamar"></font></br>
<font color="#FFC107">Nominal Denda	  :<input type="text" size="11" name="denda" placeholder="jika ada*"></font>
</PRE>
<table border ='1'>
	<tr><td>Harga Kamar</td>
	<td><pre><center>Single room   = Rp 500.000 /hari</br>Classic room	= Rp 1.500.000 /hari</br>Double room	= Rp 1.000.000 /hari</br>Meeting room	= Rp 1.800.000 /hari<center></pre></td></tr><br></table>
 <INPUT TYPE="button" value="Total_Inap" onclick="jumlah_hari()">
 <INPUT TYPE="button" value="Total_Harga" onclick="harga()">
 
 <INPUT TYPE="button" value="Total_Semua" onclick="semua()"> 
 <INPUT TYPE="reset" value="Ulang"><br/><br/>
</form>
<a href="interface.html"> Kembali Ke Tampilan Menu</a>;
</body>
</html>  