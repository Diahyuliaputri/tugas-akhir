<?php

	/*ini namanya komentar*/
	
	$fp = fopen("baca.txt","a+"); // parameter pertama memuat variabel file yang akan di baca dan fopen untuk membuka file dan file yang berada di isi parameter pertama nanti di kirimkan ke baca.txt

	$nama = $_POST['nama']; // dengan menggunakan post untuk mengumpulkan nilai dari formulir html 
	$Tanggal = $_POST['Tanggal'];
	$kelamin = $_POST['kelamin'];
	$komentar = $_POST['komentar'];

	fclose($fp); // digunakan untuk menutup file
	echo "Terima Kasih Telah Mendaftar di SMA YAPIS<br>"; // untuk menampilkan teks ke layar
	
?>