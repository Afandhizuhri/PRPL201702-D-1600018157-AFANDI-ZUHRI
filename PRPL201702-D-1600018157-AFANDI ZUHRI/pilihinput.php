<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
body{
background-image:url("tampil.jpg");
background-size:cover;
background-position:center;
}
h1{
color:white;
font-family:algerian;
font-size:90;
}
h2{
color:white;
font-family:lucida calligraphy;
font-size:10px;
}

li{
list-style-type:none;
float:left;
}
li a{
padding:10px 10px;
text-decoration:none;
font-family:times new roman;
font-size:18;
color:white;
display:block;
}
li a:hover{
background-color:#1A237E;
}
h2{
color:white;
font-family:lucida calligraphy;
font-size:50;
}
p{
color:white;
font-family:algerian;
font-size:20;
display:block;
hr{
width:100%;
}
.span{
	color:red;
}
</style>
</head>
<body>
<ul>
		<li><a href="interface.html">BERANDA</a></li>
		<li><a href="pilihinput.php">RESERVASI</a></li>
		<li><a href="output2.php">KAMAR</a></li>
		<li><a href="bukutamu.php">BUKU TAMU</a></li>
		<li><a href="laporan.php">LAPORAN</a></li>
		</ul>
	<center>
	<h1><br><br><br><br>From RESERVASI</h1>
	<form action="input.php" method="post">
  		<table cellpadding="6" cellspacing="0" border="6">
	
   		<tr>
    		<td>identitas</td>
			<td>:</td>
    		<td><input class="identitas" name="identitas" type="number" id="txtidentitas" size="20" maxlength="15" placeholder="nomor identitas" required>
			</td>
   		</tr>
   		<tr>
    		<td>nama</td>
    		<td>:</td>
    		<td><input class="nama" name="nama" type="text" id="txtnama" size="20" maxlength="15" placeholder="masukan nama"required>
			</td> 	
	</tr>
 		<tr>
    		<td>alamat</td>
    		<td>:</td>
			<td><input class="alamat" name="alamat" type="text" id="txtalamat" size="20" maxlength="15" placeholder="masukan alamat"required>
    		<td>
   		</tr>
		<tr>
    		<td>jenis_kelamin</td>
    		<td>:</td>
    		<td><input type="radio" name="jenis_kelamin" value="laki-laki" checked=/>laki-laki
			<input type="radio" name="jenis_kelamin" value="perempuan" checked=/>perempuan</td>
   		</tr>
		<tr>
    		<td>no_hp</td>
    		<td>:</td>
    		<td><input class="no_hp" name="no_hp" type="text" id="txtno_hp" size="20" maxlength="15" placeholder="no_hp"required></td>
			</tr>
		<tr>
			<td>jenis_kamar</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kamar" value="single room" checked=/>single room</br>
			<input type="radio" name="jenis_kamar" value="classic room" checked=/>classic room</br>
			<input type="radio" name="jenis_kamar" value="double room" checked=/>double room</br>
			<input type="radio" name="jenis_kamar" value="meeting room" checked=/>meeting room</br>
		</tr>
		<tr>
    		<td>Check_in</td>
    		<td>:</td>
    		<td><input type="date" name="Check_in" placeholder=""required></td>
			</tr>
 		<tr>
    		<td>Check_out</td>
    		<td>:</td>
    		<td><input type="date" name="Check_out" placeholder=""required></td>
			</tr>
		<tr>
    		<td>status_kamar</td>
    		<td>:</td>
    		<td><input type="text" name="status_kamar" placeholder=""required></td>
			</tr>
		<tr>
    		<td>total_biaya</td>
    		<td>:</td>
    		<td><input type="text" name="total_biaya" placeholder=""required></td>
			</tr>
		<tr>
    		<td>info_sisawaktu_sewa</td>
    		<td>:</td>
    		<td><input type="text" name="info_sisawaktu_sewa" placeholder=""required></td>
			</tr>
		<tr>
    		<td>&nbsp;</td>
    		<td></td>
    		<td><input type="submit" name="add" value="Save">	<input type="reset" value="Reset"></td>
   		</tr>
  		</table>
 	</form>
	<p><h2><a href='/prpl/'> Kembali Ke Tampilan Menu</a></h2></p>
	</center>
</body>
</html>