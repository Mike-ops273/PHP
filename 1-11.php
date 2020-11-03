<?php 

$number = rand(0,5000);


if($number > 4000) {
	echo "A";
} else if ($number == 0 || $number == 1000) {
	echo "B";
} else if ($number % 2 == 0 || $number <3000) {
	echo "C";
} else {
	echo "D";
}

?>