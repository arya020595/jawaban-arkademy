<?php 
function deret_abjad($baris, $kolom) { 
	$alphabet = 
	[ 'kosong',
	  'a',
	  'b',
	  'c',
	  'd',
	  'e',
	  'f',
	  'g',
	  'h',
	  'i',
	  'j',
	  'k',
	  'l',
	  'm',
	  'n',
	  'o',
	  'p',
	  'q',
	  'r',
	  's',
	  't',
	  'u',
	  'v',
	  'w',
	  'x',
	  'y',
	  'z' 
	];		
	// Menghitung jumlah array
	$jumlah_alphabet = count($alphabet);
	$sum = 1;
	for ($i=1; $i <= $baris; $i++) { 
		// Ini untuk rows atau baris
		
		for ($j=1; $j <= $kolom; $j++) { 
			// Ini untuk Column atau kolom
		echo $alphabet[$sum];
		$sum++;
		
		}
		echo '<br>';
	}
}
deret_abjad(4, 3);	
 
?>
