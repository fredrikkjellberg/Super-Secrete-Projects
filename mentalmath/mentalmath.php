<!-- mentalmath.php
	#
	# RANDOM NUMBER GENERATOR
	# - BASES THE RANDOM NUMBER ON WHAT LEVEL THE PLAYER IS ON
	#
-->
<?php


if ()
	// ::::GLOBAL VARIABLES:::
	// THAT NEEED TO BE IN MEMORY WHEN THE USER PLAYES THE MATH GAME
	//
	$KEEP_PLAYING = 0;
	$CURRENT_POINTS = 10;
	$CURRENT_LEVEL = 5;


	// generate a random number bast on what level you are on
	function generate_random_number(int $level):
		if ($level < 10){
			return rand(1, 10);  # Even integer from 0 to 10
		}
		elseif (10 > $level < 100) {
			return rand(10, 100); # Even integer from 10 to 100
		}
		elseif (100 > $level < 1000) {
			return rand(100, 1000);  # Even integer from 100 to 1000
		}
		else{
			return rand(1, 10);  # Even integer from 0 to 10
		}

	// generats a random operator based on what level you chose to play
	function generate_random_operator(){
		$input = array(1, 2, 3, 4);

		$operator = array_rand($input, 1);
		return $operator;
	}

	function calculate_answer(int $number_one, int $number_two, string $operator) {
		if ($operator == 1) {
			$ans = $number_one + $number_two;
		}
		elseif ($operator == 2) {
			$ans = $number_one - $number_two;
		}
		elseif ($operator == 3) {
			$ans = $number_one * $number_two;
		}
		else {
			$ans = $number_one / $number_two;
		}
	}
	
?>			