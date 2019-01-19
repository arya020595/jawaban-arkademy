<?php  

function draw_kotak($panjang_persegi) {

for ($i=1; $i <= $panjang_persegi; $i++) {
 	// Melooping rowsnya

	for ($j=1; $j <= $panjang_persegi; $j++) { 
	// Me-looping columnya
		if (($i%2 == 1 AND $j%2 == 1 ) OR ($i%2 == 0 AND $j%2 == 0)) {
			echo "*";
		} else {
			echo "1";
		}
	}

	// Ini untuk memberi line baru
	echo "<br>";
	}
}

draw_kotak(9);

?>