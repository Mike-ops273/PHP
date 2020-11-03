<?php 

$taulukko = [

['A', 'B', 'C'],
['X', 'Y', 'Z'],
[1, 2, 3]

];

for($i = 0; $i < count($taulukko); $i = $i + 1) {
	for($j = 0; $j < count($taulukko[$i]); $j = $j + 1) {
		echo " " . $taulukko[$i][$j];
	}
	echo $taulukko[$i][0];
	echo"<br>";
}

//echo $taulukko[0][0];



?>