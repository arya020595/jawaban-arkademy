<?php 

function jabat_tangan($person) {
	$sum = 0;
	$i = 0;
	while ($i < $person) {
	$sum = $sum + $i; // 0 + 0 + 0 = 0, 0 + 0 + 1 = 1, 1 + 0 + 2 = 3, 3 + 0 + 3 = 6, 6 + 0 + 4 = 10, 10 + 0 + 5 = 15;
	$i++;
	}
	echo $sum;
}

jabat_tangan(6);

 ?>