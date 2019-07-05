<!DOCTYPE html>
<html>
<head>
	<title>Tugas Proyek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="java.js"></script>
</head>
<body><center>
	<div class="all">
		<div class="head"></div>
			<ul>
				<li><a href="index.php?huhu=beranda">Beranda</a></li>
				<li><a href="index.php?huhu=profil">Profil</a></li>
				<li><a href="index.php?huhu=pendaftaran">Pendaftaran</a></li>	
				<div class="pencarian">
					<form name="formcari" onSubmit="cari()">Search
					<input name="keyword" size="20" type="text">
					<input type="submit" value="Cari">
					</form>  
				</div>
			</ul>
		<div class="isi">
			<?php
				if (isset($_GET['huhu'])) { //isset digunakan untuk menghasilkan nilai true jika variabel tlah di definisikan dan menghasilkan false jika variable belum terbuat
					$baca = $_GET['huhu']; // pengecekkan apakah variabel $_GET['huhu'] tersedia untuk diproses atau tidak

					if($baca == 'beranda') // pengecekkan apakah beranda ada atau tidak
					{
						include "huhu/beranda.php";
					}
					else if($baca == 'profil')
					{
						include "huhu/profil.php";
					}
					else if($baca == 'pendaftaran')
					{
						include "huhu/pendaftaran.php";
					}
					else{
						include "huhu/beranda.php";
					}
			}	
					
			?>
		</div>
		<div class="footer">
			<p>Tugas Proyek Pweb 2019</p>
			<p>Diah Yulia Putri</p>
		</div>	
</center>
</body>
</html>