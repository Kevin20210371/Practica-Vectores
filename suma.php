<?php  
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];


$array=array($num1,$num2,$num3);
$total=0;
foreach ($array as $value) {
    $total+=$value;
}
echo $total;

?>



