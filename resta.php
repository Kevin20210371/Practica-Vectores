<?php  
$num1=$_POST['num1'];
$num2=$_POST['num2'];



$array1 = array($num1);
$array2 = array($num2);
 
$resta = array_sum($array1) - array_sum($array2);
 
echo $resta;

?>



