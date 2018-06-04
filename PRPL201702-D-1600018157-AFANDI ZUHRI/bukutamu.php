<html>
    <head>
        <title>Buku Tamu</title>
<script language="javascript">
function hasil(){
var tamu = 'Data Anda Telah Tersimpan Dalam Database kami,Terima Kasih';
alert(""+tamu);
}
</script>
    	<style type="text/css">
body{
background-image:url("ds.jpg");
background-size:cover;
background-position:center;
}
	h1{font-size:30;color:black;}
	
	pre{font-family:times new roman;color:black;}
	
	li{list-style-type:none;float:left;}
	
	li a{color:white;font-family:times new roman;display:block;color:white;text-align:center;padding:10px 10px;font-size:18;text-decoration:none;}
	
	li a:hover{background-color:#888888;}
    
	body {background-image: url("17.jpg");background-size:cover;color: #df4231;font-family: times new roman;}
    
	h2 {margin-bottom: -5px;}
    
	p {font-size: 1.5em;color: #c9c9c9;}
    
	table {background: #ffffff;border-radius: 5px;padding: 20px;margin-top: 20px;}
    
	tr {height: 30px;}
    
	textarea {width: 348px;height: 100px;padding: 10px;font-family: times new roman;font-size: 12px;}
    
	input.nama {border: 1px solid #c9c9c9;
        border-radius: 3px;height: 30px;padding: 8px;padding-left: 37px;margin-bottom: 8px;
        transition: 1s all;-moz-transition: 1s all;-o-transition: 1s all;}
    
	input.alamat {border: 1px solid #c9c9c9;border-radius: 3px;
        height: 30px;padding: 8px;padding-left: 37px;margin-bottom: 8px;transition: 1s all;
        -moz-transition: 1s all;-o-transition: 1s all;}
    
	input.email {border: 1px solid #c9c9c9;border-radius: 3px;
        height: 30px;padding: 8px;padding-left: 37px;margin-bottom: 8px;transition: 1s all;-moz-transition: 1s all;
        -o-transition: 1s all;}
	
	input.notelp {border: 1px solid #c9c9c9;border-radius: 3px;
        height: 30px;padding: 8px;padding-left: 37px;margin-bottom: 8px;transition: 1s all;-moz-transition: 1s all;
        -o-transition: 1s all;}
    
	input:focus {border: 1px solid #26C281;transition: 1s all;-moz-transition: 1s all;-o-transition: 1s all;}
    
	.button { background: #df4231;color: #ffffff;width: 370px;margin-top: 10px;height: 40px;
        border: 1px solid #c9c9c9;border-radius: 5px; transition: 1s all;-moz-transition: 1s all;-o-transition: 1s all;}
    
	.button:hover {background: #19B5FE;    transition: 1s all; -moz-transition: 1s all;-o-transition: 1s all;}
    
	.button-gambar {height: 35px;}
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
<form name="from"> 
<div align="center"></div>
<table width="366" border="0" align="center">

<tr><td width="254">
<input class="nama" name="TxtNama" type="text" id="TxtNama" size="50" maxlength="25" placeholder="Nama"></td></tr>
<tr><td><input class="alamat" name="TxtAlamat" type="text" id="TxtAlamat" size="50" maxlength="35" placeholder="Alamat"></td></tr>
<tr><td><input class="email" name="TxtEmail" type="email" id="TxtEmail" size="50" maxlength="30" placeholder="Email">
</td></tr>
<tr><td><input class="notelp" name="Txtnotelp" type="text" id="Txtnotelp" size="50" maxlength="20" placeholder="No.Telp"></td></tr>
<tr><td><textarea name="TxtPesan" placeholder="Kritik/Saran"></textarea></td></tr>
<tr><td colspan="2">
<div align="center">
<input class="button" type="submit" name="submit" value="Simpan" onClick="hasil()">
</div>
</td></tr>
</table></form>
</body>
</html>