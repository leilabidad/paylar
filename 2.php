<?php 
function print2Pairs($arr, $n, $x) 
{ 
	
	$res_l; 
	$res_r; 

	$l = 0; 
	$r = $n - 1; 
	$diff = PHP_INT_MAX; 

	while ($r > $l) 
	{ 
		
		if (abs($arr[$l] + $arr[$r] - $x) < $diff) 
		{ 
			$res_l = $l; 
			$res_r = $r; 
			$diff = abs($arr[$l] + $arr[$r] - $x); 
		} 
	
		// اگر جمع جفت از بیش از عدد مورد نظر شد به سمت مقدار کمتر می رود 
		if ($arr[$l] + $arr[$r] > $x) 
			$r--; 
			
		// در غیر اینصورت به سمت مقدار بیشتر حرکت می کند. 
		else
			$l++; 
	} 

	echo " answer is "
		, $arr[$res_l] ," and "
		, $arr[$res_r]; 
} 

	$arr = array(10, 22, 28, 29, 30, 40,52); 
	$x = 52; 
	$n = count($arr); 
	print2Pairs($arr, $n, $x); 
	
?> 
