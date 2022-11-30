<?php
$num1=$_POST['num1'];
$array = array($num1); 
foreach ($array as $i) { 
	$smallest[$i] = abs($i - $num1); 
} asort($smallest); print key($smallest);

$num2=$_POST['num2'];
$array = array($num2); 
foreach ($array as $i) { 
	$smallest[$i] = abs($i - $num2); 
} asort($smallest); print key($smallest);

 ?>