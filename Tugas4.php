<?php 
$hargaBeli = 6000;
$hargaJual = 7500;
$laba = $hargaJual - $hargaBeli;
$keuntungan = 300;
$ekor = $laba/$keuntungan;

echo "<p>
			Harga Beli = Rp $hargaBeli <br>
			Harga Jual = Rp $hargaJual <br>
			Keuntungan = Rp 300 <br>
			Berapa Jumlah Kambing yang dibeli? Jawaban: $ekor ekor
	 </p>";
?>