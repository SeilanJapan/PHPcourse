<?php
	/*
	Ex.4. If $a = 5 and $b = 10 - print $a and $b
	Change values of a and b - print again $a and $b
	*/
	
	$a = 5;
	$b = 10;

	echo "a=". $a ." and b=" . $b . "<br/>";

	$c = $a;
	$a = $b;
	echo "a=". $a ." and b=" . $c. "<br/>";
