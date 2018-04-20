<?php
/**
 * Sorts an array of dates, filters out dates in the past and returns a new array in descending order.
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

// function cmp($a, $b)
// {
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a < $b) ? -1 : 1;
// }

// $a = array(3, 2, 5, 6, 1);

// usort($a, "cmp");

// foreach ($a as $key => $value) {
//     echo "$key: $value\n";
// }


/* current date format:  date("Y/m/d")  */

function sortDates($arr) {
	foreach($arr as &$date) {
		$tomorrow = date("Y-m-d", strtotime('tomorrow'));
		if ( $tomorrow > strtotime($date) ) {
			// echo strtotime($date);
			// echo "it did something";
		}

	}

}


?>
