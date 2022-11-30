<?php  
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$array=[$num1,$num2];
$aleat=rand(0,1);
print("Número: ".$array[$aleat]);

?>