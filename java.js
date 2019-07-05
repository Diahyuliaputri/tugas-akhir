  function cari() {
	var kata = document.formcari.keyword.value;
	var hasil= "http://www.google.com/search?q=" + kata ; 
	window.open(hasil, 'google', config='height=500, width=auto, scrollbars=yes location=yes') 
	// untuk membuka halaman web baru

	function nama() {
	var nama= document.nama.value;
	if(nama== "") alert("nama tidak boleh kosong"); // untuk mempringatkan agar nama tidak boleh kosong
	}

	function Tanggal() {
	var nama= document.Tanggal.value;
	if(nama== "") alert("Tanggal tidak boleh kosong"); // untuk mempringatkan agar tanggal lahir tidak boleh kosong
	}
