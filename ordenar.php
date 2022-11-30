<?php  
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
$num4=$_POST['num4'];

$ordenar_Des=array($num1,$num2,$num3,$num4);
rsort($ordenar_Des);

foreach ($ordenar_Des as $descender) {
echo $descender .'<br>';
}
?>