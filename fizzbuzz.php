<?php

/**
* Affiche un r�sultat en fonction de la divisibilit� du chiffre re�u
* @param int $n
* @return null
**/
function fizzBuzz($n)
{
	for ($i=1; $i <= $n; $i++) {
		if ($i % 5 == 0) {
			echo ($i % 3 == 0) ? 'FizzBuzz' : 'Buzz';
		} else if ($i % 3 == 0) {
			echo 'Fizz';
		} else {
			echo $i;
		}
		echo '<br />';
	}
}

/**
* Affiche un r�sultat en fonction de la divisibilit� du chiffre re�u 
* @param int $n
* @return null
**/
function fizzBuzzV2($n)
{
	for ($i=1; $i <= $n; $i++) {
		$value = "";
		
		if ($i % 3 == 0) {
			$value .= "Fizz";
		} 
		
		if ($i % 5 == 0) {
			$value .= "Buzz";
		}
		
		if ($value != "") {
		    echo $value;
		} else {
			echo $i;
		}
		
		echo '<br />';
	}
}

fizzBuzz(1000);
