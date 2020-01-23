<?php 
function findRepeatingElement($arr, $low, $high) 
{ 
	if ($low > $high) 
		return -1; 

	$mid = floor(($low + $high) / 2); 

	if ($arr[$mid] != $mid + 1) 
	{ 
		if ($mid > 0 && $arr[$mid] == 
						$arr[$mid - 1]) 
			return $mid; 

		return findRepeatingElement($arr, $low, $mid - 1); 
	} 

	return findRepeatingElement($arr, $mid + 1, $high); 
} 

$arr = array(1, 2, 3, 3, 4, 5); 
$n = sizeof($arr); 
$index = findRepeatingElement($arr, 0, $n - 1); 
if ($index != -1) 
echo $arr[$index]; 

?> 
