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
	<h1><br><br><br><br>Masukkan Data Kamar</h1>
	<form action="input2.php" method="post">
  		<table cellpadding="3" cellspacing="0" border="6">
   		<tr>
    		<td>id_kamar</td>
    		<td>:</td>
    		<td><input type="text" name="id_kamar" required></td>
   		</tr>
   		<tr>
    		<td>nama_kamar</td>
    		<td>:</td>
    		<td><input type="text" name="nama_kamar" required></td>
   		</tr>
   		<tr>
    		<td>harga_kamar</td>
    		<td>:</td>
    		<td><input type="text" name="harga_kamar" required></td>
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