<?php

/**
* Affiche un résultat en fonction de la divisibilité du chiffre reçu
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
* Affiche un résultat en fonction de la divisibilité du chiffre reçu 
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
